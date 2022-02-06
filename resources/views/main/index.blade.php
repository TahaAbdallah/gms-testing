@extends('main.includes.layout')

@section('title','Gulf Media Solution')

@section('content')


 <!-- FIRST CAROUSEL ---------------------------------------------------------->

 <div class="container">

    <div class="col-12">

        <!-- FIRST CAROUDSEL  -->

        <div class="slider-cont">

            <div class="simple-slider">

                <div class="slider-wrapper">

                    @foreach ($categories as $item)

                    <div class="slider-slide">
                        <div class="ml-4 mr-4">
                            <a href="{{route('service.show',['id'=>$item->id])}}"><img src="{{URL::asset($item->img1)}}" width="100%" height="460px"></a>
                        </div>

                        <div class="text-center">
                            <a href="{{route('service.show',['id'=>$item->id])}}">
                                <h5 class="mt-4">{{$item->category_name}}</h5>
                            </a>
                        </div>
                    </div>

                    @endforeach

                    {{-- <div class="slider-slide">
                        <div class="ml-4 mr-4">
                            <a href=""><img src="images/test/carousel-2.PNG" width="100%" height="420px"></a>
                        </div>

                        <div class=" text-center">
                            <a href="">
                                <h5 class="mt-4">Development</h5>
                            </a>
                        </div>
                    </div> --}}


                    {{-- <div class="slider-slide">
                        <div class="ml-4 mr-4">
                            <a href=""><img src="images/test/carousel-3.PNG" width="100%" height="420px"></a>
                        </div>

                        <div class="text-center">
                            <a href="">
                                <h5 class="mt-4">Photography</h5>
                            </a>
                        </div>
                    </div> --}}

                </div>

                <div class="slider-btn slider-btn-prev">
                    <i class="fa fa-arrow-left" id="arrow-leftt" aria-hidden="true"></i>
                </div>

                <div class="slider-btn slider-btn-next">
                    <i class="fa fa-arrow-right" id="arrow-rightt" aria-hidden="true"></i>
                </div>

            </div>

        </div>
    </div>

</div>

<!-- PROMOS SECTION ---------------------------------------------------------------->


<div class="homepage-padding">    {{-- THIS IS PADDING DIV --}}

 

    
<div data-aos="fade-up" data-aos-duration="200">
<h1 class="mt-3 text-center text-md-left titles-margin">PROMOS</h1>
</div>

    <div class="promos-cont titles-margin-bt">
        
        <!-- MOBILE CAROUSEL  -->
        <div class="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    @foreach ($promo1 as $item)
    

                    <div class="carousel-item active">

                        <div class="row align-items-center consult-bg">
                            <div class="col-md-4 text-center">
                                <h2>{{$item->title}}</h2>
                                <a href="{{route('contact')}}" class="consultation-btn section2-btn">Free Consutation</a>
                            </div>
                            <div class="col-md-8">
                                <img src="{{URL::asset($item->img)}}" class="w-100 pt-5 pt-md-0">
                            </div>
                        </div>

                    </div>

                    @endforeach

                    @foreach ($promo2 as $item)
                    <div class="carousel-item">
                        <div class="row align-items-center consult-bg">
                            <div class="col-md-4 text-center">
                                <h2>{{$item->title}}</h2>
                                <a href="{{route('contact')}}" class="consultation-btn section2-btn">Free
                                    Consutation</a>
                            </div>
                            <div class="col-md-8">
                                <img src="{{URL::asset($item->img)}}" class="w-100 pt-5 pt-md-0">
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach ($promo3 as $item)
                    <div class=" carousel-item">
                        <div class="row align-items-center consult-bg">
                            <div class="col-md-4 text-center">
                                <h2>{{$item->title}}</h2>
                                <a href="{{route('contact')}}" class="consultation-btn section2-btn">Free
                                    Consutation</a>
                            </div>
                            <div class="col-md-8">
                                <img src="{{URL::asset($item->img)}}" class="w-100 pt-5 pt-md-0">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>


     <!-- WHAT DO WE DO SECTION -------------------------------------------------->

    <!-- DIGITAL MARKETING -------------------------------- -->
    <div data-aos="fade-up" data-aos-duration="200">
        <h1 class="mt-3 text-center text-md-left mt-5 titles-margin">WHAT DO WE DO</h1>
    </div>

    <div data-aos="fade-left" data-aos-easing="ease-in-sine">

    <h2 class="text-center text-md-left mt-4 titles-margin section6-h2"><a href="{{route('developmentPage')}}" style="text-decoration: none; color:black">Development</a></h2>

    <div class="container-fluid mx-auto section6 mb-5">
        @foreach ($developmentServices->take(1) as $item)
        <div class="col-12 hide-on-desktop">
            <img src="{{URL::asset($item->img2)}}" class="customers-img w-100 mt-4"
            height="350px">
        </div>
        @endforeach

        <div class="mt-4 text-md-left text-center">
            <P class="col-md-12 p-0">@foreach ($development as $item) {{$item->description}}@endforeach</P>
        </div>


        <div class="row m-0">

            @foreach ($developmentServices->take(1) as $item)

            <div class="col-md-4 hide-on-mobile"><img src="{{URL::asset($item->img2)}}" class="customers-img w-100 mt-4"
                        height="350px">
            </div>

            <div class="col-6 col-md-4"><img src="{{URL::asset($item->img3)}}" class="customers-img w-100 mt-4"
                height="350px">
            </div>

         <div class="col-6 col-md-4"><img src="{{URL::asset($item->img4)}}" class="customers-img w-100 mt-4"
        height="350px">
        </div>
            @endforeach
        </div>

        <div class="mt-5 col-12 view-all text-md-right text-center">
            <a href="{{route('developmentPage')}}">View all</a>
        </div>



        <div class=" section6-img-bg">
            <img src="images/grey-rect.png" class="img-fluid">
        </div>

    </div>
