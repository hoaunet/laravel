@extends('layouts.master')
@section('title', 'Ứng viên')
@section('content')
<div class="adtop"><a href="/" target="_blank"><img src="/uploads/banners/homepage.JPG" alt="Cho nguoi tìm việc"></a></div>
<div class="bgs">
  <ul class="s">
    <li> <span>Tìm Tuyển Dụng Việt Nam trên:</span>
      <div class="fb-like fb_iframe_widget" ></div>
      <div class="gcong">
        <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 120px; height: 20px;"></div>
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
        <option value="1">Thỏa thuận</option>
        
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
  <div class="bgt">
    <div>Sắp xếp theo: <a id="abc" href="javascript:LoadM('#sort','abc','1')">ABC</a><span>|</span><a id="hot" href="javascript:LoadM('#sort','hot',1)">Ngành hot</a><span>|</span><a id="group" href="javascript:LoadM('#sort','group','1')" style="color: rgb(215, 33, 32); font-weight: bold;">Nhóm ngành</a></div>
    <strong>Tìm theo ngành nghề</strong> </div>
  <div class="box_tg" id="sort">
    <h3>Bạn đang xem danh sách ngành nghề sắp xếp theo: <b>Nhóm ngành</b></h3>
    <ul class="group">
      <?php $i=0;?>
      @foreach($careers as $career_search) <?php echo ($i%4==0)?'<li class="cl1">':''; ?> @if($career_search->parent_id==0) <big class="t">{{$career_search-> career_name}}</big> @endif
      @foreach($child_careers  as $child_career)
      @if($child_career->parent_id==$career_search->id) <a href="/employement/{{$child_career->id}}/detail">{{$child_career->career_name}}<span>(63)</span></a> @endif
      @endforeach
      <?php $i++;echo ($i%4==0)?'</li>':''; ?>
      @endforeach
      <li class="cl"></li>
    </ul>
    <div class="cl"></div>
  </div>
  <div class="bgt"> <strong></strong> </div>
  <div class="chuc_nang"> <span id="lblPage"> <a class="cpage">1</a> <a class="apage" href="#">2</a> <a class="apage" href="#">3</a> <a class="apage" href="/nguoi-tim-viec/page-4.html">4</a> <a class="apage" href="/nguoi-tim-viec/page-5.html">5</a> <a class="apage" href="/nguoi-tim-viec/page-2.html">Tiếp</a> <a class="apage" href="/nguoi-tim-viec/page-454.html">Cuối</a></span> <a href="javascript:luu_tin();"><img src="/images/save.gif" alt="icon">Lưu tin</a> <a href="#"><img src="/images/mail.gif" alt="icon">Gửi bạn bè</a> <a href="#"><img src="/images/tocao.gif" alt="icon">Tố cáo</a> </div>
  <div class="box_list_tren">
    <div class="col1">
      <input type="checkbox" id="selectall">
    </div>
    <div class="col2">Vị trí làm việc</div>
    <div class="col3">Nơi làm việc</div>
    <div class="col3">Mức lương</div>
    <div class="col4">Ngày làm mới</div>
    <div class="col5">Hạn nộp HS</div>
    <div class="cl"></div>
  </div>
  <span id="dlt_tin_TD"><span>
  <div class="box_list_duoi">
    <div class="col1">
      <input type="checkbox" id="chk_item0" class="case" name="chk_item[]" value="17167">
    </div>
    <div class="col2">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-media-id17167.html">Nhân viên Media</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
        <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16624.html">Công ty Cổ Phần Đạo Tạo VietFutre</a></p>
        <i>(3 lượt xem)</i> </div>
    </div>
    <div class="col3"><span>TP.HCM</span><span>Bình Dương</span><span>Đồng Nai</span></div>
    <div class="col3">7 - 10 triệu</div>
    <div class="col4">17-06</div>
    <div class="col5">31/07</div>
    <div class="cl"></div>
    <input type="hidden" id="tai_khoan0" value="16624">
  </div>
  </span><br>
  <span>
  <input type="hidden" name="tong_tin" id="tong_tin" value="30">
  <input type="hidden" name="checkedvalues" id="checkedvalues" value="0">
  <input type="hidden" name="dang_luu_ho_so" id="dang_luu_ho_so" value="">
  <div style=" clear:both; float:right; padding:10px 0;"> <a class="cpage">1</a> <a class="apage" href="/nguoi-tim-viec/page-2.html">2</a> <a class="apage" href="/nguoi-tim-viec/page-3.html">3</a> <a class="apage" href="/nguoi-tim-viec/page-4.html">4</a> <a class="apage" href="/nguoi-tim-viec/page-5.html">5</a> <a class="apage" href="/nguoi-tim-viec/page-2.html">Tiếp</a> <a class="apage" href="/nguoi-tim-viec/page-454.html">Cuối</a></div>
