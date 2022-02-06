@extends('managers.layout.layout')

@section('title','Employees Weekly Schedule')

@section('content')

<div class="arrow-back-cont">
    <div><a href="{{route('managerDashboard')}}"><i class="fas fa-arrow-left mr-2"></i> Back To Weekly Schedule</a>
    </div>
</div>

<div class="container-fluid main-cont">

    <div class="text-center"><img class="img-fluid mt-5 mb-3" src="{{URL::asset('images/ruwwadlubnan2.jpeg')}}"
            width="150px"></div>

    <div class="container">
        <div class="emp-profile-cont">
            <img width="150px" class="rounded" src="{{ asset($emp->profile_img) }}">
            <h3 class="text-center">{{ $emp->name }}</h3>
            <div class="row align-items-center justify-content-center profile-input-p">
                <p>Email : {{ $emp->email }}</p>
            </div>
            <div class="row align-items-center justify-content-center profile-input-p">
                <p>Password : </p>
                <input type="text" value="{{ $emp->password }}">
            </div>
            <div class="row align-items-center justify-content-center profile-input-p">
                <p>Change Profile Image : </p>
                <input type="file">
            </div>

            <button type="submit">Save Changes</button>
        </div>
    </div>

    @endsection