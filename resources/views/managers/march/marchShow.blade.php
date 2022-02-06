@extends('managers.layout.layout')

@section('title','Employees Weekly Schedule')

@section('content')

<div class="arrow-back-cont">
  <div><a href="{{route('managerDashboard')}}"><i class="fas fa-arrow-left mr-2"></i> Back To Weekly Schedule</a></div>
</div>

<div class="container-fluid main-cont">

  <div class="text-center"><img class="img-fluid mt-5 mb-3" src="{{URL::asset('images/ruwwadlubnan2.jpeg')}} width="
      150px"></div>

  <h3 class="text-center"> {{$emp->name}} March Check-in | Check-out </h3>


  <div class="container row p-0 m-0 mx-auto monthly-cont text-center mt-5 mb-5">

    <div class="col-2 table-col p-0 m-0">
      <p class="m-0 m-1">Day</p>
      @foreach ($emp->march_check_in as $item)
      <p class="data m-0 p-2">{{$item->created_at->format('d')}}</p>
      @endforeach
    </div>
    <div class="col-5 table-col p-0 m-0">
      <p class="m-0 m-1">Check-in</p>
      @foreach ($emp->march_check_in as $item)
      <p class="data m-0 p-2">{{$item->created_at->format('H:i')}}</p>
      @endforeach
    </div>
    <div class="col-5 table-col p-0 m-0">
      <p class="m-0 m-1">Check-out</p>
      @foreach ($emp->march_check_out as $item)
      <p class="data m-0 p-2">{{$item->created_at->format('H:i')}}</p>
      @endforeach
    </div>

  </div>





  @endsection