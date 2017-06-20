@extends('layouts.master')
@section('title', 'Nhà tuyển dụng')
@section('content')
<ul class="box_admin">
    <li><a href="/ntdAdmin.aspx?id=2">Quản lý tuyển dụng</a></li>
    <li><span>|</span></li>
    <li><a href="/ntdAdmin.aspx?id=3">Tin TD đã đăng</a></li>
    <li><span>|</span></li>
    <li><a href="/ntdAdmin.aspx?id=4&amp;p=0">Tạo tin TD mới</a></li>
    <li><span>|</span></li>
    <li><a href="/ntdAdmin.aspx?id=5">Quản lý hồ sơ ứng viên</a></li>
    <li><span>|</span></li>
    <li><a href="/ntdAdmin.aspx?id=6">Phản hồi của NTV</a></li>
    <li><span>|</span></li>
    <li><a href="ntd-dang-ky.aspx?id=2">Thông tin NTD</a></li>
    <li><span>|</span></li>
    <li><a href="/ntdAdmin.aspx?id=8">Thông báo của BQT</a></li>
</ul>
<div class="adtop"><a href="/" target="_blank"><img src="/uploads/banners/homepage.JPG" alt=""></a></div>
<div class="ctl">
  <div class="box_tg">
    <div class="bgt"><strong>Chuyên mục tuyển dụng kinh doanh</strong></div>
    <ul class="hot" style="padding-top:15px;">
      @foreach($careers as $career1)
      @if($career1->parent_id==119)
      <li style="width:230px;"><a href="/employement/{{$career1->id}}/detail">{{$career1->career_name}}<span>(359)</span></a></li>
      @endif
      @endforeach
    </ul>
  </div>
  <div class="cl bgt"><strong>Ứng viên tiêu biểu</strong></div>
  <ul class="box_xem_nhieu">
    <li>
      <div class=""> <img class="img" src="/images/user/14721.jpg" alt="Phan thị thu sương"> <strong style="background:none;"><a class="" href="/nha-tuyen-dung/giao-dich-vien-id4351.html">Giao dich viên</a></strong>
        <p><a href="/nha-tuyen-dung/giao-dich-vien-id4351.html">Phan thị thu sương</a></p>
      </div>
    </li>
    <li class="clear_fix"></li>
  </ul>
  <div class="cl bgt"><strong>Hồ sơ ứng viên được nhiều người xem</strong></div>
  <ul class="box_xem_nhieu">
    <li>
      <div class=""> <strong><a class="" href="/nha-tuyen-dung/ky-su-xay-dung-id1595.html">Kỹ sư xây dựng </a></strong>
        <p><a href="/nha-tuyen-dung/ky-su-xay-dung-id1595.html">Huỳnh Minh Tài</a></p>
      </div>
    </li>
    <li class="clear_fix"></li>
  </ul>
  <div class="cl bgt">
    <div>Sắp xếp theo: <a id="abc" href="javascript:LoadM('#sort','abc','1')">ABC</a><span>|</span><a id="hot" href="javascript:LoadM('#sort','hot',1)">Ngành hot</a><span>|</span><a id="group" href="javascript:LoadM('#sort','group','1')" style="color: rgb(215, 33, 32); font-weight: bold;">Nhóm ngành</a></div>
    <strong>Danh sách ngành nghề</strong> </div>
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
  <div class="bgt" style="margin-top:15px;">
    <div>
      <select name="drpC" id="drpC" onchange="javascript:workntv('#workn')">
        <option value="--Tất cả--">--Tất cả--</option>
        
        
        
        @if(count($provinces) >0)
          @foreach($provinces as $province)
            
        
        
        <option value="{{$province->id}}">{{$province->province_name}}</option>
        
        
         
          @endforeach
        @endif
      
      
      
      </select>
    </div>
    <strong>Hồ sơ ứng viên mới nhất</strong> </div>
  <div id="workn">
    <ul class="box_xem_nhieu">
      <li style="height:45px;">
        <div class=""> <img class="img" src="/images/user/null.gif" alt="Mai Nguyễn Như Ý"> <strong style="background:none;"><a class="" href="/nha-tuyen-dung/nhan-vien-ban-hang-thu-ngan-id4376.html">Nhân viên bán hàng , thu ngân </a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
          <p><a href="/nha-tuyen-dung/nhan-vien-ban-hang-thu-ngan-id4376.html">Mai Nguyễn Như Ý</a></p>
        </div>
      </li>
      <li class="clear_fix"></li>
    </ul>
  </div>
