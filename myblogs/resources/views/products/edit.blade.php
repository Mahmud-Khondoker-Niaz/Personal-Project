@extends('layouts.app')
@section('content')
<h1 class="text-center mt-5">Update Product</h1>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card card-default">
<div class="card-header">Update Product</div>
<div class="card-body">

<form method="POST" action="update">

    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputName">Product Name:</label>
    <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter your Phonename" aria-describedby="emailHelp" value="{{$product->productname}}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputPrice">Product Price:</label>
    <input type="text" class="form-control" id="productprice" name="productprice" placeholder="Enter Price" aria-describedby="emailHelp" value="{{$product->productprice}}">
   
  </div>
  
  <div class="form-group text-center">
    <button class="btn btn-success" type="submit">Update</div>
   
  </div>
</form>


</div>

</div>


</div>
</div>




@endsection