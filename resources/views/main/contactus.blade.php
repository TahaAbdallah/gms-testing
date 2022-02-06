@extends('main.includes.layout')

@section('title','Contact Us')

@section('content')

<!-- ------------------------------------ -->

<div class="text-center">
    <h2 class="mt-5 mb-2 get-in-touch">GET IN TOUCH!</h2>
    <p>Lorem Ipsum is simply dummy text.
    </p>
</div>

<div class="container mx-auto row m-0 mt-5 mb-5">

    <div class="col-md-7 contact-left text-center text-md-left mx-auto pb-5 pl-lg-5">
        <h3 class="mb-5 mt-5">DROP A MESSAGE</h3>
        <h4 class="mb-2">Full name :</h4>
        <input type="text" class="text-line mb-4">
        <h4 class="mb-2">Phone :</h4>
        <input type="text" class="text-line mb-4">
        <h4 class="mb-2">Subject :</h4>
        <input type="text" class="text-line mb-4">
        <h4 class="mb-2">Message :</h4>
        <input type="text" class="text-line mb-5">
        <div>
            <a href="" class="message-btn">SEND MESSAGE</a>
        </div>
    </div>
    <div class="col-md-5 contact-right text-center text-md-left mx-auto pb-5 pl-lg-5">
        <h3 class="mb-5 mt-5">CONTACT INFORMATION</h3>
        <h4 class="mb-3 contact-title">Our Branches</h4>
        <h4 class="mb-4 contact-info">Lebanon, Tripoli <br> Saudi Arabia, Jeddah</h4>
        <h4 class="mb-3 contact-title">Phone</h4>
        <h4 class="mb-4 contact-info">00961 71 930203 <br> 00961 70 306768</h4>
        <h4 class="mb-3 contact-title">Email</h4>
        <h4 class="mb-4 contact-info">Lorem Ipsum</h4>
    </div>

</div>



@endsection