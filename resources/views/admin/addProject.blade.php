@extends('admin.layout.layout')

@section('dashboard-title','Add Project')

@section('content')


        <div class="under-burger-btn-cont mr-4 ml-4">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-6 col-md-8">
                    <p class="m-0 admins-main-page">Add a Project</p>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('projects')}}" role="button">Show All Projects</a>
                </div>
            </div>
        </div>

        <!-- TABLE  -->

        <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="table-responsive">

                <table class="table data-table border">
                    <thead>
                        <tr>
                            <th class="border">Project Name</th>
                            <th class="border">Description</th>
                            <th class="border">Client Name</th>
                            <th class="border">Category</th>
                            <th class="border">Upload image</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td scope="row" class="border"><input type="text" name="project_name" placeholder="Project Name"></td>
                            <td scope="row" class="border"><textarea name="project_description" id="" cols="30" rows="10" placeholder="Project Description"></textarea></td>
                            <td scope="row" class="border">
                                <label for="">Client Name</label><br>
                                <select name="client_id">
                                    @foreach ($clients as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>          
                            </td>
                            <td scope="row" class="border">
                                <label for="">Category</label><br>
                                <select name="service_id">
                                    @foreach ($services as $item)
                                    <option value="{{$item->id}}">{{$item->service_name}}</option>
                                  @endforeach
                                </select>          
                            </td>
                            <td class="border"><input type="file" name="img" placeholder="Upload img"></td>
                        </tr>

                    </tbody>
                </table>

                <div class="col-12 text-center mt-5">
                    <button class="btn add-btn" type="submit">Add Project</button>
                </div>

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
            </div>
        </form>


@endsection