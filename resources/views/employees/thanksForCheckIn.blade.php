<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="{{ URL::asset('css/employees/style.css'); }}">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <title>Gms | Barcode Needed Page</title>


</head>

<body>



  <div class="wrapper">


    <div class="barcode-cont">

      <div class="barcode-sm-cont">

        <img class="img-fluid p-3" src="{{URL::asset('images/GMS - LOGO-1@2x.png')}}">
        <div class="emp-img">
          <img class="" src="{{URL::asset(auth('employee')->user()->profile_img);}}">
        </div>
        <h1 class="p-3" style="color: white">Hello {{auth('employee')->user()->name}}</h1>
        
        <h2 class="p-3">You Checked in at {{$checkIn -> created_at->format('H:i')}} </h2>
     


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

  <!-- SCRIPTS -->



  <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


  <script src="{{ URL::asset('js/main/simpleSlider.min.js'); }}"></script>
  <script src="{{ URL::asset('js/main/javascript.js'); }}"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


</body>

</html>