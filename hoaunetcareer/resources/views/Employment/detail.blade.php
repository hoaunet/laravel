@extends('layouts.master')
@section('title', $employments->title)
@section('content')
<?php //echo "<pre>";print_r($employment_detail);echo "</pre>";?>
<div class="adtop"><a href="/" target="_blank"><img src="/uploads/banners/homepage.JPG" alt="Banner top"></a></div>
<div class="bgs">
  <ul class="s">
    <li> <span>Tìm Tuyển Dụng Việt Nam trên:</span>
      <div class="fb-like fb_iframe_widget" ></div>
      <div class="gcong">
        <div></div>
      </div>
      <div id="___plus_0" ></div>
    </li>
  </ul>
  <ul>
    <li class="s1">
      <input name="txtS1" type="text" id="txtS1" placeholder="Nhập tiêu đề công việc, tên NTD, địa điểm để tìm kiếm">
    </li>
    <li class="s2">
      <select name="drpNganhNghe" id="drpNganhNghe">
        <option value="Tất cả ngành nghề">Tất cả ngành nghề</option>
        
                    @if(count($careers) >0)
                      @foreach($careers as $career)
                        
        <option value="{{$career->id}}">{{$career->career_name}}</option>
         
                      @endforeach
                   @endif
                     
      </select>
    </li>
    <li class="s3">
      <select name="drpDiaDiem" id="drpDiaDiem">
        <option value="Tất cả địa điểm">Tất cả địa điểm</option>
        
                     @if(count($provinces) >0)
                      @foreach($provinces as $province)
                        
        <option value="{{$province->id}}">{{$province->province_name}}</option>
         
                      @endforeach
                    @endif
      
      </select>
    </li>
    <li class="s4">
      <select name="drpMucLuong" id="drpMucLuong">
        <option value="Tất cả mức lương">Tất cả mức lương</option>
        
                    @if(count($salaries) >0)
                      @foreach($salaries as $salarie)
                        
        <option value="{{$salarie->id}}">{{$salarie->name}}</option>
         
                      @endforeach
                    @endif
      
      </select>
    </li>
    <li class="s5">
      <input type="image" name="btnS" id="btnS" src="/images/n0.gif" style="border-width:0px;">
    </li>
  </ul>
