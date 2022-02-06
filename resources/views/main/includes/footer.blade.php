<footer>

    <div class="container-fluid row m-0 pt-5 pb-5">

        <div class="col-md-4 mb-5 m-0 text-center"><a href="{{route('index')}}"><img class="img-fluid"
                    src="{{ asset('images/GMS - LOGO-1@2x.png') }}"></a></div>

        <div class="col-md-8 row m-0">

            <div class="col-6 col-md-3">
                <div class="mx-auto">

                    <h5 class="mb-3"><a href="{{route('mediaPage')}}">Media Services</a></h5>
                    @foreach ($mediaServices as $item)
                    <div class="mb-2"><a href="{{route('service.show',['id'=>$item->id])}}">{{$item->category_name}}</a></div>
                    @endforeach
                </div>
            </div>
            <div class="col-6 col-md-3 mb-5 m-md-0">

                <h5 class="mb-3"><a href="{{route('developmentPage')}}">Development Services</a></h5>
                @foreach ($developmentServices as $item)
                <div class="mb-2"><a href="{{route('service.show',['id'=>$item->id])}}">{{$item->category_name}}</a></div>
                @endforeach
            </div>
            <div class="col-6 col-md-3 mb-5 m-md-0">

                <h5 class="mb-3"><a href="{{route('designPage')}}">Design Services</a></h5>
                @foreach ($designServices as $item)
                <div class="mb-2"><a href="{{route('service.show',['id'=>$item->id])}}">{{$item->category_name}}</a></div>
                @endforeach
            </div>
            <div class="col-6 col-md-3 mb-5 m-md-0">

                <h5 class="mb-3"><a href="{{route('marketingPage')}}">Marketing Services</a></h5>
                @foreach ($marketingServices as $item)
                <div class="mb-2"><a href="{{route('service.show',['id'=>$item->id])}}">{{$item->category_name}}</a></div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="container-fluid pt-2 pb-2 row m-0 footer-end align-items-center">

        <div class="col-6 text-center">
            <a class="mr-md-3" href="https://www.instagram.com/gulfmediasolutions/" target="_blank"><img
                    src="{{URL::asset('images/instagram.png')}}" width="40px"></a>
            <a href="https://www.facebook.com/gulfmediasolutions" target="_blank"><img src="{{URL::asset('images/facebook.png')}}"
                    width="40px"></a>
        </div>

        <div class="col-6">
            <p>Follow us on social media platforms...</p>
        </div>

    </div>

</footer>