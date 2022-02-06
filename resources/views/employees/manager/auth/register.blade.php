<!doctype html>
<html lang="en">
  <head>
    <title>Gms - Manager Login | Gulf Media Solution</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::asset('css/employees/login.css');}}">

</head>
  <body>

   
    <div class="wrapper">
        <div class="container">
          
            <div><img class="img-fluid" src="images/ruwwadlubnan2.jpeg"></div>

            <h1 class="mt-2">Welcome Our Manager</h1>
            
            <form class="form" method="POST" action="{{ route('managerRegistration') }}" enctype="multipart/form-data">
              @csrf

              <input type="text" placeholder="Name" class="mb-3" name="name">
                <input type="email" placeholder="Email" class="mb-3" name="email">
               
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

                <input type="password" placeholder="Password" class="mb-5"  name="password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="profile_img">Upload Profile Image</label>
            <input type="file" name="profile_img" placeholder="Upload Image">

                <button type="submit" id="login-button">register</button>
            </form>

          <div class="row justify-content-center align-items-center">
            <h4 class="p-1">Powered by</h4>
            <a href="http://gulfmediasolution.com" target="_blank" style="z-index: 999"><img class="img-fluid p-1" src="images/GMS - LOGO@2x.png" width="60px"></a>
          </div>

          {{-- ####### LOGOUT BUTTON  --}}

          {{-- <li class="nav-item menu-items">
            <a class="nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Logout</span>
          </a>    
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          </li>  --}}



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
    <script src="{{ URL::asset('js/admin/login.js'); }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>