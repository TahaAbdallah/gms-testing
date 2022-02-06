<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{URL::asset('css/admin/style.css');}}">


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



    <title>Gms - dashboard | @yield('dashboard-title')</title>

</head>

<body>


    <div class="sidebar-cont-desktop hidden" id="sidebar">

        <div class="text-center row m-0 p-0 justify-content-center align-items-center" id="closebtn">
            <i id="closing" class="fa fa-arrow-left pr-0" aria-hidden="true"></i>
            <p id="closing" class="m-0">Close</p>
        </div>

        <a href="{{route('dashboard')}}">
            <div class="text-center"><img src="{{ asset('images/GMS - LOGO-1@2x.png') }}"
                    class="img-fluid ml-3 mr-3 mt-5"></div>

            <div class="text-center">
                <p class="m-0 p-0 logo-title1">Gulf Media</p>
                <p class="m-0 p-0 logo-title2">Solutions</p>
            </div>
        </a>

        <div class="container-fluid mt-3 welcome-cont-desktop">

            <div class="row align-items-center">

                <div class="col-5 text-center pr-0 pl-0">
                    <img src="{{URL::asset(auth()->user()->profile_img);}}" class="sidebar-user-img">
                </div>

                <div class="col-7 pl-0 pr-1">
                    <p class="m-0 p-0 user-welcome">Welcome</p>
                    <p class="m-0 p-0 username">{{auth()->user()->name}}</p>
                </div>

            </div>

        </div>



        <!-- SECTION ------------------------ -->


        <p class="ml-3 mt-5 section-title">GENERAL</p>

        <div id="accordianId" role="tablist" aria-multiselectable="true">


            <div class="card">
                <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true"
                    aria-controls="section1ContentId">
                    <div class="card-header" role="tab" id="section1HeaderId" onclick="UsersArrow()">
                        <div class="row">
                            <div class="col-10">
                                <h5 class="mb-0">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    Users
                                </h5>
                            </div>
                            <div class="col-2"><i id="User-arrow-change" class="fa fa-arrow-down"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                    <div class="card-body">

                        <div class="card-body-div">
                            <p><a href="{{route('admins')}}">Admins</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="{{route('managers')}}">Managers</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="{{route('employees')}}">Employees</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="{{route('clients')}}">Clients</a></p>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <!-- SECTION ------------------------ -->

        <p class="ml-3 mt-5 section-title">MANAGEMENT</p>

        <div id="accordianId" role="tablist" aria-multiselectable="true">
            <div class="card">
                <a data-toggle="collapse" data-parent="#accordianId" href="#section4ContentId" aria-expanded="true"
                    aria-controls="section4ContentId">
                    <div class="card-header" role="tab" id="section4HeaderId" onclick="ServicesArrow()">
                        <div class="row">
                            <div class="col-10">
                                <h5 class="mb-0">
                                    <i class="fa fa-server" aria-hidden="true"></i>
                                    Services
                                </h5>
                            </div>
                            <div class="col-2"><i id="services-arrow-change" class="fa fa-arrow-down"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <div id="section4ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                    <div class="card-body">
                        <div class="card-body-div">
                            <p><a href="{{route('mediaServices')}}">Media Services</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="{{route('developmentServices')}}">Development Services</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="{{route('designServices')}}">Design Services</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="{{route('marketingServices')}}">Marketing Services</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- --------------------------- -->


            <div class="sidebar-links">
                <a href="{{route('projects')}}">
                    <h5 class="mb-0">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        Our Projects
                    </h5>
                </a>
            </div>



            <!-- --------------------------- -->

            <div class="sidebar-links">
                <a href="{{route('promos')}}">
                    <h5 class="mb-0">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        Promos
                    </h5>
                </a>
            </div>



            <!-- --------------------------- -->

        </div>


        <!-- SECTION ------------------------ -->

        {{-- <p class="ml-3 mt-5 section-title">LAYOUT</p>



        <div class="sidebar-links">
            <a href="LayoutHomepage.html">
                <h5 class="mb-0">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Home Page
                </h5>
            </a>
        </div>

        <div class="sidebar-links">
            <a href="LayoutOurServices.html">
                <h5 class="mb-0">
                    <i class="fa fa-toggle-off" aria-hidden="true"></i>
                    Our Services Page
                </h5>
            </a>
        </div>

        <div class="sidebar-links">
            <a href="#">
                <h5 class="mb-0">
                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                    Our Projects Page
                </h5>
            </a>
        </div>

        <div id="accordianId" role="tablist" aria-multiselectable="true">

            <div class="card">
                <a data-toggle="collapse" data-parent="#accordianId" href="#sectionServicesContentId"
                    aria-expanded="true" aria-controls="sectionServicesContentId">
                    <div class="card-header" role="tab" id="sectionServicesHeaderId" onclick="ServicesPagesArrow()">
                        <div class="row">
                            <div class="col-10">
                                <h5 class="mb-0">
                                    <i class="fa fa-leaf" aria-hidden="true"></i>
                                    Services Pages
                                </h5>
                            </div>
                            <div class="col-2"><i id="Services-pages-arrow-change" class="fa fa-arrow-down"
                                    aria-hidden="true"></i></div>
                        </div>
                    </div>
                </a>
                <div id="sectionServicesContentId" class="collapse in" role="tabpanel"
                    aria-labelledby="sectionServicesHeaderId">
                    <div class="card-body">
                        <div class="card-body-div">
                            <p><a href="">Media Services Page</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="">Development Services Page</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="">Design Services Page</a></p>
                        </div>

                        <div class="card-body-div">
                            <p><a href="">Marketing Services Page</a></p>
                        </div>
                    </div>
                </div>
            </div>


        </div> --}}

    </div> <!-- sidebar-cont-desktop close -->






    {{-- ################# BURGER CONTAINER ################# --}}

    <div class="burger-btn-cont">

        <div class="container-fluid row m-0 p-0 align-items-center">
            <div class="col-6">
                <i id="burgerbtn" class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="col-6 ml-0 pl-0 row align-items-center justify-content-end nowrap flex-nowrap">
                <img src="{{URL::asset(auth()->user()->profile_img);}}" class="main-user-img">
                <p class="m-0 ml-1 username-main-page">{{auth()->user()->name}}</p>

                @auth
                <a style="color: red !important" class="m-0 ml-1 username-main-page" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endauth

            </div>

        </div>
    </div>



    {{-- ################# MAIN COONTENT ################# --}}


    @yield('content')


    <!-- SCRIPTS -->

    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="{{URL::asset('js/admin/adminScript.js');}}"></script>

</body>

</html>