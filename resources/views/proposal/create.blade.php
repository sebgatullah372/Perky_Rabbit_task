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

     <h2>Proposal Create</h2>

     <div class="container-fluid">
          <div class="row">
          
               <div class="col col-md-6">
                   
               </div>
                
                <div class="col col-md-3">
                
                
                </div>

                <div class="col col-md-3">
                
                
                
                </div>
          
          </div>
     
     
     
     </div>




    </div>
@endsection