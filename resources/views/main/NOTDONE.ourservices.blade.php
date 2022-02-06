@extends('main.includes.layout')

@section('content')



  <!-- ---------------------------------=--------------------------------------------- -->


    <!-- SECTION 1 -->

    <div class="container-fluid row m-0 p-0 pl-md-5 pr-md-5 pb-md-5 mb-5">

        <div class="col-md-6">
            <h1 class="mt-5 mb-2 mb-md-5 text-center text-md-left">WHAT <br> DO WE DO</h1>
            <p class="pt-md-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with the release
                of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>

        <div class="col-md-6">
            <img src="images/grey-rect.png" class="img-fluid mt-lg-5 pt-lg-5">
        </div>

    </div>

    <!-- ------------------------------->

    <!-- SECTION 2 -->

    <div class="container row m-0 p-md-5 m-auto our-services-section2">

        <div class="col-md-3 text-center">
            <a href="{{route('developmentPage')}}">
                <h4 class="mb-md-5 mb-2 mt-4">DEVELOPMENT</h4>
            </a>
        @foreach ($developmentServices as $item)
                <p>{{$item->category_name}}</p>
        @endforeach
        </div>
        <div class="col-md-3 text-center">
            <a href="{{route('designPage')}}">
                <h4 class="mb-md-5 mb-2 mt-4">DESIGN</h4>
            </a>
        @foreach ($designServices as $item)
                <p>{{$item->category_name}}</p>
        @endforeach
        </div>
        <div class="col-md-3 text-center">
            <a href="{{route('marketingPage')}}">
                <h4 class="mb-md-5 mb-2 mt-4">DIGITAL MARKETING</h4>
            </a>
        @foreach ($marketingServices as $item)
                <p>{{$item->category_name}}</p>
        @endforeach
        </div>
        <div class="col-md-3 text-center">
            <a href="{{route('mediaPage')}}">
                <h4 class="mb-md-5 mb-2 mt-4">MEDIA</h4>
            </a>
        @foreach ($mediaServices as $item)
                <p>{{$item->category_name}}</p>
        @endforeach
        </div>


    </div>

    <div class=" col-12 text-center mt-5 mb-5 free-consultation-link">
                        <a href="{{route('contact')}}">Request a Free Consultation</a>
    </div>

        <!-- ------------------------------->

        <!-- SECTION 3 -->

        <div class="container row m-0 p-5 m-auto our-services-section3">

            <div class="col-12">
                <p>Our team has years of experiences Lorem Ipsum is simply dummy text of
                    the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen book.</p>
            </div>

        </div>

        <!-- ------------------------------->

        <!-- DESIGN  JAVASCRIPT SECTION -->

        <div class="container row m-0 p-md-5 pb-3 m-auto our-services-section4">

            <div class="col-12 text-center">
                <h1 class="mt-md-3 mb-md-5 mb-3 mt-5" id="our-services-design-section">DESIGN</h1>
            </div>

            <div class="col-4 text-center"><a href="#our-services-design-section" class="active" id="design-link"
                    onclick="section4designtoogle1()">UI
                    Design</a></div>
            <div class="col-4 text-center"><a href="#our-services-design-section" id="graphic-link"
                    onclick="section4designtoogle2()">Graphic Design</a>
            </div>
            <div class="col-4 text-center"><a href="#our-services-design-section" id="package-link"
                    onclick="section4designtoogle3()">Package Design</a>
            </div>

        </div>

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont mt-5 pt-3"
            id="our-services-section4-design">

            <h3 class="mb-4 pl-3 pr-3">UI Design</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->

        <!-- SECTION 4 -->

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont" id="our-services-section4-graphic">

            <h3 class="mb-4 pl-3 pr-3">LOGO DESIGN</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->

        <!-- SECTION 4 -->

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont" id="our-services-section4-package">

            <h3 class="mb-4 pl-3 pr-3">LABEL DESIGN</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->

        <!-- ------------------------------->







        

        <!-- WEB DEVELOPMENT  JAVASCRIPT SECTION -->

        <div class="container row m-0 p-md-5 pb-3 m-auto our-services-section4">

            <div class="col-12 text-center">
                <h1 class="mt-md-3 mb-md-5 mt-5 mb-3" id="our-services-web-section">WEB DEVELOPMENT</h1>
            </div>

            <div class="col-4 text-center"><a href="#our-services-web-section" class="active" id="web1-link"
                    onclick="section4webtoogle1()">Wordpress</a></div>
            <div class="col-4 text-center"><a href="#our-services-web-section" id="web2-link"
                    onclick="section4webtoogle2()">Hello All</a>
            </div>
            <div class="col-4 text-center"><a href="#our-services-web-section" id="web3-link"
                    onclick="section4webtoogle3()">Hello All</a>
            </div>

        </div>

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont" id="our-services-section4-web1">

            <h3 class="mb-4 pl-3 pr-3">UI Design</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->

        <!-- SECTION 4 -->

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont" id="our-services-section4-web2">

            <h3 class="mb-4 pl-3 pr-3">LOGO DESIGN</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->

        <!-- SECTION 4 -->

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont" id="our-services-section4-web3">

            <h3 class="mb-4 pl-3 pr-3">LABEL DESIGN</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->

        <!-- WEB DEVELOPMENT  JAVASCRIPT SECTION -->

        <div class="container row m-0 p-md-5 pb-3 m-auto our-services-section4">

            <div class="col-12 text-center">
                <h1 class="mt-md-3 mb-md-5 mt-5 mb-3" id="our-services-marketing-section">DIGITAL MARKETING</h1>
            </div>

            <div class="col-4 text-center"><a href="#our-services-marketing-section" class="active" id="marketing1-link"
                    onclick="section4marketingtoogle1()">Social Media Marketing</a></div>
            <div class="col-4 text-center"><a href="#our-services-marketing-section" id="marketing2-link"
                    onclick="section4marketingtoogle2()">Blogging</a>
            </div>
            <div class="col-4 text-center"><a href="#our-services-marketing-section" id="marketing3-link"
                    onclick="section4marketingtoogle3()">Hello All</a>
            </div>

        </div>

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont mt-5 pt-3"
            id="our-services-section4-marketing1">

            <h3 class="mb-4 pl-3 pr-3">UI Design</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->

        <!-- SECTION 4 -->

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont" id="our-services-section4-marketing2">

            <h3 class="mb-4 pl-3 pr-3">LOGO DESIGN</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->

        <!-- SECTION 4 -->

        <div class="container row m-0 p-md-5 m-auto our-services-section4-cont" id="our-services-section4-marketing3">

            <h3 class="mb-4 pl-3 pr-3">LABEL DESIGN</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been
                the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">WHAT YOU WANT VS. WHAT YOU NEED:</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>

            <h3 class="mb-4 mt-4 pl-3 pr-3">LOREM IPSUM</h3>
            <p class="pl-3 pr-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has
                been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>


        </div>

        <!-- ------------------------------->


        <!-- SECTION 5 -->

        <div class="container-fluid mt-5 mb-5 p-5 work-with-us text-center">

            <h2 class="text-center">WORK WITH US TODAY!</h2>
            <p class="text-center mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum
                has been the
                industry's standard dummy text ever </p>
            <i class="fa fa-arrow-right mt-3" aria-hidden="true"></i>

        </div>

        <!-- ------------------------------->

        <!-- SECTION 6 -->

        <h1 class="mt-5 ml-md-5 mb-md-5 text-center text-md-left">OTHER <br> SERVICES</h1>

        <div class="container-fluid row m-0 pb-md-5">

            <div class="col-md-4">
                <div class="card text-center mb-5 mb-md-0">
                    <img class="card-img-top" src="images/grey-rect.png">
                    <div class="card-body">
                        <h4 class="card-title">Lorem Ipsum</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-5 mb-md-0">
                    <img class="card-img-top" src="images/grey-rect.png">
                    <div class="card-body">
                        <h4 class="card-title">Lorem Ipsum</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-5 mb-md-0">
                    <img class="card-img-top" src="images/grey-rect.png">
                    <div class="card-body">
                        <h4 class="card-title">Lorem Ipsum</h4>
                    </div>
                </div>
            </div>

        </div>




        <!-- -------------------------------------------------- -->

        <div class="row help-cont m-0 mt-5 pt-3 pb-3 align-items-center">

            <div class="col-md-6 text-center">
                <h2> DIDN'T FIND WHAT YOU WERE <br> LOOKING FOR?</h2>
            </div>
            <div class="col-md-6 mb-3"><input type="text" placeholder="what can we help you with"
                    class="looking-for-input">
            </div>

        </div>

@endsection