@extends('layouts.app')
@section('content')
<h1 class="text-center mt-5">Mobile Specefication</h1>
<div class="card card-dafault">
    <div class="card-header">
        specification
        <a href="{{url('/create_content')}}" class="btn btn-primary btn-sm float-right float-right"> Create Content </a>
    </div>



    <div class="card-body">


        <table class="table">

            <thead>
                <tr>
                    <th scope="col">Phone Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>

                </tr>
            </thead>
            @foreach($blogs as $blog)

            <tr>
                <td>{{$blog->phone}}</td>
                <td>{!!$blog->description!!}</td>
                <td>{{$blog->price}}</td>
                <td><a href="blogs/{{$blog->id}}" class="btn btn-primary btn-sm float-right float-right"> view</a></td>

            </tr>

            @endforeach

        </table>





    </div>

</div>

@endsection