@extends('layouts.app')
@section('content')



<h1 class="text-center mt-5">Mobile Specefication</h1>
<div class="card card-dafault">
<div class="card-header">
specification
<a href="{{ URL::previous() }}
" class="btn btn-primary btn-sm float-right float-right"> Back </a>
</div>



<div class="card-body">


<table class="table">

<thead >
    <tr>
      <th scope="col">Phone Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
     
    </tr>
  </thead>
  

    <tr>
    <td>{{$blog->phone}}</td>
    <td>{{$blog->description}}</td>
    <td>{{$blog->price}}</td>
  </tr>
    
     
     
 </table>
    
 
  <a href="{{$blog->id}}/edit" class="btn btn-info">Edit</a>
   <a href="{{$blog->id}}/delete" class="btn btn-danger">Remove</a>

</div>

    </div>
  
@endsection

