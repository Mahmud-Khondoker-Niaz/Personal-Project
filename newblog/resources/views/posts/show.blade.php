@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
    <a href="{{ URL::previous() }}"class="btn btn-primary hBack"><span>&#8592;</span></a> 
    </div>
    <div class="card-body">
    <h2>{{$post->title}}</h2>
    <img src="{{ asset('storage/'.$post->image) }}" alt="No image Yet to show" title=""
                                width="690px" height="400px"><br><br>
                              

                                {!!$post->content!!}
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
        </div>
        <form action="/like" method="post">
        @csrf
        <input type="hidden" name="likeable" value="{{ get_class($post) }}">
        <input type="hidden" name="id" value="{{ $post->id }}">
        <button type="submit" class="btn btn-primary">
            Like
        </button>
        <h4>Add comment</h4>
                    
                    
                        <div class="form-group">
                            <textarea name="comment" id="comment" cols="5" rows="5" class="form-control"></textarea>
                            
                        </div>
                       
                            <input type="submit" class="btn btn-info" value="Add Comment" />
                 
    </form>
        
    
</div>
@endsection
