<!-- --------------------------- NAVBAR ------------------------  -->


<nav class="navbar navbar-expand" id="main-nav">
    <div class="text-center text-md-left"><a class="navbar-brand" href="{{route('index')}}"><img id="nav-img"
                src="{{URL::asset('images/GMS - LOGO-1@2x.png')}}" width="120px" height="45px"></a></div>

    <ul class="navbar-nav mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link nav-links" href="{{route('index')}}" id="home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link consultation-btn" href="{{route('contact')}}" id="nav-consult-btn">FREE CONSULTATION</a>
        </li>
        <li>
            <i class="fa fa-bars" id="burger" aria-hidden="true" onclick="myFunction()"></i>
        </li>
    </ul>


</nav>


<!-- --------------------- BIG NAV ------------------------  -->

<div class="big-nav-bg" id="big-nav-bg">
    <nav id="big-nav">

        <div class="col-12 text-md-right text-center pt-3"><a href=" #" class="closee mr-md-5"
                onclick="myFunction2()">
                Close</a>
        </div>

        <div class="container-fluid row m-0 big-nav pt-3 text-center big-nav-1row">

            <div class="col-md-4 img-fluid">
                <div><a href="{{route('index')}}"><img class="img-fluid mb-4 mt-5" src="{{URL::asset('images/GMS - LOGO-1@2x.png')}}"></a>
                </div>
                <div><a href="{{route('contact')}}" class="consultation-btn mb-4">Free Consutation</a></div>
            </div>
            <div class="col-6 col-md-4 mt-4">
                <h5 class="mb-3 mt-2"><a href="{{route('mediaPage')}}">Media Services</a></h5>
                @foreach ($mediaServices as $item)
                <div><a href="{{route('service.show',['id'=>$item->id])}}">{{$item->category_name}}</a></div>
                @endforeach
            </div>
            <div class="col-6 col-md-4 mt-4">
                <h5 class="mb-3 mt-2"><a href="{{route('developmentPage')}}">Development Services</a></h5>
                @foreach ($developmentServices as $item)
                <div><a href="{{route('service.show',['id'=>$item->id])}}">{{$item->category_name}}</a></div>
                @endforeach
            </div>

        </div>


        <div class="container-fluid row m-0 big-nav text-center big-nav-2row">

            <div class="col-6 col-md-4">
                <h5 class="mb-3 mt-5"><a href="{{route('designPage')}}">Design Services</a></h5>
                @foreach ($designServices as $item)
                <div><a href="{{route('service.show',['id'=>$item->id])}}">{{$item->category_name}}</a></div>
                @endforeach
            </div>
            <div class="col-6 col-md-4">
                <h5 class="mb-3 mt-5"><a href="{{route('marketingPage')}}">Marketing Services</a></h5>
                @foreach ($marketingServices as $item)
                <div><a href="{{route('service.show',['id'=>$item->id])}}">{{$item->category_name}}</a></div>
                @endforeach
            </div>
            <div class="col-12 col-md-4">
                <h5 class="mb-3 mt-5"><a href="{{route('projectPage')}}">Our Projects</a></h5>
            </div>

        </div>


        <div class="container-fluid row m-0 big-nav text-center justify-content-end mt-4">
            <div class="col-12 col-md-4">
                <h5><a href="{{route('contact')}}" class="mt-5">Get in touch</a></h5>
            </div>

        </div>

    </nav>

</div>



<!-- ---------------------------------=--------------------------------------------- -->

<!-- SCROLL TO TOP BUTTON ---------------------  -->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"
        aria-hidden="true"></i></button>
