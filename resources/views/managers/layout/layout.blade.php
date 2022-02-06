<!doctype html>
<html lang="en">

<head>
  <title>Gms | @yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('css/managers/style.css'); }}">

</head>

<body>

  <div class="nav-cont none">

    <ul class="nav nav-justified">
      <li class="nav-item">
        <p class="nav-link">{{$today->format('Y')}}</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('januaryCheck')}}">January</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('februaryCheck')}}">February</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('marchCheck')}}">March</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('aprilCheck')}}">April</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('mayCheck')}}">May</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('juneCheck')}}">June</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('julyCheck')}}">July</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('augustCheck')}}">August</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('septemberCheck')}}">September</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('octoberCheck')}}">October</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('novemberCheck')}}">November</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('decemberCheck')}}">December</a>
      </li>
    </ul>

  </div>

  <div class="arrow-cont">
    <div class="arrow m-0 p-0 row justify-content-center align-items-center"><i
        class="fas fa-arrow-alt-circle-down arrowNoRotate"></i>
    </div>
  </div>

  <div class="arrow-back-cont">
    <div class="row m-0">
      <div>
        <img class="mr-2 mb-2" src="{{URL::asset(auth('manager')->user()->profile_img);}}">
      </div>
      <div>
        <h4>Hello {{auth('manager')->user()->name}}</h4>
        <div><a href="{{ route('addEmployee') }}"><i class="fa fa-plus-circle mr-2 "></i> Add Employee</a></div>
        <div><a href=""><i class="fa fa-plus-circle mr-2 "></i> TEST FOR GITHUB</a></div>
        <div><a href="{{ route('managerLogout') }}"><i class="fas fa-door-open mr-2"></i> Logout</a></div>
      </div>
    </div>
  </div>

  @yield('content')


  <div class="container-fluid row justify-content-center align-items-center pb-5">

    <h5 class="m-0 mr-2 powered">Powered by</h5>
    <a href="http://gulfmediasolution.com" target="_blank" style="z-index: 999"><img class="img-fluid"
        src="{{URL::asset('images/GMS - LOGO@2x.png')}}" width="60px"></a>
  </div>

  </div>



  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  </div>







  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="{{URL::asset('js/employees/js.js');}}"></script>

</body>

</html>