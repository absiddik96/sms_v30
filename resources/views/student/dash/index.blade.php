@extends('layouts.student')

@section('content')
  <div class="container">
    <div class="col-md-9 header-left">
      <div class="col-sm-5 pro-pic">
        @if ($student->image)
            <img class="img-responsive" src="{{ asset('storage/student/'.$student->image)}}" alt="N/A">
        @else
            <img class="img-responsive" src="{{ asset('images/default/student.jpg')}}" alt="No Image">
        @endif
      </div>
      <div class="col-sm-7 pro-text">
        <ul class="list-left">
          <li>Name</li>
          <li>Batch</li>
          <li>Class Roll</li>
          <li>Exam Roll</li>
          <li>Registration No</li>
          <li>Gender</li>
          <li>Phone</li>
          <li>Blood Group</li>
          <li>Guardian</li>
          <li>Guardian Contact</li>
        </ul>
        <ul class="list-right" style="color:white">
          <li>{{ $student->name }}</li>
          <li>{{ $student->batch->batch_number }}</li>
          <li>{{ sprintf("%02d",$student->class_roll) }}</li>
          <li>{{ $student->exam_roll }}</li>
          <li>{{ $student->reg_no }}</li>
          <li>{{ $student->gender }}</li>
          <li>{{ $student->phone }}</li>
          <li>{{ $student->blood_group }}</li>
          <li>{{ $student->guardian }}</li>
          <li>{{ $student->guardian_contact }}</li>

        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-3 header-right hidden-print">
      <ul class="list-left">
        <li>Result</li>
      </ul>
      <ul class="list-right">
        <li><a href="https://www.google.com/">April 2018 Semester Final</a></li>
        <li><a href="#">April 2018 Semester Final</a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
@endsection
