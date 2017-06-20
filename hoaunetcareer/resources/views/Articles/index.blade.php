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
<div class="FloatLeft W309 Inner5">
  <input name="txtS" type="text" id="txtS" class="txt" placeholder="Tìm kiếm">
  <input type="image" name="btns" id="btns" src="/images/btns-tim_kiem.gif" style="border-width:0px;">
  <ul class="list">
    <li> <a href="/huong-nghiep/nguoi-tre-viet-nen-chon-nganh-gi-de-co-luong-2-000usd-nid452.html"><img src="/images/news/452.jpg" alt="Người trẻ Việt nên chọn ngành gì để có lương 2.000USD?"></a> <strong class="t"><a href="/huong-nghiep/nguoi-tre-viet-nen-chon-nganh-gi-de-co-luong-2-000usd-nid452.html">Người trẻ Việt nên chọn ngành gì để có l</a></strong>
      <div>Chương trình đã thu hút đông đảo học sinh, sinh viên và cả những bậc phụ huynh hứng thú tham gia. Chỉ trong ngày này, hơn 100 sinh viên đã được tuyển dụng trực tiếp từ các doanh nghiệp CNTT tại các vị trí thực tập có lương và nhân viên chính thức. Thêm vào đó, rất nhiều doanh nghiệp đã tham gia ký cam kết tuyển dụng sinh viênAPTECH.</div>
    </li>
    <li> <strong class="d"><a href="/huong-nghiep/tpbank-tuyen-dung-giao-dich-vien-tai-hoi-so-ha-noi-tphcm-07-05-2017-nid451.html">TPBank tuyển dụng Giao dịch viên tại Hội sở (Hà Nội &amp; TPHCM) (07.05.2017)</a></strong> </li>
    <li> <strong class="d"><a href="/huong-nghiep/ngan-hang-cong-thuong-trung-quoc-icbc-tuyen-dung-nhan-tai-co-van-phap-ly-nv-qhkh-giao-dich-vien-nid450.html">Ngân hàng Công thương Trung Quốc (ICBC) tuyển dụng nhân tài - cố vấn pháp lý, NV QHKH, Giao dịch viên</a></strong> </li>
    <li> <strong class="d"><a href="/huong-nghiep/hot-vietinbank-tuyen-dung-gan-1100-chi-tieu-tai-132-chi-nhanh-tren-toan-he-thong-2017-13-04-2017-nid449.html">HOT VietinBank tuyển dụng gần 1100 chỉ tiêu tại 132 chi nhánh trên toàn hệ thống 2017 (13.04.2017)</a></strong> </li>
    <li> <strong class="d"><a href="/huong-nghiep/seabank-tuyen-dung-122-vi-tri-tren-toan-he-thong-trong-thang-3-4-2017-nid448.html">SeABank tuyển dụng 122 vị trí TRÊN TOÀN HỆ THỐNG trong tháng 3 &amp; 4/2017</a></strong> </li>
  </ul>
