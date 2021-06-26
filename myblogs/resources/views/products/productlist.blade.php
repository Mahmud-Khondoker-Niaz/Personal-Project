@extends('layouts.app')
@section('content')

<h1 class="text-center mt-5">Product List</h1>
<div class="card card-dafault">
    <div class="card-header">
        Details
        <a href="{{url('/addproduct')}}" class="btn btn-primary btn-sm float-right float-right"> Add Product </a>
    </div>



    <div class="card-body">


        <table class="table">

            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>


                </tr>
            </thead>
            @foreach($products as $product)

            <tr>
                <td>{{$product->productname}}</td>
                <td>{{$product->productprice}}</td>
                <td><a href="products/{{$product->id}}/edit" class="btn btn-info">Edit</a></td>
                <td><a href="products/{{$product->id}}/delete" class="btn btn-danger">Delete</a></td>


            </tr>

            @endforeach

        </table>





    </div>

</div>

@endsection