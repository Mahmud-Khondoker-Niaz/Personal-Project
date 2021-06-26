@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mt-2">
<a href="{{route('posts.create')}}" class="btn btn-primary btn-sm float-right float-right"> Create Post </a>

</div>
<div class="card card-default">
<div class="card-header">Posts</div>
<div class="card-body">
<table class="table">
<thead>
<th>Image</th>
<th>Title</th>
</thead>
<tbody>
@foreach($posts as $post)
<tr>
<td>

<!-- <img src="storage/public/{{$post->image}}"  alt="Don't Show"> -->
<img src="{{ asset('storage/'.$post->image) }}" alt="No image Yet to show" title="" width="100px" height="100px">

</td>
<td>{{$post->title}}</td>
<td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a></td>

<td><a href="{{route('posts.destroy', $post->id)}}" class="btn btn-danger">Remove</a></td>

</tr>

@endforeach
</tbody>

</table>




</div>

</div>




@endsection