</div>
    <!-- ---------------------------------------->

    <!-- DESIGN MARKETING -------------------------------- -->
    <div data-aos="fade-right" data-aos-easing="ease-in-sine">
        
    <h2 class="text-center text-md-left mt-4 titles-margin section6-h2">
       <a href="{{route('designPage')}}" style="text-decoration: none; color:black">Design</a></h2>

    <div class="container-fluid mx-auto section6 mb-5">

        @foreach ($designServices->take(1) as $item)
        <div class="col-12 hide-on-desktop">
            <img src="{{URL::asset($item->img2)}}" class="customers-img w-100 mt-4"
            height="350px">
        </div>
        @endforeach

        <div class="mt-4 text-md-left text-center">
            <P class="col-md-12 p-0">@foreach ($design as $item) {{$item->description}}@endforeach</P>
        </div>


        <div class="row m-0">

            @foreach ($designServices->take(1) as $item)

            <div class="col-md-4 hide-on-mobile"><img src="{{URL::asset($item->img2)}}" class="customers-img w-100 mt-4"
                        height="350px">
            </div>

            <div class="col-6 col-md-4"><img src="{{URL::asset($item->img3)}}" class="customers-img w-100 mt-4"
                height="350px">
            </div>

         <div class="col-6 col-md-4"><img src="{{URL::asset($item->img4)}}" class="customers-img w-100 mt-4"
        height="350px">
        </div>
            @endforeach

        </div>

        <div class="mt-5 col-12 view-all text-md-right text-center">
            <a href="{{route('designPage')}}">View all</a>
        </div>



        <div class=" section6-img-bg2">
            <img src="images/grey-rect.png" class="img-fluid">
        </div>

    </div>
    </div>
    <!-- --------------------------------------  -->

    <!-- Digital MARKETING -------------------------------- -->
    <div data-aos="fade-left" data-aos-easing="ease-in-sine">
        <h2 class="text-center text-md-left mt-4 titles-margin section6-h2">
            <a href="{{route('marketingPage')}}" style="text-decoration: none; color:black">Digital Marketing</a></h2>
    <div class="container-fluid mx-auto section6 mb-5">

        @foreach ($marketingServices->take(1) as $item)
        <div class="col-12 hide-on-desktop">
            <img src="{{URL::asset($item->img2)}}" class="customers-img w-100 mt-4"
            height="350px">
        </div>
        @endforeach
       
        <div class="mt-4 text-md-left text-center">
            <P class="col-md-12 p-0">@foreach ($marketing as $item) {{$item->description}}@endforeach</P>
        </div>


        <div class="row m-0">

            @foreach ($marketingServices->take(1) as $item)

            <div class="col-md-4 hide-on-mobile"><img src="{{URL::asset($item->img2)}}" class="customers-img w-100 mt-4"
                        height="350px">
            </div>

            <div class="col-6 col-md-4"><img src="{{URL::asset($item->img3)}}" class="customers-img w-100 mt-4"
                height="350px">
            </div>

         <div class="col-6 col-md-4"><img src="{{URL::asset($item->img4)}}" class="customers-img w-100 mt-4"
        height="350px">
        </div>
            @endforeach

        </div>

        <div class="mt-5 col-12 view-all text-md-right text-center">
            <a href="{{route('marketingPage')}}">View all</a>
        </div>



        <div class=" section6-img-bg">
            <img src="images/grey-rect.png" class="img-fluid">
        </div>

    </div>
    </div>
    <!-- --------------------------------------  -->

    <!-- MEDIA MARKETING -------------------------------- -->
    <div data-aos="fade-right" data-aos-easing="ease-in-sine">
    <h2 class="text-center text-md-left mt-4 titles-margin section6-h2"><a href="{{route('mediaPage')}}" style="text-decoration: none; color:black">Media</a></h2>

    <div class="container-fluid mx-auto section6 mb-5">

        @foreach ($mediaServices->take(1) as $item)
        <div class="col-12 hide-on-desktop">
            <img src="{{URL::asset($item->img2)}}" class="customers-img w-100 mt-4"
            height="350px">
        </div>
        @endforeach

        <div class="mt-4 text-md-left text-center">
            <P class="col-md-12 p-0">@foreach ($media as $item) {{$item->description}}@endforeach</P>
        </div>


        <div class="row m-0">

            @foreach ($mediaServices->take(1) as $item)

            <div class="col-md-4 hide-on-mobile"><img src="{{URL::asset($item->img2)}}" class="customers-img w-100 mt-4"
                        height="350px">
            </div>

            <div class="col-6 col-md-4"><img src="{{URL::asset($item->img3)}}" class="customers-img w-100 mt-4"
                height="350px">
            </div>

         <div class="col-6 col-md-4"><img src="{{URL::asset($item->img4)}}" class="customers-img w-100 mt-4"
        height="350px">
        </div>
            @endforeach

        </div>

        <div class="mt-5 col-12 view-all text-md-right text-center">
            <a href="{{route('mediaPage')}}">View all</a>
        </div>



        <div class=" section6-img-bg2">
            <img src="images/grey-rect.png" class="img-fluid">
        </div>

    </div>
    </div>
    <!-- OUR PROJECTS -------------------------------------------------->

    <div data-aos="zoom-in" data-aos-easing="ease-in-sine">
        <h1 class="mt-5 text-center text-md-left titles-margin">OUR PROJECTS</h1>
   

    <div class="our-projects-cont mx-auto">

        <div class="carousel-desk">
            <div class="wrap">
                <ul class="text-center p-0">

                    @foreach ($projects as $item)
                    <li class="text-center">
                        <a href="{{route('project.show',['id'=>$item->id])}}">
                            <img src="{{URL::asset($item->img)}}" width="350px" height="500px">
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    </div>
    <!-- MOBILE CAROUSEL  -->
