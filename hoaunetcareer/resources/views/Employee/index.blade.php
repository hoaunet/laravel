@extends('layouts.master')
@section('title', 'Đăng ký tài khoản người tìm việc')
@section('content')
<div class="adtop"><a href="#" target="_blank"><img src="/uploads/banners/homepage.JPG" alt="Banner top"></a></div>
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
        <option value="150100">Bảo hiểm</option>
        <option value="160100">Bán hàng</option>
        <option value="170100">Bưu chính</option>
        <option value="180100">Kiến Trúc Sư</option>
        <option value="200100">Bảo vệ</option>
        <option value="190100">Hành chính văn phòng</option>
        <option value="210100">Du lịch</option>
        <option value="230100">Ô tô-Xe máy</option>
        <option value="220100">Báo chí-Truyền hình</option>
        <option value="240100">Hàng gia dụng</option>
        <option value="310100">Kinh doanh ngân hàng</option>
        <option value="440100">Kỹ Sư Xây Dựng</option>
        <option value="250100">Hoạch định-Dự án</option>
        <option value="290100">IT phần cứng/mạng</option>
        <option value="320100">Làm bán thời gian</option>
        <option value="450100">Giáo Viên</option>
        <option value="312100">Kinh Doanh Bất Động Sản</option>
        <option value="320200">NV trông quán Internet</option>
        <option value="290200">IT phần mềm</option>
        <option value="250200">Nghệ thuật-Điện ảnh</option>
        <option value="440200">Kỹ Sư Chế Tạo Máy</option>
        <option value="310200">Kinh doanh máy tính</option>
        <option value="240200">Mỹ phẩm-Trang sức</option>
        <option value="220200">Marketing-PR</option>
        <option value="230200">Công nghệ cao</option>
        <option value="210200">Khách sạn-Nhà hàng</option>
        <option value="190200">Nhân sự</option>
        <option value="200200">Biên - Phiên dịch</option>
        <option value="180200">Xây dựng</option>
        <option value="170200">Điện tử viễn thông</option>
        <option value="160200">Nhân viên kinh doanh</option>
        <option value="160300">Quản trị kinh doanh</option>
        <option value="150200">Chứng khoán-Vàng</option>
        <option value="150300">Kế toán Kiểm toán</option>
        <option value="180300">Thiết Kế - Đồ Họa</option>
        <option value="200300">Dịch vụ</option>
        <option value="190300">Thư ký-Trợ lý</option>
        <option value="210300">Bộ phận bếp</option>
        <option value="230300">Công nghiệp</option>
        <option value="220300">Tổ chức sự kiện-Quà tặng</option>
        <option value="240300">Thời trang</option>
        <option value="310300">Kinh doanh mỹ phẩm</option>
        <option value="440300">Kỹ Sư Cơ Khí</option>
        <option value="250300">Quan hệ đối ngoại</option>
        <option value="290300">Thiết kế đồ hoạ web</option>
        <option value="320300">Promotion Girl (PG)</option>
        <option value="450300">Chuyên Viên Đào Tạo</option>
        <option value="320400">Sinh viên làm thêm</option>
        <option value="290400">Thương mại điện tử</option>
        <option value="250400">Thiết kế-Mỹ thuật</option>
        <option value="440400">Kỹ Sư Hóa Chất</option>
        <option value="310400">Kinh doanh dược phẩm</option>
        <option value="240400">Thực phẩm-Đồ uống</option>
        <option value="220400">Tiếp thị-Quảng cáo</option>
        <option value="230400">Dệt may-Gia dày</option>
        <option value="210400">Bộ phận bồi bàn</option>
        <option value="190400">Lễ tân</option>
        <option value="160400">Xuất, nhập khẩu</option>
        <option value="150400">KD bất động sản</option>
        <option value="150500">Ngân hàng</option>
        <option value="190500">Chuyên viên tuyển dụng</option>
        <option value="210500">Bộ phận vệ sinh</option>
        <option value="200400">Giáo dục-Đào tạo</option>
        <option value="230500">In ấn-Xuất bản</option>
        <option value="310500">Kinh doanh vàng</option>
        <option value="440500">Kỹ Sư Môi Trường</option>
        <option value="250500">Nghành nghề khác</option>
        <option value="290500">Quản Trị Mạng </option>
        <option value="320500">Thực tập</option>
        <option value="290600">Kỹ thuật viên</option>
        <option value="440600">Kỹ Sư Điện Tử</option>
        <option value="310600">Kinh doanh điện thoại</option>
        <option value="230600">Lao động phổ thông</option>
        <option value="200500">Hàng hải</option>
        <option value="210600">Bộ phận sảnh</option>
        <option value="150600">Đầu tư</option>
        <option value="150700">Giao dịch viên</option>
        <option value="200600">Hàng không</option>
        <option value="230700">Nông-Lâm-Ngư nghiệp</option>
        <option value="310700">Kinh doanh hàng tiêu dùng</option>
        <option value="440700">Kỹ Sư Kết Cấu</option>
        <option value="290700">Kỹ Sư CNTT</option>
        <option value="440800">Kỹ Sư Dự Toán</option>
        <option value="310800">Kinh doanh du lịch</option>
        <option value="230800">Thủ công mỹ nghệ</option>
        <option value="200700">Người giúp việc</option>
        <option value="150800">Chuyên viên tư vấn tài chính</option>
        <option value="150900">Trung Tâm Thẻ Ngân Hàng</option>
        <option value="200800">Pháp lý</option>
        <option value="230900">Vật tư-Thiết bị</option>
        <option value="310900">Kinh doanh tài chính</option>
        <option value="440900">Kỹ Sư Dự Thầu</option>
        <option value="441000">Kỹ Sư Nông Nghiệp</option>
        <option value="311000">Kinh doanh thiết bị y tế</option>
        <option value="200900">Tư vấn</option>
        <option value="201000">Vận tải-Lái xe</option>
        <option value="151000">Ngoại Hối</option>
        <option value="311100">Kinh doanh hàng may mặc</option>
        <option value="441100">Kỹ Sư Máy Tính</option>
        <option value="441200">Kỹ Sư Điện Nước</option>
        <option value="311200">Kinh doanh dịch vụ</option>
        <option value="201100">Y tế-Dược</option>
        <option value="311300">Kinh doanh chứng khoán</option>
        <option value="441300">Kỹ Sư Điện Lạnh</option>
        <option value="441400">Kỹ Sư Kinh Tế</option>
        <option value="311400">Kinh doanh hóa chất</option>
        <option value="311500">Kinh doanh thời trang</option>
        <option value="441500">Kỹ Sư Giám Sát</option>
        <option value="441600">Kỹ Sư Thiết Kế</option>
        <option value="311600">Kinh doanh thủ công mỹ nghệ</option>
        <option value="311700">Kinh doanh bảo hiểm</option>
        <option value="441700">Kỹ Sư Giao Thông Vận Tải</option>
        <option value="441800">Kỹ Sư Điện Tử Viễn Thông</option>
        <option value="311800">Kinh doanh thiết bị công nghệ</option>
        <option value="311900">Kinh doanh truyền thông</option>
        <option value="312200">Kinh Doanh Thiết Bị Kỹ Thuật</option>
        <option value="312000">Kinh doanh khác</option>
      </select>
    </li>
    <li class="s3">
      <select name="drpDiaDiem" id="drpDiaDiem">
        <option value="Tất cả địa điểm">Tất cả địa điểm</option>
        <option value="1">Hà Nội</option>
        <option value="2">TP.HCM</option>
        <option value="3">Đà Nẵng</option>
        <option value="4">Bình Dương</option>
        <option value="5">Cần Thơ</option>
        <option value="6">Hải Phòng</option>
        <option value="7">Bà Rịa - Vũng Tàu</option>
        <option value="8">Bắc Giang</option>
        <option value="9">Bắc Kạn</option>
        <option value="10">Thừa Thiên Huế</option>
        <option value="11">Bắc Ninh</option>
        <option value="12">Bến Tre</option>
        <option value="13">Bạc Liêu</option>
        <option value="14">Bình Định</option>
        <option value="15">Bình Phước</option>
        <option value="16">Bình Thuận</option>
        <option value="17">Cà Mau</option>
        <option value="18">Cao Bằng</option>
        <option value="19">Đắc Lắc</option>
        <option value="20">An Giang</option>
        <option value="21">Đắc Nông</option>
        <option value="22">Điện Biên</option>
        <option value="23">Đồng Nai</option>
        <option value="24">Đồng Tháp</option>
        <option value="25">Gia Lai</option>
        <option value="26">Hà Giang</option>
        <option value="27">Hà Nam</option>
        <option value="28">Hà Tĩnh</option>
        <option value="29">Hải Dương</option>
        <option value="30">Hậu Giang</option>
        <option value="31">Hòa Bình</option>
        <option value="32">Hưng Yên</option>
        <option value="33">Khánh Hòa - Nha Trang</option>
        <option value="34">Kiên Giang</option>
        <option value="35">Kon Tum</option>
        <option value="36">Lai Châu</option>
        <option value="37">Lạng Sơn</option>
        <option value="38">Lào Cai</option>
        <option value="39">Lâm Đồng</option>
        <option value="40">Long An</option>
        <option value="41">Nam Định</option>
        <option value="42">Nghệ An</option>
        <option value="43">Ninh Bình</option>
        <option value="44">Ninh Thuận</option>
        <option value="69">Nha Trang</option>
        <option value="45">Phú Thọ</option>
        <option value="46">Phú Yên</option>
        <option value="47">Quảng Bình</option>
        <option value="48">Quảng Nam</option>
        <option value="49">Quảng Ngãi</option>
        <option value="50">Quảng Ninh</option>
        <option value="51">Quảng Trị</option>
        <option value="52">Sóc Trăng</option>
        <option value="53">Sơn La</option>
        <option value="54">Tây Ninh</option>
        <option value="55">Thái Bình</option>
        <option value="56">Thái Nguyên</option>
        <option value="57">Thanh Hóa</option>
        <option value="58">Tiền Giang</option>
        <option value="59">Trà Vinh</option>
        <option value="60">Tuyên Quang</option>
        <option value="61">Vĩnh Long</option>
        <option value="62">Vĩnh Phúc</option>
        <option value="63">Yên Bái</option>
        <option value="68">Phú Quốc</option>
        <option value="64">Toàn Quốc</option>
        <option value="65">Miền Bắc</option>
        <option value="66">Miền Nam</option>
        <option value="67">Miền Trung</option>
      </select>
    </li>
    <li class="s4">
      <select name="drpMucLuong" id="drpMucLuong">
        <option value="Tất cả mức lương">Tất cả mức lương</option>
        <option value="1">Thỏa thuận</option>
        <option value="2">1 - 3 triệu</option>
        <option value="3">3 - 5 triệu</option>
        <option value="4">5 - 7 triệu</option>
        <option value="5">7 - 10 triệu</option>
        <option value="6">10 - 15 triệu</option>
        <option value="7">15 - 20 triệu</option>
        <option value="8">20 - 30 triệu</option>
        <option value="9">30 - 40 triệu</option>
        <option value="10">40 - 50 triệu</option>
        <option value="11">50 - 60 triệu</option>
        <option value="12">Trên 60 triệu</option>
        <option value="13">100 - 300 USD</option>
        <option value="14">400 - 600 USD</option>
        <option value="15">700 - 1000 USD</option>
        <option value="16">1000 - 1500 USD</option>
        <option value="17">1500 - 2000 USD</option>
        <option value="18">2000 - 3000 USD</option>
        <option value="19">&gt; 3000 USD</option>
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
        <strong>Tìm theo ngành nghề</strong>
    </div>
     
    <div class="box_tg" id="sort">
        <h3>Bạn đang xem danh sách ngành nghề sắp xếp theo: <b>Nhóm ngành</b></h3>
        <ul class="group">
            <li class="cl1">
                <big class="t">Tài chính tiền tệ</big><a href="/nguoi-tim-viec/bao-hiem-c21.html">Bảo hiểm<span>(346)</span></a><a href="/nguoi-tim-viec/chung-khoan-vang-c22.html">Chứng khoán-Vàng<span>(63)</span></a><a href="/nguoi-tim-viec/ke-toan-kiem-toan-c23.html">Kế toán Kiểm toán<span>(837)</span></a><a href="/nguoi-tim-viec/kd-bat-dong-san-c24.html">KD bất động sản<span>(819)</span></a><a href="/nguoi-tim-viec/ngan-hang-c25.html">Ngân hàng<span>(366)</span></a><a href="/nguoi-tim-viec/dau-tu-c26.html">Đầu tư<span>(70)</span></a><a href="/nguoi-tim-viec/giao-dich-vien-c155.html">Giao dịch viên<span>(71)</span></a><a href="/nguoi-tim-viec/chuyen-vien-tu-van-tai-chinh-c156.html">Chuyên viên tư vấn tài chính<span>(289)</span></a><a href="/nguoi-tim-viec/trung-tam-the-ngan-hang-c158.html">Trung Tâm Thẻ Ngân Hàng<span>(14)</span></a><a href="/nguoi-tim-viec/ngoai-hoi-c159.html">Ngoại Hối<span>(4)</span></a><big class="t">Công nghệ thông tin</big><a href="/nguoi-tim-viec/it-phan-cung-mang-c78.html">IT phần cứng/mạng<span>(423)</span></a><a href="/nguoi-tim-viec/it-phan-mem-c79.html">IT phần mềm<span>(891)</span></a><a href="/nguoi-tim-viec/thiet-ke-do-hoa-web-c108.html">Thiết kế đồ hoạ web<span>(174)</span></a><a href="/nguoi-tim-viec/thuong-mai-dien-tu-c109.html">Thương mại điện tử<span>(230)</span></a><a href="/nguoi-tim-viec/quan-tri-mang-c146.html">Quản Trị Mạng <span>(87)</span></a><a href="/nguoi-tim-viec/ky-thuat-vien-c148.html">Kỹ thuật viên<span>(175)</span></a><a href="/nguoi-tim-viec/ky-su-cntt-c157.html">Kỹ Sư CNTT<span>(189)</span></a><big class="t">Dịch vụ hỗ trợ</big><a href="/nguoi-tim-viec/bao-ve-c38.html">Bảo vệ<span>(246)</span></a><a href="/nguoi-tim-viec/bien-phien-dich-c39.html">Biên - Phiên dịch<span>(354)</span></a><a href="/nguoi-tim-viec/dich-vu-c40.html">Dịch vụ<span>(471)</span></a><a href="/nguoi-tim-viec/giao-duc-dao-tao-c41.html">Giáo dục-Đào tạo<span>(310)</span></a><a href="/nguoi-tim-viec/hang-hai-c42.html">Hàng hải<span>(30)</span></a><a href="/nguoi-tim-viec/hang-khong-c43.html">Hàng không<span>(39)</span></a><a href="/nguoi-tim-viec/nguoi-giup-viec-c44.html">Người giúp việc<span>(40)</span></a><a href="/nguoi-tim-viec/phap-ly-c45.html">Pháp lý<span>(98)</span></a><a href="/nguoi-tim-viec/tu-van-c46.html">Tư vấn<span>(635)</span></a><a href="/nguoi-tim-viec/van-tai-lai-xe-c47.html">Vận tải-Lái xe<span>(513)</span></a><a href="/nguoi-tim-viec/y-te-duoc-c48.html">Y tế-Dược<span>(282)</span></a><big class="t">Hàng tiêu dùng</big><a href="/nguoi-tim-viec/hang-gia-dung-c65.html">Hàng gia dụng<span>(75)</span></a><a href="/nguoi-tim-viec/my-pham-trang-suc-c66.html">Mỹ phẩm-Trang sức<span>(93)</span></a><a href="/nguoi-tim-viec/thoi-trang-c67.html">Thời trang<span>(89)</span></a><a href="/nguoi-tim-viec/thuc-pham-do-uong-c68.html">Thực phẩm-Đồ uống<span>(227)</span></a>
            </li>
            <li class="cl1">
                <big class="t">Kinh doanh</big><a href="/nguoi-tim-viec/kinh-doanh-ngan-hang-c82.html">Kinh doanh ngân hàng<span>(268)</span></a><a href="/nguoi-tim-viec/kinh-doanh-bat-dong-san-c125.html">Kinh Doanh Bất Động Sản<span>(801)</span></a><a href="/nguoi-tim-viec/kinh-doanh-may-tinh-c83.html">Kinh doanh máy tính<span>(72)</span></a><a href="/nguoi-tim-viec/kinh-doanh-my-pham-c84.html">Kinh doanh mỹ phẩm<span>(102)</span></a><a href="/nguoi-tim-viec/kinh-doanh-duoc-pham-c85.html">Kinh doanh dược phẩm<span>(133)</span></a><a href="/nguoi-tim-viec/kinh-doanh-vang-c86.html">Kinh doanh vàng<span>(20)</span></a><a href="/nguoi-tim-viec/kinh-doanh-dien-thoai-c87.html">Kinh doanh điện thoại<span>(101)</span></a><a href="/nguoi-tim-viec/kinh-doanh-hang-tieu-dung-c88.html">Kinh doanh hàng tiêu dùng<span>(193)</span></a><a href="/nguoi-tim-viec/kinh-doanh-du-lich-c89.html">Kinh doanh du lịch<span>(58)</span></a><a href="/nguoi-tim-viec/kinh-doanh-tai-chinh-c90.html">Kinh doanh tài chính<span>(232)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thiet-bi-y-te-c91.html">Kinh doanh thiết bị y tế<span>(61)</span></a><a href="/nguoi-tim-viec/kinh-doanh-hang-may-mac-c92.html">Kinh doanh hàng may mặc<span>(87)</span></a><a href="/nguoi-tim-viec/kinh-doanh-dich-vu-c93.html">Kinh doanh dịch vụ<span>(476)</span></a><a href="/nguoi-tim-viec/kinh-doanh-chung-khoan-c94.html">Kinh doanh chứng khoán<span>(56)</span></a><a href="/nguoi-tim-viec/kinh-doanh-hoa-chat-c95.html">Kinh doanh hóa chất<span>(58)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thoi-trang-c96.html">Kinh doanh thời trang<span>(74)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thu-cong-my-nghe-c97.html">Kinh doanh thủ công mỹ nghệ<span>(21)</span></a><a href="/nguoi-tim-viec/kinh-doanh-bao-hiem-c98.html">Kinh doanh bảo hiểm<span>(168)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thiet-bi-cong-nghe-c99.html">Kinh doanh thiết bị công nghệ<span>(196)</span></a><a href="/nguoi-tim-viec/kinh-doanh-truyen-thong-c100.html">Kinh doanh truyền thông<span>(194)</span></a><a href="/nguoi-tim-viec/kinh-doanh-thiet-bi-ky-thuat-c147.html">Kinh Doanh Thiết Bị Kỹ Thuật<span>(183)</span></a><a href="/nguoi-tim-viec/kinh-doanh-khac-c101.html">Kinh doanh khác<span>(441)</span></a><big class="t">Xây dựng</big><a href="/nguoi-tim-viec/kien-truc-su-c33.html">Kiến Trúc Sư<span>(165)</span></a><a href="/nguoi-tim-viec/xay-dung-c34.html">Xây dựng<span>(393)</span></a><a href="/nguoi-tim-viec/thiet-ke-do-hoa-c137.html">Thiết Kế - Đồ Họa<span>(270)</span></a><big class="t">Khách sạn du lịch</big><a href="/nguoi-tim-viec/du-lich-c49.html">Du lịch<span>(159)</span></a><a href="/nguoi-tim-viec/khach-san-nha-hang-c50.html">Khách sạn-Nhà hàng<span>(438)</span></a><a href="/nguoi-tim-viec/bo-phan-bep-c151.html">Bộ phận bếp<span>(70)</span></a><a href="/nguoi-tim-viec/bo-phan-boi-ban-c152.html">Bộ phận bồi bàn<span>(64)</span></a><a href="/nguoi-tim-viec/bo-phan-ve-sinh-c153.html">Bộ phận vệ sinh<span>(35)</span></a><a href="/nguoi-tim-viec/bo-phan-sanh-c154.html">Bộ phận sảnh<span>(28)</span></a><big class="t">Giáo Dục</big><a href="/nguoi-tim-viec/giao-vien-c161.html">Giáo Viên<span>(80)</span></a><a href="/nguoi-tim-viec/chuyen-vien-dao-tao-c163.html">Chuyên Viên Đào Tạo<span>(49)</span></a>
            </li>
            <li class="cl1">
                <big class="t">Kinh doanh thương mại</big><a href="/nguoi-tim-viec/ban-hang-c27.html">Bán hàng<span>(3078)</span></a><a href="/nguoi-tim-viec/nhan-vien-kinh-doanh-c28.html">Nhân viên kinh doanh<span>(1505)</span></a><a href="/nguoi-tim-viec/quan-tri-kinh-doanh-c29.html">Quản trị kinh doanh<span>(933)</span></a><a href="/nguoi-tim-viec/xuat-nhap-khau-c30.html">Xuất, nhập khẩu<span>(225)</span></a><big class="t">Kỹ Sư</big><a href="/nguoi-tim-viec/ky-su-xay-dung-c127.html">Kỹ Sư Xây Dựng<span>(184)</span></a><a href="/nguoi-tim-viec/ky-su-che-tao-may-c128.html">Kỹ Sư Chế Tạo Máy<span>(167)</span></a><a href="/nguoi-tim-viec/ky-su-co-khi-c129.html">Kỹ Sư Cơ Khí<span>(308)</span></a><a href="/nguoi-tim-viec/ky-su-hoa-chat-c130.html">Kỹ Sư Hóa Chất<span>(40)</span></a><a href="/nguoi-tim-viec/ky-su-moi-truong-c131.html">Kỹ Sư Môi Trường<span>(39)</span></a><a href="/nguoi-tim-viec/ky-su-dien-tu-c132.html">Kỹ Sư Điện Tử<span>(263)</span></a><a href="/nguoi-tim-viec/ky-su-ket-cau-c133.html">Kỹ Sư Kết Cấu<span>(46)</span></a><a href="/nguoi-tim-viec/ky-su-du-toan-c134.html">Kỹ Sư Dự Toán<span>(32)</span></a><a href="/nguoi-tim-viec/ky-su-du-thau-c135.html">Kỹ Sư Dự Thầu<span>(40)</span></a><a href="/nguoi-tim-viec/ky-su-nong-nghiep-c136.html">Kỹ Sư Nông Nghiệp<span>(24)</span></a><a href="/nguoi-tim-viec/ky-su-may-tinh-c138.html">Kỹ Sư Máy Tính<span>(33)</span></a><a href="/nguoi-tim-viec/ky-su-dien-nuoc-c139.html">Kỹ Sư Điện Nước<span>(141)</span></a><a href="/nguoi-tim-viec/ky-su-dien-lanh-c140.html">Kỹ Sư Điện Lạnh<span>(140)</span></a><a href="/nguoi-tim-viec/ky-su-kinh-te-c141.html">Kỹ Sư Kinh Tế<span>(20)</span></a><a href="/nguoi-tim-viec/ky-su-giam-sat-c142.html">Kỹ Sư Giám Sát<span>(95)</span></a><a href="/nguoi-tim-viec/ky-su-thiet-ke-c143.html">Kỹ Sư Thiết Kế<span>(110)</span></a><a href="/nguoi-tim-viec/ky-su-giao-thong-van-tai-c144.html">Kỹ Sư Giao Thông Vận Tải<span>(29)</span></a><a href="/nguoi-tim-viec/ky-su-dien-tu-vien-thong-c145.html">Kỹ Sư Điện Tử Viễn Thông<span>(110)</span></a><big class="t">Truyền thông - PR</big><a href="/nguoi-tim-viec/bao-chi-truyen-hinh-c51.html">Báo chí-Truyền hình<span>(224)</span></a><a href="/nguoi-tim-viec/marketing-pr-c52.html">Marketing-PR<span>(1077)</span></a><a href="/nguoi-tim-viec/to-chuc-su-kien-qua-tang-c53.html">Tổ chức sự kiện-Quà tặng<span>(106)</span></a><a href="/nguoi-tim-viec/tiep-thi-quang-cao-c54.html">Tiếp thị-Quảng cáo<span>(306)</span></a><big class="t">Làm thêm</big><a href="/nguoi-tim-viec/lam-ban-thoi-gian-c103.html">Làm bán thời gian<span>(224)</span></a><a href="/nguoi-tim-viec/nv-trong-quan-internet-c104.html">NV trông quán Internet<span>(12)</span></a><a href="/nguoi-tim-viec/promotion-girl-pg-c105.html">Promotion Girl (PG)<span>(62)</span></a><a href="/nguoi-tim-viec/sinh-vien-lam-them-c106.html">Sinh viên làm thêm<span>(243)</span></a><a href="/nguoi-tim-viec/thuc-tap-c107.html">Thực tập<span>(131)</span></a>
            </li>
            <li class="cl1">
                <big class="t">Viễn thông</big><a href="/nguoi-tim-viec/buu-chinh-c31.html">Bưu chính<span>(65)</span></a><a href="/nguoi-tim-viec/dien-tu-vien-thong-c32.html">Điện tử viễn thông<span>(371)</span></a><big class="t">Hành chính nhân sự</big><a href="/nguoi-tim-viec/hanh-chinh-van-phong-c35.html">Hành chính văn phòng<span>(911)</span></a><a href="/nguoi-tim-viec/nhan-su-c36.html">Nhân sự<span>(589)</span></a><a href="/nguoi-tim-viec/thu-ky-tro-ly-c37.html">Thư ký-Trợ lý<span>(201)</span></a><a href="/nguoi-tim-viec/le-tan-c149.html">Lễ tân<span>(132)</span></a><a href="/nguoi-tim-viec/chuyen-vien-tuyen-dung-c150.html">Chuyên viên tuyển dụng<span>(133)</span></a><big class="t">Sản xuất</big><a href="/nguoi-tim-viec/o-to-xe-may-c56.html">Ô tô-Xe máy<span>(188)</span></a><a href="/nguoi-tim-viec/cong-nghe-cao-c57.html">Công nghệ cao<span>(102)</span></a><a href="/nguoi-tim-viec/cong-nghiep-c58.html">Công nghiệp<span>(155)</span></a><a href="/nguoi-tim-viec/det-may-gia-day-c59.html">Dệt may-Gia dày<span>(239)</span></a><a href="/nguoi-tim-viec/in-an-xuat-ban-c60.html">In ấn-Xuất bản<span>(77)</span></a><a href="/nguoi-tim-viec/lao-dong-pho-thong-c61.html">Lao động phổ thông<span>(784)</span></a><a href="/nguoi-tim-viec/nong-lam-ngu-nghiep-c62.html">Nông-Lâm-Ngư nghiệp<span>(81)</span></a><a href="/nguoi-tim-viec/thu-cong-my-nghe-c63.html">Thủ công mỹ nghệ<span>(24)</span></a><a href="/nguoi-tim-viec/vat-tu-thiet-bi-c64.html">Vật tư-Thiết bị<span>(161)</span></a><big class="t">Ngành nghề khác</big><a href="/nguoi-tim-viec/hoach-dinh-du-an-c69.html">Hoạch định-Dự án<span>(146)</span></a><a href="/nguoi-tim-viec/nghe-thuat-dien-anh-c70.html">Nghệ thuật-Điện ảnh<span>(29)</span></a><a href="/nguoi-tim-viec/quan-he-doi-ngoai-c71.html">Quan hệ đối ngoại<span>(116)</span></a><a href="/nguoi-tim-viec/thiet-ke-my-thuat-c72.html">Thiết kế-Mỹ thuật<span>(208)</span></a><a href="/nguoi-tim-viec/nghanh-nghe-khac-c73.html">Nghành nghề khác<span>(336)</span></a>
            </li>
            <li class="cl"></li>
        </ul>
        <div class="cl"></div>
    </div>          
    
    <div class="bgt">
        
        <strong></strong>
    </div>      
    <div class="chuc_nang">
        <span id="lblPage"> <a class="cpage">1</a> <a class="apage" href="/nguoi-tim-viec/page-2.html">2</a> <a class="apage" href="/nguoi-tim-viec/page-3.html">3</a> <a class="apage" href="/nguoi-tim-viec/page-4.html">4</a> <a class="apage" href="/nguoi-tim-viec/page-5.html">5</a> <a class="apage" href="/nguoi-tim-viec/page-2.html">Tiếp</a> <a class="apage" href="/nguoi-tim-viec/page-454.html">Cuối</a></span>
        <a href="javascript:luu_tin();"><img src="/images/icon/save.gif" alt="icon">Lưu tin</a>
        <a href="#"><img src="/images/icon/mail.gif" alt="icon">Gửi bạn bè</a>
        <a href="#"><img src="/images/icon/tocao.gif" alt="icon">Tố cáo</a>
    </div>  
    <div class="box_list_tren">
        <div class="col1"><input type="checkbox" id="selectall"></div>
        <div class="col2">Vị trí làm việc</div>
        <div class="col3">Nơi làm việc</div>
        <div class="col3">Mức lương</div>
        <div class="col4">Ngày làm mới</div>
        <div class="col5">Hạn nộp HS</div>
        <div class="cl"></div>
    </div>
    <span id="dlt_tin_TD"><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item0" class="case" name="chk_item[]" value="17167"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-media-id17167.html">Nhân viên Media</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16624.html">Công ty Cổ Phần Đạo Tạo VietFutre</a></p> 
                <i>(3 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span><span>Bình Dương</span><span>Đồng Nai</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">17-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan0" value="16624">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item1" class="case" name="chk_item[]" value="17166"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-van-phong-id17166.html">Nhân viên văn phòng </a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd2390.html">GPO international</a></p> 
                <i>(3 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">Thỏa thuận</div>
        <div class="col4">17-06</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan1" value="2390">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item2" class="case" name="chk_item[]" value="17165"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-marketing-pr-id17165.html">Nhân viên Marketing - PR</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16624.html">Công ty Cổ Phần Đạo Tạo VietFutre</a></p> 
                <i>(5 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span><span>Bình Dương</span><span>Đồng Nai</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">17-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan2" value="16624">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item3" class="case" name="chk_item[]" value="17164"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/quan-ly-kinh-doanh-id17164.html">Quản Lý Kinh Doanh</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16624.html">Công ty Cổ Phần Đạo Tạo VietFutre</a></p> 
                <i>(3 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span><span>Bình Dương</span><span>Đồng Nai</span></div>
        <div class="col3">700 - 1000 USD</div>
        <div class="col4">17-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan3" value="16624">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item4" class="case" name="chk_item[]" value="17163"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/tuyen-dung-nhan-vien-kiem-thu-id17163.html">TUYỂN DỤNG NHÂN VIÊN KIỂM THỬ</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd12536.html">CÔNG TY CP CON ĐƯỜNG TƠ LỤA THÁI BÌNH DƯƠNG</a></p> 
                <i>(11 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">3 - 5 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan4" value="12536">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item5" class="case" name="chk_item[]" value="17162"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/tuyen-lai-xe-id17162.html">tuyển lái xe</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd12970.html">công ty taxi group</a></p> 
                <i>(8 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">21/12</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan5" value="12970">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item6" class="case" name="chk_item[]" value="17161"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-an-toan-lao-dong-id17161.html">Chuyên viên an toàn lao động</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16616.html">CÔNG TY TNHH XỬ LÝ CHẤT THẢI CÔNG NGHIỆP VÀ TƯ VẤN MÔI TRƯỜNG VĂN LANG</a></p> 
                <i>(9 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan6" value="16616">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item7" class="case" name="chk_item[]" value="17160"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nvkd-bat-dong-san-khong-ap-doanh-so-khong-yeu-cau-kinh-nghiem-id17160.html">NVKD Bất Động Sản (Không Áp Doanh Số-Không Yêu Cầu Kinh</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd14519.html">Công ty Cồ Phần Đầu Tư Địa Ốc New World Land</a></p> 
                <i>(10 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">15 - 20 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan7" value="14519">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item8" class="case" name="chk_item[]" value="17159"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/thu-kho-cong-trinh-id17159.html">THỦ KHO CÔNG TRÌNH</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16616.html">CÔNG TY TNHH XỬ LÝ CHẤT THẢI CÔNG NGHIỆP VÀ TƯ VẤN MÔI TRƯỜNG VĂN LANG</a></p> 
                <i>(13 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan8" value="16616">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item9" class="case" name="chk_item[]" value="17158"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/ky-su-dien-cong-nghiep-id17158.html">KỸ SƯ ĐIỆN CÔNG NGHIỆP</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16616.html">CÔNG TY TNHH XỬ LÝ CHẤT THẢI CÔNG NGHIỆP VÀ TƯ VẤN MÔI TRƯỜNG VĂN LANG</a></p> 
                <i>(15 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan9" value="16616">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item10" class="case" name="chk_item[]" value="17157"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-id17157.html">Nhân viên kinh doanh</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16619.html">Công ty CP Thép Nam Kim</a></p> 
                <i>(11 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">02/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan10" value="16619">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item11" class="case" name="chk_item[]" value="17156"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-mua-hang-tai-ha-noi-ha-long-quy-nhon-id17156.html">Chuyên viên mua hàng tại HÀ NỘI, HẠ LONG, QUY NHƠN</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16618.html">Công ty Cổ Phần Thương Mại F-Mart</a></p> 
                <i>(11 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span><span>Bình Định</span><span>Quảng Ninh</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan11" value="16618">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item12" class="case" name="chk_item[]" value="17155"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/telemarketing-cham-soc-da-mat-id17155.html">Telemarketing Chăm Sóc Da Mặt</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd12990.html">Hoa Sao Group</a></p> 
                <i>(119 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan12" value="12990">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item13" class="case" name="chk_item[]" value="17154"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/truong-pho-phong-tu-van-id17154.html">TRƯỞNG/PHÓ PHÒNG TƯ VẤN</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16616.html">CÔNG TY TNHH XỬ LÝ CHẤT THẢI CÔNG NGHIỆP VÀ TƯ VẤN MÔI TRƯỜNG VĂN LANG</a></p> 
                <i>(11 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">700 - 1000 USD</div>
        <div class="col4">16-06</div>
        <div class="col5">31/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan13" value="16616">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item14" class="case" name="chk_item[]" value="17153"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-ban-chi-dao-id17153.html">Chuyên viên ban chỉ đạo </a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(11 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan14" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item15" class="case" name="chk_item[]" value="17152"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/giam-doc-kinh-doanh-dich-vu-vien-thong-cntt-id17152.html">Giám Đốc Kinh Doanh Dịch Vụ Viễn Thông - CNTT</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(13 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Đà Nẵng</span></div>
        <div class="col3">20 - 30 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan15" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item16" class="case" name="chk_item[]" value="17151"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-hoa-phan-tich-id17151.html">NHÂN VIÊN HÓA PHÂN TÍCH</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16596.html">Công ty TNHH Xử Lý Chất Thải Công Nghiệp Và Tư Vấn Môi Trường Văn Lang </a></p> 
                <i>(19 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">15/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan16" value="16596">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item17" class="case" name="chk_item[]" value="17150"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/cong-tac-vien-thu-cuoc-id17150.html">Cộng tác viên thu cước</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(13 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Đà Nẵng</span></div>
        <div class="col3">3 - 5 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan17" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item18" class="case" name="chk_item[]" value="17149"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-kinh-doanh-dich-vu-truyen-so-lieu-id17149.html">Chuyên viên kinh doanh dịch vụ truyền số liệu </a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(11 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Đà Nẵng</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan18" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item19" class="case" name="chk_item[]" value="17148"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/ky-su-tu-van-va-ho-tro-ky-thuat-id17148.html">Kỹ sư tư vấn và hỗ trợ kỹ thuật</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(13 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Đà Nẵng</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan19" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item20" class="case" name="chk_item[]" value="17147"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-cham-soc-khach-hang-doanh-nghiep-id17147.html">Chuyên viên chăm sóc khách hàng doanh nghiệp</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(14 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hải Phòng</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan20" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item21" class="case" name="chk_item[]" value="17146"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-dich-vu-internet-ftth-sme-id17146.html">Nhân viên Kinh doanh Dịch vụ Internet FTTH-SME</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(12 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hải Phòng</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan21" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item22" class="case" name="chk_item[]" value="17145"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-ky-thuat-du-an-id17145.html">Chuyên viên kỹ thuật dự án</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(11 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hải Phòng</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan22" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item23" class="case" name="chk_item[]" value="17144"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/quan-ly-kinh-doanh-id17144.html">Quản lý kinh doanh</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(12 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hải Phòng</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan23" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item24" class="case" name="chk_item[]" value="17143"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-tong-hop-ban-chi-dao-ha-tang-truyen-dan-quoc-gia-id17143.html">chuyên Viên tổng hợp ( ban chỉ đạo hạ tầng truyền dẫn q</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(13 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan24" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item25" class="case" name="chk_item[]" value="17142"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/digital-marketing-id17142.html">digital marketing</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(12 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan25" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item26" class="case" name="chk_item[]" value="17141"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-truyen-thong-marketing-id17141.html">Chuyên viên truyền thông Marketing</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(12 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan26" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item27" class="case" name="chk_item[]" value="17140"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-thanh-tra-quan-ly-chat-luong-ha-tang-id17140.html">Chuyên viên thanh tra, quản lý chất lượng hạ tầng</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(13 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan27" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item28" class="case" name="chk_item[]" value="17139"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-kinh-doanh-quoc-te-id17139.html">Chuyên viên kinh doanh quốc tế</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(11 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan28" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item29" class="case" name="chk_item[]" value="17138"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-kinh-doanh-id17138.html">Chuyên viên kinh doanh</a> <span style="font-weight:normal; color:Red;">(Mới)</span> </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(12 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">15-06</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan29" value="16322">
    </div></span></span> 
    <input type="hidden" name="tong_tin" id="tong_tin" value="30">
    <input type="hidden" name="checkedvalues" id="checkedvalues" value="0">	
    <input type="hidden" name="dang_luu_ho_so" id="dang_luu_ho_so" value="">    
    <div style=" clear:both; float:right; padding:10px 0;"> <a class="cpage">1</a> <a class="apage" href="/nguoi-tim-viec/page-2.html">2</a> <a class="apage" href="/nguoi-tim-viec/page-3.html">3</a> <a class="apage" href="/nguoi-tim-viec/page-4.html">4</a> <a class="apage" href="/nguoi-tim-viec/page-5.html">5</a> <a class="apage" href="/nguoi-tim-viec/page-2.html">Tiếp</a> <a class="apage" href="/nguoi-tim-viec/page-454.html">Cuối</a></div>
    
</div>
<div class="ctr">
    <div class="bgr2"><strong>Tuyển dụng vip</strong></div>
    <ul class="vipr">
        
    </ul>   
    <div class="avr"><a href="http://tuyendungvietnam.com.vn/huong-nghiep/tuyen-sinh-du-hoc-tai-nhat-ban-t7-2015-nid98.html" target="_blank"><img src="/images/advert/180.jpg" alt="Quảng cáo 2"></a></div>
    <div class="bgr2 mtop"><strong>Video tuyển dụng</strong></div>
    <div class="vipr">
        <iframe style="height:320px;width:245px; margin:auto; display:block; padding-top:5px;" frameborder="0" scrolling="no" src="/video.aspx"></iframe>
    </div>     
    <div class="bgr2 mtop"><strong>Tuyển dụng theo ngôn ngữ</strong></div>
  
    <ul class="vipr">
        <li class="search">
            <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=1">Tiếng Anh (England)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=2">Tiếng Pháp (France)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=3">Tiếng Hàn Quốc (Korea)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=4">Tiếng Nhật Bản (Japan)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=6">Tiếng Trung Quốc (China)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=7">Tiếng Nga (Russia)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=8">Tiếng Đức (Germany)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=9">Thái Lan (Thailand)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=10">Tiếng Mã Lai (Malaysia)</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=11">Indonesia</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=12">Tiếng Ả Rập </a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=13">Myanmar</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=14">Tiếng Hindi Hoặc Bengali</a><a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=0&amp;w=15">Ngôn Ngữ Khác</a>
        </li>
    </ul>      
    
    <div class="bgr2 mtop"><strong>Tìm việc làm theo tính chất</strong></div>
    <ul class="vipr">
        <li class="search">
            <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=9">Việc làm lương từ 30 triệu trở lên</a>
            <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=8">Việc làm lương từ 20 - 30 triệu</a>
            <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=7">Việc làm lương từ 15 -20 triệu</a>
            <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&amp;n=Tất cả&amp;d=0&amp;l=6">Việc làm lương từ 10 - 15 triệu</a>
            <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=quan ly&amp;n=Tất cả&amp;d=0&amp;l=0">Việc làm cấp quản lý</a>
            <a href="/nguoi-tim-viec/lam-ban-thoi-gian-c103.html">Việc làm bán thời gian</a>
            <a href="/nguoi-tim-viec/thuc-tap-c107.html">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a>
        </li>
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
            
            
            

            <div style="position: absolute; top: 0px; left: 0px; width: 255px; height: 360px; transform-origin: 0px 0px 0px; transform: scale(0.992157);"><div class="" style="position: relative; top: 0px; left: 0px; width: 255px; height: 360px; overflow: visible;"><div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 255px; height: 360px; overflow: hidden; z-index: 0;"><div debug-id="slide_container" style="position: absolute; z-index: 0; left: 0px; top: 0px; display: none;"></div></div><div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 255px; height: 360px; overflow: hidden; z-index: 0;" debug-id="slide-board"><div style="width: 255px; height: 360px; top: 0px; left: 0px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0;"></div>
                <div debug-id="slide-0" style="width: 255px; height: 360px; top: 0px; left: 0px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/nu-giam-doc-mat-viec-chi-boi-mot-cau-noi-cua-ong-lao-quet-rac-nid332.html" style="transform: perspective(2000px);"><img src="/images/news/332.jpg" alt="Nữ giám đốc mất việc chỉ bởi một câu nói của Ông lão quét rác" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/nu-giam-doc-mat-viec-chi-boi-mot-cau-noi-cua-ong-lao-quet-rac-nid332.html" style="transform: perspective(2000px);">Nữ giám đốc mất việc chỉ bởi một câu nói của Ông lão quét rác</a></strong><p style="transform: perspective(2000px);">Một nữ giám đốc cao quý gặp phải một “ông lão quét rác”, lại vì một câu nói của ông mà khiến cho người này mất việc, nguyên do chỉ bởi một thói quen không nên có của con người.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/huong-dan-cach-tinh-thue-thu-nhap-ca-nhan-2015-2016-nid331.html" style="transform: perspective(2000px);"><img src="/images/news/331.jpg" alt="Hướng dẫn cách tính thuế thu nhập cá nhân 2015 - 2016" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/huong-dan-cach-tinh-thue-thu-nhap-ca-nhan-2015-2016-nid331.html" style="transform: perspective(2000px);">Hướng dẫn cách tính thuế thu nhập cá nhân 2015 - 2016</a></strong><p style="transform: perspective(2000px);">Cách tính thuế thu nhập cá nhân Thuế thu nhập cá nhân là gi? - Thuế thu nhập cá nhân là khoản tiền mà người có thu nhập phải nộp một phần tiền lương hoặc từ các nguồn thu nhập khác vào ngân sách nhà nước.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/7-cach-dat-cau-hoi-thong-minh-voi-nha-tuyen-dung-nid328.html" style="transform: perspective(2000px);"><img src="/images/news/328.jpg" alt="7 cách đặt câu hỏi thông minh với nhà tuyển dụng" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/7-cach-dat-cau-hoi-thong-minh-voi-nha-tuyen-dung-nid328.html" style="transform: perspective(2000px);">7 cách đặt câu hỏi thông minh với nhà tuyển dụng</a></strong><p style="transform: perspective(2000px);">“Doanh nghiệp sẽ làm gì nếu…?” Doanh nghiệp nào cũng sẽ có lúc phải đương đầu với những khó khăn, thách thức lớn như thay đổi về công nghệ, sự xuất hiện của đối thủ cạnh tranh mới, thay đổi về xu hướng kinh tế… Những ứng viên tốt luôn xem đây là cơ hội để họ phát huy năng lực của bản thân, cùng phát triển và thành công với doanh nghiệp. ..</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/chu-tich-ngan-hang-phai-chang-la-nghe-nguy-hiem-nid211.html" style="transform: perspective(2000px);"><img src="/images/news/211.jpg" alt="Chủ tịch ngân hàng phải chăng là nghề nguy hiểm?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/chu-tich-ngan-hang-phai-chang-la-nghe-nguy-hiem-nid211.html" style="transform: perspective(2000px);">Chủ tịch ngân hàng phải chăng là nghề nguy hiểm?</a></strong><p style="transform: perspective(2000px);">Chuyện lãnh đạo ngân hàng vướng vòng lao lý vì vi phạm pháp luật hay lãnh đạo ngân hàng phải từ nhiệm là hai câu chuyện khác nhau. Nhưng nhìn từ góc độ nghề nghiệp lại thấy một điểm chung là họ cùng lao động trong một nghề có thể gọi là “nghề nguy hiểm”</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-1" style="width: 255px; height: 360px; top: 0px; left: 255px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/nhung-goi-y-ghi-diem-voi-nha-tuyen-dung-ngay-tu-lan-gap-dau-tien-nid209.html" style="transform: perspective(2000px);"><img src="/images/news/209.jpg" alt="Những gợi ý &quot;Ghi Điểm&quot; với Nhà tuyển dụng ngay từ lần gặp đầu tiên" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/nhung-goi-y-ghi-diem-voi-nha-tuyen-dung-ngay-tu-lan-gap-dau-tien-nid209.html" style="transform: perspective(2000px);">Những gợi ý "Ghi Điểm" với Nhà tuyển dụng ngay từ lần gặp đầu tiên</a></strong><p style="transform: perspective(2000px);">- Chưa được mời đã kéo ghế ngồi. - Bắt tay hờ hững. - Ánh mắt luôn lảng tránh cái nhìn của người hỏi. - Luôn luôn ngọ nguậy trên ghế ngồi.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/tang-ban-30-nguyen-tac-trong-nghe-thuat-giao-tiep-giup-ban-thanh-cong-nid190.html" style="transform: perspective(2000px);"><img src="/images/news/190.jpg" alt="Tặng bạn 30 nguyên tắc trong nghệ thuật giao tiếp giúp bạn thành công" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/tang-ban-30-nguyen-tac-trong-nghe-thuat-giao-tiep-giup-ban-thanh-cong-nid190.html" style="transform: perspective(2000px);">Tặng bạn 30 nguyên tắc trong nghệ thuật giao tiếp giúp bạn thành công</a></strong><p style="transform: perspective(2000px);">30 nguyên tắc trong nghệ thuật giao tiếp giúp bạn thành công trong công việc và cuộc sống hàng ngày. Nếu có năng lực chuyên môn, đó là một lợi thế của bạn, nhưng nếu không có một mối quan hệ giao tiếp tốt, cơ hội thành công của bạn cũng không cao.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/lam-sao-de-noi-voi-sep-ve-viec-tang-luong-nid175.html" style="transform: perspective(2000px);"><img src="/images/news/175.jpg" alt="Làm sao để nói với sếp về việc tăng lương?" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/lam-sao-de-noi-voi-sep-ve-viec-tang-luong-nid175.html" style="transform: perspective(2000px);">Làm sao để nói với sếp về việc tăng lương?</a></strong><p style="transform: perspective(2000px);">Nếu bạn tin rằng, bạn xứng đáng để được tăng lương thì hãy chủ động yêu cầu sếp về việc ấy. Đừng chần chừ hay chờ đợi sếp của bạn đề nghị cho việc tăng lương của bạn. Nhưng, hãy khảo sát những tiêu chí dưới đây trước khi đếp gặp sếp.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/4-ky-nang-nguoi-lam-content-marketing-can-co-nid128.html" style="transform: perspective(2000px);"><img src="/images/news/128.jpg" alt="4 kỹ năng người làm content marketing cần có" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/4-ky-nang-nguoi-lam-content-marketing-can-co-nid128.html" style="transform: perspective(2000px);">4 kỹ năng người làm content marketing cần có</a></strong><p style="transform: perspective(2000px);">Content marketing - hay marketing nội dung đang phát triển nhanh chóng. Kỹ năng làm content marketing (hay marketing nội dung) không tự dưng mà có, người làm việc này cần có quá trình rèn luyện qua thời gian. Để quản trị thành công một chiến lược marketing nội dung cần sự kết hợp nhuần nhuyễn giữa khả năng sáng tạo, kỹ năng phân tích và sự nhạy bén trong kinh doanh.</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-2" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/15-dieu-khong-nen-noi-khi-phong-van-nid122.html" style="transform: perspective(2000px);"><img src="/images/news/122.jpg" alt="15 điều không nên nói khi phỏng vấn" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/15-dieu-khong-nen-noi-khi-phong-van-nid122.html" style="transform: perspective(2000px);">15 điều không nên nói khi phỏng vấn</a></strong><p style="transform: perspective(2000px);">Bạn đừng bao giờ đi phỏng vấn khi không biết điều gì ngoài vị trí đang tuyển dụng. Bạn có thể tìm kiếm thông tin trên internet hoặc hỏi han người từng làm việc trước đó. Quy tắc đầu tiên của một cuộc phỏng vấn: Hãy tìm hiểu trước</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/7-cach-chung-to-su-nghiem-tuc-trong-cong-viec-nid121.html" style="transform: perspective(2000px);"><img src="/images/news/121.jpg" alt="7 cách chứng tỏ sự nghiêm túc trong công việc" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/7-cach-chung-to-su-nghiem-tuc-trong-cong-viec-nid121.html" style="transform: perspective(2000px);">7 cách chứng tỏ sự nghiêm túc trong công việc</a></strong><p style="transform: perspective(2000px);">Sự hài hước cũng là nét thú vị của những người làm kinh doanh, tuy nhiên, sự nghiêm túc trong công việc mới là yếu tố cần thiết nhất mà bạn phải rèn luyện và trau dồi thường xuyên. Theo nghiên cứu, việc trình bày thẳng thắn và nghiêm túc về các quan điểm cũng như kiến thức về công việc, cuộc sống sẽ giúp uy tín của bạn được gia tăng đáng kể. Sau đây là 7 cách để bạn chứng tỏ cho người khác thấy mình là một người luôn nghiêm túc và tuyệt đối tôn trọng công việc.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/nang-suat-hon-giau-hon-voi-10-thu-thuat-nid109.html" style="transform: perspective(2000px);"><img src="/images/news/109.jpg" alt="Năng suất hơn, giàu hơn với 10 thủ thuật" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/nang-suat-hon-giau-hon-voi-10-thu-thuat-nid109.html" style="transform: perspective(2000px);">Năng suất hơn, giàu hơn với 10 thủ thuật</a></strong><p style="transform: perspective(2000px);">Dậy sớm và thực hiện những sở thích của bạn vào buổi sáng. Bạn thích tập thể thao, hãy thực hiện, bạn muốn có 1 bữa ăn sáng đủ chất dinh dưỡng, hãy thực hiện, muốn checkmail hay Facebook ư, cứ tự nhiên vì đây là thời gian của bạn. Buổi sáng là quan trọng nhất trong 1 ngày, nếu bạn thức dậy sớm và làm các việc mình thích trước khi đến công ty, bạn sẽ hiệu quả hơn rất nhiều đối với những người vừa làm việc vừa làm những gì mình thích.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/7-cong-viec-co-luong-tu-40-trieu-dong-o-viet-nam-nam-2014-nid99.html" style="transform: perspective(2000px);"><img src="/images/news/99.jpg" alt="7 công việc có lương từ 40 triệu đồng ở Việt Nam năm 2014" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/7-cong-viec-co-luong-tu-40-trieu-dong-o-viet-nam-nam-2014-nid99.html" style="transform: perspective(2000px);">7 công việc có lương từ 40 triệu đồng ở Việt Nam năm 2014</a></strong><p style="transform: perspective(2000px);">Theo báo cáo của công ty giải pháp nhân sự Adecco, 7 công việc dưới đây đem lại cho người làm thu nhập cao nhất Việt Nam năm 2014. 1. Công việc văn phòng - Giám đốc pháp chế Mức lương: 40 - 200 triệu đồng Công việc này đòi hỏi ở người làm có các chứng chỉ về luật cùng với 10 đến 25 năm kinh nghiệm. Giám đốc pháp chế là người đảm bảo các hoạt động của công ty thực hiện đúng theo yêu cầu của luật pháp cũng như luật riêng của tổ chức</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div><div debug-id="slide-3" style="width: 255px; height: 360px; top: 0px; left: -255px; position: absolute; overflow: hidden; transform: perspective(2000px);"><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/“bi-kip”-cho-nhung-ung-vien-moi-ra-truong-nid96.html" style="transform: perspective(2000px);"><img src="/images/news/96.jpg" alt="“Bí kíp” cho những ứng viên mới ra trường" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/“bi-kip”-cho-nhung-ung-vien-moi-ra-truong-nid96.html" style="transform: perspective(2000px);">“Bí kíp” cho những ứng viên mới ra trường</a></strong><p style="transform: perspective(2000px);">Theo điều tra thống kê của Đại học Rutgers, so với năm 2010, năm 2011, các nhà tuyển dụng đã “thâu nạp” nhiều hơn 19% số nhân viên vừa tốt nghiệp. Dẫu vậy thì thị trường việc làm vẫn còn khá ảm đạm. Làm thế nào để bạn nâng cao khả năng tìm và giữ được một công việc như mong muốn? Dưới đây là những bí kíp:</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/10-meo-nho-de-de-dang-tim-viec-nid80.html" style="transform: perspective(2000px);"><img src="/images/news/80.jpg" alt="10 &quot;mẹo&quot; nhỏ để dễ dàng tìm việc" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/10-meo-nho-de-de-dang-tim-viec-nid80.html" style="transform: perspective(2000px);">10 "mẹo" nhỏ để dễ dàng tìm việc</a></strong><p style="transform: perspective(2000px);">10. Tìm kiếm trực tuyến! Thực tế có rất nhiều người đang tự kiếm việc và cả tiền từ mạng online đấy. Bạn có trong số đó không? Nếu không hãy bắt đầu từ bây giờ nhé. Tìm việc trên trực tuyến sẽ cho bạn nhiều cơ hội lựa chọn hơn là chờ đợi cơ hội từ người quen mách bảo. ...</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/cam-nang-cho-nhung-nguoi-dang-kiem-viec-nid74.html" style="transform: perspective(2000px);"><img src="/images/news/74.jpg" alt="Cẩm nang cho những người đang kiếm việc" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/cam-nang-cho-nhung-nguoi-dang-kiem-viec-nid74.html" style="transform: perspective(2000px);">Cẩm nang cho những người đang kiếm việc</a></strong><p style="transform: perspective(2000px);">Tìm được một công việc ưng ý vốn không phải là điều dễ, đặc biệt trong khi tình hình kinh tế có nhiều khó khăn như hiện nay. Nếu bạn đang trong quá trình tìm việc, đừng bỏ qua những lời khuyên dưới đây.</p></div><div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/8-viec-phai-lam-truoc-khi-ban-di-phong-van-xin-viec-nid75.html" style="transform: perspective(2000px);"><img src="/images/news/75.jpg" alt="8 việc phải làm trước khi bạn đi phỏng vấn xin việc" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="/huong-nghiep/8-viec-phai-lam-truoc-khi-ban-di-phong-van-xin-viec-nid75.html" style="transform: perspective(2000px);">8 việc phải làm trước khi bạn đi phỏng vấn xin việc</a></strong><p style="transform: perspective(2000px);">Khi đã được nhà tuyển dụng hẹn phỏng vấn, việc chuẩn bị trước ra sao sẽ quyết định bạn sẽ thành công hay thất bại trong cuộc gặp đó.</p></div><div style="width: 255px; height: 360px; top: 0px; left: 0px; z-index: 1000; display: none;"></div></div>
            </div><span u="arrowleft" class="jssora12l" style="width: 20px; height:24px; bottom:-16px; left: 105px; border:1px #e1e1e1 solid;"></span><span u="arrowright" class="jssora12r" style="width:20px; height:24px; bottom:-16px; right: 105px; border:1px #e1e1e1 solid; "></span><script type="text/javascript">jssor_slider1_starter('slider1_container');</script></div></div>

        </div>
    </div>
    <div class="cl" style="height:25px;"></div>
    
    
</div>
@endsection