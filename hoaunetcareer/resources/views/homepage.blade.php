@extends('layouts.master')
@section('title', 'Tuyển dụng S3S')
@section('content')
<link rel="stylesheet" href="/css/tinyscrollbar.css" type="text/css" media="screen" />
<script type="text/javascript" src="/js/tinyscrollbar.js"></script>
<script type="text/javascript">
        window.onload = function()
        {
            var $scrollbar = document.getElementById("scrollbar1"), scrollbar  = tinyscrollbar($scrollbar);
            $scrollbar.addEventListener("move", function(){console.log(scrollbar.contentPosition);}, false);
        }
    </script>

<div class="adtop"><a href="#" target="_blank"><img src="/uploads/banners/homepage.JPG" alt="Banner top"></a></div>
<div class="count" style="display:none;"> <strong>Hiện tại đang có khoảng <b>50.000</b> thành viên đang tham gia hệ thống </strong> </div>
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
  <form  name="search_employment" method="post" action="/employement/search">
  {{ csrf_field() }}
  <ul>
    <li class="s1">
      <input name="txtS1" type="text" id="txtS1" placeholder="Nhập tiêu đề công việc, tên NTD, địa điểm để tìm kiếm">
    </li>
    <li class="s2"><select name="drpNganhNghe" id="drpNganhNghe">
                    <option value="Tất cả ngành nghề">Tất cả ngành nghề</option>
                    @if(count($careers) >0)
                      @foreach($careers as $career)
                        <option value="{{$career->id}}">{{$career->career_name}}</option> 
                      @endforeach
                   @endif
                     </select>     
    </li>
    <li class="s3"><select name="drpDiaDiem" id="drpDiaDiem">
                            <option value="Tất cả địa điểm">Tất cả địa điểm</option>
                     @if(count($provinces) >0)
                      @foreach($provinces as $province)
                        <option value="{{$province->id}}">{{$province->province_name}}</option> 
                      @endforeach
                    @endif
      </select>
    </li>
    <li class="s4"><select name="drpMucLuong" id="drpMucLuong">
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
  </form>
</div>
<div class="boxM">
  <div class="bg">
    <div class="t">Chuyên mục: Tuyển dụng kinh doanh</div>
    <div id="scrollbar1">
      <div class="scrollbar" style="height: 145px;">
        <div class="track" style="height: 145px;">
          <div class="thumb" style="top: 0px; height: 113.038px;">
            <div class="end"></div>
          </div>
        </div>
      </div>
      <div class="viewport">
        <div class="overview" style="top: 0px;">
         @foreach($careers as $career1)
             @if($career1->parent_id==119)
          <div class="m"><a href="/employement/{{$career1->id}}/career">{{$career1->career_name}} <span>(268)</span></a></div>
             @endif
         @endforeach 
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bgt"><strong>Tuyển gấp</strong></div>
<div class="box_tg">
  @foreach($employments as $employment)

  <div class="list_tg">
    <div class="bor1"> <strong><a class="red1" href="/employement/{{$employment->id}}/detail">{{$employment->title}} </a></strong>
      <p><a href="/employer/{{$employment->companyuser_id}}/company">{{$employment->name}} </a></p>
    </div>
  </div>
  @endforeach
  <div class="cl"></div>
