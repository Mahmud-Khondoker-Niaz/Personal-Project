@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{route('categories.create')}}" class="btn btn-success float-right mb-2">Add Category</a>

</div>
<div class="card card-default">


    <div class="card-header">
        Categories
        <a href="{{ URL::previous() }}"class="btn btn-primary hBack" style="float:right"><span>&#8678;</span></a>
    </div>
    <div class="card-body">
    <table class="table">

<thead>
    <tr>
        <th scope="col">Category Id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Post Count</th>
        <th></th>
        <th></th>
       

    </tr>
</thead>
@foreach($categories as $category)

<tr>
<td>{{$category->id}}</td>
    <td>{{$category->category_name}}</td>
    <td>{{$category->posts->count()}}posts</td>

   <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-info btn-sm">Edit</a></td>
   <td><form action="{{route('categories.destroy',$category->id)}}" method="POST">
   @csrf
   @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
             </td>

</tr>

@endforeach

</table>
    </div>
</div>




   


      





 


@endsection