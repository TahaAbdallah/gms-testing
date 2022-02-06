@extends('main.includes.layout')

@section('title','Marketing Projects')

@section('content')



<!-- ------------------------------------ -->

<section class="development-page">
    <h1 class="text-center">MARKETING PROJECTS</h1>
</section>

<div class="text-center">
@foreach ($servicemarketing as $item)
<P class="mt-5 mb-md-4">{{$item->description}}</P>
@endforeach
</div>



@foreach ($marketingProjects->chunk(3) as $item)
<div class="container-fluid row m-0 p-0 pl-md-5 pr-md-5 text-center mb-5">
    @foreach ($item as $media)
    <div class="col-md-4 text-center"><img src="{{URL::asset($media->img)}}" width="300px" height="300px"></div>
    @endforeach
</div>
@endforeach

{{-- <div class="container-fluid row m-0 p-0 mt-5 pl-md-5 pr-md-5 text-center">

    <div class="col-md-4 text-right"><img src="images/grey-rect.png" width="300px" height="300px"></div>
    <div class="col-md-4"><img src="images/grey-rect.png" width="300px" height="300px"></div>
    <div class="col-md-4 text-left"><img src="images/grey-rect.png" width="300px" height="300px"></div>

</div> --}}

 {!! $marketingProjects->links() !!}

<!-- ------------------------------------------ -->

<!-- -------------------------------------------------- -->

<div class="row help-cont m-0 mt-5 pt-3 pb-3 align-items-center">

    <div class="col-md-6 text-center">
        <h2> DIDN'T FIND WHAT YOU WERE <br> LOOKING FOR?</h2>
    </div>
    <div class="col-md-6 mb-3"><input type="text" placeholder="what can we help you with" class="looking-for-input">
    </div>

</div>


@endsection