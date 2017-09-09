<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/css/style.css" type="text/css" />
</head>
<body>
<div id="contain">
  <ul class="head">
    <li class="l"><a href="/"><img src="/images/logo_s3s_career.jpg" alt="Logo" /></a></li>
    @if (Auth::guest())
      <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {!! csrf_field() !!}
      <li class="r">

        <input type="image" name="" id="head_btnLogin" class="img" src="/images/btnLogin.png" style="border-width:0px;" />
        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="txt" ValidationGroup="login" placeholder="Email đăng nhập" />
         
        <input id="password" type="password" name="password" class="txt" ValidationGroup="login" placeholder="Mật khẩu" required/>
        
        <div style =" height: 40px;">
        @if ($errors->has('email'))
            <span class="help-block" >
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif    
          @if ($errors->has('password'))
            <span class="help-block" style=" width:200px; padding-left: -50px">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        </div>
        <div class="t"><a href="{{ url('/register') }}">Đăng ký</a><span>|</span><a href="{{ route('password.request') }}">Quên mật khẩu</a></div>
      </li>
      </form>
      @else
        <li class="r">        
          <ul class="user_info">
            <li class="t"><b>Xin chào: {{ Auth::user()->username }}</b> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Thoát
                                        </a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
            <li class="d">
              <div style="padding-top:5px; padding-bottom:5px;"><span id="head_lblBal" class="cblack">Bạn đang có: <span class="cred"><b>0</b>đ</span> (<a href="#">nạp tiền</a>)</span></div>
              •<a href="#"> Thông tin cá nhân</a>&nbsp;&nbsp; • <a href="#">Hồ sơ đã đăng</a> </li>
          </ul>
        </li>     
    @endif
  </ul>
  <div style=" background-color:#0C3;">
    <ul class="menu">
      <li class="home"><a @yield('homeclass') href="/"><img src="/images/home.png" alt="Trang chủ" /> Trang chủ</a></li>
      <li><a href="/employee" class="" >Cho người tìm việc</a></li>
      <li><a href="/employer" class="" >Cho nhà tuyển dụng</a></li>
      <li><a href="#" class="" >Tuyển dụng nhanh</a></li>
      <li><a href="#" class="" >Hướng dẫn sử dụng</a></li>
      <li class="n"><a href="/news" class="" >Hướng nghiệp</a></li>
    </ul>
    <div class="live_chat" onmouseover="javascript:move('all')" onmouseout="javascript:out('all')"> <a href="#"><img src="/images/bgql.gif" alt="live chat" /></a>
     @if (Route::has('login'))
        @if(Auth::check() =='2')        
      <div  id="all">
        <ul>
          <li><a href="#"><img src="/images/icon/ql1.gif" alt="Quản lý tuyển dụng" />Quản lý tuyển dụng</a></li>
          <li><a href="#"><img src="/images/icon/ql2.gif" alt="Tin TD đã đăng" />Tin TD đã đăng</a></li>
          <li><a href="#"><img src="/images/icon/ql3.gif" alt="Tạo tin TD mới" />Tạo tin TD mới</a></li>
          <li><a href="#"><img src="/images/icon/ql4.gif" alt="Quản lý hồ sơ ứng viên" />Quản lý hồ sơ ứng viên</a></li>
          <li><a href="#"><img src="/images/icon/ql5.gif" alt="Phản hồi của NTV" />Phản hồi của NTV</a></li>
          <li><a href="#"><img src="/images/icon/ql10.gif" alt="Thông báo của BQT" />Thông báo của BQT</a></li>
        </ul>
      </div>
       @endif
     @endif 
    </div>
  </div>
  @if (Route::has('login'))
    @if(Auth::check() =='2')   
  <ul class="box_admin2">
    <li><a href="#">Quản lý tìm việc</a></li>
    <li><span>|</span></li>
    <li><a href="#">Hồ sơ đã đăng</a></li>
    <li><span>|</span></li>
    <li><a href="#">Tạo HS tìm việc</a></li>
    <li><span>|</span></li>
    <li><a href="#">VL đã lưu</a></li>
    <li><span>|</span></li>
    <li><a href="#">VL đã ứng tuyển</a></li>
    <li><span>|</span></li>
    <li><a href="#">NTD của tôi</a></li>
    <li><span>|</span></li>
    <li><a href="#">NTD đã xem hồ sơ</a></li>
    <li><span>|</span></li>
    <li><a href="#">HS cá nhân (CV)</a></li>
    <li><span>|</span></li>
    <li><a href="#">Thông báo</a></li>
  </ul>
   
  <ul class="box_admin">
    <li><a href="#">Quản lý tuyển dụng</a></li>
    <li><span>|</span></li>
    <li><a href="#">Tin TD đã đăng</a></li>
    <li><span>|</span></li>
    <li><a href="#">Tạo tin TD mới</a></li>
    <li><span>|</span></li>
    <li><a href="#">Quản lý hồ sơ ứng viên</a></li>
    <li><span>|</span></li>
    <li><a href="#">Phản hồi của NTV</a></li>
    <li><span>|</span></li>
    <li><a href="#">Thông tin NTD</a></li>
    <li><span>|</span></li>
    <li><a href="#">Thông báo của BQT</a></li>
