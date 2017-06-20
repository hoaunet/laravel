@extends('layouts.master')
@section('title', 'Hướng nghiệp')
@section('content')
<ul class="box_m_news">
    @foreach($catagories as $catagory)
    	@if($catagory->parent_id !=0)
    		<li><a class="" href="/category/{{$catagory->id}}">{{$catagory->name}}</a></li> 
        @endif
    @endforeach
    
</ul>
<div class="adtop"><a href="#" target="_blank"><img src="/uploads/banners/homepage.JPG" alt="Banner top"></a></div>
<div class="FloatLeft W686">
  <div class="Inner5">
    <div class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="featured">
      <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
        <li class="ui-tabs-nav-item ui-state-default ui-corner-top ui-tabs-selected ui-state-active"> <a class="fragment-0" href="#fragment-0"> <span class="fm-1"></span>
          <div class="ScaleImage W80 H55"><img src="/images/news/457.jpg" alt="VIB thông báo tuyển dụng vị trí CV/ CV cao cấp Tư vấn Đầu tư tại HN, Hải Phòng (30/06/2017)" class="W80"></div>
          </a> </li>
        <li class="ui-tabs-nav-item ui-state-default ui-corner-top"> <a class="fragment-1" href="#fragment-1"> <span class="fm-1"></span>
          <div class="ScaleImage W80 H55"><img src="/images/news/456.jpg" alt="Seabank tuyển dụng vị trí Giao dịch viên tại Bắc Ninh, Hải Dương, Thái Nguyên, Vĩnh Phúc (31/07/2017)" class="W80"></div>
          </a> </li>
        <li class="ui-tabs-nav-item ui-state-default ui-corner-top"> <a class="fragment-2" href="#fragment-2"> <span class="fm-1"></span>
          <div class="ScaleImage W80 H55"><img src="/images/news/453.jpg" alt="Techcombank tuyển dụng tập trung 200 Giao dịch viên (không yêu cầu kinh nghiệm) tại Hà Nội (31/08/2017)" class="W80"></div>
          </a> </li>
        <li class="ui-tabs-nav-item ui-state-default ui-corner-top"> <a class="fragment-3" href="#fragment-3"> <span class="fm-1"></span>
          <div class="ScaleImage W80 H55"><img src="/images/news/455.JPG" alt="SHB thông báo tuyển dụng vị trí Chuyên viên nhân sự - Chi nhánh SHB tại Hà Nội 30/06/2017" class="W80"></div>
          </a> </li>
        <li class="ui-tabs-nav-item ui-state-default ui-corner-top"> <a class="fragment-4" href="#fragment-4"> <span class="fm-1"></span>
          <div class="ScaleImage W80 H55"><img src="/images/news/454.jpg" alt="SCB thông báo tuyển dụng vị trí Chuyên viên Kế Toán Nội Bộ 30/06/2017" class="W80"></div>
          </a> </li>
      </ul>
      <div id="fragment-0" class="ui-tabs-panel ui-widget-content ui-corner-bottom"> <img src="/images/news/457.jpg" alt="VIB thông báo tuyển dụng vị trí CV/ CV cao cấp Tư vấn Đầu tư tại HN, Hải Phòng (30/06/2017)" class="W591">
        <div class="info">
          <div class="Inner10"> <a href="/huong-nghiep/vib-thong-bao-tuyen-dung-vi-tri-cv-cv-cao-cap-tu-van-dau-tu-tai-hn-hai-phong-30-06-2017-nid457.html">VIB thông báo tuyển dụng vị trí CV/ CV cao cấp Tư vấn Đầu tư tại HN, Hải Phòng (30/06/2017)</a>
            <div class="Blank"></div>
            <div class="Blank"></div>
            Hoàn thành chỉ tiêu kinh doanh · Thực hiện theo đo lường bán hàng đã được phê duyệt · Phát triển nguồn pipeline </div>
        </div>
      </div>
      <div id="fragment-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide"> <img src="/images/news/456.jpg" alt="Seabank tuyển dụng vị trí Giao dịch viên tại Bắc Ninh, Hải Dương, Thái Nguyên, Vĩnh Phúc (31/07/2017)" class="W591">
        <div class="info">
          <div class="Inner10"> <a href="/huong-nghiep/seabank-tuyen-dung-vi-tri-giao-dich-vien-tai-bac-ninh-hai-duong-thai-nguyen-vinh-phuc-31-07-2017-nid456.html">Seabank tuyển dụng vị trí Giao dịch viên tại Bắc Ninh, Hải Dương, Thái Nguyên, Vĩnh Phúc (31/07/2017)</a>
            <div class="Blank"></div>
            <div class="Blank"></div>
            Hạn chót nộp hồ sơ: 31.07.2017 Khu vực làm việc: Bắc Ninh, Hải Dương, Thái Nguyên, Vĩnh Phúc Mức lương: Cạnh tranh Số Lượng Tuyển: 5 </div>
        </div>
      </div>
      <div id="fragment-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide"> <img src="/images/news/453.jpg" alt="Techcombank tuyển dụng tập trung 200 Giao dịch viên (không yêu cầu kinh nghiệm) tại Hà Nội (31/08/2017)" class="W591">
        <div class="info">
          <div class="Inner10"> <a href="/huong-nghiep/techcombank-tuyen-dung-tap-trung-200-giao-dich-vien-khong-yeu-cau-kinh-nghiem-tai-ha-noi-31-08-2017-nid453.html">Techcombank tuyển dụng tập trung 200 Giao dịch viên (không yêu cầu kinh nghiệm) tại Hà Nội (31/08/2017)</a>
            <div class="Blank"></div>
            <div class="Blank"></div>
            + Thực hiện các giao dịch tiền mặt và phi tiền mặt cho các khách hàng (như: mở tài khoản, nhận tiền gửi…) theo đúng thủ tục của TCB. + Cung cấp dịch vụ cho khách hàng một cách nhanh nhất, tốt nhất và đảm bảo thời gian chờ đợi của khách hàng là ít nhất </div>
        </div>
      </div>
      <div id="fragment-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide"> <img src="/images/news/455.JPG" alt="SHB thông báo tuyển dụng vị trí Chuyên viên nhân sự - Chi nhánh SHB tại Hà Nội 30/06/2017" class="W591">
        <div class="info">
          <div class="Inner10"> <a href="/huong-nghiep/shb-thong-bao-tuyen-dung-vi-tri-chuyen-vien-nhan-su-chi-nhanh-shb-tai-ha-noi-30-06-2017-nid455.html">SHB thông báo tuyển dụng vị trí Chuyên viên nhân sự - Chi nhánh SHB tại Hà Nội 30/06/2017</a>
            <div class="Blank"></div>
            <div class="Blank"></div>
            Là đầu mối làm việc với cơ quan Bảo hiểm xã hội Quản lý, cập nhật thông tin biến động nhân sự tại Chi nhánh Báo cáo định kỳ với Ban lãnh đạo về công tác nhân sự tại Chi nhánh và làm các công việc khác theo yêu cầu của Giám đốc Chi nhánh. </div>
        </div>
      </div>
      <div id="fragment-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide"> <img src="/images/news/454.jpg" alt="SCB thông báo tuyển dụng vị trí Chuyên viên Kế Toán Nội Bộ 30/06/2017" class="W591">
        <div class="info">
          <div class="Inner10"> <a href="/huong-nghiep/scb-thong-bao-tuyen-dung-vi-tri-chuyen-vien-ke-toan-noi-bo-30-06-2017-nid454.html">SCB thông báo tuyển dụng vị trí Chuyên viên Kế Toán Nội Bộ 30/06/2017</a>
            <div class="Blank"></div>
            <div class="Blank"></div>
            Trình độ học vấn: Đại học, tốt nghiệp các chuyên ngành: Chuyên ngành Kế toán, Tài chính ngân hàng hoặc các ngành khác có liên quan . · Ưu tiên có kinh nghiệm làm việc trong lĩnh vực kế toán ngân hàng. · Ngoại ngữ: Có khả năng đọc, hiểu tài liệu chuyên ngành hoặc tương đương trình độ B trở lên. </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">$(document).ready(function(){$('#featured').tabs({fx: {opacity: 'toggle'}}).tabs('rotate', 5000, true);});</script> 
  </div>
