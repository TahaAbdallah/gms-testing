@extends('admin.layout.layout')

@section('dashboard-title','Gulf Media Solutions')

@section('content')



<style>

.wrapper {
    position: absolute;
    width: 100%;
    overflow: hidden;
  }
  .container {
    margin: 0 auto;
    height: 100vh;
    text-align: center;
  }

  .bg-bubbles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }
  .bg-bubbles li {
    position: absolute;
    list-style: none;
    display: block;
    width: 40px;
    height: 40px;
    background-color: rgba(255, 0, 0, 0.891);
    bottom: -160px;
    -webkit-animation: square 25s infinite;
    animation: square 25s infinite;
    transition-timing-function: linear;
  }
  .bg-bubbles li:nth-child(1) {
    left: 10%;
  }
  .bg-bubbles li:nth-child(2) {
    left: 20%;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 500ms;
            animation-delay: 500ms;
    -webkit-animation-duration: 17s;
            animation-duration: 17s;
  }
  .bg-bubbles li:nth-child(3) {
    left: 25%;
    -webkit-animation-delay: 2s;
            animation-delay: 2s;
  }
  .bg-bubbles li:nth-child(4) {
    left: 40%;
    width: 60px;
    height: 60px;
    -webkit-animation-duration: 22s;
            animation-duration: 22s;
    background-color: rgba(255, 255, 255, 0.25);
  }
  .bg-bubbles li:nth-child(5) {
    left: 70%;
  }
  .bg-bubbles li:nth-child(6) {
    left: 80%;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 1500ms;
            animation-delay: 1500ms;
    background-color: rgba(255, 255, 255, 0.2);
  }
  .bg-bubbles li:nth-child(7) {
    left: 32%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 5s;
            animation-delay: 5s;
  }
  .bg-bubbles li:nth-child(8) {
    left: 55%;
    width: 20px;
    height: 20px;
    -webkit-animation-delay: 10s;
            animation-delay: 10s;
    -webkit-animation-duration: 40s;
            animation-duration: 40s;
  }
  .bg-bubbles li:nth-child(9) {
    left: 25%;
    width: 10px;
    height: 10px;
    -webkit-animation-delay: 2s;
            animation-delay: 2s;
    -webkit-animation-duration: 40s;
            animation-duration: 40s;
    background-color: rgba(255, 255, 255, 0.3);
  }
  .bg-bubbles li:nth-child(10) {
    left: 90%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 9s;
            animation-delay: 9s;
  }
  @-webkit-keyframes square {
    0% {
      transform: translateY(0);
    }
    100% {
      transform: translateY(-700px) rotate(600deg);
    }
  }
  @keyframes square {
    0% {
      transform: translateY(0);
    }
    100% {
      transform: translateY(-700px) rotate(600deg);
    }
}

.point1{
    animation: threepoints;
    animation-iteration-count: infinite;
   animation-duration: 3s;
   animation-timing-function: linear;
}

.point2{
    animation: threepoints;
    animation-iteration-count: infinite;
   animation-duration: 3s;
   animation-delay: 1s;
   animation-timing-function: linear;
}
   

.point3{
    animation: threepoints;
    animation-iteration-count: infinite;
   animation-duration: 3s;
   animation-delay: 2s;
   animation-timing-function: linear;
}


    @keyframes threepoints {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }

  }
  

  @media only screen and (max-width:400px){
    .wrapper {
        overflow: auto;
      }



/* --------------------------------------------------------- */

  }

</style>


<div class="wrapper">
    <div class="container">
    
      <img class="img-fluid mt-5" src="images/GMS - LOGO-1@2x.png">
  
        <h1 class="mt-3">Welcome</h1>

        <h2>This is version 1 of our Dashboard</h2>

        <h3>Lots of updates coming soon <span class="point1">.</span><span class="point2">.</span><span class="point3">.</span> </h3>

        
      
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


  




@endsection


