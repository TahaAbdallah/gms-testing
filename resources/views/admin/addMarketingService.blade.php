@extends('admin.layout.layout')

@section('dashboard-title','Add Marketing Service')

@section('content')



        <div class="under-burger-btn-cont mr-4 ml-4">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-6 col-md-8">
                    <p class="m-0 admins-main-page">SERVICES | Marketing Services</p>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('marketingServices')}}" role="button">Show All Marketing Services</a>
                </div>
            </div>
        </div>

        <!-- TABLE  -->

        <form action="{{route('marketingService.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="table-responsive mr-4 ml-4">

            <table class="table data-table border">
                <thead>
                    <tr>
                        <th class="border">Name</th>
                        <th class="border">Description</th>
                        <th class="border">Upload image1</th>
                        <th class="border">Upload image2</th>
                        <th class="border">Upload image3</th>
                        <th class="border">Upload image4</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td scope="row" class="border"><input type="text" name="category_name" placeholder="Service Name"></td>
                        <td scope="row" class="border"><textarea name="category_description" id="" cols="30" rows="10" placeholder="Service Description"></textarea></td>
                        <td class="border"><input type="file" name="img1" placeholder="Upload img1"></td>
                        <td class="border"><input type="file" name="img2" placeholder="Upload img2"></td>
                        <td class="border"><input type="file" name="img3" placeholder="Upload img3"></td>
                        <td class="border"><input type="file" name="img4" placeholder="Upload img4"></td>
                    </tr>
                
                </tbody>
            </table>

            <div class="col-12 text-center mt-5">
                <button class="btn add-btn" type="submit">Add Marketing Service</button>
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