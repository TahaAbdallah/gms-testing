@extends('main.includes.layout')

@section('title',$projects->project_name.' Project')

@section('content')



<div class="container row mx-auto mt-5 align-items-center">

    <div class="col-md-4">
        <img class="img-fluid" src="{{URL::asset($projects->img)}}">
    </div>

    <div class="col-md-8">
        <P class="mb-3 text-center text-md-left mt-5 mt-md-0">{{$projects->project_name}}</P>
        <P class="text-center text-md-left">{{$projects->project_description}}</P>
    </div>

</div>









{{-- ---------------------------------------------------------- --}}



<div class="row help-cont m-0 mt-5 pt-3 pb-3 align-items-center">

    <div class="col-md-6 text-center">
        <h2> DIDN'T FIND WHAT YOU WERE <br> LOOKING FOR?</h2>
    </div>
    <div class="col-md-6 mb-3"><input type="text" placeholder="what can we help you with" class="looking-for-input">
    </div>

</div>


@endsection