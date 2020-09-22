<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
  

    public function create(){
       
        $categories = Category::all();
        return view('product.create' , compact('categories'));
    }

    public function store(Request $req){
        
        $req->validate([
            'product_name'     =>  'required',
            'qty'            =>   'required' ,
            'price'            =>   'required' ,
            'category_id'            =>   'required' 
           
        ]);

        $product = new Product;
        
        $product->product_name = $req->product_name;
        $product->SKU_id = uniqid();
        $product->qty = $req->qty;
        $product->price = $req->price;
        $product->category_id = $req->category_id;

        $product->save();
         
        return redirect()->back()->with('success_msg', 'Product Added Successfully');
    }
}
