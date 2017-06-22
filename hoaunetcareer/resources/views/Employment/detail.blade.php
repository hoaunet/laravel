@extends('layouts.master')
@section('title', $employments->title)
@section('content')
<?php //echo "<pre>";print_r($employment_detail);echo "</pre>";?>
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
<div class="ctr"> 
  <!-- <div class="bgr mtop"><strong>Video tuyển dụng</strong></div>
  <div class="vipr">

  </div>-->
  <div class="bgr mtop"><strong>Tìm ứng viên theo tính chất</strong></div>
  <ul class="vipr">
    <li class="search"> <a href="#">Việc làm lương từ 30 triệu trở lên</a> <a href="#">Việc làm lương từ 20 - 30 triệu</a> <a href="#">Việc làm lương từ 15 -20 triệu</a> <a href="#">Việc làm lương từ 10 - 15 triệu</a> <a href="#">Việc làm cấp quản lý</a> <a href="#">Việc làm bán thời gian</a> <a href="#">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a> </li>
  </ul>
  <div class="bgr mtop"><strong>Cẩm nang tuyển dụng</strong></div>
  <div class="vipr"> 
    <script type="text/javascript" src="/js/jssor.core.js"></script> 
    <script type="text/javascript" src="/js/jssor.utils.js"></script> 
    <script type="text/javascript" src="/js/jssor.slider.js"></script> 
    <script type="text/javascript">
            jssor_slider1_starter = function (containerId) {

                var _SlideshowTransitions = [
                //Fade
                { $Duration: 1200, $Opacity: 2 }
                ];

                var options = {
                    $AutoPlay:false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                    $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                    $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                    $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                    $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
                    $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                    $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                    $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                    $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                    $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                    $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                        $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                        $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                        $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                        $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                    },

                    $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                        $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                        $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                        $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                        $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                        $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    },

                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                };
                var jssor_slider1 = new $JssorSlider$(containerId, options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                    if (parentWidth)
                        jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 600));
                    else
                        $JssorUtils$.$Delay(ScaleSlider, 30);
                }

                ScaleSlider();
                $JssorUtils$.$AddEvent(window, "load", ScaleSlider);


                if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                    $JssorUtils$.$OnWindowResize(window, ScaleSlider);
                }
            };
        </script>
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 253px; height: 357.176px;">
      <div style="position: absolute; top: 0px; left: 0px; width: 255px; height: 360px; transform-origin: 0px 0px 0px; transform: scale(0.992157);">
        <div class="" style="position: relative; top: 0px; left: 0px; width: 255px; height: 360px; overflow: visible;">
          <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 255px; height: 360px; overflow: hidden; z-index: 0;">
            <div debug-id="slide_container" style="position: absolute; z-index: 0; left: 0px; top: 0px; display: none;"></div>
          </div>
          <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 255px; height: 360px; overflow: hidden; z-index: 0;" debug-id="slide-board">
            <div style="width: 255px; height: 360px; top: 0px; left: 0px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0;"></div>
            <div debug-id="slide-0" style="width: 255px; height: 360px; top: 0px; left: 0px; position: absolute; overflow: hidden; transform: perspective(2000px);"> @foreach($articles as $article)
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/cam-nang-tuyen-dung-viec-lam-voi-nguoi-nhat-nid259.html" style="transform: perspective(2000px);"><img src="/images/news/259.jpg" alt="Cẩm nang tuyển dụng việc làm với người Nhật" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="#" style="transform: perspective(2000px);">{{ $article->title}}</a></strong>
                <p style="transform: perspective(2000px);">{{ $article->short_url}}</p>
              </div>
              @endforeach
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-1" style="width: 255px; height: 360px; top: 0px; left: 255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html" style="transform: perspective(2000px);"><img src="/images/news/195.jpg" alt="Lý giải các mô hình quản lý nhân lực" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html" style="transform: perspective(2000px);">Lý giải các mô hình quản lý nhân lực</a></strong>
                <p style="transform: perspective(2000px);">Tất cả những người làm công tác quản lý đều có mối quan tâm đặc biệt cũng như có xu hướng đưa ra những phán đoán về tính cách của nhân viên. Thông qua những phán đoán này mà người quản lý đưa ra sách lược quản lý riêng cho từng mẫu người. Vậy phương pháp nghiên cứu để đưa ra những phán đoán như thế nào?</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/tao-dieu-kien-cho-su-sang-tao-cua-nhan-vien-nid186.html" style="transform: perspective(2000px);"><img src="/images/news/186.jpg" alt="Tạo điều kiện cho sự sáng tạo của nhân viên" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/tao-dieu-kien-cho-su-sang-tao-cua-nhan-vien-nid186.html" style="transform: perspective(2000px);">Tạo điều kiện cho sự sáng tạo của nhân viên</a></strong>
                <p style="transform: perspective(2000px);">Hầu hết các công ty đều đưa ra câu khẩu hiệu "Đổi mới hay là chết" như là phương châm lao động và sáng tạo cho nhân viên và tổ chức. Thế nhưng thực tế, không ít các nhà quản lý chọn vế thứ 2 cho công ty mình. Tại sao vậy?</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/10-bi-mat-cua-su-thanh-cong-ban-biet-chua-nid185.html" style="transform: perspective(2000px);"><img src="/images/news/185.jpg" alt="10 bí mật của sự thành công , bạn biết chưa?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/10-bi-mat-cua-su-thanh-cong-ban-biet-chua-nid185.html" style="transform: perspective(2000px);">10 bí mật của sự thành công , bạn biết chưa?</a></strong>
                <p style="transform: perspective(2000px);">Đã có rất nhiều những nghiên cứu, bài viết và giảng dạy về sự thành công. Một điều hoàn toàn chắc chắn: thành công của người này khác với thành công của người khác bởi vì mỗi người có một quan niệm khác nhau về thành công.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/meo-nho-cho-ceo-nid184.html" style="transform: perspective(2000px);"><img src="/images/news/184.jpg" alt="Mẹo nhỏ cho CEO" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/meo-nho-cho-ceo-nid184.html" style="transform: perspective(2000px);">Mẹo nhỏ cho CEO</a></strong>
                <p style="transform: perspective(2000px);">Nếu bạn đang phân vân điều gì làm nên một nhà lãnh đạo vĩ đại, chứ không chỉ dừng lại là nhà lãnh đạo xuất sắc, thì đây là một số mẹo có thể giúp bạn. Cuộc hành trình này của bạn sẽ phụ thuộc vào việc bạn sẵn sàng như thế nào.</p>
              </div>
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-2" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ly-do-nhan-vien-cua-ban-xin-nghi-viec-nid183.html" style="transform: perspective(2000px);"><img src="/images/news/183.jpg" alt="Lý do nhân viên của bạn xin nghỉ việc?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ly-do-nhan-vien-cua-ban-xin-nghi-viec-nid183.html" style="transform: perspective(2000px);">Lý do nhân viên của bạn xin nghỉ việc?</a></strong>
                <p style="transform: perspective(2000px);">Là một nhà quản lý, bạn có bao giờ tự hỏi, tại sao cứ thời gian cuối năm, bạn lại nhận được nhiều lá đơn xin nghỉ việc của nhân viên? Và đầu năm mới, bạn lại đau đầu đi tìm nhân viên mới?</p>
              </div>
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-3" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/kinh-nghiem-cua-nha-quan-ly-ngan-sach-bac-nhat-nid179.html" style="transform: perspective(2000px);"><img src="/images/news/179.jpg" alt="Kinh nghiệm của nhà quản lý ngân sách bậc nhất" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/kinh-nghiem-cua-nha-quan-ly-ngan-sach-bac-nhat-nid179.html" style="transform: perspective(2000px);">Kinh nghiệm của nhà quản lý ngân sách bậc nhất</a></strong>
                <p style="transform: perspective(2000px);">Peter Lynch được mệnh danh là nhà quản lý tiền số một trên thế giới. Ông đã phát triển Quỹ Magellan Fund từ 20 triệu đô la năm 1977 lên đến mức 14 tỉ đô la năm 1990.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/doanh-nghiep-vn-quan-ly-va-su-dung-nhan-tai-thieu-dinh-huong-ro-rang-va-on-dinh-nid178.html" style="transform: perspective(2000px);"><img src="/images/news/178.jpg" alt="Doanh nghiệp VN quản lý và sử dụng nhân tài: Thiếu định hướng rõ ràng và ổn định" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/doanh-nghiep-vn-quan-ly-va-su-dung-nhan-tai-thieu-dinh-huong-ro-rang-va-on-dinh-nid178.html" style="transform: perspective(2000px);">Doanh nghiệp VN quản lý và sử dụng nhân tài: Thiếu định hướng rõ ràng và ổn định</a></strong>
                <p style="transform: perspective(2000px);">Thiếu hụt nguồn nhân lực chất lượng cao đang là vấn đề nan giải đối với các DN VN cũng như nhiều nước trên thế giới. Làm thế nào để tuyển dụng và giữ chân người giỏi là nội dung cuộc hội thảo "Chiến tranh nhân tài" (17-18.4) do Phòng Thương mại và Công nghiệp VN (VCCI) phối hợp với Tập đoàn SMR của Malaysia, Cty Đào tạo và Tư vấn quốc tế AITC tổ chức.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/tao-dong-luc-cho-hoat-dong-lam-viec-nhom-nid177.html" style="transform: perspective(2000px);"><img src="/images/news/177.jpg" alt="Tạo động lực cho hoạt động làm việc nhóm" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/tao-dong-luc-cho-hoat-dong-lam-viec-nhom-nid177.html" style="transform: perspective(2000px);">Tạo động lực cho hoạt động làm việc nhóm</a></strong>
                <p style="transform: perspective(2000px);">Đa số những nhà quản lý đều nhầm lẫn rằng tiền là động lực chủ yếu tác động đến nhân viên của họ. Mặt khác, theo những khảo sát bởi nhiều công ty khác nhau, tiền được xếp vào hàng thứ năm hoặc bị hạ thấp bởi đa số ý kiến của nhân viên. Vì vậy nếu tiền không phải là thứ tốt nhất để thúc đẩy nhóm làm việc tốt, vậy là thứ gì?</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/bai-hoc-nao-tu-su-bien-mat-cua-cac-ty-phu-my-nid176.html" style="transform: perspective(2000px);"><img src="/images/news/176.jpg" alt="Bài học nào từ sự biến mất của các tỷ phú Mỹ" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/bai-hoc-nao-tu-su-bien-mat-cua-cac-ty-phu-my-nid176.html" style="transform: perspective(2000px);">Bài học nào từ sự biến mất của các tỷ phú Mỹ</a></strong>
                <p style="transform: perspective(2000px);">Trong thập kỷ trước, danh sách những tỷ phú mà Tạp chí Forbes liệt kê hàng năm đã bị “Mỹ hóa” như chiếc bánh táo vậy. Bill Gates và Warrent Buffett đã giành nhau vị trí đứng đầu, tiếp sau đó là người sáng lập Tập đoàn Dell (mã chứng khoán niêm yết trên Nasdaq: DELL) Michael Dell, người sáng lập Oracle (ORCL - sàn Nasdaq) Larry Ellison, Chủ tịch Tập đoàn Las Vegas Sands (LVS - sàn NYSE) Sheldon Adelson.</p>
              </div>
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-4" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/2-loi-ceo-tre-phai-tranh-nid174.html" style="transform: perspective(2000px);"><img src="/images/news/174.jpg" alt="2 lỗi CEO Trẻ phải tránh !" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/2-loi-ceo-tre-phai-tranh-nid174.html" style="transform: perspective(2000px);">2 lỗi CEO Trẻ phải tránh !</a></strong>
                <p style="transform: perspective(2000px);">Việc thay đổi vai trò luôn chứa những cái bẫy khiến cho nhiều sếp mới lúng túng, thậm chí là mắc lỗi, nhất là với những sếp lần đầu được bổ nhiệm. Sự thay đổi này đòi hỏi ở bạn một sự điều chỉnh về mặt tư duy cho phù hợp với vai trò hiện tại. Điều này có thể nhận ra dễ dàng hơn khi phân tích cụ thể tính chất công việc của bạn trước và sau khi thăng chức.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/1-phut-huong-dan-quan-ly-tang-truong-dai-han-nid173.html" style="transform: perspective(2000px);"><img src="/images/news/173.jpg" alt="1 phút hướng dẫn quản lý tăng trưởng dài hạn" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/1-phut-huong-dan-quan-ly-tang-truong-dai-han-nid173.html" style="transform: perspective(2000px);">1 phút hướng dẫn quản lý tăng trưởng dài hạn</a></strong>
                <p style="transform: perspective(2000px);">Ghi nhớ tất cả các kế hoạch và nghiên cứu khởi động công việc kinh doanh nho nhỏ của bạn ư? Hy vọng rằng cố gắng đó đã mang lại những kết quả ít nhất cũng đáp ứng sự trông đợi của bạn bấy lâu. Bây giờ bạn cần tích luỹ quá trình đầu tư nghiên cứu và phân tích đó để tiếp tục những bước thành công ngắn hạn trong tương lai.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/13-nguyen-tac-danh-cho-nha-lanh-dao-nid172.html" style="transform: perspective(2000px);"><img src="/images/news/172.jpg" alt="13 nguyên tắc dành cho nhà lãnh đạo" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/13-nguyen-tac-danh-cho-nha-lanh-dao-nid172.html" style="transform: perspective(2000px);">13 nguyên tắc dành cho nhà lãnh đạo</a></strong>
                <p style="transform: perspective(2000px);">Dưới đây là 13 "nguyên tắc vàng" cho các nhà lãnh đạo hiện đại qua 13 câu nói đáng nhớ của những nhà lãnh đạo, diễn giả tài ba:</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ban-biet-gi-ve-ban-mo-ta-cong-viec-thuc-su-cua-mot-nguoi-lanh-dao-nid171.html" style="transform: perspective(2000px);"><img src="/images/news/171.jpg" alt="Bạn biết gì về Bản mô tả công việc thực sự của một người lãnh đạo?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ban-biet-gi-ve-ban-mo-ta-cong-viec-thuc-su-cua-mot-nguoi-lanh-dao-nid171.html" style="transform: perspective(2000px);">Bạn biết gì về Bản mô tả công việc thực sự của một người lãnh đạo?</a></strong>
                <p style="transform: perspective(2000px);">Jack Welch: trụ cột vàng trong giới quản lý hiện nay, ông có 17 năm thành công xuất sắc tại công ty General Electric - một công ty nhận được sự hoan nghênh nhất ở Mỹ - và đã rút lui vào năm 2001. Welch đưa ra một bộ khung gồm 4 yếu tố để tạo nên một nhà lãnh đạo vĩ đại: năng lượng tích cực, khả năng tiếp sinh lực cho mọi người, khả năng rèn luyện bản thân để tập trung sự dũng cảm khi đưa ra các quyết định khó khăn, và khả năng thực thi.</p>
              </div>
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-5" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/lam-sao-de-duoc-nhan-vien-tin-cay-nid170.html" style="transform: perspective(2000px);"><img src="/images/news/170.jpg" alt="Làm sao để được nhân viên tin cậy ?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/lam-sao-de-duoc-nhan-vien-tin-cay-nid170.html" style="transform: perspective(2000px);">Làm sao để được nhân viên tin cậy ?</a></strong>
                <p style="transform: perspective(2000px);">Ai cũng muốn được tin cậy. Làm sếp lại càng muốn được nhân viên tin, bởi có tin tưởng, thì họ mới làm tốt công việc của mình và gắn bó lâu dài với tổ chức. Nhưng làm thế nào để được họ tin?</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/canh-tranh-nhan-su-bang-moi-truong-lam-viec-nid169.html" style="transform: perspective(2000px);"><img src="/images/news/169.jpg" alt="Cạnh tranh nhân sự bằng môi trường làm việc" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/canh-tranh-nhan-su-bang-moi-truong-lam-viec-nid169.html" style="transform: perspective(2000px);">Cạnh tranh nhân sự bằng môi trường làm việc</a></strong>
                <p style="transform: perspective(2000px);">Sự phát triển bền vững của doanh nghiệp (DN) dựa trên nền tảng con người. Theo ông Cao Tiến Vị, Tổng Giám đốc Công ty Cổ phần Giấy Sài Gòn, trong tình hình cạnh tranh nhân lực như hiện nay, nếu không tạo dựng được môi trường làm việc thân thiện, DN sẽ khó giữ được chân người tài.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ceo-tre-thuong-gap-4-loi-sau-nid168.html" style="transform: perspective(2000px);"><img src="/images/news/168.jpg" alt="CEO trẻ thường gặp 4 lỗi sau" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ceo-tre-thuong-gap-4-loi-sau-nid168.html" style="transform: perspective(2000px);">CEO trẻ thường gặp 4 lỗi sau</a></strong>
                <p style="transform: perspective(2000px);">Năng động, có năng lực, nhiều nhiệt huyết; tuy nhiên nhiều vị sếp trẻ do chưa quen với vị trí quản lý, thường mắc phải 1 số nhược điểm sau.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/nhung-bai-hoc-de-doi-tu-ceo-mat-viec-nid167.html" style="transform: perspective(2000px);"><img src="/images/news/167.jpg" alt="Những bài học để đời từ CEO mất việc" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/nhung-bai-hoc-de-doi-tu-ceo-mat-viec-nid167.html" style="transform: perspective(2000px);">Những bài học để đời từ CEO mất việc</a></strong>
                <p style="transform: perspective(2000px);">Trong mấy tháng qua, cuộc khủng hoảng trên thị trường cho vay tín chấp “dưới chuẩn” và sự đóng băng của thị trường địa ốc Mỹ đã khiến nền kinh tế nước này phải hứng chịu hàng loạt tác động tiêu cực.</p>
              </div>
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
          </div>
          <span u="arrowleft" class="jssora12l" style="width: 20px; height:24px; bottom:-16px; left: 105px; border:1px #e1e1e1 solid;"></span><span u="arrowright" class="jssora12r" style="width:20px; height:24px; bottom:-16px; right: 105px; border:1px #e1e1e1 solid; "></span><script type="text/javascript">jssor_slider1_starter('slider1_container');</script></div>
      </div>
    </div>
  </div>
  <div class="cl" style="height:25px;"></div>
  <div class="cl" style="height:10px;"></div>
  <div class="cl" style="height:15px;"></div>
</div>
@endsection