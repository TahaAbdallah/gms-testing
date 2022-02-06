@extends('main.includes.layout')

@section('title','Our Projects')

@section('content')

<!-- ------------------------------------ -->

<section class="our-projects">

    <h1 class="text-center mt-5 mb-5">OUR PROJECTS</h1>

    <div class="pad">

        <div class="container-fluid row m-0 p-0">

            @foreach ($servicemarketing as $item)
            <div class="col-md-6 mt-2 text-center">
                <a href="{{route('marketingProjects')}}"><img class="img-fluid" src="images/grey-rect.png"></a>
                <div>
                    <a href="{{route('marketingProjects')}}">
                        <p class="our-projects-title">Marketing Projects</p>
                    </a>
                </div>
                <p class="pt-5 pb-2 pl-md-5 pr-md-5 our-projects-parag">{{$item->description}}</p>
                <a href=""><i class="fa fa-arrow-right pb-3" aria-hidden="true"></i></a>
            </div>
            @endforeach

            @foreach ($servicedesign as $item)
            <div class="col-md-6 mt-2 text-center">
                <a href="{{route('designProjects')}}"><img class="img-fluid" src="images/grey-rect.png"></a>
                <div>
                    <a href="{{route('designProjects')}}">
                        <p class="our-projects-title">Design Projects</p>
                    </a>
                </div>
                <p class="pt-5 pb-2 pl-md-5 pr-md-5 our-projects-parag">{{$item->description}}</p>
                <a href=""><i class="fa fa-arrow-right pb-3" aria-hidden="true"></i></a>
            </div>
            @endforeach

            @foreach ($servicemedia as $item)
            <div class="col-md-6 mt-2 text-center">
                <a href="{{route('mediaProjects')}}"><img class="img-fluid" src="images/grey-rect.png"></a>
                <div>
                    <a href="{{route('mediaProjects')}}">
                        <p class="our-projects-title">Media Projects</p>
                    </a>
                </div>
                <p class="pt-5 pb-4 pl-md-5 pr-md-5 our-projects-parag">{{$item->description}}</p>
                <a href=""><i class="fa fa-arrow-right pb-3" aria-hidden="true"></i></a>
            </div>
            @endforeach

            @foreach ($servicedevelopment as $item)
            <div class="col-md-6 mt-2 text-center">
                <a href="{{route('developmentProjects')}}"><img class="img-fluid" src="images/grey-rect.png"></a>
                <div>
                    <a href="{{route('developmentProjects')}}">
                        <p class="our-projects-title">Development Projects</p>
                    </a>
                </div>
                <p class="pt-5 pb-4 pl-md-5 pr-md-5 our-projects-parag">{{$item->description}}</p>
                <a href=""><i class="fa fa-arrow-right pb-3" aria-hidden="true"></i></a>
            </div>
            @endforeach

        </div>

    </div>

</section>
<!-- ---------------------------------------------- -->

<!-- -------------------------------------------------- -->

<div class="row help-cont m-0 mt-5 pt-3 pb-3 align-items-center">

    <div class="col-md-6 text-center">
        <h2> DIDN'T FIND WHAT YOU WERE <br> LOOKING FOR?</h2>
    </div>
    <div class="col-md-6 mb-3"><input type="text" placeholder="what can we help you with" class="looking-for-input">
    </div>

</div>

@endsection