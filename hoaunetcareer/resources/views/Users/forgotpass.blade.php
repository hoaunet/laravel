@extends('layouts.master')
@section('title', 'Đăng ký tài khoản người tìm việc')
@section('content')
<div class="box_send_mail">
    <h1>Yêu cầu Email lấy lại mật khẩu</h1>
    
    <div class="l"><b>Email</b></div>
    <div class="r">
        <input name="txtEmail" type="text" id="txtEmail" class="textbox" placeholder="Nhập địa chỉ email của bạn">
        <div style="font-size:11px; font-style:italic; padding-top:10px; color:#666;">Bạn hãy nhập địa chỉ email đã dùng để đăng ký tài khoản trên website</div>    
    </div>
    <div class="cl"></div> 
    
    <div class="l"><b>Mã bảo vệ</b></div>
    <div class="r"></div>
    <div class="cl"></div>      
    
    <div class="l"><b>Nhập mã bảo vệ</b></div>
    <div class="r"><input name="txtCode" type="text" id="txtCode" class="textbox" placeholder="Yêu cầu nhập mã bảo vệ"><div style="display:none;"><input name="txtC" type="text" value="05546" id="txtC"></div></div>
    <div class="cl"></div>   
        
    <div style="padding-left:165px;">
        <span id="RequiredFieldValidator13" class="valerror" style="color:Red;font-size:11px;display:none;">Địa chỉ email không hợp lệ!</span>
        <span id="RequiredFieldValidator12" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ email!</span>
        <span id="RequiredFieldValidator9" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mã bảo vệ!</span>
        <span id="CompareValidator1" class="valerror" style="color:Red;font-size:11px;display:none;">Mã bảo vệ sai!</span>
    </div>
    <div class="btn"><input type="image" name="btnSend" id="btnSend" class="btn" src="/images/btnEmail.gif" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnSend&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="border-width:0px;"></div>
</div>
@endsection


