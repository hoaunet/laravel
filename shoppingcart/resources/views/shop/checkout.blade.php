@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')   
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <h1>Checkout</h1>
        <h4>Total: {{$total}} VND</h4>
        <form action="{{route('checkout')}}" method="post" id="checkout-form">
             {{csrf_field()}}
            <div class="row"> 
             <div class="col-sx-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="true">
                </div>
            </div>
            <div class="row"> 
             <div class="col-sx-12">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required="true">
                </div>
            </div>
             <div class="row"> 
             <div class="col-sx-12">
                <div class="form-group">
                    <label for="cart-name">Cart Name</label>
                    <input type="text" name="cart-name" id="cart-name" class="form-control" required="true">
                </div>
            </div>
             <div class="row"> 
             <div class="col-sx-12">
                <div class="form-group">
                    <label for="cart-number">Cart Number</label>
                    <input type="text" name="cart-number" id="cart-number" class="form-control" required="true">
                </div>
            </div>
            <div class="row"> 
             <div class="col-sx-12">
                <div class="row"> 
                     <div class="col-sx-6">
                        <div class="form-group">
                            <label for="cart-expiry-month">Expiration Month</label>
                            <input type="text" name="cart-expiry-month" id="cart-expiry-month" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="col-sx-6">
                        <div class="form-group">
                            <label for="cart-expiry-year">Expiration Year</label>
                            <input type="text" name="cart-expiry-year" id="cart-expiry-year" class="form-control" required="true">
                        </div>
                    </div>
                </div>
            </div>
                </div>   
            <div class="col-sx-12">
                <div class="form-group">
                    <label for="cart-cvc">CVC</label>
                    <input type="text" name="cart-cvc" id="cart-cvc" class="form-control" required="true">
                </div>
            </div>         
            <button type="submit" class="btn btn-primary">Buy now</button>
            </div>
        </form>
    </div>
</div>                 
    
@endsection