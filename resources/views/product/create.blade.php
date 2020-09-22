@extends('layouts.master')

@section('content')
    <div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

     @if(session('success_msg'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{session('success_msg')}}</strong> 
    </div>
    @endif

    @if(session('message_danger'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{session('message_danger')}}</strong> 
    </div>
    @endif

    <form action="{{route('product.store')}}" method="post">
        @csrf
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" aria-describedby="emailHelp" placeholder="Enter Product Name">
                
            </div>
            <div class="form-group">
                <label for="qty">Product Quantity</label>
                <input type="text" class="form-control" id="qty" name="qty" placeholder="Product Quantity">
            </div>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Product Price">
            </div>

            <select class="custom-select" id="category_id" name="category_id">
                <option selected value="">Choose...</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
         
            <button type="submit" class="btn btn-primary float-right mt-3 btn-block">Submit</button>
    </form>
       
    </div>
@endsection