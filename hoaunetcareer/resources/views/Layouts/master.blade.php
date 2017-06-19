<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<link rel="stylesheet" href="/css/style.css" type="text/css" />
</head>
<body>
<div id="contain">
  <ul class="head">
    <li class="l"><a href="/"><img src="/images/logo_s3s_career.jpg" alt="Logo" /></a></li>
    <!--<li class="r">        
          <ul class="user_info">
            <li class="t"><b>Xin chào: Lê Hoa</b>Thoát</li>
            <li class="d">
              <div style="padding-top:5px; padding-bottom:5px;"><span id="head_lblBal" class="cblack">Bạn đang có: <span class="cred"><b>0</b>đ</span> (<a href="http://tuyendungvietnam.com.vn/ntv_naptien.aspx?id=16598">nạp tiền</a>)</span></div>
              •<a href="#"> Thông tin cá nhân</a>&nbsp;&nbsp; • <a href="#">Hồ sơ đã đăng</a> </li>
          </ul>
        </li>-->
    <li class="r">
      <input type="image" name="" id="head_btnLogin" class="img" src="/images/btnLogin.png" style="border-width:0px;" />
      <input name="head$txtUser" type="text" id="head_txtUser" class="txt" ValidationGroup="login" placeholder="Email đăng nhập" />
      <input name="head$txtPass" type="password" id="head_txtPass" class="txt" ValidationGroup="login" placeholder="Mật khẩu" />
      <div class="t"><a href="javascript:void(0)" onclick="customer('dk','Đăng ký tài khoản'); return false;">Đăng ký</a><span>|</span><a href="/repass.aspx">Quên mật khẩu</a></div>
    </li>
  </ul>
  <div style=" background-color:#0C3;">
    <ul class="menu">
      <li class="home"><a class="ac" href="/"><img src="/images/home.png" alt="icon" /> Trang chủ</a></li>
      <li><a href="/employee" class="" >Cho người tìm việc</a></li>
      <li><a href="/employer" class="" >Cho nhà tuyển dụng</a></li>
      <li><a href="#" class="" >Tuyển dụng nhanh</a></li>
      <li><a href="#" class="" >Hướng dẫn sử dụng</a></li>
      <li class="n"><a href="/news" class="" >Hướng nghiệp</a></li>
    </ul>
    <div class="live_chat" onmouseover="javascript:move('all')" onmouseout="javascript:out('all')"> <a href="#"><img src="/images/bgql.gif" alt="live chat" /></a>
      <div style="display:none;" id="all">
        <ul>
          <li><a href="#"><img src="/images/icon/ql1.gif" alt="icon" />Quản lý tuyển dụng</a></li>
          <li><a href="#"><img src="/images/icon/ql2.gif" alt="icon" />Tin TD đã đăng</a></li>
          <li><a href="#"><img src="/images/icon/ql3.gif" alt="icon" />Tạo tin TD mới</a></li>
          <li><a href="#"><img src="/images/icon/ql4.gif" alt="icon" />Quản lý hồ sơ ứng viên</a></li>
          <li><a href="#"><img src="/images/icon/ql5.gif" alt="icon" />Phản hồi của NTV</a></li>
          <li><a href="#"><img src="/images/icon/ql10.gif" alt="icon" />Thông báo của BQT</a></li>
        </ul>
      </div>
    </div>
  </div>
  @yield('content')
  <footer>
    <center>
      <ul class="fm">
        <li class="l"> <strong>Thông báo việc làm</strong> <img src="/images/fm1.gif" alt="icon" /> <span>Nhận Email việc làm và chớp lấy mọi cơ hội việc làm mơ ước</span> <a href="/newletters">Gửi Việc Cho Tôi</a> </li>
        <li class="c"> <strong>Vì sao chọn Tuyển Dụng Việt Nam</strong> <img src="/images/fm2.gif" alt="icon" /> <span>Tuyển Dụng Việt Nam là trang web tuyển dụng hàn đầu Việt Nam</span> <a href="#">Tìm Hiểu Thêm</a> </li>
        <li class="r"> <strong>Hồ sơ trực tuyến</strong> <img src="/images/fm3.gif" alt="icon" /> <span>Dễ dàng tạo hồ sơ trực tuyến để thu hút các nhà tuyển dụng</span> <a href="/users/resume">Tạo Hồ Sơ Ngay</a> </li>
        <li class="cl"></li>
      </ul>
      <div class="mnf"> <a href="/users/listjob">Quản lý tìm việc</a><span>|</span> <a href="/users/resume">Hồ sơ đã đăng</a><span>|</span> <a href="/users/resume">Tạo HS tìm việc</a><span>|</span> <a href="/users/savejob">Việc làm đã lưu</a><span>|</span> <a href="#">NTD của tôi</a><span>|</span> <a href="http://tuyendungvietnam.com.vn/ntvAdmin.aspx?id=9">Hồ sơ cá nhân</a><span>|</span> <a href="http://tuyendungvietnam.com.vn/">Hướng dẫn</a><span>|</span> <a href="http://tuyendungvietnam.com.vn/">RSS</a> </div>
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
  <div id="hide_float_right" class="hide_float"><a href="javascript:hide_float_right()" class="opened"><img src="/images/support.png" alt="icon" /></a></div>
  <div id="float_content_right" class="float-content" style="display:none;">
    <div class="yahoo">
      <div style="font-weight:bold; padding-top:10px; color:#000;">Liên Hệ TUYỂN DỤNG VIỆT NAM</div>
      <div class="ym"><a href="ymsgr:sendim?00&amp;m=http://tuyendungvietnam.com.vn+ Help me?"><img src="http://opi.yahoo.com/online?u=00&amp;m=g&amp;t=1" alt=" E-mail - tuyendungvietnam.com.vn@gmail.com "></a><a href="callto:tuyendungvietnam"><img src="./Tuyển dụng việt nam, tim viec luong cao, tuyen dung nhanh_files/skype.png" alt=" E-mail - tuyendungvietnam.com.vn@gmail.com "></a> E-mail - tuyendungvietnam.com.vn@gmail.com </div>
      <div class="ym"><a href="ymsgr:sendim?00&amp;m=http://tuyendungvietnam.com.vn+ Help me?"><img src="http://opi.yahoo.com/online?u=00&amp;m=g&amp;t=1" alt="Tel: 04 66 840 555"></a><a href="callto:tuyendungvietnam"><img src="./Tuyển dụng việt nam, tim viec luong cao, tuyen dung nhanh_files/skype.png" alt="Tel: 04 66 840 555"></a>Tel: 04 66 840 555</div>
      <div style="font-weight:bold; padding-top:10px; color:#000;">Phòng CSKH</div>
      <div class="ym"><a href="ymsgr:sendim?00&amp;m=http://tuyendungvietnam.com.vn+ Help me?"><img src="http://opi.yahoo.com/online?u=00&amp;m=g&amp;t=1" alt="Ms Kỳ Duyên (sale.saigon)"></a><a href="callto:tuyendungvietnam"><img src="./Tuyển dụng việt nam, tim viec luong cao, tuyen dung nhanh_files/skype.png" alt="Ms Kỳ Duyên (sale.saigon)"></a>Ms Kỳ Duyên (sale.saigon)</div>
      <div class="ym"><a href="ymsgr:sendim?00&amp;m=http://tuyendungvietnam.com.vn+ Help me?"><img src="http://opi.yahoo.com/online?u=00&amp;m=g&amp;t=1" alt="Ms. Ngọc Hân (salehanoi)"></a><a href="callto:tuyendungvietnam"><img src="./Tuyển dụng việt nam, tim viec luong cao, tuyen dung nhanh_files/skype.png" alt="Ms. Ngọc Hân (salehanoi)"></a>Ms. Ngọc Hân (salehanoi)</div>
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
  <div class="dk"> <a href="/ntd-dang-ky.aspx">Nhà tuyển dụng đăng ký</a> <a href="/ntv-dang-ky.aspx">Người tìm việc đăng ký</a> </div>
</div>
</body>
</html>