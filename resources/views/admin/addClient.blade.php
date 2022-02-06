@extends('admin.layout.layout')

@section('dashboard-title','Add Clients')

@section('content')


        <div class="under-burger-btn-cont">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-6 col-md-8">
                    <p class="m-0 admins-main-page">Clients</p>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('clients')}}" role="button">Show All Clients</a>
                </div>
            </div>
        </div>

        <!-- TABLE  -->

        <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="table-responsive">

            <table class="table data-table border">
                <thead>
                    <tr>
                        <th class="border">Name</th>
                        <th class="border">E-mail</th>
                        <th class="border">Phone</th>
                        <th class="border">Upload Logo</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td scope="row" class="border"><input type="text" name="name" placeholder="Client Name"></td>
                        <td scope="row" class="border"><input type="text" name="email" placeholder="Client Email"></td>
                        <td class="border"><input type="number" name="phone_number" placeholder="Client Phone Number"></td>
                        <td class="border"><input type="file" name="img" placeholder="Upload Logo"></td>
                    </tr>
                
                </tbody>
            </table>

            <div class="col-12 text-center mt-5">
                <button class="btn add-btn" type="submit">Add Client</button>
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