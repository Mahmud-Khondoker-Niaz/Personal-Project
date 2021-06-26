@extends("app")

@section('head_title', trans('words.all_properties').' | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")
    <!--Breadcrumb Section-->
    <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')) {{ URL::asset('upload/'.getcong('title_bg')) }} @else {{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }} @endif">
        <div class="inner-container container">
          
        </div>
    </section>
    <!--Breadcrumb Section-->
    
  <section class="main-container container">
  	<aside class="col-sm-4">
      <div class="sidebar-box sidebar-blog-cat">
		<h4 class="cat-head">All Categories</h4>
		<ul class="blog-sidebar-menu">
		    {{--@php $all_cats= \App\Blogcategory::all(); @endphp--}}
		    @foreach($categories as $result)
		    <li class="">
		        <a href="{{route('blog-category.single',['slug'=>$result->slug])}}">{{$result->name}}</a>
		    </li>
		     @endforeach

		</ul>
		</div>
    </aside>
    <div class="col-sm-8">
        <div class="content-box">
  		 <div class="single-blog-posts-body">
            <div class="blog-thumbs">
                <img src="{{asset($blog->feature)}}" alt="{{$blog->title}}" class="img-thumbnail">
            </div>

            <div class="blog-contents">
                <h2 class="blog-title">{{$blog->title}}</h2>
                <ul class="post-info-header list-inline">
                  <li>Post by: <b>Public</b></li>
                  <li>on:  <b>{{$blog->created_at->format('d-m-y')}}</b></li>
                </ul>
                <span class="blog-description">
                    {!! $blog->description!!}
                </span>
            </div>
            
            <div class="related-post mt-3">
                <div class="heading">
                    <h4 class="heading-title">Related Jobs</h4>
                </div>
                <div class="row">
                    @foreach($related->take(4) as $row)
                    <div class="col-md-3">
                        <div class="card relatedpost">
                         <a href="{{route('blog.single',['slug'=> $row->slug]) }}">        
                          <img src="{{asset($row->feature)}}" class="card-img-top img-thumbnail" alt="{{$row->title}}">
                          <div class="card-body">
                            <h4 class="card-title" style="color: #000;font-weight: bold;">{{$row->title}}</h4>
                          </div>
                          </a>
                        </div>
                    </div>
                    @endforeach
                </div>
             </div> <!-- related-post-->
             
              
        </div>
   
    </div>
    </div>
  
  </section>

 
 
@endsection
