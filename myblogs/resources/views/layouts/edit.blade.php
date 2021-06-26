@extends('layouts.app')
@section('content')
<h1 class="text-center mt-5">Update Content</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Update content</div>
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
                <form method="POST" action="update">
                    <!-- <input type="hidden",name="blog_id" value="{{$blog->id}}"> -->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName">PhoneName:</label>
                        <input type="text" class="form-control" id="name" name="phone"
                            placeholder="Enter your Phonename" aria-describedby="emailHelp" value="{{$blog->phone}}">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputContent">Content</label>
                        <textarea class="form-control" id="content" name="description" placeholder="Enter your content">{{$blog->description}}
    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price"
                            aria-describedby="emailHelp" value="{{$blog->price}}">

                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Update
                    </div>

            </div>
            </form>


        </div>

    </div>


</div>
</div>




@endsection