<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Homepage</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('product.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
     <!--<form class="form-inline my-2 my-lg-0 justify-content-center">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li >
        <a class="nav-link " href="{{route('product.shoppingCart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping cart <span class="badge">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span></a>
      </li>  
      <li  class="nav-item dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><i class="fa fa-user" aria-hidden="true"></i> User Management <span class="caret"></span></a>
        <ul class="dropdown-menu">
          @if(Auth::check())
            <li><a href="{{route('user.profile')}}">Profile</a></li> 
            <li role="separator" class="divider"><a href="#"></a></li>  
            <li><a href="{{route('user.logout')}}">Logout</a></li>  
          @else
          <li><a href="{{route('user.signup')}}">Signup</a></li>   
           <li><a href="{{route('user.signin')}}">Signin</a></li> 
          @endif    
               
        </ul>
      </li>
    </ul>  
  </div>
  </div>  
</nav>