@extends('layouts.master')
@section('title')
My email
@endsection

@section('content')
<div class="row">    
    <div class="col-md-4 col-md-offset-4">
         <h1>You got Mail</h1>
         <p>{{$title}}</p>
    </div>   
    
</div>
@endsection