</div>
<div class="ctr">
  <div class="bgr2"><strong>Tuyển dụng vip</strong></div>
  <ul class="vipr">
  </ul>
  <div class="avr"></div>
  <div class="bgr2 mtop"><strong>Video tuyển dụng</strong></div>
  <div class="vipr"> </div>
  <div class="bgr2 mtop"><strong>Tuyển dụng theo ngôn ngữ</strong></div>
  <ul class="vipr">
    <li class="search"> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=1">Tiếng Anh (England)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=2">Tiếng Pháp (France)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=3">Tiếng Hàn Quốc (Korea)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=4">Tiếng Nhật Bản (Japan)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=6">Tiếng Trung Quốc (China)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=7">Tiếng Nga (Russia)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=8">Tiếng Đức (Germany)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=9">Thái Lan (Thailand)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=10">Tiếng Mã Lai (Malaysia)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=11">Indonesia</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=12">Tiếng Ả Rập </a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=13">Myanmar</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=14">Tiếng Hindi Hoặc Bengali</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=15">Ngôn Ngữ Khác</a> </li>
  </ul>
  <div class="bgr2 mtop"><strong>Tìm việc làm theo tính chất</strong></div>
  <ul class="vipr">
    <li class="search"> <a href="#">Việc làm lương từ 30 triệu trở lên</a> <a href="#">Việc làm lương từ 20 - 30 triệu</a> <a href="#">Việc làm lương từ 15 -20 triệu</a> <a href="#">Việc làm lương từ 10 - 15 triệu</a> <a href="#">Việc làm cấp quản lý</a> <a href="#">Việc làm bán thời gian</a> <a href="#s">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a> </li>
  </ul>
  <div class="bgr2 mtop"><strong>Cẩm nang việc làm</strong></div>
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

                    $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
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
            <div debug-id="slide-0" style="width: 255px; height: 360px; top: 0px; left: 0px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/nu-giam-doc-mat-viec-chi-boi-mot-cau-noi-cua-ong-lao-quet-rac-nid332.html" style="transform: perspective(2000px);"><img src="/images/news/332.jpg" alt="Nữ giám đốc mất việc chỉ bởi một câu nói của Ông lão quét rác" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/nu-giam-doc-mat-viec-chi-boi-mot-cau-noi-cua-ong-lao-quet-rac-nid332.html" style="transform: perspective(2000px);">Nữ giám đốc mất việc chỉ bởi một câu nói của Ông lão quét rác</a></strong>
                <p style="transform: perspective(2000px);">Một nữ giám đốc cao quý gặp phải một “ông lão quét rác”, lại vì một câu nói của ông mà khiến cho người này mất việc, nguyên do chỉ bởi một thói quen không nên có của con người.</p>
              </div>
              
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-1" style="width: 255px; height: 360px; top: 0px; left: 255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/nhung-goi-y-ghi-diem-voi-nha-tuyen-dung-ngay-tu-lan-gap-dau-tien-nid209.html" style="transform: perspective(2000px);"><img src="/images/news/209.jpg" alt="Những gợi ý &quot;Ghi Điểm&quot; với Nhà tuyển dụng ngay từ lần gặp đầu tiên" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/nhung-goi-y-ghi-diem-voi-nha-tuyen-dung-ngay-tu-lan-gap-dau-tien-nid209.html" style="transform: perspective(2000px);">Những gợi ý "Ghi Điểm" với Nhà tuyển dụng ngay từ lần gặp đầu tiên</a></strong>
                <p style="transform: perspective(2000px);">- Chưa được mời đã kéo ghế ngồi. - Bắt tay hờ hững. - Ánh mắt luôn lảng tránh cái nhìn của người hỏi. - Luôn luôn ngọ nguậy trên ghế ngồi.</p>
              </div>
              
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-2" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/15-dieu-khong-nen-noi-khi-phong-van-nid122.html" style="transform: perspective(2000px);"><img src="/images/news/122.jpg" alt="15 điều không nên nói khi phỏng vấn" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/15-dieu-khong-nen-noi-khi-phong-van-nid122.html" style="transform: perspective(2000px);">15 điều không nên nói khi phỏng vấn</a></strong>
                <p style="transform: perspective(2000px);">Bạn đừng bao giờ đi phỏng vấn khi không biết điều gì ngoài vị trí đang tuyển dụng. Bạn có thể tìm kiếm thông tin trên internet hoặc hỏi han người từng làm việc trước đó. Quy tắc đầu tiên của một cuộc phỏng vấn: Hãy tìm hiểu trước</p>
              </div>
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-3" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/“bi-kip”-cho-nhung-ung-vien-moi-ra-truong-nid96.html" style="transform: perspective(2000px);"><img src="/images/news/96.jpg" alt="“Bí kíp” cho những ứng viên mới ra trường" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/“bi-kip”-cho-nhung-ung-vien-moi-ra-truong-nid96.html" style="transform: perspective(2000px);">“Bí kíp” cho những ứng viên mới ra trường</a></strong>
                <p style="transform: perspective(2000px);">Theo điều tra thống kê của Đại học Rutgers, so với năm 2010, năm 2011, các nhà tuyển dụng đã “thâu nạp” nhiều hơn 19% số nhân viên vừa tốt nghiệp. Dẫu vậy thì thị trường việc làm vẫn còn khá ảm đạm. Làm thế nào để bạn nâng cao khả năng tìm và giữ được một công việc như mong muốn? Dưới đây là những bí kíp:</p>
              </div>
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
          </div>
          <span u="arrowleft" class="jssora12l" style="width: 20px; height:24px; bottom:-16px; left: 105px; border:1px #e1e1e1 solid;"></span><span u="arrowright" class="jssora12r" style="width:20px; height:24px; bottom:-16px; right: 105px; border:1px #e1e1e1 solid; "></span><script type="text/javascript">jssor_slider1_starter('slider1_container');</script></div>
      </div>
    </div>
  </div>
  <div class="cl" style="height:25px;"></div>
</div>
@endsection