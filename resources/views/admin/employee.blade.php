@extends('admin.layout.layout')

@section('dashboard-title','Clients')

@section('content')

<div class="under-burger-btn-cont mr-4 ml-4">
    <div class="container-fluid row m-0 p-0 align-items-center">
        <div class="col-6 col-md-8">
            <p class="m-0 admins-main-page">Employees</p>
        </div>
        <div class="col-6 col-md-4 text-right">
            <a name="" id="" class="btn add-btn" href="{{route('employees.create')}}" role="button">Add an employee</a>
        </div>
    </div>
</div>

<!-- TABLE  -->

@if ($employees->count() == 0 )

<div class="col-12 text-center mt-5">
    <p class="m-0 admins-main-page">Sorry no Employees available , click on the button to add an Employee</p>
</div>

@else



<div class="table-responsive mb-5">

    <table class="table data-table border">
        <thead>
            <tr>
                <th class="border">Name</th>
                <th class="border">Profile Image</th>
                <th class="border">E-mail</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $item)

            <tr>
                <td scope="row" class="border">{{$item->name}}</td>
                <td scope="row" class="border text-center"><img src="{{URL::asset($item->profile_img);}}" width="150px">
                </td>
                <td class="border">{{$item->email}}</td>
                <td class="border">
                    {{-- <a name="" id="" class="btn" href="#" role="button">Edit</a> --}}
                    <a class="btn" href="{{route('employees.destroy',['id'=>$item->id])}}" role="button">Remove</a>
                    {{-- <a name="" id="" class="btn" href="#" role="button">Change Password</a> --}}

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endif

{!! $employees->links() !!}
<!-- ------------------------------------------ -->

@endsection