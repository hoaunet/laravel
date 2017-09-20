@extends('layouts.admin')
@section('content')
 <section class="content-header">
    <h1>
        Profile 
        <small><ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol></small>
      </h1>
     <div class="pull-right">
        <button type="submit" form="form-user" data-toggle="tooltip" title="" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="{{route('admin.dashboard')}}" data-toggle="tooltip" title="" class="btn btn-default"><i class="fa fa-reply"></i></a></div> 
</section>
<section class="content">
<form action="{{route('admin.profile')}}" method="post">
        {{csrf_field()}}
	
</form>
</section>
@endsection