</div>
<div class="ctr">
  <div class="bgr"><strong><img src="/images/search.png" alt="icon" style="vertical-align:middle;"> Tìm nhanh ứng viên</strong></div>
  <ul class="vipr">
    <li class="sr">
      <div class="l">Ngành nghề</div>
      <div class="r">
        <select name="ctlr$drpNN" id="ctlr_drpNN" class="textbox" style="width:140px;">
          <option value="--Chọn nghành nghề--">--Chọn nghành nghề--</option>
          
          
          
          @if(count($careers) >0)
                      @foreach($careers as $career)
                        
          
          
          <option value="{{$career->id}}">{{$career->career_name}}</option>
          
          
           
                      @endforeach
                   @endif        
        
        
        </select>
      </div>
      <div class="cl"></div>
      <div class="l">Học vấn</div>
      <div class="r">
        <select name="ctlr$drpBC" id="ctlr_drpBC" class="textbox" style="width:140px;">
          <option value="--Trình độ học vấn--">--Trình độ học vấn--</option>
          
          
          @if(count($degrees) >0)
                      @foreach($degrees as $degree)
                        
          
          
          <option value="{{$degree->id}}">{{$degree->career_name}}</option>
          
          
           
                      @endforeach
                   @endif  
        
        
        </select>
      </div>
      <div class="cl"></div>
      <div class="l">Địa điểm</div>
      <div class="r">
        <select name="ctlr$drpCity" id="ctlr_drpCity" class="textbox" style="width:140px;">
          <option value="--Chọn địa điểm--">--Chọn địa điểm--</option>
          
          
          
          @if(count($provinces) >0)
                      @foreach($provinces as $province)
                        
          
          
          <option value="{{$province->id}}">{{$province->province_name}}</option>
          
          
           
                      @endforeach
                    @endif
        
        
        
        </select>
      </div>
      <div class="cl"></div>
      <div class="l">Mức lương</div>
      <div class="r">
        <select name="ctlr$drpML" id="ctlr_drpML" class="textbox" style="width:140px;">
          <option value="--Chọn mức lương--">--Chọn mức lương--</option>
          
          
          
          @if(count($salaries) >0)
              @foreach($salaries as $salarie)
                
          
          
          <option value="{{$salarie->id}}">{{$salarie->name}}</option>
          
          
           
              @endforeach
            @endif
        
        
        
        </select>
      </div>
      <div class="cl"></div>
      <div class="l">Kinh nghiệm</div>
      <div class="r">
        <select name="ctlr$drpKN" id="ctlr_drpKN" class="textbox" style="width:140px;">
          <option value="--Chọn số năm kinh nghiệm--">--Chọn số năm kinh nghiệm--</option>
          
          
          
          @if(count($experiences) >0)
              @foreach($experiences as $experience)
                
          
          
          <option value="{{$experience->id}}">{{$experience->name}}</option>
          
          
           
              @endforeach
            @endif
        
        
        
        </select>
      </div>
      <div class="cl"></div>
      <div class="l">Ngoại ngữ</div>
      <div class="r">
        <select name="ctlr$drpNgoaiN" id="ctlr_drpNgoaiN" class="textbox" style="width:140px;">
          <option value="--Chọn ngoại ngữ--">--Chọn ngoại ngữ--</option>
          
          
          
           @if(count($languages) >0)
              @foreach($languages as $language)
                
          
          
          <option value="{{$language->id}}">{{$language->name}}</option>
          
          
           
              @endforeach
            @endif
          
        
        
        
        </select>
      </div>
      <div class="cl"></div>
      <div class="l" style="text-align:right;">
        <input type="image" name="ctlr$btnSr" id="ctlr_btnSr" class="isr" src="/images/btnTimkiem.gif" style="border-width:0px;">
      </div>
      <div class="r">
        <input type="image" name="ctlr$btnHuy" id="ctlr_btnHuy" src="/images/btnHuyTimkiem.gif" style="border-width:0px;">
      </div>
      <div class="cl"></div>
    </li>
  </ul>
  <div class="avr"></div>
  <div class="bgr mtop"><strong>Video tuyển dụng</strong></div>
  <div class="vipr"> </div>
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
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/cam-nang-tuyen-dung-viec-lam-voi-nguoi-nhat-nid259.html" style="transform: perspective(2000px);"><img src="/images/news/259.jpg" alt="Cẩm nang tuyển dụng việc làm với người Nhật" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/cam-nang-tuyen-dung-viec-lam-voi-nguoi-nhat-nid259.html" style="transform: perspective(2000px);">Cẩm nang tuyển dụng việc làm với người Nhật</a></strong>
                <p style="transform: perspective(2000px);">Khi một người Nhật được một công ty Nhật tuyển dụng, họ có thể sẽ không nhận được một bản miêu tả công việc chính xác; nhân viên mới có thể thậm chí không biết lương và phúc lợi của họ sẽ thế nào, một tình thế mà không mấy người phương Tây cảm thấy thoải mái. Người phương Tây muốn lời hứa phải được nói rõ ràng. Người Nhật đặt lòng tin nhiều hơn vào những vấn đề khác - uy tín của công ty hay người đã tiến cử ứng viên.</p>
              </div>
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-1" style="width: 255px; height: 360px; top: 0px; left: 255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html" style="transform: perspective(2000px);"><img src="/images/news/195.jpg" alt="Lý giải các mô hình quản lý nhân lực" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html" style="transform: perspective(2000px);">Lý giải các mô hình quản lý nhân lực</a></strong>
                <p style="transform: perspective(2000px);">Tất cả những người làm công tác quản lý đều có mối quan tâm đặc biệt cũng như có xu hướng đưa ra những phán đoán về tính cách của nhân viên. Thông qua những phán đoán này mà người quản lý đưa ra sách lược quản lý riêng cho từng mẫu người. Vậy phương pháp nghiên cứu để đưa ra những phán đoán như thế nào?</p>
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
  <div class="fb-page" data-href="https://www.facebook.com/tuyendungvn" data-width="400" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
    <div class="fb-xfbml-parse-ignore">
      <blockquote cite="https://www.facebook.com/tuyendungvn"><a href="https://www.facebook.com/tuyendungvn">Tuyển Dụng Việt Nam</a></blockquote>
    </div>
  </div>
  <div class="cl" style="height:10px;"></div>
  <div id="___person_0" style="position: absolute; width: 450px; left: -10000px;"> </div>
  <div class="cl" style="height:15px;"></div>
</div>
@endsection