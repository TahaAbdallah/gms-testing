@extends('admin.layout.layout')

@section('dashboard-title','Admins')

@section('content')


<div class="under-burger-btn-cont mr-4 ml-4">
    <div class="container-fluid row m-0 p-0 align-items-center">
        <div class="col-6 col-md-8">
            <p class="m-0 admins-main-page">Managers</p>
        </div>
        <div class="col-6 col-md-4 text-right">
            <a name="" id="" class="btn add-btn" href="{{route('managers.create')}}" role="button">Add Managers</a>
        </div>
    </div>
</div>

<!-- ------------------------------------------- -->


<!-- TABLE  -->

<div class="table-responsive">
    <table class="table data-table border">
        <thead>
            <tr>
                <th class="border">Name</th>
                <th class="border">E-mail</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($managers as $item)
            <tr>
                <td scope="row" class="border">{{$item -> name}}</td>
                <td class="border">{{$item -> email}}</td>
                <td class="border">
                    {{-- <a name="" id="" class="btn" href="#" role="button">Edit</a> --}}
                    <a name="" id="" class="btn" href="{{route('managers.destroy',['id'=>$item->id])}}"
                        role="button">Remove</a>
                    {{-- <a name="" id="" class="btn" href="#" role="button">Change Password</a> --}}

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection