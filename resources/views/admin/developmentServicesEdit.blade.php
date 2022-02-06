@extends('admin.layout.layout')

@section('dashboard-title','Edit Development Service')

@section('content')


        <div class="under-burger-btn-cont mr-4 ml-4">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-6 col-md-8">
                    <p class="m-0 admins-main-page">Services - Edit Service</p>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('developmentServices')}}" role="button">Show All Development Services</a>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------- -->



        <form action="{{route('developmentServices.update',['id'=>$categories->id])}}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- TABLE  -->

            <div class="table-responsive mr-4 ml-4">
                <table class="table data-table border">
                    <thead>
                        <tr>
                            <th class="border">Service Title</th>
                            <th class="border">Service description</th>
                            <th class="border">Change Image 1</th>
                            <th class="border">Change Image 2</th>
                            <th class="border">Change Image 3</th>
                            <th class="border">Change Image 4</th>
                        </tr>
                    </thead>
                    <tbody>



                        <tr>
                            <td scope="row" class="border"><input type="text" name="category_name" value="{{$categories->category_name}}"></td>
                            <td scope="row" class="border text-center"><textarea name="category_description" id="" cols="30" rows="5">{!!$categories->category_description!!}</textarea></td>
                            <td class="border"><input type="file" name="img1"></td>
                            <td class="border"><input type="file" name="img2"></td>
                            <td class="border"><input type="file" name="img3"></td>
                            <td class="border"><input type="file" name="img4"></td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <div class="col-12 text-center mt-5">
                <button class="btn add-btn" type="submit">Save Service</button>
            </div>

        </form>

@endsection