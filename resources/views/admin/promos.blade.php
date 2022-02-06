@extends('admin.layout.layout')

@section('dashboard-title','Promos')

@section('content')

        <div class="under-burger-btn-cont mr-4 ml-4">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-6 col-md-8">
                    <p class="m-0 admins-main-page">Promos</p>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('promos.create')}}" role="button">Add a Promo</a>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------- -->

        @if (Session::has('message'))
        <div class="col-12 text-center mt-5">
            <p class="username-main-page">{{ Session::get('message') }}</p>
        </div>
     @endif
       

        <!-- TABLE  -->

        <div class="table-responsive">
            <table class="table data-table border">
                <thead>
                    <tr>
                        <th class="border">Image</th>
                        <th class="border">Title</th>
                        <th class="border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($promos as $item)
                        
                    <tr>
                        <td scope="row" class="border text-center"><img src="{{URL::asset($item->img);}}" width="150px"></td>
                        <td scope="row" class="border">{{$item->title}}</td>
                        <td class="border">
                            <a href="{{route('promos.edit',['id'=>$item->id])}}">Edit</a>
                            {{-- <a name="" id="" class="btn" href="{{route('projects.destroy',['id'=>$item->id])}}" role="button">Remove</a> --}}
                            {{-- <a name="" id="" class="btn" href="#" role="button">Change Password</a> --}}

                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
        </div>

@endsection