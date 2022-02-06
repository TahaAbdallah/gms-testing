<!doctype html>
<html lang="en">

<head>
  <title>Gms - Manager Login | Gulf Media Solution</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="{{URL::asset('css/managers/login.css');}}">

</head>

<body>

  <div class="wrapper">
    <div class="container mt-5">

      <div><img class="img-fluid mb-3" src="{{URL::asset('images/GMS - LOGO-1@2x.png')}}"></div>

      <h1 class="mt-2">Welcome Our Manager</h1>

      <form class="form mb-3" method="POST" action="{{ route('processSignin') }}">
        @csrf
        <input type="email" placeholder="Email" class="mb-3" name="email">
        <input type="password" placeholder="Password" class="mb-3" name="password">
        <button type="submit" id="login-button">Login</button>
      </form>

      @if(session()->has('success'))
      <div class="alert alert-danger text-center">
        {{ session()->get('success') }}
      </div>
      @endif

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