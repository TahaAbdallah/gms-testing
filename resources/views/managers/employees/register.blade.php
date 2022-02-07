<!doctype html>
<html lang="en">

<head>
  <title>Gms - Manager Login | Gulf Media Solution</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::asset('css/managers/login.css');}}">
  <link rel="stylesheet" href="{{URL::asset('css/managers/style.css');}}">
</head>

<body>


  <div class="wrapper">

    <div class="arrow-back-cont">
      <div class="row m-0">
        <div>
          <img class="mr-2 mb-2" src="{{URL::asset(auth('manager')->user()->profile_img);}}">
        </div>
        <div>
          <h4>Hello {{auth('manager')->user()->name}}</h4>
          <div><a href="{{ route('addEmployee') }}"><i class="fa fa-plus-circle mr-2 "></i> Add Employee</a></div>
          <div><a href="{{ route('allEmployees') }}"><i class="fa fa-user mr-2"></i> All Employees</a></div>
          <div><a href="{{ route('managerLogout') }}"><i class="fas fa-door-open mr-2"></i> Logout</a></div>
        </div>
      </div>

      <div class="arrow-back-cont text-left">
        <div><a href="{{route('managerDashboard')}}"><i class="fas fa-arrow-left mr-2"></i> Back To Weekly
            Schedule</a>
        </div>
      </div>
    </div>
    <div class="container">

      @if(session()->has('success'))
      <div class="alert alert-danger">
        {{ session()->get('success') }}
      </div>
      @endif


      <div><img class="img-fluid" src="{{ asset('images/GMS - LOGO-1@2x.png') }}"></div>

      <h1 class="mt-2">Welcome {{auth('manager')->user()->name}} | Add new Employee</h1>

      <form class="form mb-3" method="POST" action="{{ route('processAddEmployee') }}" enctype="multipart/form-data">
        @csrf

        <div class="col-12 text-center mt-5">
          @if (count($errors)>0)
          <ul>
            @foreach ($errors->all() as $item)
            <li>
              {{$item}}
            </li>
            @endforeach
          </ul>
          @endif
        </div>

        <input type="text" placeholder="Name" class="mb-3" name="name">
        <input type="email" placeholder="Email" class="mb-3" name="email">
        <input type="password" placeholder="Password" class="mb-3" name="password">
        <label for="profile_img">Upload Profile Image</label>
        <input type="file" name="profile_img" placeholder="Upload Image">
        <button type="submit" id="login-button">Add Employee</button>
      </form>

      <div class="row justify-content-center align-items-center">
        <h4 class="p-1">Powered by</h4>
        <a href="http://gulfmediasolution.com" target="_blank" style="z-index: 999"><img class="img-fluid p-1"
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
  <script src="{{URL::asset('js/employees/js.js');}}"></script>
  <script src="{{ URL::asset('js/admin/login.js'); }}"></script>
  <script src="{{ URL::asset('js/manager/addEmp.js'); }}"></script>
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
</body>

</html>