@extends('layouts.user')

@section('content')
    <div class="col-sm-12 text-center">
        <h2 style="margin-top:100px">Welcome to our system {{Auth::user()->name}}</h2>
        <img src="{{ asset('images/logo/gb_logo.png') }}" alt="IMG">
        <h3 style="margin-top:15px;text-align:center;" class="">Computer Science & Engineering</h3>
        <h2>Gono Bishwabidyalay</h2>
    </div>
@endsection
