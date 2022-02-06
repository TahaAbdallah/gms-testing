@extends('main.includes.layout')

@section('title','Design Services')

@section('content')


<!-- ------------------------------------ -->

<section class="development-page">

    <h1 class="text-center">DESIGN SERVICES</h1>

</section>



<div class="homepage-padding">    {{-- THIS IS PADDING DIV --}}



@foreach ($designServices as $item)

<h1 class="titles-margin mt-5">{{$item->category_name}}</h1>

<div class="pad">

    <div class="container-fluid row m-0 mb-md-5 align-items-center">

        <div class="col-md-7 text-left"><img src="{{URL::asset($item->img1)}}" class="w-100" height="400px">
        </div>
        <div class="col-md-5">
            <p class="mt-4 mt-md-0 development-page-parag">{{$item->category_description}}</p>
        </div>

    </div>

    <div class="container-fluid row m-0 mb-md-5 pb-md-5">

        <div class="col-md-4 mb-5 mb-md-0"><img src="{{URL::asset($item->img2)}}" class="w-100" height="500px">
        </div>
        <div class="col-md-4 mb-5 mb-md-0"><img src="{{URL::asset($item->img3)}}" class="w-100" height="500px">
        </div>
        <div class="col-md-4 mb-5 mb-md-0"><img src="{{URL::asset($item->img4)}}" class="w-100" height="500px">
        </div>

    </div>

</div>

@endforeach

<!-- ----------------------------- -->


</div>    {{-- THIS IS PADDING DIV --}}



<!-- -------------------------------------------------- -->

<div class="row help-cont m-0 mt-5 pt-3 pb-3 align-items-center">

    <div class="col-md-6 text-center">
        <h2> DIDN'T FIND WHAT YOU WERE <br> LOOKING FOR?</h2>
    </div>
    <div class="col-md-6 mb-3"><input type="text" placeholder="what can we help you with" class="looking-for-input">
    </div>

</div>

@endsection