</ul>
  @endif
  @endif 
  @yield('content')
  <footer>
    <center>
      <ul class="fm">
        <li class="l"> <strong>Thông báo việc làm</strong> <img src="/images/fm1.gif" alt="icon" /> <span>Nhận Email việc làm và chớp lấy mọi cơ hội việc làm mơ ước</span> <a href="/newletters">Gửi Việc Cho Tôi</a> </li>
        <li class="c"> <strong>Vì sao chọn Tuyển Dụng Việt Nam</strong> <img src="/images/fm2.gif" alt="icon" /> <span>Tuyển Dụng Việt Nam là trang web tuyển dụng hàn đầu Việt Nam</span> <a href="#">Tìm Hiểu Thêm</a> </li>
        <li class="r"> <strong>Hồ sơ trực tuyến</strong> <img src="/images/fm3.gif" alt="icon" /> <span>Dễ dàng tạo hồ sơ trực tuyến để thu hút các nhà tuyển dụng</span> <a href="/users/resume">Tạo Hồ Sơ Ngay</a> </li>
        <li class="cl"></li>
      </ul>
      <div class="mnf"> <a href="/users/listjob">Quản lý tìm việc</a><span>|</span> <a href="/users/resume">Hồ sơ đã đăng</a><span>|</span> <a href="/users/resume">Tạo HS tìm việc</a><span>|</span> <a href="/users/savejob">Việc làm đã lưu</a><span>|</span> <a href="#">NTD của tôi</a><span>|</span> <a href="#">Hồ sơ cá nhân</a><span>|</span> <a href="#">Hướng dẫn</a><span>|</span> <a href="#">RSS</a> </div>
      <ul class="ftop">
        <li class="l"><span style="line-height: 50px;">Tìm Tuyển Dụng Việt Nam trên: </span> </li>
        <li class="c"> <a href="#"><img src="/images/icon_gioithieu.gif"> Giới thiệu</a> <a href="#"><img src="/images/icon_lienhequangcao.gif"> Liên hệ quảng cáo</a> <a href="#"><img src="/images/icon_lienhe.gif"> Liên hệ</a> </li>
        <li class="r"><a href="#"><img src="/images/dau_trang.gif" alt="top"></a></li>
      </ul>
      <div class="bgf">
        <div class="l"><span style="color: rgb(0, 51, 0);"><span style="font-family: Times New Roman;"><span style="font-size: medium;"><strong>TUYỂN DỤNG VIỆT NAM</strong><br>
          </span> <strong>Đơn vị chủ quản</strong>: LUẬT SƯ TƯ NHÂN<br>
          <strong>Văn phòng GD: Tô Hiến Thành, Q10, TPHCM;</strong>&nbsp;<br>
          <strong>Điện thoại</strong>: (08) 38 63 160 - <strong>Email</strong>: luatsutunhan78@gmail.com<br>
          <br>
          © Copyright 2014. Tuyển dụng Việt Nam<br>
          </span></span><br>
          <br type="_moz">
        </div>
        <div class="r">
          <h2>Kết nối với Tuyển Dụng Việt Nam</h2>
          <div class="acs"> <a href="/"><img src="/images/f1.gif" alt="icon"></a> <a href="#" target="_blank"><img src="/images/f2.gif" alt="icon"></a> <a href="#" target="_blank"><img src="/images/f3.gif" alt="icon"></a> <a href="/"><img src="/images/f4.gif" alt="icon"></a> <a href="#" target="_blank"><img src="/images/f5.gif" alt="icon"></a> <a href="/"><img src="/images/f6.gif" alt="icon"></a> <a href="/"><img src="/images/f7.gif" alt="icon"></a> </div>
          <h4>Ứng dụng di động</h4>
          <div class="app"> <a href="/"><img src="/images/apple.gif" alt="icon"></a> <a href="/"><img src="/images/anroid.gif" alt="icon"></a> </div>
        </div>
        <div class="cl"></div>
      </div>
    </center>
  </footer>
</div>
<div class="float-ck" style="right: 0;">
  <div id="hide_float_right" class="hide_float"><a href="#" class="opened"><img src="/images/support.png" alt="icon" /></a></div>
  <div id="float_content_right" class="float-content" style="display:none;">
    <div class="yahoo">
      <div style="font-weight:bold; padding-top:10px; color:#000;">Liên Hệ TUYỂN DỤNG VIỆT NAM</div>
      <div class="ym"></div>
      <div style="font-weight:bold; padding-top:10px; color:#000;">Phòng CSKH</div>
      <div class="ym"></div>
      <div class="ym"></div>
    </div>
  </div>
</div>
<div id="divAdLeft" style="float: left; position: fixed; top:132px; right: 1179.5px;">
  <div class="avf"> </div>
  <div class="cl"></div>
  <br style="clear: both;">
</div>
<div id="divAdRight" style="float: right; position: fixed; top:132px; left: 1179.5px;">
  <div class="avf"></div>
  <div class="cl"></div>
  <br style="clear: both;">
</div>
<div id="dk" style="display:none;">
  <div class="dk"> <a href="#">Nhà tuyển dụng đăng ký</a> <a href="/ntv-dang-ky.aspx">Người tìm việc đăng ký</a> </div>
</div>
</body>
</html>
