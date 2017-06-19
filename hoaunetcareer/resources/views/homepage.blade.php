@extends('layouts.master')
@section('title', 'Tuyển dụng S3S')
@section('content')
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
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-ngan-hang-c82.html">Kinh doanh ngân hàng <span>(268)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-bat-dong-san-c125.html">Kinh Doanh Bất Động Sản <span>(801)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-may-tinh-c83.html">Kinh doanh máy tính <span>(72)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-my-pham-c84.html">Kinh doanh mỹ phẩm <span>(102)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-duoc-pham-c85.html">Kinh doanh dược phẩm <span>(133)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-vang-c86.html">Kinh doanh vàng <span>(20)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-dien-thoai-c87.html">Kinh doanh điện thoại <span>(101)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-hang-tieu-dung-c88.html">Kinh doanh hàng tiêu dùng <span>(193)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-du-lich-c89.html">Kinh doanh du lịch <span>(58)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-tai-chinh-c90.html">Kinh doanh tài chính <span>(232)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-thiet-bi-y-te-c91.html">Kinh doanh thiết bị y tế <span>(61)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-hang-may-mac-c92.html">Kinh doanh hàng may mặc <span>(87)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-dich-vu-c93.html">Kinh doanh dịch vụ <span>(476)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-chung-khoan-c94.html">Kinh doanh chứng khoán <span>(56)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-hoa-chat-c95.html">Kinh doanh hóa chất <span>(58)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-thoi-trang-c96.html">Kinh doanh thời trang <span>(74)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-thu-cong-my-nghe-c97.html">Kinh doanh thủ công mỹ nghệ <span>(21)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-bao-hiem-c98.html">Kinh doanh bảo hiểm <span>(168)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-thiet-bi-cong-nghe-c99.html">Kinh doanh thiết bị công nghệ <span>(196)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-truyen-thong-c100.html">Kinh doanh truyền thông <span>(194)</span></a></div>
          <div class="m"><a href="/nguoi-tim-viec/kinh-doanh-khac-c101.html">Kinh doanh khác <span>(441)</span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bgt"><strong>Tuyển gấp</strong></div>
