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
                <form method="POST" action="store">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName">Product Name:</label>
                        <input type="text" class="form-control" id="productname" name="productname"
                            placeholder="Enter your Productname" aria-describedby="emailHelp">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputPrice">Product Price:</label>
                        <input type="text" class="form-control" id="productprice" name="productprice"
                            placeholder="Enter Product Price" aria-describedby="emailHelp">

                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Create
                    </div>

            </div>
            </form>


        </div>

    </div>


</div>
</div>




@endsection