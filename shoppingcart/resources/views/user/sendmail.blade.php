@extends('layouts.master')
@section('content')
<div class="row">
    
    <div class="col-md-4 col-md-offset-4">
        <h1>Send Mail</h1>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($error->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
        <form action="{{route('sendmail')}}" method="post">
        {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="mail" id="mail" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Send me a Mail</button>
            
        </form>
        
    </div>    
    
</div>
@endsection
