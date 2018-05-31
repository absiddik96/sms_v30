@extends('layouts.user')


@section('content')
    <div class="col-sm-12" style="background:white">
        <div class="col-sm-6 col-sm-offset-3" style="padding-bottom:10px;margin-bottom:5px;">
            <ul class="list-group">
                <h3 class="text-center">All Exams for Teacher</h3>
                <hr>
                @foreach ($exam_list as $exam)
                    <li class="list-group-item" style="border-bottom:1px solid silver">
                        <div>
                            <a style="width:100%" class="btn btn-info btn-sm" href="{{route('semester-course.list',[$exam->id,])}}">{{ ucfirst($exam->slug)}}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
