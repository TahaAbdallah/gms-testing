@extends('managers.layout.layout')

@section('title','Employees Weekly Schedule')

@section('content')

<div class="arrow-back-cont">
    <div><a href="{{route('managerDashboard')}}"><i class="fas fa-arrow-left mr-2"></i> Back To Weekly Schedule</a>
    </div>
</div>

<div class="container-fluid main-cont">

    <div class="text-center"><img class="img-fluid mt-5 mb-3" src="{{ asset('images/GMS - LOGO-1@2x.png') }}"
            width="150px"></div>

    <h3 class="text-center">Employees August Check-in | Check-out </h3>
    <h5 class="text-center">Today's Date</h5>
    <h6 class="text-center">{{$todaysDay}} <br> {{$today}}</h6>


    <div class="table-responsive container text-center mt-3 mb-5">
        <table class="table data-table border">
            <thead>
                <tr>
                    <th class="border">Name</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($emp as $item)
                <tr>
                    <td class="border"><a class="emp-names"
                            href="{{route('augustShow',['id'=>$item->id])}}">{{$item->name}}</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

    @endsection