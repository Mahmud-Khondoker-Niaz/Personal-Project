@extends('layouts.app')
@section('content')
<h1 class="text-center mt-5">Create Content</h1>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card card-default">
<div class="card-header">Create new content</div>
<div class="card-body">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="Store">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputName">PhoneName:</label>
    <input type="text" class="form-control" id="name" name="phone" placeholder="Enter your Phonename" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputContent">Content</label>
    <!-- <textarea class="form-control" id="content" name="description" placeholder="Enter your content"></textarea> -->
   
  <input id="content" type="hidden" name="description">
  <trix-editor input="content" placeholder="Enter your content"></trix-editor>

  </div>
  <div class="form-group">
    <label for="exampleInputPrice">Price:</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" aria-describedby="emailHelp">
   
  </div>
  
  <div class="form-group text-center">
    <button class="btn btn-success" type="submit">Submit</div>
   
  </div>
</form>


</div>

</div>


</div>
</div>




@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css">
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"></script>
@endsection