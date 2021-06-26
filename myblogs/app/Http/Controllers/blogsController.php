<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;

class blogsController extends Controller
{
    //Show all the data from database
    //create a varaible to catch table field
    public function index(){
       
        $blogs = Blog::orderBy('id','desc')->get();
        //dd($blogs);

        return view('layouts.blogs')->with('blogs',$blogs);
    }
    //Show a single data to catch id and then show a new blade file
    public function show($blogId){
        $blog=Blog::find($blogId);

        return view('layouts.show')->with('blog',$blog);
    }
    // create a new table to insert tha data 
    public function create_content(){

     
        return view('layouts.create_content');
    }
    //record inserted data to database and show again the show blade file
   
   
    public function store()
    
    {

    $this->validate(request(),[

    'phone'=>'required',
    'description'=>'required',
    'price'=>'required'



]);
    //dd(request()->all());

       $data = request()->all();
       $blog = new Blog();
       $blog->phone=$data['phone'];
       $blog->description=$data['description'];
       $blog->price=$data['price'];
       $blog->save();
       $blog->completed=false;

       session()->flash('success', 'Blog content create successfull');


       return redirect('create_content');


        // return view('layouts.show');
    }


    public function edit($blogId)
    {
       
        
        $blog=Blog::find($blogId);

        return view('layouts.edit')->with('blog',$blog);
    }
    public function update($blogId){

        $this->validate(request(),[
    
        'phone'=>'required',
        'description'=>'required',
        'price'=>'required'
    
    
    
    ]);
        // dd(request()->all());
    
         $data = request()->all();
         $blog=Blog::find($blogId);
         $blog->phone=$data['phone'];
         $blog->description=$data['description'];
         $blog->price=$data['price'];
         $blog->save();
         $blog->completed=false;
            return redirect('blogs');
    
            // return view('layouts.show');
        }
        public function destroy($blogId)
        {

            $blog=Blog::find($blogId);
            $blog->delete();
            return redirect('blogs');


        }
}
