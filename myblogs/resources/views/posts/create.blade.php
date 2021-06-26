@extends('layouts.app')
@section('content')

<div class="card card-default mt-5 mb-5">
    <div class="card-header">
        {{isset($post)?'Edit Post': 'Create Post'}}

    </div>
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
        <form action="{{isset($post)? route('posts.update',$post->id):route('posts.store')}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @if(isset($post))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title"
                    value="{{isset($post)? $post->title:''}}">

            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="5" rows="10"
                    class="form-control">{{isset($post)? $post->description:''}}</textarea>
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <textarea name="content" id="content" cols="5" rows="10"
                    class="form-control">{{isset($post)? $post->description:''}}</textarea>
            </div>
            <div class="form-group">
                <label for="published_at">Published_at</label>
                <input type="text" class="form-control" name="published_at" id="published_at">
            </div>
            @if(isset($post))
            <div class="form-group">

                <img src="{{asset($post->image)}}" width="120px" height="60px" alt="">
            </div>

            @endif
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <button type="submit" class="btn btn-success"> {{isset($post)?'Update Post': 'Create Post'}}</button>

        </form>


    </div>
</div>



@endsection