<div class="box_tg">
  <div class="list_tg">
    <div class="bor1"> <strong><a class="red1" href="/nguoi-tim-viec/nhan-vien-ke-toan-id16118.html">Nhân viên kế toán </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16076.html">Công ty Cổ phần Xây dựng &amp; Kỹ Thuật Thuận Thành </a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class="bor1"> <strong><a class="" href="/nguoi-tim-viec/hr-manager-id15006.html">HR Manager </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16008.html">NIC Group</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/thuc-tap-sinh-headhunt-tieng-nhat-id14869.html">THỰC TẬP SINH HEADHUNT TIẾNG NHẬT </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14782.html">CÔNG TY CỔ PHẦN ĐẦU TƯ XD THƯƠNG MẠI VÀ DỊCH VỤ VIỆT GLOBAL–VGC GROUP</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class="bor1"> <strong><a class="" href="/nguoi-tim-viec/tro-ly-tong-giam-doc-id14842.html">TRỢ LÝ TỔNG GIÁM ĐỐC </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd10061.html">Công Ty Cổ Phần May Minh Hoàng</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-tu-van-giao-duc-id14840.html">Chuyên viên tư vấn giáo dục </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14683.html">Công ty TNHH Forfuture QHY</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/truong-phong-dao-tao-id14829.html">Trưởng phòng đào tạo </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd4883.html">GPO INTERNATIONAL</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/ke-toan-tong-hop-id14820.html">Kế toán tổng hợp </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14740.html">Công ty Cổ Phần Dược Mỹ Phẩm Vinh Gia Miền Nam</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/tuyen-nhan-vien-du-an-id14815.html">Tuyển nhân viên dự án </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14530.html">Công ty cổ phần giải pháp năng lượng M&amp;H</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="red1" href="/nguoi-tim-viec/ky-su-dieu-hoa-khong-khi-id14805.html">Kỹ sư điều hòa không khí </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd6918.html">Công ty Cơ Điện Lạnh Tuổi Trẻ (YOCO M&amp;E)</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-id14767.html">Nhân Viên Kinh Doanh <img src="/images/icon_hot.gif" alt=""></a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd12988.html">SÀn Giao Dịch BĐS Sài Gòn house</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/training-coordinator-id14760.html">Training Coordinator </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd8342.html">Công ty CP Quản lý Khách sạn Odyssea</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/giam-sat-ban-hang-ha-noi-id5812.html">Giám Sát Bán Hàng Hà Nội </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd6722.html">Công Ty CP Nafoods Group</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/thuc-tap-hoc-viec-cong-nghe-thuc-pham-san-xuat-kcs-co-phu-cap-id1045.html">thực tập - học việc công nghệ thực phẩm, sản xuất, KCS (có phụ cấp) </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd302.html">Công ty CP Truyền Thông Quảng Cáo &amp; Đầu tư Thắng Thắng</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/account-manager-sales-–-ma-vi-tri-am-id1043.html">Account manager (Sales) – Mã vị trí: AM </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd752.html">Công ty cổ phần giáo dục vaf truyền thông Nam Việt</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-bat-dong-san-id684.html">Nhân viên kinh doanh bất động sản </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd408.html">Cen Group</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-id750.html">Nhân viên Kinh doanh </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd497.html">Công ty TNHH Phát triển Thương mại Mạnh Tùng</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/truong-phong-quan-ly-thiet-bi-id760.html">Trưởng Phòng Quản Lý Thiết Bị </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd508.html">Nguyen Vu Join Stock Company</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-id662.html">Nhân viên kinh doanh </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd412.html">Công Ty TNHH ĐTTM Giang Anh</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-id650.html">Nhân viên kinh doanh </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd393.html">Công ty cổ phần giáo dục và đào tạo Smartminds</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-giao-nhan-id637.html">Nhân viên giao nhận </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd356.html">Công ty TNHH Chuyển phát nhanh VTECO</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/kien-truc-su-id622.html">Kiến trúc sư </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd345.html">Công ty cổ phần Xây dựng và Thương mại Bắc Hà</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-phong-pt-du-an-giai-phong-mat-bang-id619.html">Chuyên viên phòng PT dự án, giải phóng mặt bằng </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd345.html">Công ty cổ phần Xây dựng và Thương mại Bắc Hà</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/thiet-ke-do-hoa-website-id566.html">Thiết kế đồ họa website </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd24.html">Công ty Bambu</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-bat-dong-san-id559.html">Nhân viên kinh doanh bất động sản. </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd296.html">Tập đoàn tài chính bất động sản Hoàng Gia</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-to-chuc-su-kien-kinh-doanh-truyen-thong-id513.html">Nhân viên tổ chức sự kiện, kinh doanh truyền thông </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd259.html">Công ty Cổ phần Đầu tư và Phát triển văn hóa Thăng Long</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-marketing-online-id35.html"> Nhân viên Marketing Online </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd41.html">CÔNG TY TNHH DV TM DT VN NGAY 29</a></p>
    </div>
  </div>
  <div class="list_tg">
    <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-tai-cac-quay-luu-dong-id34.html"> Nhân viên kinh doanh tai các quầy lưu động </a></strong>
      <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd41.html">CÔNG TY TNHH DV TM DT VN NGAY 29</a></p>
    </div>
  </div>
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
      <li class="cl1"> <big class="t">Tài chính tiền tệ</big><a href="/nguoi-tim-viec/bao-hiem-c21.html">Bảo hiểm<span>(346)</span></a><a href="/nguoi-tim-viec/chung-khoan-vang-c22.html">Chứng khoán-Vàng<span>(63)</span></a><a href="/nguoi-tim-viec/ke-toan-kiem-toan-c23.html">Kế toán Kiểm toán<span>(837)</span></a><a href="/nguoi-tim-viec/kd-bat-dong-san-c24.html">KD bất động sản<span>(819)</span></a><a href="/nguoi-tim-viec/ngan-hang-c25.html">Ngân hàng<span>(366)</span></a><a href="/nguoi-tim-viec/dau-tu-c26.html">Đầu tư<span>(70)</span></a><a href="/nguoi-tim-viec/giao-dich-vien-c155.html">Giao dịch viên<span>(71)</span></a><a href="/nguoi-tim-viec/chuyen-vien-tu-van-tai-chinh-c156.html">Chuyên viên tư vấn tài chính<span>(289)</span></a><a href="/nguoi-tim-viec/trung-tam-the-ngan-hang-c158.html">Trung Tâm Thẻ Ngân Hàng<span>(14)</span></a><a href="/nguoi-tim-viec/ngoai-hoi-c159.html">Ngoại Hối<span>(4)</span></a><big class="t">Công nghệ thông tin</big><a href="/nguoi-tim-viec/it-phan-cung-mang-c78.html">IT phần cứng/mạng<span>(423)</span></a><a href="/nguoi-tim-viec/it-phan-mem-c79.html">IT phần mềm<span>(890)</span></a><a href="/nguoi-tim-viec/thiet-ke-do-hoa-web-c108.html">Thiết kế đồ hoạ web<span>(174)</span></a><a href="/nguoi-tim-viec/thuong-mai-dien-tu-c109.html">Thương mại điện tử<span>(230)</span></a><a href="/nguoi-tim-viec/quan-tri-mang-c146.html">Quản Trị Mạng <span>(87)</span></a><a href="/nguoi-tim-viec/ky-thuat-vien-c148.html">Kỹ thuật viên<span>(175)</span></a><a href="/nguoi-tim-viec/ky-su-cntt-c157.html">Kỹ Sư CNTT<span>(189)</span></a><big class="t">Dịch vụ hỗ trợ</big><a href="/nguoi-tim-viec/bao-ve-c38.html">Bảo vệ<span>(246)</span></a><a href="/nguoi-tim-viec/bien-phien-dich-c39.html">Biên - Phiên dịch<span>(354)</span></a><a href="/nguoi-tim-viec/dich-vu-c40.html">Dịch vụ<span>(471)</span></a><a href="/nguoi-tim-viec/giao-duc-dao-tao-c41.html">Giáo dục-Đào tạo<span>(309)</span></a><a href="/nguoi-tim-viec/hang-hai-c42.html">Hàng hải<span>(30)</span></a><a href="/nguoi-tim-viec/hang-khong-c43.html">Hàng không<span>(39)</span></a><a href="/nguoi-tim-viec/nguoi-giup-viec-c44.html">Người giúp việc<span>(40)</span></a><a href="/nguoi-tim-viec/phap-ly-c45.html">Pháp lý<span>(98)</span></a><a href="/nguoi-tim-viec/tu-van-c46.html">Tư vấn<span>(635)</span></a><a href="/nguoi-tim-viec/van-tai-lai-xe-c47.html">Vận tải-Lái xe<span>(513)</span></a><a href="/nguoi-tim-viec/y-te-duoc-c48.html">Y tế-Dược<span>(282)</span></a><big class="t">Hàng tiêu dùng</big><a href="/nguoi-tim-viec/hang-gia-dung-c65.html">Hàng gia dụng<span>(75)</span></a><a href="/nguoi-tim-viec/my-pham-trang-suc-c66.html">Mỹ phẩm-Trang sức<span>(93)</span></a><a href="/nguoi-tim-viec/thoi-trang-c67.html">Thời trang<span>(89)</span></a><a href="/nguoi-tim-viec/thuc-pham-do-uong-c68.html">Thực phẩm-Đồ uống<span>(227)</span></a> </li>
      <li class="cl1"> <big class="t">Kinh doanh</big><a href="/nguoi-tim-viec/kinh-doanh-ngan-hang-c82.html">Kinh doanh ngân hàng<span>(268)</span></a><a href="/nguoi-tim-viec/kinh-doanh-bat-dong-san-c125.html">Kinh Doanh Bất Động Sản<span>(801)</span></a><a href="/nguoi-tim-viec/kinh-doanh-may-tinh-c83.html">Kinh doanh máy tính<span>(72)</span></a><a href="/nguoi-tim-viec/kinh-doanh-my-pham-c84.html">Kinh doanh mỹ phẩm<span>(102)</span></a><a href="/nguoi-tim-viec/kinh-doanh-duoc-pham-c85.html">Kinh doanh dược phẩm<span>(133)</span></a><a href="/nguoi-tim-viec/kinh-doanh-vang-c86.html">Kinh doanh vàng<span>(20)</span></a><a href="/nguoi-tim-viec/kinh-doanh-dien-thoai-c87.html">Kinh doanh điện thoại<span>(101)</span></a><a href="/nguoi-tim-viec/kinh-doanh-hang-tieu-dung-c88.html">Kinh doanh hàng tiêu dùng<span>(193)</span></a><a href="/nguoi-tim-viec/kinh-doanh-du-lich-c89.html">Kinh doanh du lịch<span>(58)</span></a><a href="/nguoi-tim-viec/kinh-doanh-tai-chinh-c90.html">Kinh doanh tài chính<span>(232)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thiet-bi-y-te-c91.html">Kinh doanh thiết bị y tế<span>(61)</span></a><a href="/nguoi-tim-viec/kinh-doanh-hang-may-mac-c92.html">Kinh doanh hàng may mặc<span>(87)</span></a><a href="/nguoi-tim-viec/kinh-doanh-dich-vu-c93.html">Kinh doanh dịch vụ<span>(476)</span></a><a href="/nguoi-tim-viec/kinh-doanh-chung-khoan-c94.html">Kinh doanh chứng khoán<span>(56)</span></a><a href="/nguoi-tim-viec/kinh-doanh-hoa-chat-c95.html">Kinh doanh hóa chất<span>(58)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thoi-trang-c96.html">Kinh doanh thời trang<span>(74)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thu-cong-my-nghe-c97.html">Kinh doanh thủ công mỹ nghệ<span>(21)</span></a><a href="/nguoi-tim-viec/kinh-doanh-bao-hiem-c98.html">Kinh doanh bảo hiểm<span>(168)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thiet-bi-cong-nghe-c99.html">Kinh doanh thiết bị công nghệ<span>(196)</span></a><a href="/nguoi-tim-viec/kinh-doanh-truyen-thong-c100.html">Kinh doanh truyền thông<span>(194)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thiet-bi-ky-thuat-c147.html">Kinh Doanh Thiết Bị Kỹ Thuật<span>(183)</span></a><a href="/nguoi-tim-viec/kinh-doanh-khac-c101.html">Kinh doanh khác<span>(441)</span></a><big class="t">Xây dựng</big><a href="/nguoi-tim-viec/kien-truc-su-c33.html">Kiến Trúc Sư<span>(165)</span></a><a href="/nguoi-tim-viec/xay-dung-c34.html">Xây dựng<span>(393)</span></a><a href="/nguoi-tim-viec/thiet-ke-do-hoa-c137.html">Thiết Kế - Đồ Họa<span>(270)</span></a><big class="t">Khách sạn du lịch</big><a href="/nguoi-tim-viec/du-lich-c49.html">Du lịch<span>(159)</span></a><a href="/nguoi-tim-viec/khach-san-nha-hang-c50.html">Khách sạn-Nhà hàng<span>(438)</span></a><a href="/nguoi-tim-viec/bo-phan-bep-c151.html">Bộ phận bếp<span>(70)</span></a><a href="/nguoi-tim-viec/bo-phan-boi-ban-c152.html">Bộ phận bồi bàn<span>(64)</span></a><a href="/nguoi-tim-viec/bo-phan-ve-sinh-c153.html">Bộ phận vệ sinh<span>(35)</span></a><a href="/nguoi-tim-viec/bo-phan-sanh-c154.html">Bộ phận sảnh<span>(28)</span></a><big class="t">Giáo Dục</big><a href="/nguoi-tim-viec/giao-vien-c161.html">Giáo Viên<span>(80)</span></a><a href="/nguoi-tim-viec/chuyen-vien-dao-tao-c163.html">Chuyên Viên Đào Tạo<span>(49)</span></a> </li>
      <li class="cl1"> <big class="t">Kinh doanh thương mại</big><a href="/nguoi-tim-viec/ban-hang-c27.html">Bán hàng<span>(3076)</span></a><a href="/nguoi-tim-viec/nhan-vien-kinh-doanh-c28.html">Nhân viên kinh doanh<span>(1506)</span></a><a href="/nguoi-tim-viec/quan-tri-kinh-doanh-c29.html">Quản trị kinh doanh<span>(933)</span></a><a href="/nguoi-tim-viec/xuat-nhap-khau-c30.html">Xuất, nhập khẩu<span>(225)</span></a><big class="t">Kỹ Sư</big><a href="/nguoi-tim-viec/ky-su-xay-dung-c127.html">Kỹ Sư Xây Dựng<span>(184)</span></a><a href="/nguoi-tim-viec/ky-su-che-tao-may-c128.html">Kỹ Sư Chế Tạo Máy<span>(167)</span></a><a href="/nguoi-tim-viec/ky-su-co-khi-c129.html">Kỹ Sư Cơ Khí<span>(308)</span></a><a href="/nguoi-tim-viec/ky-su-hoa-chat-c130.html">Kỹ Sư Hóa Chất<span>(40)</span></a><a href="/nguoi-tim-viec/ky-su-moi-truong-c131.html">Kỹ Sư Môi Trường<span>(39)</span></a><a href="/nguoi-tim-viec/ky-su-dien-tu-c132.html">Kỹ Sư Điện Tử<span>(263)</span></a><a href="/nguoi-tim-viec/ky-su-ket-cau-c133.html">Kỹ Sư Kết Cấu<span>(46)</span></a><a href="/nguoi-tim-viec/ky-su-du-toan-c134.html">Kỹ Sư Dự Toán<span>(32)</span></a><a href="/nguoi-tim-viec/ky-su-du-thau-c135.html">Kỹ Sư Dự Thầu<span>(40)</span></a><a href="/nguoi-tim-viec/ky-su-nong-nghiep-c136.html">Kỹ Sư Nông Nghiệp<span>(24)</span></a><a href="/nguoi-tim-viec/ky-su-may-tinh-c138.html">Kỹ Sư Máy Tính<span>(33)</span></a><a href="/nguoi-tim-viec/ky-su-dien-nuoc-c139.html">Kỹ Sư Điện Nước<span>(141)</span></a><a href="/nguoi-tim-viec/ky-su-dien-lanh-c140.html">Kỹ Sư Điện Lạnh<span>(140)</span></a><a href="/nguoi-tim-viec/ky-su-kinh-te-c141.html">Kỹ Sư Kinh Tế<span>(20)</span></a><a href="/nguoi-tim-viec/ky-su-giam-sat-c142.html">Kỹ Sư Giám Sát<span>(95)</span></a><a href="/nguoi-tim-viec/ky-su-thiet-ke-c143.html">Kỹ Sư Thiết Kế<span>(110)</span></a><a href="/nguoi-tim-viec/ky-su-giao-thong-van-tai-c144.html">Kỹ Sư Giao Thông Vận Tải<span>(29)</span></a><a href="/nguoi-tim-viec/ky-su-dien-tu-vien-thong-c145.html">Kỹ Sư Điện Tử Viễn Thông<span>(110)</span></a><big class="t">Truyền thông - PR</big><a href="/nguoi-tim-viec/bao-chi-truyen-hinh-c51.html">Báo chí-Truyền hình<span>(224)</span></a><a href="/nguoi-tim-viec/marketing-pr-c52.html">Marketing-PR<span>(1074)</span></a><a href="/nguoi-tim-viec/to-chuc-su-kien-qua-tang-c53.html">Tổ chức sự kiện-Quà tặng<span>(105)</span></a><a href="/nguoi-tim-viec/tiep-thi-quang-cao-c54.html">Tiếp thị-Quảng cáo<span>(304)</span></a><big class="t">Làm thêm</big><a href="/nguoi-tim-viec/lam-ban-thoi-gian-c103.html">Làm bán thời gian<span>(224)</span></a><a href="/nguoi-tim-viec/nv-trong-quan-internet-c104.html">NV trông quán Internet<span>(12)</span></a><a href="/nguoi-tim-viec/promotion-girl-pg-c105.html">Promotion Girl (PG)<span>(62)</span></a><a href="/nguoi-tim-viec/sinh-vien-lam-them-c106.html">Sinh viên làm thêm<span>(243)</span></a><a href="/nguoi-tim-viec/thuc-tap-c107.html">Thực tập<span>(131)</span></a> </li>
      <li class="cl1"> <big class="t">Viễn thông</big><a href="/nguoi-tim-viec/buu-chinh-c31.html">Bưu chính<span>(65)</span></a><a href="/nguoi-tim-viec/dien-tu-vien-thong-c32.html">Điện tử viễn thông<span>(371)</span></a><big class="t">Hành chính nhân sự</big><a href="/nguoi-tim-viec/hanh-chinh-van-phong-c35.html">Hành chính văn phòng<span>(911)</span></a><a href="/nguoi-tim-viec/nhan-su-c36.html">Nhân sự<span>(588)</span></a><a href="/nguoi-tim-viec/thu-ky-tro-ly-c37.html">Thư ký-Trợ lý<span>(201)</span></a><a href="/nguoi-tim-viec/le-tan-c149.html">Lễ tân<span>(131)</span></a><a href="/nguoi-tim-viec/chuyen-vien-tuyen-dung-c150.html">Chuyên viên tuyển dụng<span>(133)</span></a><big class="t">Sản xuất</big><a href="/nguoi-tim-viec/o-to-xe-may-c56.html">Ô tô-Xe máy<span>(188)</span></a><a href="/nguoi-tim-viec/cong-nghe-cao-c57.html">Công nghệ cao<span>(102)</span></a><a href="/nguoi-tim-viec/cong-nghiep-c58.html">Công nghiệp<span>(155)</span></a><a href="/nguoi-tim-viec/det-may-gia-day-c59.html">Dệt may-Gia dày<span>(239)</span></a><a href="/nguoi-tim-viec/in-an-xuat-ban-c60.html">In ấn-Xuất bản<span>(77)</span></a><a href="/nguoi-tim-viec/lao-dong-pho-thong-c61.html">Lao động phổ thông<span>(784)</span></a><a href="/nguoi-tim-viec/nong-lam-ngu-nghiep-c62.html">Nông-Lâm-Ngư nghiệp<span>(81)</span></a><a href="/nguoi-tim-viec/thu-cong-my-nghe-c63.html">Thủ công mỹ nghệ<span>(24)</span></a><a href="/nguoi-tim-viec/vat-tu-thiet-bi-c64.html">Vật tư-Thiết bị<span>(161)</span></a><big class="t">Ngành nghề khác</big><a href="/nguoi-tim-viec/hoach-dinh-du-an-c69.html">Hoạch định-Dự án<span>(146)</span></a><a href="/nguoi-tim-viec/nghe-thuat-dien-anh-c70.html">Nghệ thuật-Điện ảnh<span>(29)</span></a><a href="/nguoi-tim-viec/quan-he-doi-ngoai-c71.html">Quan hệ đối ngoại<span>(116)</span></a><a href="/nguoi-tim-viec/thiet-ke-my-thuat-c72.html">Thiết kế-Mỹ thuật<span>(208)</span></a><a href="/nguoi-tim-viec/nghanh-nghe-khac-c73.html">Nghành nghề khác<span>(336)</span></a> </li>
      <li class="cl"></li>
    </ul>
    <div class="cl"></div>
  </div>
  
  <div class="bgt"><strong>Việc làm hấp dẫn</strong></div>
  <div class="box_tg">
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/truong-phong-truyen-thong-id16162.html">Trưởng Phòng Truyền Thông <img src="/images/icon/n1.gif alt=" icon'=""></a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16105.html">Kênh truyền hình quốc gia VTV8</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class="bor1"> <strong><a class="red1" href="/nguoi-tim-viec/nhan-vien-ke-toan-id16118.html">Nhân viên kế toán </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16076.html">Công ty Cổ phần Xây dựng &amp; Kỹ Thuật Thuận Thành </a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class="bor1"> <strong><a class="" href="/nguoi-tim-viec/hr-manager-id15006.html">HR Manager </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16008.html">NIC Group</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class="bor1"> <strong><a class="" href="/nguoi-tim-viec/chung-tu-xuat-khau-id14861.html">CHỨNG TỪ XUẤT KHẨU </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14772.html">CTY TNHH TMDV ÁNH DƯƠNG SAO</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-phuc-vu-tiec-id14877.html">NHÂN VIÊN PHỤC VỤ TIỆC </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14801.html">Hyundai CNS</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/thuc-tap-sinh-headhunt-tieng-nhat-id14869.html">THỰC TẬP SINH HEADHUNT TIẾNG NHẬT </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14782.html">CÔNG TY CỔ PHẦN ĐẦU TƯ XD THƯƠNG MẠI VÀ DỊCH VỤ VIỆT GLOBAL–VGC GROUP</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-it-id14858.html">Nhân viên IT </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd11433.html">CÔNG TY CP D&amp;D ENGINEERING CONSTRUCTION</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-sale-bat-dong-san-nha-pho-id14848.html">Nhân Viên Sale Bất Động Sản Nhà Phố <img src="/images/icon/n1.gif alt=" icon'=""></a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14519.html">Công ty Cồ Phần Đầu Tư Địa Ốc New World Land</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-tu-van-tai-chinh-khach-hang-ca-nhan-id14822.html">CHUYÊN VIÊN TƯ VẤN TÀI CHÍNH KHÁCH HÀNG CÁ NHÂN </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14743.html">Ngân hàng VPBank</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="red1" href="/nguoi-tim-viec/ky-su-dieu-hoa-khong-khi-id14805.html">Kỹ sư điều hòa không khí </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd6918.html">Công ty Cơ Điện Lạnh Tuổi Trẻ (YOCO M&amp;E)</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="red1" href="/nguoi-tim-viec/phien-dich-tieng-trung-id14803.html">Phiên dịch Tiếng Trung </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14730.html">Công ty TNHH Đầu tư Phoenix Asia Pacific</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/tro-ly-giam-doc-id14766.html">Trợ Lý Giám Đốc <img src="/images/icon/n1.gif alt=" icon'=""></a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd12988.html">SÀn Giao Dịch BĐS Sài Gòn house</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-ke-toan-id5088.html">Nhân viên kế toán </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd6801.html">Công ty CP sơn Jymec Việt Nam</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-truc-dien-thoai-cham-soc-khach-hang-id4836.html">Nhân viên trực điện thoại chăm sóc khách hàng </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd6593.html">Phòng Khám Đông Y Gia Truyền</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-van-phong-biet-tieng-hoa-id3400.html">Nhân viên văn phòng (Biết tiếng hoa) </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd1881.html">Công ty TNHH Diamond Việt Nam</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/thuc-tap-hoc-viec-cong-nghe-thuc-pham-san-xuat-kcs-co-phu-cap-id1045.html">thực tập - học việc công nghệ thực phẩm, sản xuất, KCS (có phụ cấp) </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd302.html">Công ty CP Truyền Thông Quảng Cáo &amp; Đầu tư Thắng Thắng</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/account-manager-sales-–-ma-vi-tri-am-id1043.html">Account manager (Sales) – Mã vị trí: AM </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd752.html">Công ty cổ phần giáo dục vaf truyền thông Nam Việt</a></p>
      </div>
    </div>
    <div class="list_tg" style="width:330px;">
      <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-bat-dong-san-id684.html">Nhân viên kinh doanh bất động sản </a></strong>
        <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd408.html">Cen Group</a></p>
      </div>
    </div>
    <div class="cl"></div>
  </div>
  <div class="bgt" style="margin-top:15px;">
    <div>
      <select name="drpC" id="drpC" onchange="javascript:worknew('#workn')">
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
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/tuyen-dung-nhan-vien-kiem-thu-id17163.html">TUYỂN DỤNG NHÂN VIÊN KIỂM THỬ <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd12536.html">CÔNG TY CP CON ĐƯỜNG TƠ LỤA THÁI BÌNH DƯƠNG</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/tuyen-lai-xe-id17162.html">tuyển lái xe <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd12970.html">công ty taxi group</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-an-toan-lao-dong-id17161.html">Chuyên viên an toàn lao động <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16616.html">CÔNG TY TNHH XỬ LÝ CHẤT THẢI CÔNG NGHIỆP VÀ TƯ VẤN MÔI TRƯỜNG VĂN LANG</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/nvkd-bat-dong-san-khong-ap-doanh-so-khong-yeu-cau-kinh-nghiem-id17160.html">NVKD Bất Động Sản (Không Áp Doanh Số-Không Yêu Cầu Kinh Nghiệm) <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd14519.html">Công ty Cồ Phần Đầu Tư Địa Ốc New World Land</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/thu-kho-cong-trinh-id17159.html">THỦ KHO CÔNG TRÌNH <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16616.html">CÔNG TY TNHH XỬ LÝ CHẤT THẢI CÔNG NGHIỆP VÀ TƯ VẤN MÔI TRƯỜNG VĂN LANG</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/ky-su-dien-cong-nghiep-id17158.html">KỸ SƯ ĐIỆN CÔNG NGHIỆP <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16616.html">CÔNG TY TNHH XỬ LÝ CHẤT THẢI CÔNG NGHIỆP VÀ TƯ VẤN MÔI TRƯỜNG VĂN LANG</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-id17157.html">Nhân viên kinh doanh <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16619.html">Công ty CP Thép Nam Kim</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-mua-hang-tai-ha-noi-ha-long-quy-nhon-id17156.html">Chuyên viên mua hàng tại HÀ NỘI, HẠ LONG, QUY NHƠN <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16618.html">Công ty Cổ Phần Thương Mại F-Mart</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/telemarketing-cham-soc-da-mat-id17155.html">Telemarketing Chăm Sóc Da Mặt <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd12990.html">Hoa Sao Group</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/truong-pho-phong-tu-van-id17154.html">TRƯỞNG/PHÓ PHÒNG TƯ VẤN <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16616.html">CÔNG TY TNHH XỬ LÝ CHẤT THẢI CÔNG NGHIỆP VÀ TƯ VẤN MÔI TRƯỜNG VĂN LANG</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-ban-chi-dao-id17153.html">Chuyên viên ban chỉ đạo <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/giam-doc-kinh-doanh-dich-vu-vien-thong-cntt-id17152.html">Giám Đốc Kinh Doanh Dịch Vụ Viễn Thông - CNTT <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-hoa-phan-tich-id17151.html">NHÂN VIÊN HÓA PHÂN TÍCH <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16596.html">Công ty TNHH Xử Lý Chất Thải Công Nghiệp Và Tư Vấn Môi Trường Văn Lang </a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/cong-tac-vien-thu-cuoc-id17150.html">Cộng tác viên thu cước <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-kinh-doanh-dich-vu-truyen-so-lieu-id17149.html">Chuyên viên kinh doanh dịch vụ truyền số liệu <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/ky-su-tu-van-va-ho-tro-ky-thuat-id17148.html">Kỹ sư tư vấn và hỗ trợ kỹ thuật <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-cham-soc-khach-hang-doanh-nghiep-id17147.html">Chuyên viên chăm sóc khách hàng doanh nghiệp <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-dich-vu-internet-ftth-sme-id17146.html">Nhân viên Kinh doanh Dịch vụ Internet FTTH-SME <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-ky-thuat-du-an-id17145.html">Chuyên viên kỹ thuật dự án <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/quan-ly-kinh-doanh-id17144.html">Quản lý kinh doanh <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-tong-hop-ban-chi-dao-ha-tang-truyen-dan-quoc-gia-id17143.html">chuyên Viên tổng hợp ( ban chỉ đạo hạ tầng truyền dẫn quốc gia <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/digital-marketing-id17142.html">digital marketing <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-truyen-thong-marketing-id17141.html">Chuyên viên truyền thông Marketing <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-thanh-tra-quan-ly-chat-luong-ha-tang-id17140.html">Chuyên viên thanh tra, quản lý chất lượng hạ tầng <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-kinh-doanh-quoc-te-id17139.html">Chuyên viên kinh doanh quốc tế <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-kinh-doanh-id17138.html">Chuyên viên kinh doanh <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/ky-su-tu-van-giai-phap-jd-presale-id17137.html">kỹ sư tư vấn giải pháp ( JD-presale) <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-du-an-vien-thong-bas-id17136.html">Chuyên viên Dự án Viễn Thông BAS <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/chuyen-gia-chinh-sach-san-pham-id17135.html">Chuyên gia chính sách Sản phẩm <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/truong-phong-van-hanh-data-center-id17134.html">Trưởng phòng vận hành Data Center <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/truong-ban-nhan-su-id17133.html">Trưởng ban Nhân sự <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="list_tg" style="width:330px;">
        <div class=""> <strong><a class="" href="/nguoi-tim-viec/pre-sales-id17132.html">Pre-sales <span style="font-weight:normal; color:Red;">(Mới)</span> </a></strong>
          <p><a href="/nguoi-tim-viec/danh-sach-tin-dang-nha-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p>
        </div>
      </div>
      <div class="cl"></div>
    </div>
  </div>
</div>
<div class="ctr">
  <div class="bgr mtop"><strong>Video tuyển dụng</strong></div>
  <div class="vipr">
    <iframe style="height:320px;width:245px; margin:auto; display:block; padding-top:5px;" frameborder="0" scrolling="no" src="/video.aspx"></iframe>
  </div>
  <div class="bgr mtop"><strong>Tìm ứng viên theo tính chất</strong></div>
  <ul class="vipr">
    <li class="search"> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=9">Việc làm lương từ 30 triệu trở lên</a> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=8">Việc làm lương từ 20 - 30 triệu</a> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=7">Việc làm lương từ 15 -20 triệu</a> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=6">Việc làm lương từ 10 - 15 triệu</a> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=quan ly&amp;n=Tất cả&amp;d=0&amp;l=0">Việc làm cấp quản lý</a> <a href="/nguoi-tim-viec/lam-ban-thoi-gian-c103.html">Việc làm bán thời gian</a> <a href="/nguoi-tim-viec/thuc-tap-c107.html">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a> </li>
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
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/ngan-hang-tmcp-quoc-te-viet-nam-vib-tuyen-dung-giao-dich-vien-tai-hai-phong-30-11-2015-nid257.html" style="transform: perspective(2000px);"><img src="/images/news/257.jpg" alt="Ngân hàng TMCP Quốc Tế Việt Nam (VIB) tuyển dụng Giao dịch viên tại Hải Phòng 30.11.2015" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/ngan-hang-tmcp-quoc-te-viet-nam-vib-tuyen-dung-giao-dich-vien-tai-hai-phong-30-11-2015-nid257.html" style="transform: perspective(2000px);">Ngân hàng TMCP Quốc Tế Việt Nam (VIB) tuyển dụng Giao dịch viên tại Hải Phòng 30.11.2015</a></strong>
                <p style="transform: perspective(2000px);">- Tốt nghiệp đại học chuyên ngành ngân hàng, tài chính kế toán hoặc các trường Kinh tế; - Hình thức ưa nhìn, tự tin, nhiệt huyết và chu đáo cẩn thận trong cung cấp dịch vụ giao dịch với khách hàng; - Nữ, 1.60m trở lên; - Không dị tật, không nói ngọng, nói lắp;</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/6-cau-hoi-bat-bai-tinh-cach-ung-vien-nid208.html" style="transform: perspective(2000px);"><img src="/images/news/208.jpg" alt="6 câu hỏi &quot;bắt bài&quot; tính cách ứng viên" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/6-cau-hoi-bat-bai-tinh-cach-ung-vien-nid208.html" style="transform: perspective(2000px);">6 câu hỏi "bắt bài" tính cách ứng viên</a></strong>
                <p style="transform: perspective(2000px);">Điều nhà tuyển dụng muốn biết là động lực khiến bạn làm việc chăm chỉ, đặc biệt nếu bạn là người tự tin vào khả năng của mình. Họ sẽ không phán xét tham vọng của một người bởi điều đó thuộc về quan điểm cá nhân. Tuy nhiên, bạn cũng cần một chút khéo léo để dẫn dắt câu chuyện, tránh trường hợp khiến mọi người nghĩ bạn là người khắt khe hoặc tự tin thái quá.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/cach-nang-cao-hieu-qua-tuyen-dung-nid207.html" style="transform: perspective(2000px);"><img src="/images/news/207.jpg" alt="Cách nâng cao hiệu quả tuyển dụng" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/cach-nang-cao-hieu-qua-tuyen-dung-nid207.html" style="transform: perspective(2000px);">Cách nâng cao hiệu quả tuyển dụng</a></strong>
                <p style="transform: perspective(2000px);">Tìm được một người tài giỏi, phù hợp với yêu cầu của công ty không hề dễ dàng. Phải phối hợp việc phân tích thông tin ứng viên và sự chuẩn bị chu đáo cho các vòng phỏng vấn để quyết định cuối cùng được rõ ràng và chính xác. Đó là những nguyên tắc cơ bản để giành phần thắng trong cuộc chiến thu hút nhân tài trong thời đại ngày nay.</p>
              </div>
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
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/dieu-gi-lam-nen-tam-hon-cua-mot-lanh-dao-nid182.html" style="transform: perspective(2000px);"><img src="/images/news/182.jpg" alt="Điều gì làm nên tâm hồn của một lãnh đạo?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/dieu-gi-lam-nen-tam-hon-cua-mot-lanh-dao-nid182.html" style="transform: perspective(2000px);">Điều gì làm nên tâm hồn của một lãnh đạo?</a></strong>
                <p style="transform: perspective(2000px);">Đó là sự khác biệt, niềm đam mê, lạc quan, khả năng thích ứng, khả năng lãnh đạo, tham vọng.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/10-bi-quyet-thanh-cong-sep-nen-noi-nhung-se-khong-bao-gio-noi-nid181.html" style="transform: perspective(2000px);"><img src="/images/news/181.jpg" alt="10 bí quyết thành công sếp nên nói nhưng sẽ không bao giờ nói ?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/10-bi-quyet-thanh-cong-sep-nen-noi-nhung-se-khong-bao-gio-noi-nid181.html" style="transform: perspective(2000px);">10 bí quyết thành công sếp nên nói nhưng sẽ không bao giờ nói ?</a></strong>
                <p style="transform: perspective(2000px);">Cathie Black, chủ bút tạp chí Hearst, đã chia sẻ cùng bạn đọc trẻ của bà những bí quyết thành công trong công việc. Mối quan hệ sếp-nhân viên luôn là mối bận tâm nhất của những người "sống" trong môi trường công việc.</p>
              </div>
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/lam-the-nao-de-tro-thanh-nha-quan-ly-cua-nam-nid180.html" style="transform: perspective(2000px);"><img src="/images/news/180.jpg" alt="Làm thế nào để trở thành &quot;nhà quản lý của năm&quot;" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/lam-the-nao-de-tro-thanh-nha-quan-ly-cua-nam-nid180.html" style="transform: perspective(2000px);">Làm thế nào để trở thành "nhà quản lý của năm"</a></strong>
                <p style="transform: perspective(2000px);">Bạn cần nghiêm túc với nhân viên, nhưng bạn lại không muốn bị xem là thiếu thân thiện. Bạn muốn chứng tỏ là có quyền lực, nhưng bạn cũng muốn để nhân viên có thể tự do đưa ra ý tưởng. Vậy hãy làm theo những gợi ý sau, bạn sẽ có cơ hội trở thành "nhà quản lý của năm".</p>
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