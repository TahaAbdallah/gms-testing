@extends('admin.layout.layout')

@section('dashboard-title','Add Promo')

@section('content')


        <div class="under-burger-btn-cont mr-4 ml-4">
            <div class="container-fluid row m-0 p-0 align-items-center">
                <div class="col-6 col-md-8">
                    <p class="m-0 admins-main-page">Add a Promo</p>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <a name="" id="" class="btn add-btn" href="{{route('promos')}}" role="button">Show All Promos</a>
                </div>
            </div>
        </div>

        <!-- TABLE  -->

        <form action="{{route('promos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="table-responsive">

                <table class="table data-table border">
                    <thead>
                        <tr>
                            <th class="border">Promo Title</th>
                            <th class="border">Upload image</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td scope="row" class="border"><input type="text" name="title" placeholder="Promo title"></td>
                            <td class="border"><input type="file" name="img" placeholder="Upload img"></td>
                        </tr>

                    </tbody>
                </table>

                <div class="col-12 text-center mt-5">
                    <button class="btn add-btn" type="submit">Add Promo</button>
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