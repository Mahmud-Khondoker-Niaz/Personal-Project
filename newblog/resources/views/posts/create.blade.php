@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        {{isset($post)?'Edit Post': 'Create Post'}} <a href="{{ URL::previous() }}"class="btn btn-primary hBack" style="float:right"><span>&#8592;</span></a>
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
        <form action="{{isset($post)? route('posts.update',$post->id):route('posts.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            @if(isset($post))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id='title'
                    value="{{isset($post)? $post->title:''}}">
            </div>
          
            <div class="form-group">
                <label for="content">Content</label>
                
                <input id="content" type="hidden" name="content">
                <trix-editor input="content" class="trix-content"></trix-editor>



            </div>
            @if(isset($post))
            <div class="form-group">

                <img src="{{asset('storage/'.$post->image)}}" width="120px" height="60px" alt="">
            </div>

            @endif
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" 
                    
                    
                    @if(isset($post)) 
                    
                    @if($category->id==$post->category_id)
                        selected
                        @endif
                        @endif
                        >
                        {{$category->category_name}}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="from-group">
                <button class="btn btn-success"> {{isset($post)?'Update Post': 'Create Post'}}</button>
            </div>

        </form>

    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"></script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css">
@endsection