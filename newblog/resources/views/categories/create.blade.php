@extends('layouts.app')
@section('content')
<div class="card card-default">


    <div class="card-header">
    {{isset($category)?'Edit Category': 'Create Category'}} <a href="{{ URL::previous() }}"class="btn btn-primary hBack" style="float:right"><span>&#8592;</span></a>
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
        <form action="{{isset($category)? route('categories.update',$category->id):route('categories.store')}}" method="POST">
        @csrf
            @if(isset($category))
            @method('PUT')
            @endif
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" name="category_name" id="category_name" Value="{{isset($category)? $category->category_name:''}}">
            </div>
            <div class="from-group">
                <button class="btn btn-success">{{isset($category)?'Update Category': 'Add Category'}}</button>
            </div>

        </form>
    </div>
    @endsection