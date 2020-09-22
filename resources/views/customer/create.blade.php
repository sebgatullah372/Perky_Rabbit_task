@extends('layouts.master')

@section('content')
    <div class="container">
    
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

        <form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" aria-describedby="emailHelp" placeholder="Enter Customer Name">
                
            </div>
            <div class="form-group">
                <label for="email">Customer Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Customer Email">
            </div>

            <div class="form-group">
                <label for="mobile">Customer Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Customer Mobile">
            </div>
            <div class="form-group">
                <label for="image">Customer Image</label>
                
                <input type="file" class="form-control" id="image" name="image">
            </div>
         
            <button type="submit" class="btn btn-primary btn-block float-right">Submit</button>
        </form>


    </div>
@endsection