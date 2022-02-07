@extends('managers.layout.layout')

@section('title','Employees Weekly Schedule')

@section('content')

<div class="arrow-back-cont">
    <div><a href="{{route('index')}}"><i class="fas fa-arrow-left mr-2"></i>Back To GMS Website</a></div>
</div>

@if(session()->has('success'))
<div class="alert alert-danger text-center">
    {{ session()->get('success') }}
</div>
@endif

<div class="container-fluid main-cont">

    <div class="text-center"><img class="img-fluid mt-3 mb-3" src="{{ asset('images/GMS - LOGO-1@2x.png') }}"
            width="150px"></div>

    <h3 class="text-center">Employees Check-in | Check-out Table</h3>
    <h5 class="text-center">Today's Date</h5>
    <h6 class="text-center">{{$todaysDay}} <br> {{$today->format('d-M-Y H:i:s')}}</h6>


    <div class="table-responsive text-center mt-3 mb-5">
        <table class="table data-table border">
            <thead>
                <tr>
                    <th class="border" style="background-color: black">
                        <p></p>
                    </th>
                    <th class="border" colspan="2">Monday</th>
                    <th class="border" colspan="2">Tuesday</th>
                    <th class="border" colspan="2">Wednesday</th>
                    <th class="border" colspan="2">Thursday</th>
                    <th class="border" colspan="2">Friday</th>
                    <th class="border" colspan="2">Saturday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <p>Name</p>
                    </th>

                    <td class="border">Check-in</td>
                    <td class="border">Check-out</td>

                    <td class="border">Check-in</td>
                    <td class="border">Check-out</td>

                    <td class="border">Check-in</td>
                    <td class="border">Check-out</td>

                    <td class="border">Check-in</td>
                    <td class="border">Check-out</td>

                    <td class="border">Check-in</td>
                    <td class="border">Check-out</td>

                    <td class="border">Check-in</td>
                    <td class="border">Check-out</td>

                </tr>


                @foreach ($emp as $item)

                <tr>

                    <td class="border">
                        <p style="font-weight: bold">{{$item->name}}</p>
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_in as $item2)
                        @if ($item2->created_at->isMonday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item2->created_at->format('H:i')}}</p>
                            <img src="{{$item2->emp_img}}" class="img-fluid">
                            @if ($item2->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item2->reason}}</p>
                            @endif

                        </div>
                        @endif



                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_out as $item3)
                        @if ($item3->created_at->isMonday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item3->created_at->format('H:i')}}</p>
                            @if ($item3->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item3->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_in as $item2)
                        @if ($item2->created_at->isTuesday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item2->created_at->format('H:i')}}</p>
                            <img src="{{$item2->emp_img}}" class="img-fluid">
                            @if ($item2->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item2->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_out as $item3)
                        @if ($item3->created_at->isTuesday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item3->created_at->format('H:i')}}</p>
                            @if ($item3->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item3->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>


                    <td class="border">
                        @foreach ($item->weekly_check_in as $item2)
                        @if ($item2->created_at->isWednesday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item2->created_at->format('H:i')}}</p>
                            <img src="{{$item2->emp_img}}" class="img-fluid">
                            @if ($item2->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item2->reason}}</p>
                            @endif
                        </div>
                        @endif

                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_out as $item3)
                        @if ($item3->created_at->isWednesday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item3->created_at->format('H:i')}}</p>
                            @if ($item3->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item3->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_in as $item2)
                        @if ($item2->created_at->isThursday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item2->created_at->format('H:i')}}</p>
                            <img src="{{$item2->emp_img}}" class="img-fluid">
                            @if ($item2->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item2->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_out as $item3)
                        @if ($item3->created_at->isThursday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item3->created_at->format('H:i')}}</p>
                            @if ($item3->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item3->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_in as $item2)
                        @if ($item2->created_at->isFriday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item2->created_at->format('H:i')}}</p>
                            <img src="{{$item2->emp_img}}" class="img-fluid">
                            @if ($item2->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item2->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_out as $item3)
                        @if ($item3->created_at->isFriday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item3->created_at->format('H:i')}}</p>
                            @if ($item3->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item3->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_in as $item2)
                        @if ($item2->created_at->isSaturday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item2->created_at->format('H:i')}}</p>
                            <img src="{{$item2->emp_img}}" class="img-fluid">
                            @if ($item2->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item2->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                    <td class="border">
                        @foreach ($item->weekly_check_out as $item3)
                        @if ($item3->created_at->isSaturday())
                        <div class="col-12">
                            <p style="font-weight: bold;">{{$item3->created_at->format('H:i')}}</p>
                            @if ($item3->reason != Null)
                            <p><span style="font-weight: bold">Reason for Delay :</span> {{$item3->reason}}</p>
                            @endif
                        </div>
                        @endif
                        @endforeach
                    </td>

                </tr>

                @endforeach

            </tbody>
        </table>

    </div>


    @endsection