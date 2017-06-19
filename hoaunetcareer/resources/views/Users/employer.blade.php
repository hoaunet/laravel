@extends('layouts.master')
@section('title', 'Đăng ký tài khoản người tìm việc')
@section('content')
<div class="ctl">
    <div class="rgt">Đăng ký tài khoản nhà tuyển dụng</div>
    <div class="rgi">
        <div>Vui lòng nhập đầy đủ thông tin</div>
        <div>Những trường có dấu <span class="sao">*</span> là bắt buộc phải nhập</div>
    </div>
    <div class="rggt"><b>Thông tin đăng nhập</b></div>
    <div class="rgl">Email đăng nhập (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtEmail" type="text" id="txtEmail" class="textbox" onkeyup="chk('txtEmail')" onkeydown="if(event.keyCode == 13 || event.keyCode == '13'){return(false);}">
        <div><span id="RequiredFieldValidator13" class="valerror" style="color:Red;font-size:11px;display:none;">Email sai định dạng!</span></div>
    </div>
    <div class="cl"></div>
    
    <div class="rgl">Mật khẩu (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtPass" type="password" id="txtPass" class="textbox">
    </div>
    <div class="cl"></div>
    <div class="rgl">Xác nhận lại mật khẩu (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtRePass" type="password" id="txtRePass" class="textbox">
        <div><span id="comparePasswords" class="valerror" style="color:Red;font-size:11px;display:none;">Xác nhận mật khẩu sai!</span></div>
    </div>
    
    <div class="cl" style="height:15px;"></div>
    <div class="rggt"><b>Thông tin công ty</b></div>  
    <div class="rgl">Tên công ty (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtCompanyName" type="text" id="txtCompanyName" class="textbox" style="width:400px;">
    </div>
    <div class="cl"></div>
    <div class="rgl">Quy mô công ty (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpQuyMo" id="drpQuyMo" class="textbox" style="width:265px;">
	<option value="--Chọn quy mô công ty--">--Chọn quy mô công ty--</option>
	<option value="1">Ít hơn 10 nhân viên</option>
	<option value="2">Từ 10 - 24 nhân viên</option>
	<option value="3">Từ 25 - 99 nhân viên</option>
	<option value="4">Từ 100 - 499 nhân viên</option>
	<option value="5">Từ 500 - 999 nhân viên</option>
	<option value="6">Trên 1000 nhân viên</option>

</select>
    </div>
    <div class="cl"></div>
    <div class="rgl">Sơ lược về công ty (<span class="sao">*</span>):</div>
    <div class="rgr">
        <textarea name="txtMoTa" rows="5" cols="20" id="txtMoTa" class="textbox" style="width:400px;"></textarea>
    </div>   
    <div class="cl"></div>   
    <div class="rgl">Logo công ty:</div>
    <div class="rgr">
        <input type="file" name="FileLG" id="FileLG">
        <div class="ifo">Định dạng ảnh .gif, .jpg, .png dung lượng &lt;=300kb</div>
        <div style="padding-top:5px;"></div>
    </div>   
    <div class="cl"></div>     
    <div class="rgl">Giấy phép ĐK kinh doanh:</div>
    <div class="rgr">
        <input type="file" name="FileGP" id="FileGP">
        <div class="ifo">Dạng file .doc .docx .xls .xlsx .jpg .gif .png .pdf, dung lượng &lt;=500KB .</div>
        <div class="ifo">Nếu giấy phép kinh doanh của bạn có nhiều file, hãy ghép lại thành 1 file để up lên nhé.)</div>
        <div style="padding-top:5px;"></div>
    </div>   
    <div class="cl"></div>  
    <div class="rgl">Mã số thuế:</div>
    <div class="rgr">
        <input name="txtMaSoThue" type="text" id="txtMaSoThue" class="textbox" style="width:400px;">
    </div>
    <div class="cl"></div>  
    <div class="rgl">Địa chỉ công ty (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtDiaChiCt" type="text" id="txtDiaChiCt" class="textbox" style="width:400px;">
    </div>
    <div class="cl"></div>  
    <div class="rgl">Tỉnh/thành phố (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpCity" id="drpCity" class="textbox" style="width:265px;">
	<option value="--Chọn tỉnh--">--Chọn tỉnh--</option>
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
    </div>
    <div class="cl"></div> 
    <div class="rgl">Website:</div>
    <div class="rgr">
        <input name="txtWebsite" type="text" id="txtWebsite" class="textbox" style="width:400px;">
    </div>
    <div class="cl" style="height:15px;"></div>
    <div class="rggt"><b>Thông tin liên hệ</b></div>    
    <div class="rgl">Tên người liên hệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtNameLH" type="text" id="txtNameLH" class="textbox">
    </div>
    <div class="cl"></div>
    <div class="rgl">Địa chỉ liên hệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtDiaChiLH" type="text" id="txtDiaChiLH" class="textbox">
    </div>
    <div class="cl"></div>
    <div class="rgl">Số điện thoại liên hệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtDienThoaiLH" type="text" id="txtDienThoaiLH" class="textbox">
    </div>
    <div class="cl"></div>   
    <div class="rgl">Email liên hệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtEmailLH" type="text" id="txtEmailLH" class="textbox">
    </div>
    <div class="cl"></div> 
    <div class="rgl">Mã bảo vệ (<span class="sao">*</span>):</div>
    <div class="rgr"><img src="code.aspx?id=60543" style="vertical-align:middle;" alt=""></div>
    <div class="cl"></div> 
    <div class="rgl">Nhập mã bảo vệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <div style="display:none;"><input name="txtC" type="text" value="60543" id="txtC"></div>
        <input name="txtCode" type="text" id="txtCode" class="textbox">
        <div><span id="CompareValidator1" class="valerror" style="color:Red;font-size:11px;display:none;">Mã bảo vệ sai!</span></div>
    </div>
    <div class="cl" style="height:15px;"></div> 
    
    <div class="rggt"><b>Thỏa thuận sử dụng</b></div>     
    <div class="tt">
        Xin hãy đọc cẩn thận những điều khoản của Bản thỏa thuận sử dụng khi  truy cập vào Website việc làm tuyendungvietnam.com.vn. Việc bạn truy cập, sử  dụng trang web tuyendungvietnam.com.vn có nghĩa là bạn chấp nhận, đồng ý bị  ràng buộc với điều khoản, điều kiện của Bản thỏa thuận sử dụng này. 			<br>
<br>
1. Về tài khoản sử dụng ( account ): 			<br>
<br>
Khi đăng ký tài khoản, bạn cần phải cung cấp một số thông tin quan  trọng như : tên tuổi, địa chỉ, e-mail, … Những thông tin này sẽ được sử  dụng vào mục đích xác nhận chính xác về bạn khi phát sinh các vấn đề như  quên tên đăng nhập hoặc mật khẩu đăng nhập v.v. Những trường hợp điền  thiếu thông tin trên hoặc thông tin sai sự thật sẽ không được giải  quyết. 			<br>
<br>
2. Tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức  nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu.  Mọi vi phạm khi phát hiện sẽ bị xử lý theo pháp luật. 			<br>
<br>
3. Nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động  nào nhằm can thiệp, phá hoại và xâm nhập (hack, cheat…) vào dữ liệu  cũng như hệ thống máy chủ của tuyendungvietnam.com.vn. Tùy theo mức độ vi phạm,  thành viên sẽ bị tước bỏ mọi quyền lợi hoặc bị truy tố trước pháp luật. 			<br>
<br>
4. Nghiêm cấm việc phát tán các tranh ảnh, nội dung liên quan văn hóa  phẩm đồi trụy trái với thuần phong mỹ tục của dân tộc Việt nam. Tùy  theo mức độ vi phạm, thành viên sẽ bị tước bỏ mọi quyền lợi hoặc bị truy  tố trước pháp luật. 			<br>
<br>
5. Khi phát hiện ra lỗi của hệ thống, xin vui lòng thông báo cho đội  ngũ quản trị Hệ thống Tuyendungvietnam.com.vn theo địa chỉ tuyendungvietnam.com.vn@gmail.com 			<br>
<br>
6. Hệ thống tuyển dụng trực tuyến tuyendungvietnam.com.vn không chấp nhận việc mua  bán hoặc chuyển nhượng tài khoản của tuyendungvietnam.com.vn bằng tiền thật hoặc  hiện kim ở trong lẫn ngoài tuyendungvietnam.com.vn. 			<br>
<br>
7. Tuyệt đối nghiêm cấm hành vi xúc phạm người khác dưới bất kỳ hình  thức nào (nhạo báng, chê bai, kỳ thị tôn giáo, giới tính, sắc tộc….). 			<br>
<br>
8. Tuyệt đối nghiêm cấm mọi hành vi mạo nhận hay cố ý làm người khác  tưởng lầm mình là một thành viên khác của Hệ thống tuyển dụng trực tuyến Tuyendungvietnam.com.vn . Tùy theo mức độ vi phạm, thành viên sẽ bị tước bỏ mọi quyền  lợi hoặc bị truy tố trước pháp luật. 			<br>
<br>
9. Trong những trường hợp bất khả kháng như chập điện, hư hỏng phần  cứng, phần mềm, hoặc do thiên tai .v.v. người dùng phải chấp nhận những  thiệt hại nếu có. 			<br>
<br>
10. Tuyendungvietnam.com.vn có toàn quyền xóa, sửa chữa hay thay đổi các dữ liệu,  thông tin người dùng trong các trường hợp người đó vi phạm những qui  định kể trên mà không cần sự đồng ý . 			<br>
<br>
11. Tuyệt đối nghiêm cấm mọi hành vi tuyên truyền, chống phá và xuyên  tạc chính quyền. Trường hợp bị phát hiện, không những bị xóa bỏ tài  khoản mà chúng tôi sẽ cung cấp thông tin của người đó cho các cơ quan  pháp luật. 			<br>
<br>
12. Tuyệt đối không bàn luận về Chính trị . 			<br>
<br>
13. Không có những hành vi, thái độ làm tổn hại đến uy tín của Hệ  thống tuyển dụng trực tuyến Tuyendungvietnam.com.vn dưới bất kỳ hình thức nào, phương  thức nào. Mọi vi phạm sẽ bị bị xử lí thông qua hình thức tước bỏ mọi  quyền lợi hoặc truy tố trước pháp luật. 			<br>
<br>
14. Tuyendungvietnam.com.vn hoàn toàn không chịu trách nhiệm về mọi giao dịch thỏa  thuận trên Hệ thống. Chúng tôi sẽ không chịu trách nhiệm về bất kỳ sự  mất mát, thiệt hại hay khiếu nại nào liên quan đến việc thỏa thuận, trao  đổi thông tin giữa các bạn. 			<br>
<br>
15. Mọi thông tin cá nhân mà bạn không công khai sẽ được chúng tôi  bảo mật, không tiết lộ ra ngoài. Chúng tôi không bán hay trao đổi những  thông tin này với bất kỳ một bên thứ ba nào khác. 			<br>
<br>
16. Nghiêm cấm tổ chức các hình thức cá cược, cờ bạc có dính dáng đến tiền. 			<br>
<br>
17. Những thông tin không muốn công khai của thành viên sẽ được bảo  mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi buộc  phải cung cấp những thông tin này cho các cơ quan pháp luật. 			<br>
<br>
18. Khi phát hiện những vi phạm đã nêu ở các mục trên,tùy theo mức độ  nghiêm trọng của hậu quả gây ra, Tuyendungvietnam.com.vn có quyền cung cấp thông tin  cá nhân của đối tượng đó cho các cơ quan thẩm quyền để truy tố trước  pháp luật . 			<br>
<br>
19. Tuyendungvietnam.com.vn có thể thay đổi, bổ sung hoặc sửa chữa thỏa thuận này  bất cứ lúc nào và sẽ công bố rõ trên trang chủ của website Tuyendungvietnam.com.vn.<br>
<br type="_moz">
    </div> 
    <div class="ck">
        <input id="chkTT" type="checkbox" name="chkTT"><label for="chkTT">Tôi đã đọc và đồng ý với thỏa thuận sử dụng</label>
    </div>  
    
    <div class="invalid">
        <span id="RequiredFieldValidator12" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập email đăng nhập!</span>
        <span id="RequiredFieldValidator1" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mật khẩu!</span>
        <span id="chkpass2" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng xác nhận lại mật khẩu!</span>
        <span id="RequiredFieldValidator4" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập tên công ty!</span>
        <span id="RequiredFieldValidator2" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng chọn quy mô công ty!</span>
        <span id="RequiredFieldValidator3" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập sơ lược công ty!</span>
        <span id="RequiredFieldValidator10" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ công ty!</span>
        <span id="RequiredFieldValidator11" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng chọn tỉnh, thành phố!</span>
        <span id="RequiredFieldValidator7" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập tên người liên hệ!</span>
        <span id="RequiredFieldValidator5" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ liên hệ!</span>
        <span id="RequiredFieldValidator6" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập số điện thoại liên hệ!</span>
        <span id="RequiredFieldValidator8" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập email liên hệ</span>
        <span id="RequiredFieldValidator9" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mã bảo vệ!</span>
    </div>
    
    
    <div class="bt">
    <input type="submit" name="btnDK" value="Đăng ký ngay" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnDK&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnDK">
    <input type="reset" class="button" name="cmdReset" value="Làm lại">
    </div>
    
    
</div>
@endsection