</div>

<div class="cl"></div>
<div class="FloatLeft W680">   
    <h1 class="link"><a href="#">Ngân hàng tuyển dụng</a></h1>        
    @foreach($articles as $article)
    <div class="listN">
        @if($article->articles_image !='')<a href="#"><img src="/uploads/news/{{$article->articles_image}}" alt="{{$article->title}}"></a>@endif
        <strong><a href="#">{{$article->title}} ({{date('d-m-Y', strtotime($article->created))}})</a></strong>        
        <p>{{$article->short_desc}}</p> 
        <br class="cl">
    </div> 
    @endforeach    
    </div>
<div class="FloatLeft W309">
  <div class="bgr2"><strong>Tin mới nhất</strong></div>
  <ul class="vipr newsr1">
   @foreach ($articles as $article)
    <li> <a class="img" href="#" title="{{$article->title}}"><img src="/images/news/457.jpg" alt="{{$article->title}}"></a>
      <div class="r"> <strong><a href="/news/{{$article->short_url}}/view" title="{{$article->title}}">{{$article->title}} (30/06/2017)</a></strong>
        <div>{{$article->short_desc}}</div>
      </div>
      <div class="cl"></div>
    </li>
    @endforeach
  </ul>
  <div class="avn"></div>
  <div class="bgr2 mtop"><strong>Tin nổi bật</strong></div>
  <ul class="vipr newsr1">
    <li> <a class="img" href="/huong-nghiep/mb-gia-han-nop-ho-so-tuyen-tap-trung-tren-toan-he-thong-15-03-nid447.html"><img src="/images/news/447.jpg" alt="MB GIA HẠN nộp hồ sơ tuyển tập trung trên toàn hệ thống 15/03"></a>
      <div class="r"> <strong><a href="/huong-nghiep/mb-gia-han-nop-ho-so-tuyen-tap-trung-tren-toan-he-thong-15-03-nid447.html">MB GIA HẠN nộp hồ sơ tuyển tập trung trên toàn hệ thống 15/03</a></strong>
        <div>An Giang Bà Rịa Vũng Tàu Bắc Giang Bắc Ninh Bình Định Bình Dương Bình Phước Bình Thuận Cà Mau Cam Ranh Cần Thơ Đà Nẵng Đắc Lắc Đồng Nai Đồng Tháp Gia Lai Hà Nam Hà Nội Hà Tĩnh</div>
      </div>
      <div class="cl"></div>
    </li>
  </ul>
</div>
@endsection