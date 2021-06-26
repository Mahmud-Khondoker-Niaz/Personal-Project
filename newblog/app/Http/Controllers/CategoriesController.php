<?php

namespace App\Http\Controllers;
use\App\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Category::all());
        // return view('categories.index')->with('categories',Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name'=>'required|unique:categories'

        ]);
        Category::create([
        'category_name'=>$request->category_name
        ]);
        session()->flash('success', 'Category created successfull');
           $test= Category::all();

        // return redirect(route('categories.index'));
        return response(['Data'=>$test]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function test(Request $request)
    {
        $this->validate($request,[
            'category_name'=>'required|unique:categories'

        ]);
        Category::create([
        'category_name'=>$request->category_name
        ]);
        session()->flash('success', 'Category created successfull');
           $test= Category::all();

        // return redirect(route('categories.index'));
        return response(['Data'=>$test]);
    }


    public function show($id)
    {
        $category= Category::findOrFail($id);
        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.create')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category )
    {
        $this->validate($request,[
            'category_name'=>'required|unique:categories'

        ]);
        $data = $request->only(['category_name']);
        $category->update($data);
        session()->flash('success', 'Category updated successfull');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', 'Category Deleted successfull');
        return redirect()->route('categories.index');


    }
}
