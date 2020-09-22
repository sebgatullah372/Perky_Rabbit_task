<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   

    public function create(){
          return view('category.create');
    }

    public function store(Request $req){
        $req->validate([
            'category_name'     =>  'required',
            'status'            =>   'required' 
           
        ]);

        $category = new Category;

        $category->category_name = $req->category_name;
        $category->status = $req->status;

        $category->save();
         
        return redirect()->back()->with('success_msg', 'Category Added Successfully');
        
    }
}
