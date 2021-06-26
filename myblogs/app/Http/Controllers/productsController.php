<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','asc')->get();
   
        return view('products.productlist') ->with('products',$products);
    }
    public function addproduct()
    {
        return view('products.addproduct');
        
    }
    public function store()
    {


        $this->validate(request(),[

            'productname'=>'required',
            'productprice'=>'required'
        
        
        
        
        ]);


        $data = request()->all();
        
        $product = new Product;
        $product->productname = $data['productname'];
        $product->productprice = $data['productprice'];
        $product->save();
        $product->completed=false;
        session()->flash('success', 'Product added successfully');
        return redirect('addproduct');
      

    }
   public function edit($productId)
   {

     $product=Product::find($productId);

        return view('products.edit')->with('product',$product);
   }
   public function update($productId)
   {
      $data = request()->all();
      $product=Product::find($productId);
      $product->productname=$data['productname'];
      $product->productprice=$data['productprice'];
      $product->save();
      $product->completed=false;
      session()->flash('success', 'Product Updated successfully');
      return redirect('/productlist');
      

   }
   public function destroy($productId)
   {
       $product=Product::find($productId);
       $product->delete();
       session()->flash('success', 'Product deleted successfully');
       return redirect('/productlist');
   }
    
}
