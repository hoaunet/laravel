@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
@if(Session::has('success'))
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div class="alert alert-success" id="charge-message">
        {{Session::get('success')}}
        </div>
    </div>
</div>
@endif
@foreach($products->chunk(3) as $productchunk)
<div class="row">
    @foreach($productchunk as $product)
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail"><img src="{{$product->images}}" alt="{{$product->title}}" class="img-responsive">
            <div class="caption"><h3>{{$product->title}}</h3>
            <p class="description">{{$product->description}}</p>
            <div class="clearfix"><div class="pull-left price">{{$product->price}} VND</div><a href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn btn-success pull-right" role="button">Add to Cart</a></div>
            </div>
        </div>
        
    </div>    
    @endforeach
</div>
@endforeach
@endsection