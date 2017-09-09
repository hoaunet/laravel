@extends('layouts.master')
@section('title', 'Nhà tuyển dụng')
@section('content')
<?php echo "<pre>";print_r($companies);echo "</pre>";?>
<script src="/js/calendar/calendar.js" type="text/javascript"></script>
    <style type="text/css" media="screen">@import "/css/calendar.css";</style>
    <div class="cl" style="height:10px;"></div>
<form method="POST" action="/employer/profilecompany" enctype="Multi">
    {{ csrf_field() }}

<div class="ctl">
    <div class="rgt">Thông tin nhà tuyển dụng</div>
    <div class="rgi">
        <div>Vui lòng nhập đầy đủ thông tin</div>
        <div>Những trường có dấu <span class="sao">*</span> là bắt buộc phải nhập</div>
    </div>
    <div class="rggt"><b>Thông tin đăng nhập</b></div>
    <div class="rgl">Email đăng nhập (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtEmail" type="text" value="{{$companies->email}}" id="txtEmail" disabled="disabled" class="textbox" onkeyup="chk('txtEmail')" onkeydown="if(event.keyCode == 13 || event.keyCode == '13'){return(false);}" style="background-color:White;border-style:None;">
        <div><span id="RequiredFieldValidator13" class="valerror" style="color:Red;font-size:11px;display:none;">Email sai định dạng!</span></div>
    </div>
    <div class="cl"></div>
    
    <div class="rgl">&nbsp;</div>
    <div class="rgr">
        <a href="/changepass">[Đổi mật khẩu]</a>
    </div>    
    
    <div class="cl" style="height:15px;"></div>
    <div class="rggt"><b>Thông tin công ty</b></div>  
    <div class="rgl">Tên công ty (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="company_name" type="text" value="{{$companies->company_name}}" id="company_name" class="textbox" style="width:400px;">
    </div>
    <div class="cl"></div>
    <div class="rgl">Quy mô công ty (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpQuyMo" id="drpQuyMo" class="textbox" style="width:265px;">
          <option value="--Chọn quy mô công ty--">--Chọn quy mô công ty--</option>
          @if(count($companysizes) >0)
              @foreach($companysizes as $companysize)
                <option value="{{$companysize->id}}" @if($companysize->id==$companies->companysize_id) selected="selected" @endif>{{$companysize->name}}</option> 
              @endforeach
            @endif
        </select>
    </div>
    <div class="cl"></div>
    <div class="rgl">Sơ lược về công ty (<span class="sao">*</span>):</div>
    <div class="rgr">
        <textarea name="descriptions" rows="5" cols="20" id="descriptions" class="textbox" style="width:400px;">{{$companies->descriptions}}</textarea>
    </div>   
    <div class="cl"></div>   
    <div class="rgl">Logo công ty:</div>
    <div class="rgr">
        <input type="file" name="FileLG" id="FileLG">
        <div class="ifo">Định dạng ảnh .gif, .jpg, .png dung lượng &lt;=300kb</div>
        <div style="padding-top:5px;"></div>
    </div>   
    <div class="cl"></div>     
    <div class="rgl">Giấy phép ĐK kinh doanh:</div>
    <div class="rgr">
        <input type="file" name="FileGP" id="FileGP">
        <div class="ifo">Dạng file .doc .docx .xls .xlsx .jpg .gif .png .pdf, dung lượng &lt;=500KB .</div>
        <div class="ifo">Nếu giấy phép kinh doanh của bạn có nhiều file, hãy ghép lại thành 1 file để up lên nhé.)</div>
        <div style="padding-top:5px;"></div>
    </div>   
    <div class="cl"></div>  
    <div class="rgl">Mã số thuế:</div>
    <div class="rgr">
        <input name="masothue" type="text" id="masothue" class="textbox" style="width:400px;" value="{{$companies->masothue}}">
    </div>
    <div class="cl"></div>  
    <div class="rgl">Địa chỉ công ty (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="company_address" type="text" value="{{$companies->company_address}}" id="txtDiaChiCt" class="textbox" style="width:400px;">
    </div>
    <div class="cl"></div>  
    <div class="rgl">Tỉnh/thành phố (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpCity" id="drpCity" class="textbox" style="width:265px;">
  <option value="--Chọn tỉnh--">--Chọn tỉnh--</option>
          @if(count($provinces) >0)
              @foreach($provinces as $province)
                <option value="{{$province->id}}"  @if($province->id==$companies->province_id) selected="selected" @endif>{{$province->province_name}}</option> 
              @endforeach
            @endif

</select>
    </div>
    <div class="cl"></div> 
    <div class="rgl">Website:</div>
    <div class="rgr">
        <input name="website" type="text" id="website" class="textbox" style="width:400px;" value="{{$companies->website}}">
    </div>
    <div class="cl" style="height:15px;"></div>
    <div class="rggt"><b>Thông tin liên hệ</b></div>    
    <div class="rgl">Tên người liên hệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtNameLH" type="text" value="{{$companies->name}}" id="txtNameLH" class="textbox">
    </div>
    <div class="cl"></div>
    <div class="rgl">Địa chỉ liên hệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtDiaChiLH" type="text" value="{{$companies->address}}" id="txtDiaChiLH" class="textbox">
    </div>
    <div class="cl"></div>
    <div class="rgl">Số điện thoại liên hệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtDienThoaiLH" type="text" value="{{$companies->contact_phone}}" id="txtDienThoaiLH" class="textbox">
    </div>
    <div class="cl"></div>   
    <div class="rgl">Email liên hệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtEmailLH" type="text" value="{{$companies->email}}" id="txtEmailLH" class="textbox">
    </div>
    <div class="cl"></div>
    
    <div class="invalid">
        <span id="RequiredFieldValidator12" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập email đăng nhập!</span>
        <span id="RequiredFieldValidator4" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập tên công ty!</span>
        <span id="RequiredFieldValidator2" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng chọn quy mô công ty!</span>
        <span id="RequiredFieldValidator3" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập sơ lược công ty!</span>
        <span id="RequiredFieldValidator10" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ công ty!</span>
        <span id="RequiredFieldValidator11" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng chọn tỉnh, thành phố!</span>
        <span id="RequiredFieldValidator7" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập tên người liên hệ!</span>
        <span id="RequiredFieldValidator5" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ liên hệ!</span>
        <span id="RequiredFieldValidator6" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập số điện thoại liên hệ!</span>
        <span id="RequiredFieldValidator8" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập email liên hệ</span>
        <span id="RequiredFieldValidator9" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mã bảo vệ!</span>
    </div>
    
    
    <div class="rgl">&nbsp;</div> 
    <div class="rgr bt">
     <button type="submit" class="btn btn-primary button">Cập nhật</button>
    </div>
    <div class="cl"></div> 
    
    
</div>
</form>
@include('Layouts.sidebar_employer')
@endsection