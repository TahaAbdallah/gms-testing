@extends('admin.layout.layout')

@section('dashboard-title','Edit Promos')

@section('content')


        <div class="under-burger-btn-cont mr-4 ml-4">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-6 col-md-8">
                    <p class="m-0 admins-main-page">Promos - Edit Promos</p>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('promos')}}" role="button">Show All Promos</a>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------- -->



        <form action="{{route('promos.update',['id'=>$promos->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            
        <!-- TABLE  -->

        <div class="table-responsive mr-4 ml-4">
            <table class="table data-table border">
                <thead>
                    <tr>
                        <th class="border">Old Image</th>
                        <th class="border">Title</th>
                        <th class="border">Change Image</th>
                    </tr>
                </thead>
                <tbody>
                    
          
                        
                    <tr>
                        <td scope="row" class="border text-center"><img src="{{URL::asset($promos->img);}}" width="150px"></td>
                        <td scope="row" class="border"><input type="text" name="title" value="{{$promos->title}}"></td>
                        <td class="border"><input type="file" name="img"></td>
                    </tr>
                    
                
                </tbody>
            </table>
        </div>

        <div class="col-12 text-center mt-5">
            <button class="btn add-btn" type="submit">Save Promo</button>
        </div>

        </form>


@endsection