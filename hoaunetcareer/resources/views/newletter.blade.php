@extends('layouts.master')
@section('title', 'Đăng ký tài khoản người tìm việc')
@section('content')
<div class="box_send_mail">
    <h1>Hãy Để Công Việc Mơ Ước Đến Với Bạn</h1>
    <div class="l"><b>&nbsp;</b></div>
    <div class="r">
        <input id="rbtNTD" type="radio" name="OptionN" value="rbtNTD" checked="checked"><label for="rbtNTD">Người tìm việc</label>
        <input id="rbtNTV" type="radio" name="OptionN" value="rbtNTV" onclick="javascript:setTimeout('__doPostBack(\'rbtNTV\',\'\')', 0)"><label for="rbtNTV">Nhà tuyển dụng</label>
    </div>
    <div class="cl"></div>    
    <div class="l"><b>Ngành nghề</b></div>
    <div class="r"><select name="drpNN" id="drpNN" class="txt" onchange="javascript:count('#total')" style="width:412px;">
	<option value="--Chọn nghành nghề--">--Chọn nghành nghề--</option>
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

</select></div>
    <div class="cl"></div>
    
    <div class="l"><b>Cấp bậc</b></div>
    <div class="r"><select name="drpCB" id="drpCB" class="txt" onchange="javascript:count('#total')" style="width:412px;">
	<option value="--Chọn cấp bậc--">--Chọn cấp bậc--</option>
	<option value="1">Quản trị cấp cao</option>
	<option value="2">Trưởng/Phó phòng</option>
	<option value="3">Tư vấn/Trợ lý</option>
	<option value="4">Chuyên gia</option>
	<option value="5">Nhân viên</option>
	<option value="6">Trưởng nhóm/Giám sát</option>
	<option value="7">Kỹ thuật viên/Kỹ sư</option>
	<option value="8">Chuyên viên</option>
	<option value="10">Cộng tác viên</option>
	<option value="9">Khác</option>

</select></div>
    <div class="cl"></div>
    
    <div class="l"><b>Email</b></div>
    <div class="r"><input name="txtEmail" type="text" id="txtEmail" class="txt" placeholder="Nhập địa chỉ email của bạn"></div>
    <div class="cl"></div>   
    <div id="total" class="dem">13627 <span>việc làm phù hợp</span></div>
    <div style="padding-left:165px;"><span id="RequiredFieldValidator13" class="valerror" style="color:Red;font-size:11px;display:none;">Địa chỉ email không hợp lệ!</span><span id="RequiredFieldValidator12" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ email!</span></div>
    <div class="btn"><input type="image" name="btnSend" id="btnSend" class="btn" src="/images/btnGuiViec.gif" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnSend&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="border-width:0px;"></div>
</div>
@endsection