</div>
<div class="cl"></div>
<div class="FloatLeft W680">
  <div class="boxM grhh">
    <div class="bg">
      <div class="t">Video tuyển dụng Việt Nam</div>
      <div style="padding:0 0 0 10px; width:400px; float:left;">
        <div id="video">
          
        </div>
      </div>
      <div style="width:200px; float:left;">
        <div id="scrollbar3">
          <div class="scrollbar" style="height: 250px;">
            <div class="track" style="height: 250px;">
              <div class="thumb" style="top: 0px; height: 153.186px;">
                <div class="end"></div>
              </div>
            </div>
          </div>
          <div class="viewport">
            <div class="overview" style="top: 0px;"> <a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','dTA4EmnG9SQ')">Hướng dẫn Đăng ký NTD</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','D1ZGzXMUIvA')">Cơ hội việc làm trong các DN Nhật Bản tại Việt Nam (ANTV)</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','ge8jKfK1geE')">Kỹ năng trả lời phỏng vấn bằng tiếng anh</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','2uHknAZYPlg')">Tìm việc Giao dịch viên trong Ngân hàng - những điều cần biết </a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','4VNSABWd3NQ')">Cẩm Nang Tìm Việc Trên Mạng - Nguồn VTV</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','Zz-Tufh-Ta4')">Kỹ năng phỏng vấn </a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','r8t8jIMl7fs')">BÍ QUYẾT THÀNH CÔNG KINH ĐIỂN CỦA JIM JOHN [TAP 1]</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','gza1iGWEk_M')">BÍ QUYẾT THÀNH CÔNG KINH ĐIỂN CỦA JIM JOHN [TẬP 2]</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','pyBs5PiTdYI')">BÍ QUYẾT THÀNH CÔNG KINH ĐIỂN CỦA JIM JOHN [TẬP 3]</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','p9aqX72WuLI')">BÍ QUYẾT THÀNH CÔNG KINH ĐIỂN CỦA JIM JOHN [TẬP 4]</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','reW6Dtj5YQ4')">CLIP Đọc ráp của Ngân Hàng LienVietPostBank gây sốt !</a><a class="titvideo" style="color:#666; font-weight:bold;" href="javascript:vdnew('#video','8taDI5-tO5A')">[TUYỂN DỤNG VIỆT NAM] Tin nhanh: Chen chân nộp hồ sơ thi vào cục thuế Hà Nội trong ngày cuối </a> </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
                var $scrollbar = document.getElementById("scrollbar3"), scrollbar  = tinyscrollbar($scrollbar);
                $scrollbar.addEventListener("move", function(){console.log(scrollbar.contentPosition);}, false);
            </script>
      <div class="cl"></div>
    </div>
  </div>
  <?php //print_r($catagories);?>
  <div class="boxM grhh" style="border:3px #10ae44 solid;">
    <div class="bg">
      <div class="t"><a href="/huong-nghiep/ngan-hang-tuyen-dung-c112.html">Ngân hàng tuyển dụng</a></div>
      <ul class="list">
        <li> <a href="/huong-nghiep/vib-thong-bao-tuyen-dung-vi-tri-cv-cv-cao-cap-tu-van-dau-tu-tai-hn-hai-phong-30-06-2017-nid457.html"><img src="/images/news/457.jpg" alt="VIB thông báo tuyển dụng vị trí CV/ CV cao cấp Tư vấn Đầu tư tại HN, Hải Phòng (30/06/2017)"></a> <strong><a href="/huong-nghiep/vib-thong-bao-tuyen-dung-vi-tri-cv-cv-cao-cap-tu-van-dau-tu-tai-hn-hai-phong-30-06-2017-nid457.html">VIB thông báo tuyển dụng vị trí CV/ CV cao cấp Tư vấn Đầu tư tại HN, Hải Phòng (30/06/2017)</a></strong>
          <div>Hoàn thành chỉ tiêu kinh doanh · Thực hiện theo đo lường bán hàng đã được phê duyệt · Phát triển nguồn pipeline</div>
        </li>
        <li> <a href="/huong-nghiep/seabank-tuyen-dung-vi-tri-giao-dich-vien-tai-bac-ninh-hai-duong-thai-nguyen-vinh-phuc-31-07-2017-nid456.html"><img src="/images/news/456.jpg" alt="Seabank tuyển dụng vị trí Giao dịch viên tại Bắc Ninh, Hải Dương, Thái Nguyên, Vĩnh Phúc (31/07/2017)"></a> <strong><a href="/huong-nghiep/seabank-tuyen-dung-vi-tri-giao-dich-vien-tai-bac-ninh-hai-duong-thai-nguyen-vinh-phuc-31-07-2017-nid456.html">Seabank tuyển dụng vị trí Giao dịch viên tại Bắc Ninh, Hải Dương, Thái Nguyên, Vĩnh Phúc (31/07/2017)</a></strong>
          <div>Hạn chót nộp hồ sơ: 31.07.2017 Khu vực làm việc: Bắc Ninh, Hải Dương, Thái Nguyên, Vĩnh Phúc Mức lương: Cạnh tranh Số Lượng Tuyển: 5</div>
        </li>
        <li> <a href="/huong-nghiep/techcombank-tuyen-dung-tap-trung-200-giao-dich-vien-khong-yeu-cau-kinh-nghiem-tai-ha-noi-31-08-2017-nid453.html"><img src="/images/news/453.jpg" alt="Techcombank tuyển dụng tập trung 200 Giao dịch viên (không yêu cầu kinh nghiệm) tại Hà Nội (31/08/2017)"></a> <strong><a href="/huong-nghiep/techcombank-tuyen-dung-tap-trung-200-giao-dich-vien-khong-yeu-cau-kinh-nghiem-tai-ha-noi-31-08-2017-nid453.html">Techcombank tuyển dụng tập trung 200 Giao dịch viên (không yêu cầu kinh nghiệm) tại Hà Nội (31/08/2017)</a></strong>
          <div>+ Thực hiện các giao dịch tiền mặt và phi tiền mặt cho các khách hàng (như: mở tài khoản, nhận tiền gửi…) theo đúng thủ tục của TCB. + Cung cấp dịch vụ cho khách hàng một cách nhanh nhất, tốt nhất và đảm bảo thời gian chờ đợi của khách hàng là ít nhất</div>
        </li>
      </ul>
      <div class="cl"></div>
    </div>
  </div>
