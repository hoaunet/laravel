@extends('layouts.master')
@section('title', 'Quản lý tìm việc')
@section('content')
<div class="rgt2">Các hồ sơ tìm việc</div>
<div id="pel_Quanlytin">
	
<div class="qlt_tit">
    <div class="qlt1">Mã tin</div>
    <div class="qlt2" style="width:300px;">Tiêu đề</div>
    <div class="qlt3">Ngày làm mới</div>
    <div class="qlt4">Ngày đăng</div>
    <div class="qlt5">Ngày cập nhật</div>
    <div class="qlt6">Ngày hết hạn</div>
    <div class="qlt7">Tình trạng tin</div>
    
    <div class="qlt9">Thao tác</div>
</div>

<div class="qlt_list">
    <div class="qlt1">NTV5521</div>
    <div class="qlt2" style="width:300px;">
        <a href="/nha-tuyen-dung/project-manager-id5521.html"><b>Project Manager</b></a>
         
        <p>(9 lượt xem)</p>  
    </div>
    <div class="qlt3"><dl style="width:80px; padding-left:5px;">(Số lần làm mới còn lại: <span style="color:Red;">1000</span>)</dl></div>
    <div class="qlt4">13/06/2017</div>
    
    <div class="qlt5">13/06/2017</div>
    <div class="qlt6">13/06/2017</div>
    <div class="qlt7">Tin đăng</div>
    
    <div class="qlt9">
        <p style="display:block; padding:5px;">
            <a href="/nha-tuyen-dung/project-manager-id5521.html">Xem</a> | 
            <a href="/ntvAdmin.aspx?id=4&amp;p=5521">Sửa</a>  | 
            <a href="/ntvAdmin.aspx?id=2&amp;d=5521">Xóa</a>
        </p>
        <p style="display:block; padding:5px; border-top:1px #ccc dotted;">
            <a href="/ntvAdmin.aspx?id=2&amp;r=5521">Làm mới</a> | 
            <a href="/ntvAdmin.aspx?id=2&amp;h=5521">Hủy đăng hồ sơ</a>
        </p>
    </div>
    <div class="cl"></div>
</div>
<div style="border-bottom:1px #dfdfdf dashed; padding-bottom:5px; padding-left:25px;">
    <span id="list_Quanlytin_ctl00_lblHieuUng" class="fs11"> <span class="cred">=&gt;</span><a href="/ntv_naptien.aspx?id=16598&amp;hu=5521">Mua hiệu ứng</a></span>
</div>


</div>
@endsection


