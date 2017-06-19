@extends('layouts.master')
@section('title', 'Đăng ký tài khoản người tìm việc')
@section('content')
<div class="rgt2">Đăng hồ sơ tìm việc</div>
<div id="pel_ntd_dangtin">
	
    
    
    
     
    <div class="tt">
        <b style="color:red; font-size:16px;">Quy định đăng hồ sơ tìm việc:</b> 				<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Viết tiếng Việt <span style="color:red;">có dấu.</span> 				<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Không viết chữ in hoa (trừ chữ cái đầu câu) 				<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Giữa hàng nghìn hồ sơ mỗi ngày, nội dung hồ sơ của bạn <span style="color:red;">càng chi tiết, đầy đủ</span> giúp hồ sơ của bạn <b>tạo ấn tượng tốt và gây được sự chú ý đối với các nhà tuyển dụng.</b> 				<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Các hồ sơ không đúng quy định, không đạt chất lượng, nội dung không nghiêm túc sẽ bị xóa không cần báo trước.
    </div><a name="href-tieu_de"></a>
    <div class="rggt2"><b>Công việc mong muốn</b></div>
    <div class="rgl">Vị trí mong muốn (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtViTriTD" type="text" id="txtViTriTD" class="textbox">
        
    </div>
    <div class="cl"></div><a name="href-cap-bac"></a>
    <div class="rgl">Cấp bậc mong muốn (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpCB" id="drpCB" class="textbox" style="width:265px;">
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

	</select>
        
    </div>
    <div class="cl"></div>
    <div class="rgl">Cấp bậc khác:</div>
    <div class="rgr">
        <input name="txtCBOther" type="text" id="txtCBOther" class="textbox">
        <div class="ifo" style="color:Red;">Nhập mục này nếu Cấp bậc mong muốn của bạn không có trong mục "Cấp bậc mong muốn"</div>
    </div>       
    <div class="cl"></div><a name="href-nganh-nghe"></a> 
    <div class="rgl">Chọn ngành nghề (<span class="sao">*</span>):</div>
    <div class="rgr">
        <div class="list_city">
        <table id="dltNN" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;">
		<tbody><tr>
			<td>
                <input id="dltNN_ctl00_chkNN" type="checkbox" name="dltNN$ctl00$chkNN"><label for="dltNN_ctl00_chkNN">Bảo hiểm</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl01_chkNN" type="checkbox" name="dltNN$ctl01$chkNN"><label for="dltNN_ctl01_chkNN">Bán hàng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl02_chkNN" type="checkbox" name="dltNN$ctl02$chkNN"><label for="dltNN_ctl02_chkNN">Bưu chính</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl03_chkNN" type="checkbox" name="dltNN$ctl03$chkNN"><label for="dltNN_ctl03_chkNN">Kiến Trúc Sư</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl04_chkNN" type="checkbox" name="dltNN$ctl04$chkNN"><label for="dltNN_ctl04_chkNN">Bảo vệ</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl05_chkNN" type="checkbox" name="dltNN$ctl05$chkNN"><label for="dltNN_ctl05_chkNN">Hành chính văn phòng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl06_chkNN" type="checkbox" name="dltNN$ctl06$chkNN"><label for="dltNN_ctl06_chkNN">Du lịch</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl07_chkNN" type="checkbox" name="dltNN$ctl07$chkNN"><label for="dltNN_ctl07_chkNN">Ô tô-Xe máy</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl08_chkNN" type="checkbox" name="dltNN$ctl08$chkNN"><label for="dltNN_ctl08_chkNN">Báo chí-Truyền hình</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl09_chkNN" type="checkbox" name="dltNN$ctl09$chkNN"><label for="dltNN_ctl09_chkNN">Hàng gia dụng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl10_chkNN" type="checkbox" name="dltNN$ctl10$chkNN"><label for="dltNN_ctl10_chkNN">Kinh doanh ngân hàng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl11_chkNN" type="checkbox" name="dltNN$ctl11$chkNN"><label for="dltNN_ctl11_chkNN">Kỹ Sư Xây Dựng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl12_chkNN" type="checkbox" name="dltNN$ctl12$chkNN"><label for="dltNN_ctl12_chkNN">Hoạch định-Dự án</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl13_chkNN" type="checkbox" name="dltNN$ctl13$chkNN"><label for="dltNN_ctl13_chkNN">IT phần cứng/mạng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl14_chkNN" type="checkbox" name="dltNN$ctl14$chkNN"><label for="dltNN_ctl14_chkNN">Làm bán thời gian</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl15_chkNN" type="checkbox" name="dltNN$ctl15$chkNN"><label for="dltNN_ctl15_chkNN">Giáo Viên</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl16_chkNN" type="checkbox" name="dltNN$ctl16$chkNN"><label for="dltNN_ctl16_chkNN">Kinh Doanh Bất Động Sản</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl17_chkNN" type="checkbox" name="dltNN$ctl17$chkNN"><label for="dltNN_ctl17_chkNN">NV trông quán Internet</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl18_chkNN" type="checkbox" name="dltNN$ctl18$chkNN"><label for="dltNN_ctl18_chkNN">IT phần mềm</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl19_chkNN" type="checkbox" name="dltNN$ctl19$chkNN"><label for="dltNN_ctl19_chkNN">Nghệ thuật-Điện ảnh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl20_chkNN" type="checkbox" name="dltNN$ctl20$chkNN"><label for="dltNN_ctl20_chkNN">Kỹ Sư Chế Tạo Máy</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl21_chkNN" type="checkbox" name="dltNN$ctl21$chkNN"><label for="dltNN_ctl21_chkNN">Kinh doanh máy tính</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl22_chkNN" type="checkbox" name="dltNN$ctl22$chkNN"><label for="dltNN_ctl22_chkNN">Mỹ phẩm-Trang sức</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl23_chkNN" type="checkbox" name="dltNN$ctl23$chkNN"><label for="dltNN_ctl23_chkNN">Marketing-PR</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl24_chkNN" type="checkbox" name="dltNN$ctl24$chkNN"><label for="dltNN_ctl24_chkNN">Công nghệ cao</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl25_chkNN" type="checkbox" name="dltNN$ctl25$chkNN"><label for="dltNN_ctl25_chkNN">Khách sạn-Nhà hàng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl26_chkNN" type="checkbox" name="dltNN$ctl26$chkNN"><label for="dltNN_ctl26_chkNN">Nhân sự</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl27_chkNN" type="checkbox" name="dltNN$ctl27$chkNN"><label for="dltNN_ctl27_chkNN">Biên - Phiên dịch</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl28_chkNN" type="checkbox" name="dltNN$ctl28$chkNN"><label for="dltNN_ctl28_chkNN">Xây dựng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl29_chkNN" type="checkbox" name="dltNN$ctl29$chkNN"><label for="dltNN_ctl29_chkNN">Điện tử viễn thông</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl30_chkNN" type="checkbox" name="dltNN$ctl30$chkNN"><label for="dltNN_ctl30_chkNN">Nhân viên kinh doanh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl31_chkNN" type="checkbox" name="dltNN$ctl31$chkNN"><label for="dltNN_ctl31_chkNN">Quản trị kinh doanh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl32_chkNN" type="checkbox" name="dltNN$ctl32$chkNN"><label for="dltNN_ctl32_chkNN">Chứng khoán-Vàng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl33_chkNN" type="checkbox" name="dltNN$ctl33$chkNN"><label for="dltNN_ctl33_chkNN">Kế toán Kiểm toán</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl34_chkNN" type="checkbox" name="dltNN$ctl34$chkNN"><label for="dltNN_ctl34_chkNN">Thiết Kế - Đồ Họa</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl35_chkNN" type="checkbox" name="dltNN$ctl35$chkNN"><label for="dltNN_ctl35_chkNN">Dịch vụ</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl36_chkNN" type="checkbox" name="dltNN$ctl36$chkNN"><label for="dltNN_ctl36_chkNN">Thư ký-Trợ lý</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl37_chkNN" type="checkbox" name="dltNN$ctl37$chkNN"><label for="dltNN_ctl37_chkNN">Bộ phận bếp</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl38_chkNN" type="checkbox" name="dltNN$ctl38$chkNN"><label for="dltNN_ctl38_chkNN">Công nghiệp</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl39_chkNN" type="checkbox" name="dltNN$ctl39$chkNN"><label for="dltNN_ctl39_chkNN">Tổ chức sự kiện-Quà tặng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl40_chkNN" type="checkbox" name="dltNN$ctl40$chkNN"><label for="dltNN_ctl40_chkNN">Thời trang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl41_chkNN" type="checkbox" name="dltNN$ctl41$chkNN"><label for="dltNN_ctl41_chkNN">Kinh doanh mỹ phẩm</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl42_chkNN" type="checkbox" name="dltNN$ctl42$chkNN"><label for="dltNN_ctl42_chkNN">Kỹ Sư Cơ Khí</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl43_chkNN" type="checkbox" name="dltNN$ctl43$chkNN"><label for="dltNN_ctl43_chkNN">Quan hệ đối ngoại</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl44_chkNN" type="checkbox" name="dltNN$ctl44$chkNN"><label for="dltNN_ctl44_chkNN">Thiết kế đồ hoạ web</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl45_chkNN" type="checkbox" name="dltNN$ctl45$chkNN"><label for="dltNN_ctl45_chkNN">Promotion Girl (PG)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl46_chkNN" type="checkbox" name="dltNN$ctl46$chkNN"><label for="dltNN_ctl46_chkNN">Chuyên Viên Đào Tạo</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl47_chkNN" type="checkbox" name="dltNN$ctl47$chkNN"><label for="dltNN_ctl47_chkNN">Sinh viên làm thêm</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl48_chkNN" type="checkbox" name="dltNN$ctl48$chkNN"><label for="dltNN_ctl48_chkNN">Thương mại điện tử</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl49_chkNN" type="checkbox" name="dltNN$ctl49$chkNN"><label for="dltNN_ctl49_chkNN">Thiết kế-Mỹ thuật</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl50_chkNN" type="checkbox" name="dltNN$ctl50$chkNN"><label for="dltNN_ctl50_chkNN">Kỹ Sư Hóa Chất</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl51_chkNN" type="checkbox" name="dltNN$ctl51$chkNN"><label for="dltNN_ctl51_chkNN">Kinh doanh dược phẩm</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl52_chkNN" type="checkbox" name="dltNN$ctl52$chkNN"><label for="dltNN_ctl52_chkNN">Thực phẩm-Đồ uống</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl53_chkNN" type="checkbox" name="dltNN$ctl53$chkNN"><label for="dltNN_ctl53_chkNN">Tiếp thị-Quảng cáo</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl54_chkNN" type="checkbox" name="dltNN$ctl54$chkNN"><label for="dltNN_ctl54_chkNN">Dệt may-Gia dày</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl55_chkNN" type="checkbox" name="dltNN$ctl55$chkNN"><label for="dltNN_ctl55_chkNN">Bộ phận bồi bàn</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl56_chkNN" type="checkbox" name="dltNN$ctl56$chkNN"><label for="dltNN_ctl56_chkNN">Lễ tân</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl57_chkNN" type="checkbox" name="dltNN$ctl57$chkNN"><label for="dltNN_ctl57_chkNN">Xuất, nhập khẩu</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl58_chkNN" type="checkbox" name="dltNN$ctl58$chkNN"><label for="dltNN_ctl58_chkNN">KD bất động sản</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl59_chkNN" type="checkbox" name="dltNN$ctl59$chkNN"><label for="dltNN_ctl59_chkNN">Ngân hàng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl60_chkNN" type="checkbox" name="dltNN$ctl60$chkNN"><label for="dltNN_ctl60_chkNN">Chuyên viên tuyển dụng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl61_chkNN" type="checkbox" name="dltNN$ctl61$chkNN"><label for="dltNN_ctl61_chkNN">Bộ phận vệ sinh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl62_chkNN" type="checkbox" name="dltNN$ctl62$chkNN"><label for="dltNN_ctl62_chkNN">Giáo dục-Đào tạo</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl63_chkNN" type="checkbox" name="dltNN$ctl63$chkNN"><label for="dltNN_ctl63_chkNN">In ấn-Xuất bản</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl64_chkNN" type="checkbox" name="dltNN$ctl64$chkNN"><label for="dltNN_ctl64_chkNN">Kinh doanh vàng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl65_chkNN" type="checkbox" name="dltNN$ctl65$chkNN"><label for="dltNN_ctl65_chkNN">Kỹ Sư Môi Trường</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl66_chkNN" type="checkbox" name="dltNN$ctl66$chkNN"><label for="dltNN_ctl66_chkNN">Nghành nghề khác</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl67_chkNN" type="checkbox" name="dltNN$ctl67$chkNN"><label for="dltNN_ctl67_chkNN">Quản Trị Mạng </label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl68_chkNN" type="checkbox" name="dltNN$ctl68$chkNN"><label for="dltNN_ctl68_chkNN">Thực tập</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl69_chkNN" type="checkbox" name="dltNN$ctl69$chkNN"><label for="dltNN_ctl69_chkNN">Kỹ thuật viên</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl70_chkNN" type="checkbox" name="dltNN$ctl70$chkNN"><label for="dltNN_ctl70_chkNN">Kỹ Sư Điện Tử</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl71_chkNN" type="checkbox" name="dltNN$ctl71$chkNN"><label for="dltNN_ctl71_chkNN">Kinh doanh điện thoại</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl72_chkNN" type="checkbox" name="dltNN$ctl72$chkNN"><label for="dltNN_ctl72_chkNN">Lao động phổ thông</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl73_chkNN" type="checkbox" name="dltNN$ctl73$chkNN"><label for="dltNN_ctl73_chkNN">Hàng hải</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl74_chkNN" type="checkbox" name="dltNN$ctl74$chkNN"><label for="dltNN_ctl74_chkNN">Bộ phận sảnh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl75_chkNN" type="checkbox" name="dltNN$ctl75$chkNN"><label for="dltNN_ctl75_chkNN">Đầu tư</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl76_chkNN" type="checkbox" name="dltNN$ctl76$chkNN"><label for="dltNN_ctl76_chkNN">Giao dịch viên</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl77_chkNN" type="checkbox" name="dltNN$ctl77$chkNN"><label for="dltNN_ctl77_chkNN">Hàng không</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl78_chkNN" type="checkbox" name="dltNN$ctl78$chkNN"><label for="dltNN_ctl78_chkNN">Nông-Lâm-Ngư nghiệp</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl79_chkNN" type="checkbox" name="dltNN$ctl79$chkNN"><label for="dltNN_ctl79_chkNN">Kinh doanh hàng tiêu dùng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl80_chkNN" type="checkbox" name="dltNN$ctl80$chkNN"><label for="dltNN_ctl80_chkNN">Kỹ Sư Kết Cấu</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl81_chkNN" type="checkbox" name="dltNN$ctl81$chkNN"><label for="dltNN_ctl81_chkNN">Kỹ Sư CNTT</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl82_chkNN" type="checkbox" name="dltNN$ctl82$chkNN"><label for="dltNN_ctl82_chkNN">Kỹ Sư Dự Toán</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl83_chkNN" type="checkbox" name="dltNN$ctl83$chkNN"><label for="dltNN_ctl83_chkNN">Kinh doanh du lịch</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl84_chkNN" type="checkbox" name="dltNN$ctl84$chkNN"><label for="dltNN_ctl84_chkNN">Thủ công mỹ nghệ</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl85_chkNN" type="checkbox" name="dltNN$ctl85$chkNN"><label for="dltNN_ctl85_chkNN">Người giúp việc</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl86_chkNN" type="checkbox" name="dltNN$ctl86$chkNN"><label for="dltNN_ctl86_chkNN">Chuyên viên tư vấn tài chính</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl87_chkNN" type="checkbox" name="dltNN$ctl87$chkNN"><label for="dltNN_ctl87_chkNN">Trung Tâm Thẻ Ngân Hàng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl88_chkNN" type="checkbox" name="dltNN$ctl88$chkNN"><label for="dltNN_ctl88_chkNN">Pháp lý</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl89_chkNN" type="checkbox" name="dltNN$ctl89$chkNN"><label for="dltNN_ctl89_chkNN">Vật tư-Thiết bị</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl90_chkNN" type="checkbox" name="dltNN$ctl90$chkNN"><label for="dltNN_ctl90_chkNN">Kinh doanh tài chính</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl91_chkNN" type="checkbox" name="dltNN$ctl91$chkNN"><label for="dltNN_ctl91_chkNN">Kỹ Sư Dự Thầu</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl92_chkNN" type="checkbox" name="dltNN$ctl92$chkNN"><label for="dltNN_ctl92_chkNN">Kỹ Sư Nông Nghiệp</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl93_chkNN" type="checkbox" name="dltNN$ctl93$chkNN"><label for="dltNN_ctl93_chkNN">Kinh doanh thiết bị y tế</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl94_chkNN" type="checkbox" name="dltNN$ctl94$chkNN"><label for="dltNN_ctl94_chkNN">Tư vấn</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl95_chkNN" type="checkbox" name="dltNN$ctl95$chkNN"><label for="dltNN_ctl95_chkNN">Vận tải-Lái xe</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl96_chkNN" type="checkbox" name="dltNN$ctl96$chkNN"><label for="dltNN_ctl96_chkNN">Ngoại Hối</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl97_chkNN" type="checkbox" name="dltNN$ctl97$chkNN"><label for="dltNN_ctl97_chkNN">Kinh doanh hàng may mặc</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl98_chkNN" type="checkbox" name="dltNN$ctl98$chkNN"><label for="dltNN_ctl98_chkNN">Kỹ Sư Máy Tính</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl99_chkNN" type="checkbox" name="dltNN$ctl99$chkNN"><label for="dltNN_ctl99_chkNN">Kỹ Sư Điện Nước</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl100_chkNN" type="checkbox" name="dltNN$ctl100$chkNN"><label for="dltNN_ctl100_chkNN">Kinh doanh dịch vụ</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl101_chkNN" type="checkbox" name="dltNN$ctl101$chkNN"><label for="dltNN_ctl101_chkNN">Y tế-Dược</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl102_chkNN" type="checkbox" name="dltNN$ctl102$chkNN"><label for="dltNN_ctl102_chkNN">Kinh doanh chứng khoán</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl103_chkNN" type="checkbox" name="dltNN$ctl103$chkNN"><label for="dltNN_ctl103_chkNN">Kỹ Sư Điện Lạnh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl104_chkNN" type="checkbox" name="dltNN$ctl104$chkNN"><label for="dltNN_ctl104_chkNN">Kỹ Sư Kinh Tế</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl105_chkNN" type="checkbox" name="dltNN$ctl105$chkNN"><label for="dltNN_ctl105_chkNN">Kinh doanh hóa chất</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl106_chkNN" type="checkbox" name="dltNN$ctl106$chkNN"><label for="dltNN_ctl106_chkNN">Kinh doanh thời trang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl107_chkNN" type="checkbox" name="dltNN$ctl107$chkNN"><label for="dltNN_ctl107_chkNN">Kỹ Sư Giám Sát</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl108_chkNN" type="checkbox" name="dltNN$ctl108$chkNN"><label for="dltNN_ctl108_chkNN">Kỹ Sư Thiết Kế</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl109_chkNN" type="checkbox" name="dltNN$ctl109$chkNN"><label for="dltNN_ctl109_chkNN">Kinh doanh thủ công mỹ nghệ</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl110_chkNN" type="checkbox" name="dltNN$ctl110$chkNN"><label for="dltNN_ctl110_chkNN">Kinh doanh bảo hiểm</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl111_chkNN" type="checkbox" name="dltNN$ctl111$chkNN"><label for="dltNN_ctl111_chkNN">Kỹ Sư Giao Thông Vận Tải</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl112_chkNN" type="checkbox" name="dltNN$ctl112$chkNN"><label for="dltNN_ctl112_chkNN">Kỹ Sư Điện Tử Viễn Thông</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl113_chkNN" type="checkbox" name="dltNN$ctl113$chkNN"><label for="dltNN_ctl113_chkNN">Kinh doanh thiết bị công nghệ</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl114_chkNN" type="checkbox" name="dltNN$ctl114$chkNN"><label for="dltNN_ctl114_chkNN">Kinh doanh truyền thông</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl115_chkNN" type="checkbox" name="dltNN$ctl115$chkNN"><label for="dltNN_ctl115_chkNN">Kinh Doanh Thiết Bị Kỹ Thuật</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltNN_ctl116_chkNN" type="checkbox" name="dltNN$ctl116$chkNN"><label for="dltNN_ctl116_chkNN">Kinh doanh khác</label>
            </td>
		</tr>
	</tbody></table>
        </div>    
        
    </div>
    <div class="cl"></div><a name="href-dia-diem"></a> 
    <div class="rgl">Địa điểm làm việc (<span class="sao">*</span>): <div class="ifo">(Tối đa 10 địa điểm)</div></div>
    <div class="rgr">
        <div class="list_city">
        <table id="dtlCity" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;">
		<tbody><tr>
			<td>
                <input id="dtlCity_ctl00_chkCity" type="checkbox" name="dtlCity$ctl00$chkCity"><label for="dtlCity_ctl00_chkCity">Hà Nội</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl01_chkCity" type="checkbox" name="dtlCity$ctl01$chkCity"><label for="dtlCity_ctl01_chkCity">TP.HCM</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl02_chkCity" type="checkbox" name="dtlCity$ctl02$chkCity"><label for="dtlCity_ctl02_chkCity">Đà Nẵng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl03_chkCity" type="checkbox" name="dtlCity$ctl03$chkCity"><label for="dtlCity_ctl03_chkCity">Bình Dương</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl04_chkCity" type="checkbox" name="dtlCity$ctl04$chkCity"><label for="dtlCity_ctl04_chkCity">Cần Thơ</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl05_chkCity" type="checkbox" name="dtlCity$ctl05$chkCity"><label for="dtlCity_ctl05_chkCity">Hải Phòng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl06_chkCity" type="checkbox" name="dtlCity$ctl06$chkCity"><label for="dtlCity_ctl06_chkCity">Bà Rịa - Vũng Tàu</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl07_chkCity" type="checkbox" name="dtlCity$ctl07$chkCity"><label for="dtlCity_ctl07_chkCity">Bắc Giang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl08_chkCity" type="checkbox" name="dtlCity$ctl08$chkCity"><label for="dtlCity_ctl08_chkCity">Bắc Kạn</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl09_chkCity" type="checkbox" name="dtlCity$ctl09$chkCity"><label for="dtlCity_ctl09_chkCity">Thừa Thiên Huế</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl10_chkCity" type="checkbox" name="dtlCity$ctl10$chkCity"><label for="dtlCity_ctl10_chkCity">Bắc Ninh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl11_chkCity" type="checkbox" name="dtlCity$ctl11$chkCity"><label for="dtlCity_ctl11_chkCity">Bến Tre</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl12_chkCity" type="checkbox" name="dtlCity$ctl12$chkCity"><label for="dtlCity_ctl12_chkCity">Bạc Liêu</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl13_chkCity" type="checkbox" name="dtlCity$ctl13$chkCity"><label for="dtlCity_ctl13_chkCity">Bình Định</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl14_chkCity" type="checkbox" name="dtlCity$ctl14$chkCity"><label for="dtlCity_ctl14_chkCity">Bình Phước</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl15_chkCity" type="checkbox" name="dtlCity$ctl15$chkCity"><label for="dtlCity_ctl15_chkCity">Bình Thuận</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl16_chkCity" type="checkbox" name="dtlCity$ctl16$chkCity"><label for="dtlCity_ctl16_chkCity">Cà Mau</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl17_chkCity" type="checkbox" name="dtlCity$ctl17$chkCity"><label for="dtlCity_ctl17_chkCity">Cao Bằng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl18_chkCity" type="checkbox" name="dtlCity$ctl18$chkCity"><label for="dtlCity_ctl18_chkCity">Đắc Lắc</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl19_chkCity" type="checkbox" name="dtlCity$ctl19$chkCity"><label for="dtlCity_ctl19_chkCity">An Giang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl20_chkCity" type="checkbox" name="dtlCity$ctl20$chkCity"><label for="dtlCity_ctl20_chkCity">Đắc Nông</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl21_chkCity" type="checkbox" name="dtlCity$ctl21$chkCity"><label for="dtlCity_ctl21_chkCity">Điện Biên</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl22_chkCity" type="checkbox" name="dtlCity$ctl22$chkCity"><label for="dtlCity_ctl22_chkCity">Đồng Nai</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl23_chkCity" type="checkbox" name="dtlCity$ctl23$chkCity"><label for="dtlCity_ctl23_chkCity">Đồng Tháp</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl24_chkCity" type="checkbox" name="dtlCity$ctl24$chkCity"><label for="dtlCity_ctl24_chkCity">Gia Lai</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl25_chkCity" type="checkbox" name="dtlCity$ctl25$chkCity"><label for="dtlCity_ctl25_chkCity">Hà Giang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl26_chkCity" type="checkbox" name="dtlCity$ctl26$chkCity"><label for="dtlCity_ctl26_chkCity">Hà Nam</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl27_chkCity" type="checkbox" name="dtlCity$ctl27$chkCity"><label for="dtlCity_ctl27_chkCity">Hà Tĩnh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl28_chkCity" type="checkbox" name="dtlCity$ctl28$chkCity"><label for="dtlCity_ctl28_chkCity">Hải Dương</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl29_chkCity" type="checkbox" name="dtlCity$ctl29$chkCity"><label for="dtlCity_ctl29_chkCity">Hậu Giang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl30_chkCity" type="checkbox" name="dtlCity$ctl30$chkCity"><label for="dtlCity_ctl30_chkCity">Hòa Bình</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl31_chkCity" type="checkbox" name="dtlCity$ctl31$chkCity"><label for="dtlCity_ctl31_chkCity">Hưng Yên</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl32_chkCity" type="checkbox" name="dtlCity$ctl32$chkCity"><label for="dtlCity_ctl32_chkCity">Khánh Hòa - Nha Trang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl33_chkCity" type="checkbox" name="dtlCity$ctl33$chkCity"><label for="dtlCity_ctl33_chkCity">Kiên Giang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl34_chkCity" type="checkbox" name="dtlCity$ctl34$chkCity"><label for="dtlCity_ctl34_chkCity">Kon Tum</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl35_chkCity" type="checkbox" name="dtlCity$ctl35$chkCity"><label for="dtlCity_ctl35_chkCity">Lai Châu</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl36_chkCity" type="checkbox" name="dtlCity$ctl36$chkCity"><label for="dtlCity_ctl36_chkCity">Lạng Sơn</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl37_chkCity" type="checkbox" name="dtlCity$ctl37$chkCity"><label for="dtlCity_ctl37_chkCity">Lào Cai</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl38_chkCity" type="checkbox" name="dtlCity$ctl38$chkCity"><label for="dtlCity_ctl38_chkCity">Lâm Đồng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl39_chkCity" type="checkbox" name="dtlCity$ctl39$chkCity"><label for="dtlCity_ctl39_chkCity">Long An</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl40_chkCity" type="checkbox" name="dtlCity$ctl40$chkCity"><label for="dtlCity_ctl40_chkCity">Nam Định</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl41_chkCity" type="checkbox" name="dtlCity$ctl41$chkCity"><label for="dtlCity_ctl41_chkCity">Nghệ An</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl42_chkCity" type="checkbox" name="dtlCity$ctl42$chkCity"><label for="dtlCity_ctl42_chkCity">Ninh Bình</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl43_chkCity" type="checkbox" name="dtlCity$ctl43$chkCity"><label for="dtlCity_ctl43_chkCity">Ninh Thuận</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl44_chkCity" type="checkbox" name="dtlCity$ctl44$chkCity"><label for="dtlCity_ctl44_chkCity">Nha Trang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl45_chkCity" type="checkbox" name="dtlCity$ctl45$chkCity"><label for="dtlCity_ctl45_chkCity">Phú Thọ</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl46_chkCity" type="checkbox" name="dtlCity$ctl46$chkCity"><label for="dtlCity_ctl46_chkCity">Phú Yên</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl47_chkCity" type="checkbox" name="dtlCity$ctl47$chkCity"><label for="dtlCity_ctl47_chkCity">Quảng Bình</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl48_chkCity" type="checkbox" name="dtlCity$ctl48$chkCity"><label for="dtlCity_ctl48_chkCity">Quảng Nam</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl49_chkCity" type="checkbox" name="dtlCity$ctl49$chkCity"><label for="dtlCity_ctl49_chkCity">Quảng Ngãi</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl50_chkCity" type="checkbox" name="dtlCity$ctl50$chkCity"><label for="dtlCity_ctl50_chkCity">Quảng Ninh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl51_chkCity" type="checkbox" name="dtlCity$ctl51$chkCity"><label for="dtlCity_ctl51_chkCity">Quảng Trị</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl52_chkCity" type="checkbox" name="dtlCity$ctl52$chkCity"><label for="dtlCity_ctl52_chkCity">Sóc Trăng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl53_chkCity" type="checkbox" name="dtlCity$ctl53$chkCity"><label for="dtlCity_ctl53_chkCity">Sơn La</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl54_chkCity" type="checkbox" name="dtlCity$ctl54$chkCity"><label for="dtlCity_ctl54_chkCity">Tây Ninh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl55_chkCity" type="checkbox" name="dtlCity$ctl55$chkCity"><label for="dtlCity_ctl55_chkCity">Thái Bình</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl56_chkCity" type="checkbox" name="dtlCity$ctl56$chkCity"><label for="dtlCity_ctl56_chkCity">Thái Nguyên</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl57_chkCity" type="checkbox" name="dtlCity$ctl57$chkCity"><label for="dtlCity_ctl57_chkCity">Thanh Hóa</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl58_chkCity" type="checkbox" name="dtlCity$ctl58$chkCity"><label for="dtlCity_ctl58_chkCity">Tiền Giang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl59_chkCity" type="checkbox" name="dtlCity$ctl59$chkCity"><label for="dtlCity_ctl59_chkCity">Trà Vinh</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl60_chkCity" type="checkbox" name="dtlCity$ctl60$chkCity"><label for="dtlCity_ctl60_chkCity">Tuyên Quang</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl61_chkCity" type="checkbox" name="dtlCity$ctl61$chkCity"><label for="dtlCity_ctl61_chkCity">Vĩnh Long</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl62_chkCity" type="checkbox" name="dtlCity$ctl62$chkCity"><label for="dtlCity_ctl62_chkCity">Vĩnh Phúc</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl63_chkCity" type="checkbox" name="dtlCity$ctl63$chkCity"><label for="dtlCity_ctl63_chkCity">Yên Bái</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl64_chkCity" type="checkbox" name="dtlCity$ctl64$chkCity"><label for="dtlCity_ctl64_chkCity">Phú Quốc</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl65_chkCity" type="checkbox" name="dtlCity$ctl65$chkCity"><label for="dtlCity_ctl65_chkCity">Toàn Quốc</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl66_chkCity" type="checkbox" name="dtlCity$ctl66$chkCity"><label for="dtlCity_ctl66_chkCity">Miền Bắc</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl67_chkCity" type="checkbox" name="dtlCity$ctl67$chkCity"><label for="dtlCity_ctl67_chkCity">Miền Nam</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlCity_ctl68_chkCity" type="checkbox" name="dtlCity$ctl68$chkCity"><label for="dtlCity_ctl68_chkCity">Miền Trung</label>
            </td>
		</tr>
	</tbody></table>
        </div>
        <div class="cl"></div>
        
    </div>
    <div class="cl"></div><a name="href-hinh-thuc_lv"></a> 
    <div class="rgl">Hình thức làm việc (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpHT" id="drpHT" class="textbox" style="width:265px;">
		<option value="--Chọn hình thức làm việc--">--Chọn hình thức làm việc--</option>
		<option value="1">Toàn thời gian cố định</option>
		<option value="2">Toàn thời gian tạm thời</option>
		<option value="3">Bán thời gian cố định</option>
		<option value="4">Bán thời gian tạm thời</option>
		<option value="5">Theo hợp đồng tư vấn</option>
		<option value="6">Thực tập</option>
		<option value="8">Học Việc</option>
		<option value="7">Khác</option>

	</select>
        
    </div>
    <div class="cl"></div><a name="href-muc-luong"></a>  
    <div class="rgl">Mức lương mong muốn (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpML" id="drpML" class="textbox" style="width:265px;">
		<option value="--Chọn mức lương--">--Chọn mức lương--</option>
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
        
    </div>
    <div class="cl"></div>          
    <div class="rgl">Mục tiêu nghề nghiệp:</div>
    <div class="rgr">
        <textarea name="txtMoTa" rows="5" cols="20" id="txtMoTa" class="textbox" style="width:400px;"></textarea>
    </div> 
    <div class="cl"></div><a name="href-han-nop"></a>
    <div class="rgl">Hồ sơ hiển thị đến ngày (<span class="sao">*</span>):</div>
    <div class="rgr">
        
        <input id="txtdate" name="txtdate" value="" class="textbox" style="width:150px" onclick="setYears(1944,2023); showCalender(this, 'txtdate');return false;" readonly="readonly" type="text">
        <a href="#" onclick="setYears(1944,2023); showCalender(this, 'txtdate');return false;"><img src="/images/icon/iconCalendar.gif" alt="icon"></a><span>(dd/mm/yyyy)</span>
        <table id="calenderTable">
    <tbody id="calenderTableHead">
        <tr>
            <td colspan="4" align="left"><select onchange="showCalenderBody(createCalender(document.getElementById('selectYear').value, this.selectedIndex, false));" id="selectMonth">
                <option selected="selected" value="0">
                    Tháng 1
                </option>

                <option value="1">
                    Tháng 2
                </option>

                <option value="2">
                    Tháng 3
                </option>

                <option value="3">
                    Tháng 4
                </option>

                <option value="4">
                    Tháng 5
                </option>

                <option value="5">
                    Tháng 6
                </option>

                <option value="6">
                    Tháng 7
                </option>

                <option value="7">
                    Tháng 8
                </option>

                <option value="8">
                    Tháng 9
                </option>

                <option value="9">
                    Tháng 10
                </option>

                <option value="10">
                    Tháng 11
                </option>

                <option value="11">
                    Tháng 12
                </option>
            </select></td>

            <td colspan="2" align="center"><select onchange="showCalenderBody(createCalender(this.value, document.getElementById('selectMonth').selectedIndex, false));" id="selectYear"><option selected="selected" value="">&nbsp;</option></select></td>

            <td align="right"><a href="#" onclick="closeCalender();return false;" title="Đóng">X</a></td>
        </tr>
    </tbody>

    <tbody id="calenderTableDays">
        <tr style=" height:20px; line-height:20px;">
            <td>CN</td>

            <td>T2</td>

            <td>T3</td>

            <td>T4</td>

            <td>T5</td>

            <td>T6</td>

            <td>T7</td>
        </tr>
    </tbody>

    <tbody id="calender"><tr><td></td></tr></tbody>
</table>

    </div>  
    <div class="cl" style="height:15px;"></div>   
    <div class="rggt2"><b>Thông tin cá nhân</b></div>   
    <div class="rgl">&nbsp;</div>
    <div class="rgr">
        <ul class="list_ntd">
            
            <li class="l">Họ và tên:</li><li class="r">Lê Hoa</li>
            <li class="cl"></li>
            <li class="l">Ngày sinh:</li><li class="r">25/09/1978</li>
            <li class="cl"></li>   
            <li class="l">Giới tính:</li><li class="r">Nữ</li>
            <li class="cl"></li>  
            <li class="l">Tình trạng hôn nhân:</li><li class="r">Độc thân</li>
            <li class="cl"></li>                                                              
            
        </ul>
    </div>   
    <div class="cl"></div><a name="href-trinh_do"></a>
    <div class="rggt2"><b>Trình độ học vấn</b></div>
    <div class="rgl">Trình độ học vấn (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpBC" id="drpBC" class="textbox" style="width:265px;">
		<option value="--Chọn trình độ học vấn--">--Chọn trình độ học vấn--</option>
		<option value="1">Trên đại học</option>
		<option value="2">Đại học</option>
		<option value="3">Cao đẳng</option>
		<option value="4">Trung cấp</option>
		<option value="5">Trung học</option>
		<option value="6">Lao Động phổ Thông</option>
		<option value="7">Không yêu cầu</option>

	</select>
        
    </div>   
    <div class="cl"></div>
    <div class="rgl">Trình độ khác:</div>
    <div class="rgr">
        <input name="drpBCOther" type="text" id="drpBCOther" class="textbox">
        <div class="ifo" style="color:Red;">Nhập mục này nếu Trình độ học vấn của bạn không có trong mục "Trình độ học vấn"</div>
    </div>       
    <div class="cl"></div><a name="href-nganh-hoc"></a>   
    <div class="rgl">Ngành học (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtNganhHoc" type="text" id="txtNganhHoc" class="textbox">
        
    </div>    
    <div class="cl"></div> 
    <div class="rgl">Tốt nghiệp năm:</div>
    <div class="rgr">
        <select name="drpNamTN" id="drpNamTN" class="textbox" style="width:80px;">
		<option value="--Chọn năm tốt nghiệp--">--Chọn năm tốt nghiệp--</option>
		<option value="1">2014</option>
		<option value="2">2013</option>
		<option value="16">2012</option>
		<option value="3">2011</option>
		<option value="4">2010</option>
		<option value="5">2009</option>
		<option value="6">2008</option>
		<option value="7">2007</option>
		<option value="8">2006</option>
		<option value="9">2005</option>
		<option value="10">2004</option>
		<option value="11">2003</option>
		<option value="12">2002</option>
		<option value="13">2001</option>
		<option value="14">2000</option>
		<option value="15">1999</option>
		<option value="17">1998</option>
		<option value="18">1997</option>
		<option value="19">1996</option>
		<option value="20">1995</option>
		<option value="21">1994</option>
		<option value="22">1993</option>
		<option value="23">1992</option>
		<option value="24">1991</option>
		<option value="25">1990</option>

	</select>
        <span> Loại TN</span>
        <select name="drpLoaiTN" id="drpLoaiTN" class="textbox" style="width:135px;">
		<option value="--Chọn loại tốt nghiệp--">--Chọn loại tốt nghiệp--</option>
		<option value="1">Xuất sắc</option>
		<option value="2">Giỏi</option>
		<option value="3">Khá</option>
		<option value="4">Trung bình khá</option>
		<option value="5">Trung bình</option>

	</select>
    </div>  
    <div class="cl"></div>
    <div class="rgl">Tốt nghiệp tại trường:</div>
    <div class="rgr">
        <div class="list_city">
        <table id="dltTruongTN" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;">
		<tbody><tr>
			<td>
                <input id="dltTruongTN_ctl00_chkTruongTN" type="checkbox" name="dltTruongTN$ctl00$chkTruongTN"><label for="dltTruongTN_ctl00_chkTruongTN">Quốc gia Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl01_chkTruongTN" type="checkbox" name="dltTruongTN$ctl01$chkTruongTN"><label for="dltTruongTN_ctl01_chkTruongTN">Bách khoa Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl02_chkTruongTN" type="checkbox" name="dltTruongTN$ctl02$chkTruongTN"><label for="dltTruongTN_ctl02_chkTruongTN">Công đoàn  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl03_chkTruongTN" type="checkbox" name="dltTruongTN$ctl03$chkTruongTN"><label for="dltTruongTN_ctl03_chkTruongTN">Công nghệ Giao thông vận tải  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl04_chkTruongTN" type="checkbox" name="dltTruongTN$ctl04$chkTruongTN"><label for="dltTruongTN_ctl04_chkTruongTN">Công nghiệp Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl05_chkTruongTN" type="checkbox" name="dltTruongTN$ctl05$chkTruongTN"><label for="dltTruongTN_ctl05_chkTruongTN">Công nghiệp Việt Hung  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl06_chkTruongTN" type="checkbox" name="dltTruongTN$ctl06$chkTruongTN"><label for="dltTruongTN_ctl06_chkTruongTN">Dược Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl07_chkTruongTN" type="checkbox" name="dltTruongTN$ctl07$chkTruongTN"><label for="dltTruongTN_ctl07_chkTruongTN">Điện lực  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl08_chkTruongTN" type="checkbox" name="dltTruongTN$ctl08$chkTruongTN"><label for="dltTruongTN_ctl08_chkTruongTN">Giao thông vận tải  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl09_chkTruongTN" type="checkbox" name="dltTruongTN$ctl09$chkTruongTN"><label for="dltTruongTN_ctl09_chkTruongTN">Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl10_chkTruongTN" type="checkbox" name="dltTruongTN$ctl10$chkTruongTN"><label for="dltTruongTN_ctl10_chkTruongTN">Khoa học và Công nghệ Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl11_chkTruongTN" type="checkbox" name="dltTruongTN$ctl11$chkTruongTN"><label for="dltTruongTN_ctl11_chkTruongTN">Kinh tế Kỹ thuật Công nghiệp  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl12_chkTruongTN" type="checkbox" name="dltTruongTN$ctl12$chkTruongTN"><label for="dltTruongTN_ctl12_chkTruongTN">Kinh tế Quốc dân  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl13_chkTruongTN" type="checkbox" name="dltTruongTN$ctl13$chkTruongTN"><label for="dltTruongTN_ctl13_chkTruongTN">Kiến trúc Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl14_chkTruongTN" type="checkbox" name="dltTruongTN$ctl14$chkTruongTN"><label for="dltTruongTN_ctl14_chkTruongTN">Lao động Xã hội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl15_chkTruongTN" type="checkbox" name="dltTruongTN$ctl15$chkTruongTN"><label for="dltTruongTN_ctl15_chkTruongTN">Lâm nghiệp  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl16_chkTruongTN" type="checkbox" name="dltTruongTN$ctl16$chkTruongTN"><label for="dltTruongTN_ctl16_chkTruongTN">Luật Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl17_chkTruongTN" type="checkbox" name="dltTruongTN$ctl17$chkTruongTN"><label for="dltTruongTN_ctl17_chkTruongTN">Mỏ Địa chất Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl18_chkTruongTN" type="checkbox" name="dltTruongTN$ctl18$chkTruongTN"><label for="dltTruongTN_ctl18_chkTruongTN">Mỹ thuật Công nghiệp  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl19_chkTruongTN" type="checkbox" name="dltTruongTN$ctl19$chkTruongTN"><label for="dltTruongTN_ctl19_chkTruongTN">Mỹ thuật Việt Nam  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl20_chkTruongTN" type="checkbox" name="dltTruongTN$ctl20$chkTruongTN"><label for="dltTruongTN_ctl20_chkTruongTN">Ngoại thương  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl21_chkTruongTN" type="checkbox" name="dltTruongTN$ctl21$chkTruongTN"><label for="dltTruongTN_ctl21_chkTruongTN">Nội vụ Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl22_chkTruongTN" type="checkbox" name="dltTruongTN$ctl22$chkTruongTN"><label for="dltTruongTN_ctl22_chkTruongTN">Nông nghiệp Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl23_chkTruongTN" type="checkbox" name="dltTruongTN$ctl23$chkTruongTN"><label for="dltTruongTN_ctl23_chkTruongTN">Sân khấu Điện ảnh  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl24_chkTruongTN" type="checkbox" name="dltTruongTN$ctl24$chkTruongTN"><label for="dltTruongTN_ctl24_chkTruongTN">Sư phạm Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl25_chkTruongTN" type="checkbox" name="dltTruongTN$ctl25$chkTruongTN"><label for="dltTruongTN_ctl25_chkTruongTN">Sư phạm Nghệ thuật Trung ương Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl26_chkTruongTN" type="checkbox" name="dltTruongTN$ctl26$chkTruongTN"><label for="dltTruongTN_ctl26_chkTruongTN">Sư phạm Thể dục thể thao Hà nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl27_chkTruongTN" type="checkbox" name="dltTruongTN$ctl27$chkTruongTN"><label for="dltTruongTN_ctl27_chkTruongTN">Tài nguyên và Môi trường Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl28_chkTruongTN" type="checkbox" name="dltTruongTN$ctl28$chkTruongTN"><label for="dltTruongTN_ctl28_chkTruongTN">Thủy lợi  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl29_chkTruongTN" type="checkbox" name="dltTruongTN$ctl29$chkTruongTN"><label for="dltTruongTN_ctl29_chkTruongTN">Thương mại  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl30_chkTruongTN" type="checkbox" name="dltTruongTN$ctl30$chkTruongTN"><label for="dltTruongTN_ctl30_chkTruongTN">Văn hóa Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl31_chkTruongTN" type="checkbox" name="dltTruongTN$ctl31$chkTruongTN"><label for="dltTruongTN_ctl31_chkTruongTN">Xây dựng  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl32_chkTruongTN" type="checkbox" name="dltTruongTN$ctl32$chkTruongTN"><label for="dltTruongTN_ctl32_chkTruongTN">Y Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl33_chkTruongTN" type="checkbox" name="dltTruongTN$ctl33$chkTruongTN"><label for="dltTruongTN_ctl33_chkTruongTN">Y tế Công cộng  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl34_chkTruongTN" type="checkbox" name="dltTruongTN$ctl34$chkTruongTN"><label for="dltTruongTN_ctl34_chkTruongTN">Mở Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl35_chkTruongTN" type="checkbox" name="dltTruongTN$ctl35$chkTruongTN"><label for="dltTruongTN_ctl35_chkTruongTN">Đông Đô  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl36_chkTruongTN" type="checkbox" name="dltTruongTN$ctl36$chkTruongTN"><label for="dltTruongTN_ctl36_chkTruongTN">Phương Đông  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl37_chkTruongTN" type="checkbox" name="dltTruongTN$ctl37$chkTruongTN"><label for="dltTruongTN_ctl37_chkTruongTN">Thăng Long  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl38_chkTruongTN" type="checkbox" name="dltTruongTN$ctl38$chkTruongTN"><label for="dltTruongTN_ctl38_chkTruongTN">Đại Nam  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl39_chkTruongTN" type="checkbox" name="dltTruongTN$ctl39$chkTruongTN"><label for="dltTruongTN_ctl39_chkTruongTN">FPT  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl40_chkTruongTN" type="checkbox" name="dltTruongTN$ctl40$chkTruongTN"><label for="dltTruongTN_ctl40_chkTruongTN">Hòa Bình  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl41_chkTruongTN" type="checkbox" name="dltTruongTN$ctl41$chkTruongTN"><label for="dltTruongTN_ctl41_chkTruongTN">Kinh doanh và Công nghệ Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl42_chkTruongTN" type="checkbox" name="dltTruongTN$ctl42$chkTruongTN"><label for="dltTruongTN_ctl42_chkTruongTN">Nguyễn Trãi  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl43_chkTruongTN" type="checkbox" name="dltTruongTN$ctl43$chkTruongTN"><label for="dltTruongTN_ctl43_chkTruongTN">Quốc tế Bắc Hà  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl44_chkTruongTN" type="checkbox" name="dltTruongTN$ctl44$chkTruongTN"><label for="dltTruongTN_ctl44_chkTruongTN">Tài chính Ngân hàng Hà Nội  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl45_chkTruongTN" type="checkbox" name="dltTruongTN$ctl45$chkTruongTN"><label for="dltTruongTN_ctl45_chkTruongTN">Thành Tây  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl46_chkTruongTN" type="checkbox" name="dltTruongTN$ctl46$chkTruongTN"><label for="dltTruongTN_ctl46_chkTruongTN">Thành Đô  - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl47_chkTruongTN" type="checkbox" name="dltTruongTN$ctl47$chkTruongTN"><label for="dltTruongTN_ctl47_chkTruongTN">Công nghệ và Quản lý Hữu nghị  - Đại Học </label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl48_chkTruongTN" type="checkbox" name="dltTruongTN$ctl48$chkTruongTN"><label for="dltTruongTN_ctl48_chkTruongTN">An Ninh Nhân Dân  - Đại Học </label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl49_chkTruongTN" type="checkbox" name="dltTruongTN$ctl49$chkTruongTN"><label for="dltTruongTN_ctl49_chkTruongTN">Bách Khoa - ĐH Quốc Gia Tphcm  - Đại Học </label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl50_chkTruongTN" type="checkbox" name="dltTruongTN$ctl50$chkTruongTN"><label for="dltTruongTN_ctl50_chkTruongTN">Cảnh Sát Nhân Dân - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl51_chkTruongTN" type="checkbox" name="dltTruongTN$ctl51$chkTruongTN"><label for="dltTruongTN_ctl51_chkTruongTN">Công Nghệ Sài Gòn - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl52_chkTruongTN" type="checkbox" name="dltTruongTN$ctl52$chkTruongTN"><label for="dltTruongTN_ctl52_chkTruongTN">Công Nghệ Thông Tin - ĐH Quốc Gia Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl53_chkTruongTN" type="checkbox" name="dltTruongTN$ctl53$chkTruongTN"><label for="dltTruongTN_ctl53_chkTruongTN">Công Nghệ Thông Tin Gia Định - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl54_chkTruongTN" type="checkbox" name="dltTruongTN$ctl54$chkTruongTN"><label for="dltTruongTN_ctl54_chkTruongTN">Công Nghệ Tphcm (hutech) - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl55_chkTruongTN" type="checkbox" name="dltTruongTN$ctl55$chkTruongTN"><label for="dltTruongTN_ctl55_chkTruongTN">Công Nghệ Tphcm (hutech) - Hệ CĐ - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl56_chkTruongTN" type="checkbox" name="dltTruongTN$ctl56$chkTruongTN"><label for="dltTruongTN_ctl56_chkTruongTN">Công Nghiệp Thực Phẩm Tp.hcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl57_chkTruongTN" type="checkbox" name="dltTruongTN$ctl57$chkTruongTN"><label for="dltTruongTN_ctl57_chkTruongTN">Công Nghiệp Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl58_chkTruongTN" type="checkbox" name="dltTruongTN$ctl58$chkTruongTN"><label for="dltTruongTN_ctl58_chkTruongTN">Dân Lập Văn Lang - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl59_chkTruongTN" type="checkbox" name="dltTruongTN$ctl59$chkTruongTN"><label for="dltTruongTN_ctl59_chkTruongTN">Giao Thông Vận Tải (phía Nam) - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl60_chkTruongTN" type="checkbox" name="dltTruongTN$ctl60$chkTruongTN"><label for="dltTruongTN_ctl60_chkTruongTN">Giao Thông Vận Tải Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl61_chkTruongTN" type="checkbox" name="dltTruongTN$ctl61$chkTruongTN"><label for="dltTruongTN_ctl61_chkTruongTN">Hoa Sen - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl62_chkTruongTN" type="checkbox" name="dltTruongTN$ctl62$chkTruongTN"><label for="dltTruongTN_ctl62_chkTruongTN">Hùng Vương Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl63_chkTruongTN" type="checkbox" name="dltTruongTN$ctl63$chkTruongTN"><label for="dltTruongTN_ctl63_chkTruongTN">Khoa Học Tự Nhiên - ĐH Quốc Gia Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl64_chkTruongTN" type="checkbox" name="dltTruongTN$ctl64$chkTruongTN"><label for="dltTruongTN_ctl64_chkTruongTN">Khoa Học Xã Hội Và Nhân Văn - ĐH Quốc Gia Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl65_chkTruongTN" type="checkbox" name="dltTruongTN$ctl65$chkTruongTN"><label for="dltTruongTN_ctl65_chkTruongTN">Kiến Trúc Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl66_chkTruongTN" type="checkbox" name="dltTruongTN$ctl66$chkTruongTN"><label for="dltTruongTN_ctl66_chkTruongTN">Kinh Tế -tài Chính Tphcm&nbsp; - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl67_chkTruongTN" type="checkbox" name="dltTruongTN$ctl67$chkTruongTN"><label for="dltTruongTN_ctl67_chkTruongTN">Kinh Tế Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl68_chkTruongTN" type="checkbox" name="dltTruongTN$ctl68$chkTruongTN"><label for="dltTruongTN_ctl68_chkTruongTN">Lao Động - Xã Hội (phía Nam) - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl69_chkTruongTN" type="checkbox" name="dltTruongTN$ctl69$chkTruongTN"><label for="dltTruongTN_ctl69_chkTruongTN">Luật Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl70_chkTruongTN" type="checkbox" name="dltTruongTN$ctl70$chkTruongTN"><label for="dltTruongTN_ctl70_chkTruongTN">Mở Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl71_chkTruongTN" type="checkbox" name="dltTruongTN$ctl71$chkTruongTN"><label for="dltTruongTN_ctl71_chkTruongTN">Mỹ Thuật Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl72_chkTruongTN" type="checkbox" name="dltTruongTN$ctl72$chkTruongTN"><label for="dltTruongTN_ctl72_chkTruongTN">Ngân Hàng Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl73_chkTruongTN" type="checkbox" name="dltTruongTN$ctl73$chkTruongTN"><label for="dltTruongTN_ctl73_chkTruongTN">Ngoại Ngữ - Tin Học Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl74_chkTruongTN" type="checkbox" name="dltTruongTN$ctl74$chkTruongTN"><label for="dltTruongTN_ctl74_chkTruongTN">Ngoại Thương (phía Nam) - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl75_chkTruongTN" type="checkbox" name="dltTruongTN$ctl75$chkTruongTN"><label for="dltTruongTN_ctl75_chkTruongTN">Nguyễn Tất Thành - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl76_chkTruongTN" type="checkbox" name="dltTruongTN$ctl76$chkTruongTN"><label for="dltTruongTN_ctl76_chkTruongTN">Nông Lâm Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl77_chkTruongTN" type="checkbox" name="dltTruongTN$ctl77$chkTruongTN"><label for="dltTruongTN_ctl77_chkTruongTN">Quốc Tế - ĐH Quốc Gia Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl78_chkTruongTN" type="checkbox" name="dltTruongTN$ctl78$chkTruongTN"><label for="dltTruongTN_ctl78_chkTruongTN">Quốc Tế Hồng Bàng - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl79_chkTruongTN" type="checkbox" name="dltTruongTN$ctl79$chkTruongTN"><label for="dltTruongTN_ctl79_chkTruongTN">Quốc Tế Sài Gòn&nbsp; - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl80_chkTruongTN" type="checkbox" name="dltTruongTN$ctl80$chkTruongTN"><label for="dltTruongTN_ctl80_chkTruongTN">Sài Gòn - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl81_chkTruongTN" type="checkbox" name="dltTruongTN$ctl81$chkTruongTN"><label for="dltTruongTN_ctl81_chkTruongTN">Sân Khấu Điện Ảnh Tp Hcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl82_chkTruongTN" type="checkbox" name="dltTruongTN$ctl82$chkTruongTN"><label for="dltTruongTN_ctl82_chkTruongTN">Sư Phạm Kỹ Thuật Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl83_chkTruongTN" type="checkbox" name="dltTruongTN$ctl83$chkTruongTN"><label for="dltTruongTN_ctl83_chkTruongTN">Sư Phạm Thể Dục Thể Thao Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl84_chkTruongTN" type="checkbox" name="dltTruongTN$ctl84$chkTruongTN"><label for="dltTruongTN_ctl84_chkTruongTN">Sư Phạm Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl85_chkTruongTN" type="checkbox" name="dltTruongTN$ctl85$chkTruongTN"><label for="dltTruongTN_ctl85_chkTruongTN">Tài Chính Marketing - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl86_chkTruongTN" type="checkbox" name="dltTruongTN$ctl86$chkTruongTN"><label for="dltTruongTN_ctl86_chkTruongTN">Tài Nguyên Môi Trường Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl87_chkTruongTN" type="checkbox" name="dltTruongTN$ctl87$chkTruongTN"><label for="dltTruongTN_ctl87_chkTruongTN">Thể Dục Thể Thao Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl88_chkTruongTN" type="checkbox" name="dltTruongTN$ctl88$chkTruongTN"><label for="dltTruongTN_ctl88_chkTruongTN">Thuỷ Lợi (phía Nam) - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl89_chkTruongTN" type="checkbox" name="dltTruongTN$ctl89$chkTruongTN"><label for="dltTruongTN_ctl89_chkTruongTN">Tôn Đức Thắng - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl90_chkTruongTN" type="checkbox" name="dltTruongTN$ctl90$chkTruongTN"><label for="dltTruongTN_ctl90_chkTruongTN">Trần Đại Nghĩa - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl91_chkTruongTN" type="checkbox" name="dltTruongTN$ctl91$chkTruongTN"><label for="dltTruongTN_ctl91_chkTruongTN">Văn Hiến - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl92_chkTruongTN" type="checkbox" name="dltTruongTN$ctl92$chkTruongTN"><label for="dltTruongTN_ctl92_chkTruongTN">Văn Hoá - Nghệ Thuật Quân Đội - Phía Nam - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl93_chkTruongTN" type="checkbox" name="dltTruongTN$ctl93$chkTruongTN"><label for="dltTruongTN_ctl93_chkTruongTN">Văn Hoá Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl94_chkTruongTN" type="checkbox" name="dltTruongTN$ctl94$chkTruongTN"><label for="dltTruongTN_ctl94_chkTruongTN">Việt Đức - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl95_chkTruongTN" type="checkbox" name="dltTruongTN$ctl95$chkTruongTN"><label for="dltTruongTN_ctl95_chkTruongTN">Y Dược Tphcm - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl96_chkTruongTN" type="checkbox" name="dltTruongTN$ctl96$chkTruongTN"><label for="dltTruongTN_ctl96_chkTruongTN">Y Khoa Phạm Ngọc Thạch - Đại Học</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl97_chkTruongTN" type="checkbox" name="dltTruongTN$ctl97$chkTruongTN"><label for="dltTruongTN_ctl97_chkTruongTN">Âm nhạc Quốc gia Việt Nam - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl98_chkTruongTN" type="checkbox" name="dltTruongTN$ctl98$chkTruongTN"><label for="dltTruongTN_ctl98_chkTruongTN">Báo chí Tuyên truyền - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl99_chkTruongTN" type="checkbox" name="dltTruongTN$ctl99$chkTruongTN"><label for="dltTruongTN_ctl99_chkTruongTN">Chính sách và Phát triển - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl100_chkTruongTN" type="checkbox" name="dltTruongTN$ctl100$chkTruongTN"><label for="dltTruongTN_ctl100_chkTruongTN">Công nghệ Bưu chính Viễn thông - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl101_chkTruongTN" type="checkbox" name="dltTruongTN$ctl101$chkTruongTN"><label for="dltTruongTN_ctl101_chkTruongTN">Hành chính Quốc gia - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl102_chkTruongTN" type="checkbox" name="dltTruongTN$ctl102$chkTruongTN"><label for="dltTruongTN_ctl102_chkTruongTN">Kỹ thuật Mật mã - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl103_chkTruongTN" type="checkbox" name="dltTruongTN$ctl103$chkTruongTN"><label for="dltTruongTN_ctl103_chkTruongTN">Ngân hàng - Học Viện (HN)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl104_chkTruongTN" type="checkbox" name="dltTruongTN$ctl104$chkTruongTN"><label for="dltTruongTN_ctl104_chkTruongTN">Ngoại giao - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl105_chkTruongTN" type="checkbox" name="dltTruongTN$ctl105$chkTruongTN"><label for="dltTruongTN_ctl105_chkTruongTN">Quản lý Giáo dục - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl106_chkTruongTN" type="checkbox" name="dltTruongTN$ctl106$chkTruongTN"><label for="dltTruongTN_ctl106_chkTruongTN">Tài chính - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl107_chkTruongTN" type="checkbox" name="dltTruongTN$ctl107$chkTruongTN"><label for="dltTruongTN_ctl107_chkTruongTN">Thanh Thiếu niên Việt Nam - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl108_chkTruongTN" type="checkbox" name="dltTruongTN$ctl108$chkTruongTN"><label for="dltTruongTN_ctl108_chkTruongTN">Y Dược học cổ truyền Việt Nam - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl109_chkTruongTN" type="checkbox" name="dltTruongTN$ctl109$chkTruongTN"><label for="dltTruongTN_ctl109_chkTruongTN">Biên Phòng - Phía Nam - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl110_chkTruongTN" type="checkbox" name="dltTruongTN$ctl110$chkTruongTN"><label for="dltTruongTN_ctl110_chkTruongTN">Chính Trị - Phía Nam - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl111_chkTruongTN" type="checkbox" name="dltTruongTN$ctl111$chkTruongTN"><label for="dltTruongTN_ctl111_chkTruongTN">Công Nghệ Bưu Chính Viễn Thông (phía Nam) - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl112_chkTruongTN" type="checkbox" name="dltTruongTN$ctl112$chkTruongTN"><label for="dltTruongTN_ctl112_chkTruongTN">Hàng Không Việt Nam - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl113_chkTruongTN" type="checkbox" name="dltTruongTN$ctl113$chkTruongTN"><label for="dltTruongTN_ctl113_chkTruongTN">Hành Chính Quốc Gia (phía Nam) - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl114_chkTruongTN" type="checkbox" name="dltTruongTN$ctl114$chkTruongTN"><label for="dltTruongTN_ctl114_chkTruongTN">Khoa Học Quân Sự (quân Sự, Thi Ở Phía Nam) - Học Viện</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl115_chkTruongTN" type="checkbox" name="dltTruongTN$ctl115$chkTruongTN"><label for="dltTruongTN_ctl115_chkTruongTN">Khoa Y (ĐHQG HCM) </label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl116_chkTruongTN" type="checkbox" name="dltTruongTN$ctl116$chkTruongTN"><label for="dltTruongTN_ctl116_chkTruongTN">Nhạc Viện Tphcm</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl117_chkTruongTN" type="checkbox" name="dltTruongTN$ctl117$chkTruongTN"><label for="dltTruongTN_ctl117_chkTruongTN">Bách Việt&nbsp;- Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl118_chkTruongTN" type="checkbox" name="dltTruongTN$ctl118$chkTruongTN"><label for="dltTruongTN_ctl118_chkTruongTN">Bán Công Công Nghệ Và Quản Trị Doanh Nghiệp - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl119_chkTruongTN" type="checkbox" name="dltTruongTN$ctl119$chkTruongTN"><label for="dltTruongTN_ctl119_chkTruongTN">Công Nghệ Thông Tin Tphcm&nbsp; - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl120_chkTruongTN" type="checkbox" name="dltTruongTN$ctl120$chkTruongTN"><label for="dltTruongTN_ctl120_chkTruongTN">Công Nghệ Thủ Đức - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl121_chkTruongTN" type="checkbox" name="dltTruongTN$ctl121$chkTruongTN"><label for="dltTruongTN_ctl121_chkTruongTN">Công Nghiệp Thực Phẩm Tphcm - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl122_chkTruongTN" type="checkbox" name="dltTruongTN$ctl122$chkTruongTN"><label for="dltTruongTN_ctl122_chkTruongTN">Công Thương Tphcm - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl123_chkTruongTN" type="checkbox" name="dltTruongTN$ctl123$chkTruongTN"><label for="dltTruongTN_ctl123_chkTruongTN">Điện Lực Tphcm - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl124_chkTruongTN" type="checkbox" name="dltTruongTN$ctl124$chkTruongTN"><label for="dltTruongTN_ctl124_chkTruongTN">Giao Thông Vận Tải 3 - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl125_chkTruongTN" type="checkbox" name="dltTruongTN$ctl125$chkTruongTN"><label for="dltTruongTN_ctl125_chkTruongTN">Giao Thông Vận Tải Tphcm - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl126_chkTruongTN" type="checkbox" name="dltTruongTN$ctl126$chkTruongTN"><label for="dltTruongTN_ctl126_chkTruongTN">Kinh Tế - Kỹ Thuật Sài Gòn - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl127_chkTruongTN" type="checkbox" name="dltTruongTN$ctl127$chkTruongTN"><label for="dltTruongTN_ctl127_chkTruongTN">Kinh Tế - Kỹ Thuật Vinatex Tp. Hồ Chí Minh - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl128_chkTruongTN" type="checkbox" name="dltTruongTN$ctl128$chkTruongTN"><label for="dltTruongTN_ctl128_chkTruongTN">Kinh Tế Đối Ngoại - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl129_chkTruongTN" type="checkbox" name="dltTruongTN$ctl129$chkTruongTN"><label for="dltTruongTN_ctl129_chkTruongTN">Kinh Tế Kỹ Thuật Miền Nam&nbsp; - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl130_chkTruongTN" type="checkbox" name="dltTruongTN$ctl130$chkTruongTN"><label for="dltTruongTN_ctl130_chkTruongTN">Kinh Tế Kỹ Thuật Phú Lâm - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl131_chkTruongTN" type="checkbox" name="dltTruongTN$ctl131$chkTruongTN"><label for="dltTruongTN_ctl131_chkTruongTN">Kinh Tế Tphcm - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl132_chkTruongTN" type="checkbox" name="dltTruongTN$ctl132$chkTruongTN"><label for="dltTruongTN_ctl132_chkTruongTN">Kinh Tế-công Nghệ Tphcm&nbsp; - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl133_chkTruongTN" type="checkbox" name="dltTruongTN$ctl133$chkTruongTN"><label for="dltTruongTN_ctl133_chkTruongTN">Kỹ Thuật Cao Thắng - Cao Đẳng</label>
            </td>
		</tr><tr>
			<td>
                <input id="dltTruongTN_ctl134_chkTruongTN" type="checkbox" name="dltTruongTN$ctl134$chkTruongTN"><label for="dltTruongTN_ctl134_chkTruongTN">KHÁC</label>
            </td>
		</tr>
	</tbody></table>
        </div>        
    </div> 
    <div class="cl"></div>
    <div class="rgl">Trường tốt nghiệp khác:</div>
    <div class="rgr">
        <input name="TruongTNOther" type="text" id="TruongTNOther" class="textbox">
        <div class="ifo" style="color:Red;">Nhập mục này nếu Trường bạn tốt nghiệp không có trong mục "Tốt nghiệp tại trường"</div>
    </div>     
    <div class="cl"></div> 
    <div class="rgl">Trình độ ngoại ngữ:</div>
    <div class="rgr">
        <div class="list_city">
        <table id="dtlW" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;">
		<tbody><tr>
			<td>
                <input id="dtlW_ctl00_chkW" type="checkbox" name="dtlW$ctl00$chkW"><label for="dtlW_ctl00_chkW">Tiếng Anh (England)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl01_chkW" type="checkbox" name="dtlW$ctl01$chkW"><label for="dtlW_ctl01_chkW">Tiếng Pháp (France)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl02_chkW" type="checkbox" name="dtlW$ctl02$chkW"><label for="dtlW_ctl02_chkW">Tiếng Hàn Quốc (Korea)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl03_chkW" type="checkbox" name="dtlW$ctl03$chkW"><label for="dtlW_ctl03_chkW">Tiếng Nhật Bản (Japan)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl04_chkW" type="checkbox" name="dtlW$ctl04$chkW"><label for="dtlW_ctl04_chkW">Tiếng Trung Quốc (China)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl05_chkW" type="checkbox" name="dtlW$ctl05$chkW"><label for="dtlW_ctl05_chkW">Tiếng Nga (Russia)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl06_chkW" type="checkbox" name="dtlW$ctl06$chkW"><label for="dtlW_ctl06_chkW">Tiếng Đức (Germany)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl07_chkW" type="checkbox" name="dtlW$ctl07$chkW"><label for="dtlW_ctl07_chkW">Thái Lan (Thailand)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl08_chkW" type="checkbox" name="dtlW$ctl08$chkW"><label for="dtlW_ctl08_chkW">Indonesia</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl09_chkW" type="checkbox" name="dtlW$ctl09$chkW"><label for="dtlW_ctl09_chkW">Tiếng Mã Lai (Malaysia)</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl10_chkW" type="checkbox" name="dtlW$ctl10$chkW"><label for="dtlW_ctl10_chkW">Tiếng Ả Rập </label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl11_chkW" type="checkbox" name="dtlW$ctl11$chkW"><label for="dtlW_ctl11_chkW">Myanmar</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl12_chkW" type="checkbox" name="dtlW$ctl12$chkW"><label for="dtlW_ctl12_chkW">Tiếng Hindi Hoặc Bengali</label>
            </td>
		</tr><tr>
			<td>
                <input id="dtlW_ctl13_chkW" type="checkbox" name="dtlW$ctl13$chkW"><label for="dtlW_ctl13_chkW">Ngôn Ngữ Khác</label>
            </td>
		</tr>
	</tbody></table>
        </div>   
        <select name="drpTrinhDoNN" id="drpTrinhDoNN" class="textbox" style="width:132px;">
		<option value="--Chọn trình độ ngoại ngữ--">--Chọn trình độ ngoại ngữ--</option>
		<option value="1">Sơ cấp</option>
		<option value="2">Trung cấp</option>
		<option value="3">Cao cấp</option>

	</select>
    </div>  
    <div class="cl"></div>           
    <div class="rgl">Trình độ tin học:</div>
    <div class="rgr">
        <textarea name="txtTrinhDoTinHoc" rows="5" cols="20" id="txtTrinhDoTinHoc" class="textbox" style="width:400px;"></textarea>
    </div>  
    <div class="cl"></div>   
    <div class="rgl">Bằng cấp / chứng chỉ khác:</div>
    <div class="rgr">
        <textarea name="txtYeuCauKhac" rows="5" cols="20" id="txtYeuCauKhac" class="textbox" style="width:400px;"></textarea>
    </div>    
    <div class="cl" style="height:15px;"></div><a name="href-kinh_nghiem"></a>
    <div class="rggt2"><b>Kinh nghiệm làm việc</b></div> 
    <div class="rgl">Yêu cầu số năm kinh nghiệm (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpKN" id="drpKN" class="textbox" style="width:265px;">
		<option value="--Chọn số năm kinh nghiệm--">--Chọn số năm kinh nghiệm--</option>
		<option value="1">Chưa có kinh nghiệm</option>
		<option value="14">Sinh Viên Đại Học</option>
		<option value="15">Lao Động Phổ Thông</option>
		<option value="2">Dưới 1 năm</option>
		<option value="3">1 năm</option>
		<option value="4">2 năm</option>
		<option value="5">3 năm</option>
		<option value="6">4 năm</option>
		<option value="7">5 năm</option>
		<option value="8">6 năm</option>
		<option value="9">7 năm</option>
		<option value="10">8 năm</option>
		<option value="11">9 năm </option>
		<option value="12">10 năm</option>
		<option value="16">11 năm</option>
		<option value="17">12 năm</option>
		<option value="18">13 năm</option>
		<option value="19">14 năm</option>
		<option value="20">15 năm</option>
		<option value="21">16 năm</option>
		<option value="22">17 năm</option>
		<option value="23">18 năm</option>
		<option value="24">19 năm</option>
		<option value="25">20 năm</option>
		<option value="26">Hơn 20 năm</option>

	</select>
        
    </div>

    <div class="cl"></div>           
    <div class="rgl">Quá trình làm việc: <div class="ifo">Nếu bạn chưa có kinh nghiệm làm việc, hãy đưa ra các công việc/ hoạt động bạn đã từng tham gia hoặc đảm trách và các thành tích kỹ năng đạt được </div></div>
    <div class="rgr">
        <textarea name="txtQTLV" id="txtQTLV" rows="15" cols="5" class="textbox" style="width:400px">Tên công ty:
Vị trí công việc:
Ngành nghề:
Thời gian bắt đầu:
Thời gian kết thúc:
Mô tả công việc:
Lý do thôi việc:
Thành tích đạt được:
Mức lương:
        </textarea>
    </div>     
    <div class="cl"></div> 
    <div class="rgl">Kỹ năng nổi bật:</div>
    <div class="rgr">
        <textarea name="txtKyNang" rows="5" cols="20" id="txtKyNang" class="textbox" style="width:400px;"></textarea>
    </div>       
    <div class="cl" style="height:15px;"></div>
    <div class="rggt2"><b>Nguồn tham khảo</b></div> 
    <div class="rgl">Nguồn tham khảo:</div>
    <div class="rgr">
        <textarea name="txtTK" id="txtTK" rows="6" cols="5" class="textbox" style="width:400px">Họ và tên:
Địa chỉ:
Điện thoại:
Nghề nghiệp:
Quan hệ:
Thời gian quen biết:
        </textarea>
    </div>         
    <div class="cl" style="height:15px;"></div>     
    <div class="rggt2"><b>Thông tin nhà tuyển dụng</b></div>   
    <div class="rgl" style="text-align:center;">
        <span id="lblImgLogo"></span>
    </div>
    <div class="rgr">
        <ul class="list_ntd">
            
            <li class="l">Người liên hệ:</li><li class="r">Lê Hoa</li>
            <li class="cl"></li>
            <li class="l">Địa chỉ liên hệ:</li><li class="r">Tô Hiến Thành</li>
            <li class="cl"></li>   
            <li class="l">Email liên hệ:</li><li class="r">hoaunet@yahoo.com</li>
            <li class="cl"></li> 
            <li class="l">Điện thoại liên hệ:</li><li class="r">0909683850</li>
            <li class="cl"></li>                                                                  
            
        </ul>
    </div>   
    <div class="cl" style="border-bottom:1px #e1e1e1 dotted;"></div> 
    <div class="rgl">Mã bảo vệ (<span class="sao">*</span>):</div>
    <div class="rgr"></div>
    <div class="cl"></div><a name="href-ma_bv"></a>
    <div class="rgl">Nhập mã bảo vệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <div style="display:none;"><input name="txtC" type="text" value="72772" id="txtC"></div>
        <input name="txtCode" type="text" id="txtCode" class="textbox" style="width:400px;">
        
        
    </div>
    <div class="cl" style="height:15px;"></div>  
    <div class="rgl">&nbsp;</div>
    <div class="rgr">
        <div class="bt">
            <input type="submit" name="btnDangTin" value="Tạo hồ sơ" id="btnDangTin">
            <input type="reset" class="button" name="cmdReset" value="Làm lại">
        </div>         
    </div>
    <div class="cl" style="height:15px;"></div>         

</div>
@endsection