<!-- -->  
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
  <div class="avn"><a href="http://tuyendungvietnam.com.vn/ntv-dang-ky.aspx" target="_blank"><img src="/images/advert/135.jpg" alt="Quảng cáo 1"></a></div>
  <div class="bgr2 mtop"><strong>Tin nổi bật</strong></div>
  <ul class="vipr newsr1">
    <li> <a class="img" href="/huong-nghiep/mb-gia-han-nop-ho-so-tuyen-tap-trung-tren-toan-he-thong-15-03-nid447.html"><img src="/images/news/447.jpg" alt="MB GIA HẠN nộp hồ sơ tuyển tập trung trên toàn hệ thống 15/03"></a>
      <div class="r"> <strong><a href="/huong-nghiep/mb-gia-han-nop-ho-so-tuyen-tap-trung-tren-toan-he-thong-15-03-nid447.html">MB GIA HẠN nộp hồ sơ tuyển tập trung trên toàn hệ thống 15/03</a></strong>
        <div>An Giang Bà Rịa Vũng Tàu Bắc Giang Bắc Ninh Bình Định Bình Dương Bình Phước Bình Thuận Cà Mau Cam Ranh Cần Thơ Đà Nẵng Đắc Lắc Đồng Nai Đồng Tháp Gia Lai Hà Nam Hà Nội Hà Tĩnh</div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/tpbank-tuyen-dung-thuc-tap-sinh-tiem-nang-vi-tri-gdv-tren-toan-he-thong-11-03-2017-nid446.html"><img src="/images/news/446.jpg" alt="TPBank tuyển dụng Thực tập sinh tiềm năng - vị trí GDV trên toàn hệ thống (11/03/2017)"></a>
      <div class="r"> <strong><a href="/huong-nghiep/tpbank-tuyen-dung-thuc-tap-sinh-tiem-nang-vi-tri-gdv-tren-toan-he-thong-11-03-2017-nid446.html">TPBank tuyển dụng Thực tập sinh tiềm năng - vị trí GDV trên toàn hệ thống (11/03/2017)</a></strong>
        <div>- Được làm việc toàn thời gian tại các chi nhánh trong thời gian tối thiểu 3 tháng dưới sự hướng dẫn kèm cặp của các cấp quản lý tại chi nhánh - Được ghi nhận và đề xuất tham gia các Đợt tuyển dụng để trở thành nhân viên chính thức của TPBank</div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/ngan-hang-acb-tuyen-dung-59-vi-tri-tren-toan-he-thong-trong-thang-2-3-2017-nid445.html"><img src="/images/news/445.jpg" alt="Ngân Hàng ACB tuyển dụng 59 vị trí trên TOÀN HỆ THỐNG trong tháng 2 &amp; 3/2017"></a>
      <div class="r"> <strong><a href="/huong-nghiep/ngan-hang-acb-tuyen-dung-59-vi-tri-tren-toan-he-thong-trong-thang-2-3-2017-nid445.html">Ngân Hàng ACB tuyển dụng 59 vị trí trên TOÀN HỆ THỐNG trong tháng 2 &amp; 3/2017</a></strong>
        <div>Hình thức: Nhân viên chính thức Loại hình: Toàn thời gian Bằng cấp: Đại học Kinh nghiệm: 0 năm Tuổi: Không quá 24 tuôi</div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/mb-gia-han-nop-ho-so-dot-tuyen-tap-trung-toan-he-thong-dot-1-2017-10-01-2017-nid444.html"><img src="/images/news/444.jpg" alt="MB gia hạn nộp hồ sơ đợt tuyển tập trung toàn hệ thống đợt 1.2017 (10.01.2017)"></a>
      <div class="r"> <strong><a href="/huong-nghiep/mb-gia-han-nop-ho-so-dot-tuyen-tap-trung-toan-he-thong-dot-1-2017-10-01-2017-nid444.html">MB gia hạn nộp hồ sơ đợt tuyển tập trung toàn hệ thống đợt 1.2017 (10.01.2017)</a></strong>
        <div>- TN loại Khá trở lên tại các trường ĐH chuyên ngành Tài chính ngân hàng, ngoại thương, kinh tế, thương mại.... - Có kỹ năng về giao tiếp, đàm phán, bán hàng và marketing. - Ngoại hình khá, nam dưới 30 tuổi, cao từ 1m68 trở lên; nữ dưới 27 tuổi cao từ 1m58 trở lên. - Ưu tiên Nam</div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/thuc-tap-sinh-theo-chuong-trinh-khoi-nghiep-cung-ocb-nam-2016-2017-tren-toan-quoc-05-01-2017-nid443.html"><img src="/images/news/443.jpg" alt="Thực tập sinh theo chương trình " khởi="" nghiệp="" cùng="" ocb"="" năm="" 2016="" -="" 2017="" trên="" toàn="" quốc="" (05.01.2017)"=""></a>
      <div class="r"> <strong><a href="/huong-nghiep/thuc-tap-sinh-theo-chuong-trinh-khoi-nghiep-cung-ocb-nam-2016-2017-tren-toan-quoc-05-01-2017-nid443.html">Thực tập sinh theo chương trình "Khởi nghiệp cùng OCB" năm 2016 - 2017 trên toàn quốc (05.01.2017)</a></strong>
        <div>- Được tham gia đào tạo lý thuyết và học việc thực tế tại điểm giao dịch của OCB. - Được hỗ trợ chi phí trong quá trình thực tập đối với SVTT tiềm năng. - Cơ hội được tuyển dụng vào các vị trí phù hợp nếu được đánh giá đạt sau kỳ thực tập. </div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/vib-tuyen-dung-quan-ly-khach-hang-auto-san-pham-o-to-tai-ha-noi-tphcm-31-01-2017-nid442.html"><img src="/images/news/442.jpg" alt="VIB tuyển dụng Quản lý Khách hàng Auto (Sản phẩm Ô tô) tại Hà Nội &amp; TPHCM (31.01.2017)"></a>
      <div class="r"> <strong><a href="/huong-nghiep/vib-tuyen-dung-quan-ly-khach-hang-auto-san-pham-o-to-tai-ha-noi-tphcm-31-01-2017-nid442.html">VIB tuyển dụng Quản lý Khách hàng Auto (Sản phẩm Ô tô) tại Hà Nội &amp; TPHCM (31.01.2017)</a></strong>
        <div>Am hiểu thị trường ô tô và có mối quan hệ rộng với các đại lý Ô tô Có khả năng phân tích, đánh giá khả năng tài chính &amp; tình hình hoạt động của các doanh nghiệp Có mỗi quan hệ tốt với các Ngân hàng nhằm phục vụ mục tiêu phân tích các đối thủ đang bán sản phẩm Ô tô</div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/baoviet-bank-tuyen-dung-gdv-tai-ha-noi-can-tho-31-12-2016-nid441.html"><img src="/images/news/441.jpg" alt="BaoViet Bank tuyển dụng GDV tại Hà Nội &amp; Cần Thơ (31.12.2016)"></a>
      <div class="r"> <strong><a href="/huong-nghiep/baoviet-bank-tuyen-dung-gdv-tai-ha-noi-can-tho-31-12-2016-nid441.html">BaoViet Bank tuyển dụng GDV tại Hà Nội &amp; Cần Thơ (31.12.2016)</a></strong>
        <div>Trực tuyến tại website; Trực tiếp tại Ngân hàng; Qua bưu điện; Bằng email: Ghi rõ mã vị trí, khu vực dự tuyển.</div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/sacombank-tuyen-dung-hon-1000-chi-tieu-tren-toan-he-thong-12-01-2017-nid440.html"><img src="/images/news/440.jpg" alt="Sacombank tuyển dụng HƠN 1000 chỉ tiêu trên TOÀN HỆ THỐNG (12.01.2017)"></a>
      <div class="r"> <strong><a href="/huong-nghiep/sacombank-tuyen-dung-hon-1000-chi-tieu-tren-toan-he-thong-12-01-2017-nid440.html">Sacombank tuyển dụng HƠN 1000 chỉ tiêu trên TOÀN HỆ THỐNG (12.01.2017)</a></strong>
        <div>Tải "bản thông tin ứng viên" và điền đầy đủ thông tin. Click vào mục "Nộp đơn" làm theo hướng dẫn và đính kèm bản thông tin theo mẫu của Sacombank tại tin tuyển dụng khu vực tương ứng. Thi tuyển (Thời gian 30 phút - với 60 câu trắc nghiệm gồm 4 phần: Kiến thức về Ngân hàng; IQ; tiếng Anh; hiểu biết chung).</div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/vietinbank-tuyen-dung-cv-phong-httd-tai-chi-nhanh-cac-vi-tri-nghiep-vu-cua-cn-tren-toan-he-thong-25-12-2016-nid439.html"><img src="/images/news/439.JPG" alt="VietinBank tuyển dụng CV Phòng HTTD tại Chi nhánh &amp; các vị trí Nghiệp vụ của CN trên toàn hệ thống (25/12/2016)"></a>
      <div class="r"> <strong><a href="/huong-nghiep/vietinbank-tuyen-dung-cv-phong-httd-tai-chi-nhanh-cac-vi-tri-nghiep-vu-cua-cn-tren-toan-he-thong-25-12-2016-nid439.html">VietinBank tuyển dụng CV Phòng HTTD tại Chi nhánh &amp; các vị trí Nghiệp vụ của CN trên toàn hệ thống (25/12/2016)</a></strong>
        <div>VietinBank coi công tác phát triển nguồn nhân lực là một trọng tâm trong chiến lược phát triển. Tại VietinBank các cán bộ, người lao động đều có cơ hội được đào tạo, thăng tiến trong một môi trường làm việc chuyên nghiệp và năng động.</div>
      </div>
      <div class="cl"></div>
    </li>
    <li> <a class="img" href="/huong-nghiep/mb-tuyen-dung-tap-trung-dot-1-2017-tren-toan-he-thong-22-12-2016-nid437.html"><img src="/images/news/437.jpg" alt="MB tuyển dụng TẬP TRUNG đợt 1/2017 trên toàn hệ thống (22.12.2016)"></a>
      <div class="r"> <strong><a href="/huong-nghiep/mb-tuyen-dung-tap-trung-dot-1-2017-tren-toan-he-thong-22-12-2016-nid437.html">MB tuyển dụng TẬP TRUNG đợt 1/2017 trên toàn hệ thống (22.12.2016)</a></strong>
        <div>MB dành mọi nỗ lực gây dựng một đội ngũ nhân lực tinh thông về nghiệp vụ, tận tâm trong phục vụ để mỗi thành viên được cạnh tranh bằng tài năng, phát triển bằng thực lực, vươn lên bằng sự tự tin và gắn bó bằng tâm huyết, đáp lại sự mong đợi của nhân viên bằng: - Chế độ chăm sóc chu đáo. - Chính sách đãi ngộ công bằng. - Nhiều cơ hội thăng tiến trong nghề nghiệp.</div>
      </div>
      <div class="cl"></div>
    </li>
  </ul>
</div>
@endsection