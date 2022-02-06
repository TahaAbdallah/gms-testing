@extends('admin.layout.layout')

@section('dashboard-title','Add Clients')

@section('content')


<div class="under-burger-btn-cont">
    <div class="container-fluid row m-0 p-0 align-items-center">
        <div class="col-6 col-md-8">
            <p class="m-0 admins-main-page">Employees</p>
        </div>
        <div class="col-6 col-md-4 text-right">
            <a name="" id="" class="btn add-btn" href="{{route('employees')}}" role="button">Show All Employees</a>
        </div>
    </div>
</div>

<!-- TABLE  -->

<form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="table-responsive">

        <table class="table data-table border">
            <thead>
                <tr>
                    <th class="border">Name</th>
                    <th class="border">E-mail</th>
                    <th class="border">Password</th>
                    <th class="border">Upload Profile Image</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td scope="row" class="border"><input type="text" name="name" placeholder="Employee Name"></td>
                    <td scope="row" class="border"><input type="text" name="email" placeholder="Employee Email"></td>
                    <td class="border"><input type="password" name="password" placeholder="Employee password"></td>
                    <td class="border"><input type="file" name="profile_img" placeholder="Upload Profile Image"></td>
                </tr>

            </tbody>
        </table>

        <div class="col-12 text-center mt-5">
            <button class="btn add-btn" type="submit">Add Employee</button>
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



<!-- ------------------------------------------ -->



@endsection