</div>
<div class="av2"><a href="#" target="_blank"><img src="/uploads/banners/homepage_middle_banner.jpg" alt="Ảnh 1"></a></div>
<div class="ctl">
  <div class="bgt">
    <div>Sắp xếp theo: <a id="abc" href="javascript:LoadM('#sort','abc','1')">ABC</a><span>|</span><a id="hot" href="javascript:LoadM('#sort','hot',1)">Ngành hot</a><span>|</span><a id="group" href="javascript:LoadM('#sort','group','1')" style="color: rgb(215, 33, 32); font-weight: bold;">Nhóm ngành</a></div>
    <strong>Tìm theo ngành nghề</strong> </div>
  <div class="box_tg" id="sort">
    <h3>Bạn đang xem danh sách ngành nghề sắp xếp theo: <b>Nhóm ngành</b></h3>
    <ul class="group">
     
      <?php $i=0;?>       
       @foreach($careers as $career_search)
         <?php echo ($i%4==0)?'<li class="cl1">':''; ?>  
          @if($career_search->parent_id==0)
              <big class="t">{{$career_search-> career_name}}</big>
          @endif
          @foreach($child_careers  as $child_career)
              @if($child_career->parent_id==$career_search->id)
                  <a href="/employement/{{$child_career->id}}/career">{{$child_career->career_name}}<span>(63)</span></a>
              @endif
          @endforeach
          <?php $i++;echo ($i%4==0)?'</li>':''; ?>     
        @endforeach
        
      <li class="cl"></li>
    </ul>
    <div class="cl"></div>
  </div>
  
  <div class="bgt"><strong>Việc làm hấp dẫn</strong></div>
  <div class="box_tg">
    @foreach($employment_hots as $employment_hot)
      <div class="list_tg">
        <div class="bor1"> <strong><a class="red1" href="/employement/{{$employment_hot->id}}/detail">{{$employment_hot->title}}</a></strong>
          <p><a href="/employer/{{$employment_hot->companyuser_id}}/company">{{$employment_hot->name}} </a></p>
        </div>
      </div>
      @endforeach    
    <div class="cl"></div>
  </div>
  <div class="bgt" style="margin-top:15px;">
    <div>
      <select name="drpC" id="drpC" onchange="">
        <option value="--Tất cả--">--Tất cả--</option>
         <option value="Tất cả địa điểm">Tất cả địa điểm</option>
             @if(count($provinces) >0)
              @foreach($provinces as $province)
                <option value="{{$province->id}}">{{$province->province_name}}</option> 
              @endforeach
            @endif
      </select>
    </div>
    <strong>Việc làm mới nhất</strong> </div>
  <div id="workn">
    <div class="box_tg">      
      @foreach($employments as $employment)
      <div class="list_tg" style="width:330px;">
      <div class="">
        <div class="bor1"> <strong><a class="red1" href="/employement/{{$employment->id}}/detail">{{$employment->title}} <span style="font-weight:normal; color:Red;">(Mới)</span></a></strong>
          <p><a href="/employer/{{$employment->companyuser_id}}/company">{{$employment->name}} </a></p>
        </div>
      </div>
      </div>
      @endforeach   
      
      <div class="cl"></div>
    </div>
  </div>
</div>
<div class="ctr">
 <!-- <div class="bgr mtop"><strong>Video tuyển dụng</strong></div>
  <div class="vipr">

  </div>-->
  <div class="bgr mtop"><strong>Tìm ứng viên theo tính chất</strong></div>
  <ul class="vipr">
    <li class="search"> 
       <a href="#">Việc làm lương từ 30 triệu trở lên</a> 
       <a href="#">Việc làm lương từ 20 - 30 triệu</a> 
       <a href="#">Việc làm lương từ 15 -20 triệu</a> 
       <a href="#">Việc làm lương từ 10 - 15 triệu</a> 
       <a href="#">Việc làm cấp quản lý</a>
       <a href="#">Việc làm bán thời gian</a> 
       <a href="#">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a> </li>
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
                @foreach($articles as $article)
              <div class="list_newr" style="transform: perspective(2000px);">
                 @if($article->articles_image !='')
                <a class="img" href="/news/{{$article->short_url}}/view" style="transform: perspective(2000px);">
                <img src="/uploads/{{$article->articles_image}}" alt="{{ $article->title}}" style="transform: perspective(2000px);"></a>
                @endif<strong style="transform: perspective(2000px);"><a href="/news/{{$article->short_url}}/view" style="transform: perspective(2000px);">{{ $article->title}}</a></strong>
                <p style="transform: perspective(2000px);">{{ $article->short_desc}}</p>
              </div>
              @endforeach
              
              
              <div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div>
            </div>
            <div debug-id="slide-1" style="width: 255px; height: 360px; top: 0px; left: 255px; position: absolute; overflow: hidden; transform: perspective(2000px);">
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html" style="transform: perspective(2000px);"><img src="/images/news/195.jpg" alt="Lý giải các mô hình quản lý nhân lực" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html" style="transform: perspective(2000px);">Lý giải các mô hình quản lý nhân lực</a></strong>
                <p style="transform: perspective(2000px);">Tất cả những người làm công tác quản lý đều có mối quan tâm đặc biệt cũng như có xu hướng đưa ra những phán đoán về tính cách của nhân viên. Thông qua những phán đoán này mà người quản lý đưa ra sách lược quản lý riêng cho từng mẫu người. Vậy phương pháp nghiên cứu để đưa ra những phán đoán như thế nào?</p>
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