</div>
<div class="ctl">
  <input type="hidden" name="checkedvalues" id="checkedvalues" value="0">
  <input type="hidden" name="dang_luu_ho_so" id="dang_luu_ho_so" value="">
  <div style=" clear:both; float:right; padding:10px 0;"></div>
  <div class="box_ct_ntd">
    <div class="tieu_de"> <a href="#"><img src="/images/nop-ho-so.gif" alt="icon"></a>
      <h1>{{$employments->title}}</h1>
    </div>
    <ul class="ngay">
      <li>Lượt xem: <b>165</b></li>
      <li>Mã: <b>{{$employments->code}}</b></li>
      <li>Ngày làm mới: <b>{{ date('F d, Y', strtotime($employments->created_at)) }}</b></li>
    </ul>
    <div class="rggt2"><b>Thông tin tuyển dụng</b></div>
    <table cellpadding="0" cellspacing="0" class="tb_ct">
      <tbody>
        <tr>
          <td class="col1"><div style="width:165px;">Vị trí tuyển dụng</div></td>
          <td class="col2 pd">{{$employments->title}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Chức vụ</div></td>
          <td class="col2"><table cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td class="l">{{$employment_detail->career_name}}</td>
                  <td class="c">Số năm kinh nghiệm</td>
                  <td class="r">{{$employment_detail->experiences_name}}</td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Nghành nghề</div></td>
          <td class="col2"><table cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td class="l"> {{$employment_detail->career_name}}</td>
                  <td class="c">Yêu cầu bằng cấp</td>
                  <td class="r"> {{$employment_detail->degree_name}}</td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Hình thức làm việc</div></td>
          <td class="col2"><table cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td class="l">{{$employment_detail->typework_name}}</td>
                  <td class="c">Yêu cầu giới tính</td>
                  <td class="r">{{($employments->isgender==1)?'Nam':'Nữ'}}</td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Địa điểm làm việc</div></td>
          <td class="col2"><table cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td class="l">{{$employment_detail->province_name}}</td>
                  <td class="c">Yêu cầu độ tuổi</td>
                  <td class="r">{{$employments->age}}</td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Mức lương</div></td>
          <td class="col2"><table cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td class="l">{{$employment_detail->salary_name}}<</td>
                  <td class="c">Số lượng cần tuyển</td>
                  <td class="r">{{$employments->numrequire}}</td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Ngoại ngữ</div></td>
          <td class="col2 pd">{{$employment_detail->language_name}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Mô tả công việc</div></td>
          <td class="col2 pd lh">{{$employments->summary}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Quyền lợi được hưởng</div></td>
          <td class="col2 pd lh">{{$employments->benefit}}<br></td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Yêu cầu khác</div></td>
          <td class="col2 pd lh">{{$employments->other_require}}<br></td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Hồ sơ bao gồm</div></td>
          <td class="col2 pd lh">{{$employments->record_include}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Hạn nộp hồ sơ</div></td>
          <td class="col2 pd"><b style="color:Red;">{{ date('F d, Y', strtotime($employments->expire_day)) }}</b></td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Hình thức nộp hồ sơ</div></td>
          <td class="col2"><table cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td class="l">{{$employments->form_apply}}</td>
                  <td class="c" style="border:none;">&nbsp;</td>
                  <td class="r"><a href="#"><img src="/images/nop-ho-so.gif" alt="icon"></a></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
      </tbody>
    </table>
    <div class="chuc_nang"> <a href="javascript:luu_tin();" class="r"><img src="/images/save.gif" alt="icon">Lưu tin</a> <a href="#"><img src="/images/mail.gif" alt="icon">Gửi bạn bè</a> <a href="javascript:in_viec_lam();"><img src="/images/print.gif" alt="icon">In tin này</a> <a href="#"><img src="/images/tocao.gif" alt="icon">Tố cáo</a> </div>
    <div class="chuc_nang" style="padding:0 0 15px 0;"> <a href="#" class="r"><b>&gt;&gt; Xem thêm</b></a> <a href="#" style="color:Red; font-weight:bold;"><img src="/images/canh_bao.gif" alt="icon">Người tìm việc cảnh giác khi có bất kỳ yêu cầu thu phí từ phía nhà tuyển dụng</a> </div>
    <div class="rggt2"><b>Thông tin liên hệ</b></div>
    <div id="rptChitiet_ctl00_pnlNotLH">
      <div style="padding:10px; line-height:20px; color:Red;"> <i>Bạn phải đăng ký tài khoản Ứng viên để xem thông tin chi tiết về tuyển dụng <b>NHÂN VIÊN PHỤC VỤ TIỆC</b> này - Đăng ký tài khoản Ứng viên Miễn phí <a href="#"><b>tại đây</b></a></i> </div>
    </div>
    <div class="rggt2"><b>Thông tin nhà tuyển dụng</b></div>
    <table cellpadding="0" cellspacing="0" class="tb_ct">
      <tbody>
        <tr>
          <td class="col1"><div style="width:165px;">Tên công ty</div></td>
          <td class="col2 pd">{{$employments->name}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Địa chỉ</div></td>
          <td class="col2 pd">{{$employments->address}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Website</div></td>
          <td class="col2 pd">{{$employments->website}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Điện thoại</div></td>
          <td class="col2 pd">{{$employments->contact_phone}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;"> Giới thiệu
              <div style="text-align:center;">@if($employments->logo !='') <img src="/images/{{$employments->logo}}" alt="{{$employments->name}}" style="max-width:120px;"> @endif </div>
              <div style="text-align:center;"></div>
            </div></td>
          <td class="col2 pd lh">{{$employments->descriptions}}</td>
        </tr>
        <tr>
          <td class="col1"><div style="width:165px;">Quy mô công ty</div></td>
          <td class="col2 pd">Từ 10 - 24 nhân viên</td>
        </tr>
      </tbody>
    </table>
  </div>
  <input type="checkbox" id="chk_item0" class="case" checked="checked" name="chk_item[]" style="display:none;" value="14877">
  <input type="hidden" name="tong_tin" id="tong_tin" value="1">
  <div class="chuc_nang"> <a href="/employer/{{$employments->id}}/company" class="r"><b>&gt;&gt; Xem đầy đủ thông tin về công ty này</b></a></div>
  <div class="chia_se"> <strong>Gửi và chia sẻ thông tin việc làm <u>Nhân viên chăm sóc khách hàng</u> qua</strong> <div class="fb-like fb_iframe_widget" </div>
  <div class="gcong"></div>
  <div id="___plus_1" ></div>
</div>
<div class="chuc_nang"><a class="red" href="/employement/{{$employments->career_id}}/career"><b>&lt;&lt; Quay lại Ngành nghề</b></a> <a href="/employee" class="r"><b>Quay về trang việc làm &gt;&gt;</b></a></div>
<div class="fb-comments fb_iframe_widget" data-href="#" data-width="735" data-numposts="5" data-colorscheme="light" fb-xfbml-state="rendered"><span style="height: 183px; width: 735px;">
  
  </span></div>
<div class="bgt"> <strong style="text-transform:none;">Việc làm cùng nhà Tuyển dụng</strong> </div>
<div class="box_tg">
  <div class="list_tg" style="width:330px;"> <strong><a href="#">NHÂN VIÊN PHỤC VỤ TIỆC</a></strong>
    <p><a href="#">Hyundai CNS</a></p>
  </div>
  <div class="cl"></div>
</div>
<div class="bgt" style="margin-top:15px;"> <strong style="text-transform:none;">Việc làm cùng ngành</strong> </div>
</div>
</div>
 @include('Layouts.sidebar')
@endsection