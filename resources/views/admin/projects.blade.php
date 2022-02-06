@extends('admin.layout.layout')

@section('dashboard-title','Projects')

@section('content')


  
        <div class="under-burger-btn-cont mr-4 ml-4">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-6 col-md-8">
                    <p class="m-0 admins-main-page">Our Projects</p>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('projects.create')}}" role="button">Add a Project</a>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------- -->




        <!-- TABLE  -->

        <div class="table-responsive mb-5">
            <table class="table data-table border">
                <thead>
                    <tr>
                        <th class="border">Image</th>
                        <th class="border">Name</th>
                        <th class="border">Description</th>
                        <th class="border">Client Name</th>
                        <th class="border">Category</th>
                        <th class="border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($projects as $item)
                        
                    <tr>
                        <td scope="row" class="border text-center"><img src="{{URL::asset($item->img);}}" width="150px"></td>
                        <td scope="row" class="border">{{$item->project_name}}</td>
                        <td scope="row" class="border">{{$item->project_description}}</td>
                        <td scope="row" class="border">{{$item->client->name}}</td>
                        <td scope="row" class="border">{{$item->service->service_name}}</td>
                        <td class="border">
                            {{-- <a name="" id="" class="btn" href="#" role="button">Edit</a> --}}
                            <a name="" id="" class="btn" href="{{route('projects.destroy',['id'=>$item->id])}}" role="button">Remove</a>
                            {{-- <a name="" id="" class="btn" href="#" role="button">Change Password</a> --}}

                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
        </div>

        {!! $projects->links() !!}


@endsection