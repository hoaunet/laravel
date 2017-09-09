@extends('layouts.master')
@section('title', 'Tuyển dụng S3S')
@section('homeclass', 'class=ac')
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
@include('Layouts.boxsearch')
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
@include('Layouts.sidebar')
@endsection