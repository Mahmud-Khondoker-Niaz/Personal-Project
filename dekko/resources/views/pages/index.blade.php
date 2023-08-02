@extends("app")
@section("content")

@if(getcong('home_properties_layout')=='slider')

@include("_particles.slider")

@else

@include("_particles.mapsearch")

@endif

<style>
  .round-image-container {
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto;
}

.round-image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
  </style>


<h1 class="category-heading" style="text-align:center; font-size:50px;font-family:times new roman;
  color: #646464;
"><b>Categories</b></h1>

<nav class="brandlinks">
@php     $all_cats = \App\Productscategory::orderBy('name', 'asc')->get();
 @endphp
@foreach($all_cats as $result)
<a href="{{route('category.single',['slug'=>$result->slug])}}" class="{{ $result->slug == $result->slug ? 'active' : '' }}" style="font-size:20px;"><b>{{$result->name}}</b></a>

@endforeach
</nav>

<!-- Recent Properties -->

  <section class="Home-page-section boxed-view clearfix">
 
    <div class="inner-container container">
      <div class="row">
  
    </div> <!--container-->
		<!--#propmotions-slider-->
   
		<section id="propmotions-slider" class="boxed-view clearfix" style="border-radius: 10px; background:#f9f9f9;  position: relative;">
  <div class="inner-container container">
    <div class="owl-carousel-ads-slider owl-theme" style="margin-right: 15px; margin-left: -1px;">
      @foreach(\App\Productscategory::orderBy('name', 'asc')->get() as $category)
        @foreach($category->productsbrand->sortBy('name') as $slide)
          <div class="items">
            <a href="{{ route('brand.single', ['id' => $slide->id]) }}">
              <div class="round-image-container">
                <img class="lazyOwl" data-src="{{ URL::asset($slide->image) }}" alt="">
              </div>
            </a>
          </div>
        @endforeach
      @endforeach
    </div>
  </div>
</section>
<!--#propmotions-slider-->


<h4 class="title"  style="font-size: clamp(32px,calc(32px + ((1vw - 3.75px) * 1.8122977346)),60px); text-align:center;
    line-height: clamp(40px,calc(40px + ((1vw - 3.75px) * 2.5889967638)),80px);
    color: #646464;
    margin-bottom: 1.5rem; animation: showup 7s infinite; margin-top:30px;  ">{{getcong('footer_widget1_title')}}</h4>
    
	  



<div class="inner-container container" style="margin-top: 50px;
  margin-bottom: 50px;">
      <div class="top-section clearfix">
	  @php
    $result = \App\Blog::latest()->first();
@endphp
@if($result)
<div class="col-xs-12 col-md-6 col-sm-12">
	  <img src="{{URL::asset($result->feature)}}" class="lazyOwl" alt="{{$result->title}}" style="max-width: 100%; height: auto; border-radius:15px;"> 
</div>
	  <div class="col-xs-12 col-md-6 col-sm-12"">
	  <h1> {{$result->title}}</h1>
	  <p style="color: rgb(170, 170, 170);"> {{$result->created_at->format('j-F-Y')}}</p>



	<p class="details" style="max-width: 75rem;
    margin: 0 auto clamp(30px,calc(30px + ((1vw - 3.75px) * 1.2944983819)),50px);
    font-size: clamp(16px,calc(16px + ((1vw - 3.75px) * .5177993528)),24px);
    color: #2b2b2b; text-align: justify; opacity: 10; font-variant: small-caps;" > {!! Str::limit($result->description,350) !!}
  </p>
  <a href="{{route('blog.single',['id'=> $result->id]) }}" class="btn more-link" >Read More</a>

</div>
@endif
       
        
      </div>

      
    </div>
	

        </div>
      </div>

<section>
<section id="propmotions-slider" class="boxed-view clearfix" style="background:#fafafa;  position: relative;">

<div class="inner-container container">
		<div class="owl-carousel-ads-slider owl-theme">

              @foreach(\App\Blog::orderBy('id','ASC')->get() as $result)
            <div class="items" >
	          <a href="{{route('blog.single',['id'=> $result->id]) }}" >
			  <p style="color: rgb(170, 170, 170);"> {{$result->created_at->format('j-F-Y')}}</p>

	            <img src="{{URL::asset($result->feature)}}" class="lazyOwl" alt="{{$result->title}}"  style=" height: 250px;
  width: 350px;" >

	         
	          </a>
			  <a href="{{route('blog.single',['id'=> $result->id]) }}" class="title" style="font-size:14px; color:black;">{{ Str::limit($result->title,80) }}</a>

	         
          </div>

          @endforeach
</div>
</div>
       
            
    
        
    

</section>
</section>





    
  </section>
  <!-- End of Recent Properties -->



  

@endsection


