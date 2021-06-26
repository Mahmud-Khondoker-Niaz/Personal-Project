@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{route('posts.create')}}" class="btn btn-success float-right mb-2">Add Post </a>
    
</div>
<div class="card card-default">
    <div class="card-header">
        Posts<a href="{{ URL::previous() }}"class="btn btn-primary hBack" style="float:right"><span>&#8592;</span></a>
         
    </div>
    <div class="card-body">
      
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                  
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>

                           
                          <img src="{{ asset('storage/'.$post->image) }}" alt="No image Yet to show" title=""
                                width="100px" height="100px"> 

                              

                        </td>
                        <td><a href="{{route('posts.show' , $post->id)}}">{{$post->title}}</a></td>
                        <td>{{$post->category->category_name}}</td>
                      
                        <td><form action="{{route('posts.destroy',$post->id)}}" method="POST">
   @csrf
   @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
             </td>
                        

                    </tr>

                    @endforeach
                </tbody>

            </table>




        </div>

    
</div>
@endsection