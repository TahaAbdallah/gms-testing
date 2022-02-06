@extends('admin.layout.layout')

@section('dashboard-title','Marketing Services')

@section('content')

        <div class="under-burger-btn-cont mr-4 ml-4">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-8">
                    <p class="m-0 admins-main-page">SERVICES | Marketing Services</p>
                </div>
                <div class="col-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('marketingService.create')}}" role="button">Add a Service</a>
                </div>
            </div>
        </div>

        @if (Session::has('message'))
        <div class="col-12 text-center mt-5">
            <p class="username-main-page">{{ Session::get('message') }}</p>
        </div>
     @endif

        <!-- TABLE  -->

        @foreach ($categories as $item)


        <div class="container-fluid row our-services-table">

            <div class="col-md-10">

                <div class="col-12">
                    <h3>{{$item->category_name}}</h3>
                </div>
                <div class="col-12 row our-services-img-row">
                    <div class="col-6 col-md-3"><img src="{{URL::asset($item->img1)}}" class="img-fluid"></div>
                    <div class="col-6 col-md-3"><img src="{{URL::asset($item->img2)}}" class="img-fluid"></div>
                    <div class="col-6 col-md-3"><img src="{{URL::asset($item->img3)}}" class="img-fluid"></div>
                    <div class="col-6 col-md-3"><img src="{{URL::asset($item->img4)}}" class="img-fluid"></div>
                </div>
                <div class="col-12 row our-services-parag-row">
                    <div>
                        <p>{{$item->category_description}}</p>
                    </div>
                </div>

            </div>

            <div class="col-md-2">

                <div class="col-12">
                    <h3>ACTION</h3>
                </div>
                <div class="col-12 row our-services-action-col justify-content-center">
                    <a name="" id="" class="btn add-btn m-2 p-2" href="{{route('marketingService.destroy',['id'=>$item->id])}}" role="button">Delete Service</a>
                    <a name="" id="" class="btn add-btn m-2 p-2" href="{{route('marketingServices.edit',['id'=>$item->id])}}" role="button">Edit Service</a>
                </div>

            </div>


        </div> <!-- Container fluid close -->


        @endforeach

@endsection