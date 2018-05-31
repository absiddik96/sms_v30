<?php

namespace App\Http\Controllers\Teacher\External;

use Auth;
use App\Models\Admin\Course;
use Illuminate\Http\Request;
use App\Models\Admin\Semester;
use App\Models\Admin\ExamTime;
use App\Models\Admin\ExternalEnroll;
use App\Http\Controllers\Controller;
use App\Models\StudentEnroll\StudentEnroll;

class ExternalSemesterCoursesController extends Controller
{
    public function index()
    {
        $exam_ids = [];
        $exam_list = [];

        $exams = ExternalEnroll::where('teacher_id',Auth::user()->user_id)
        ->get();

        //...........retrive single value only
        foreach ($exams as $e) {
            if (in_array($e->exam_time_id,$exam_ids)) {
                continue;
            }else{
                $exam_ids[] = $e->exam_time_id;
            }
        }

        //........retriving exam list
        foreach ($exam_ids as $id) {
            $e = ExamTime::where('id',$id)->first();
            $exam_list[] = $e;
        }


        return view('teacher.external.semester_course.index')
        ->with('exam_list', $exam_list);
    }
    public function list($exam_id = 0)
    {

        $semesters = ExternalEnroll::where('teacher_id',Auth::user()->user_id)
        ->where('exam_time_id', $exam_id)
        ->distinct()
        ->get(['semester_id']);

        $output = '';
        $output .= '<ul class="list-group">';
        foreach ($semesters as $semester) {
            $output .= '<li class="list-group-item active">'.'Semester '.$semester->semester->semester.'
            <ol class="list-group">';

            $courses = ExternalEnroll::where('teacher_id',Auth::user()->user_id)
            ->where('exam_time_id', $exam_id)
            ->where('semester_id',$semester->semester_id)
            ->get();

            foreach ($courses as $course) {
                $output .='<li class="list-group-item"><a href="'.
                route('external.result.seventy.show',['course_e_id'=>$course->id,'semester_id'=>$semester->semester_id]).'">'.$course->course->name
                .'</a></li>';

            }
            $output .='</ol>
            </li>';
        }
        $output .='<br></ul>';

        return view('teacher.external.semester_course.list')->with('semester_course',$output);
    }

    public function show($course_e_id,$semester_id)
    {
        $student_enrolls = StudentEnroll::where('semester_id',$semester_id)->get();

        return view('teacher.external.semester_course.view')
        ->with('course_e',ExternalEnroll::find($course_e_id))
        ->with('student_enrolls',$student_enrolls);
    }
}