<div class="carousel-mob">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($projects as $item)
            <div class="carousel-item @if ($loop->first) active @endif">
                <img class="d-block mx-auto" src="{{URL::asset($item->img)}}" width="270px" height="420px">
                <a href="{{route('project.show',['id'=>$item->id])}}">
                    <h5 class="mt-3 text-center">{{$item->project_name}}</h5>
                </a>
            </div>
           @endforeach
        </div>
        <a class=" carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<div class="mt-3 col-12 view-all text-center">
    <a href="{{route('projectPage')}}">View all</a>
</div>




</div>    {{-- THIS IS PADDING CLOSE DIV --}}



<!-- CUSTOMERS SECTION ------------------------------- -->


<div class="container" data-aos="zoom-in-up" data-aos-easing="ease-in-sine">
    
        <h1 class="mt-5 text-center titles-margin-bt">TRUSTED BY</h1>
    
        @foreach($clients->chunk(10) as $item)
    <section class="customer-logos slider">
        
        @foreach($item as $client)
        <div class="slide">
           <img src="{{URL::asset($client->img)}}">
        </div>
       
        @endforeach
    </section>
    @endforeach
</div>



<!-- -------------------------------------------------- -->

<div class="row help-cont m-0 mt-5 pt-3 pb-3 align-items-center">

    <div class="col-md-6 text-center">
        <h2> DIDN'T FIND WHAT YOU WERE <br> LOOKING FOR?</h2>
    </div>
    <div class="col-md-6 mb-3"><input type="text" placeholder="what can we help you with" class="looking-for-input">
    </div>

</div>



    
@endsection