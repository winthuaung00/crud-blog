@extends('layouts.app')

@section('content')


   <div class="row">
        <div class="col-lg-3">

        <div class="panel panel-info">

            <div class="panel-heading text-center"> 
                POSTED
            </div>
            <div class="panel-body text-center">
                {{ $post_count }}
            </div>
        </div>
    </div>    

    <div class="col-lg-3">

        <div class="panel panel-danger">

            <div class="panel-heading text-center"> 
                TRUSHED POSTS
            </div>
            <div class="panel-body text-center">
                {{ $trush_count}}
            </div>
        </div>
    </div>    

    <div class="col-lg-3">

        <div class="panel panel-success">

            <div class="panel-heading text-center"> 
                USER
            </div>
            <div class="panel-body text-center">
                {{ $user_count}}
            </div>
        </div>
    </div>    
<div class="col-lg-3">

        <div class="panel panel-info">

            <div class="panel-heading text-center"> 
                CATEGORIES
            </div>
            <div class="panel-body text-center">
               {{ $category_count}}
            </div>
        </div>
    </div>    
   </div>

@endsection
