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
    
        <form action="{{route('category.store')}}" method="post">
        @csrf
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name" aria-describedby="emailHelp" placeholder="Enter Category Name">
                
            </div>
            <div class="form-group">
                <label for="status">Category Status</label>
                <input type="text" class="form-control" id="status" name="status" placeholder="Status">
            </div>
         
            <button type="submit" class="btn btn-primary btn-block float-right">Submit</button>
        </form>
    </div>
@endsection