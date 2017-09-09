@extends('layouts.master')
@section('title', 'Đăng ký tài khoản người tìm việc')
@section('content')
<script src="/js/calendar/calendar.js" type="text/javascript"></script>
    <style type="text/css" media="screen">@import "/css/calendar.css";</style>  

<div class="adtop"><a href="#" target="_blank"><img src="/uploads/banners/homepage.JPG" alt="Banner top"></a></div>
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
<div class="ctl">
    <div class="rgt2">Đăng ký tài khoản người tìm việc</div>
    <div class="rgi">
        <div>Vui lòng nhập đầy đủ thông tin</div>
        <div>Những trường có dấu <span class="sao">*</span> là bắt buộc phải nhập</div>
    </div>
    <div class="rggt2"><b>Thông tin đăng nhập</b></div>
    <div class="rgl">Email đăng nhập (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required  onkeydown="if(event.keyCode == 13 || event.keyCode == '13'){return(false);}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif        
        <div><span id="RequiredFieldValidator13" class="valerror" style="color:Red;font-size:11px;display:none;">Email sai định dạng!</span></div>
    </div>
    <div class="cl"></div>
    
    <div class="rgl">Mật khẩu (<span class="sao">*</span>):</div>
    <div class="rgr">
         <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="cl"></div>
    <div class="rgl">Xác nhận lại mật khẩu (<span class="sao">*</span>):</div>
    <div class="rgr">
         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        <div><span id="comparePasswords" class="valerror" style="color:Red;font-size:11px;display:none;">Xác nhận mật khẩu sai!</span></div>
    </div>
    
    <div class="cl" style="height:15px;"></div>
    <div class="rggt2"><b>Thông tin cá nhân</b></div> 
    <div class="rgl">Họ và tên (<span class="sao">*</span>):</div>
    <div class="rgr">
         <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="cl"></div> 
    <div class="rgl">Ngày sinh (<span class="sao">*</span>):</div>
    <div class="rgr">        
        <input id="txtdate" name="txtdate" value="" class="textbox" style="width:150px" onclick="setYears(1944,2023); showCalender(this, 'txtdate');return false;" readonly="readonly" type="text">
        <a href="#" onclick="setYears(1944,2023); showCalender(this, 'txtdate');return false;"><img src="/images/iconCalendar.gif" alt="icon"></a><span>(dd/mm/yyyy)</span>
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
    <div class="cl"></div>
    <div class="rgl">Giới tính:</div>
    <div class="rgr">
        <input id="rbtNam" type="radio" name="gioitinh" value="rbtNam" checked="checked"><label for="rbtNam">Nam</label>
        <input id="rbtNu" type="radio" name="gioitinh" value="rbtNu"><label for="rbtNu">Nữ</label>
        <input id="rbtKhac" type="radio" name="gioitinh" value="rbtKhac"><label for="rbtKhac">Khác</label>
    </div>
    <div class="cl"></div> 
    <div class="rgl">Ảnh đại diện:</div>
    <div class="rgr">
        <input type="file" name="FileLG" id="FileLG">
        <div class="ifo">Định dạng ảnh .gif, .jpg, .png dung lượng &lt;=300kb</div>
        <div style="padding-top:5px;"></div>
    </div>   
    <div class="cl"></div>        
    <div class="rgl">Tình trạng hôn nhân:</div>
    <div class="rgr">
        <select name="drpQuyMo" id="drpQuyMo" class="textbox" style="width:265px;">
    <option value="Độc thân">Độc thân</option>
    <option value="Đã có gia đình">Đã có gia đình</option>

</select>
    </div>
    <div class="cl" style="height:15px;"></div>
    <div class="rggt2"><b>Thông tin liên hệ</b></div>    
    <div class="rgl">Địa chỉ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtDiaChiLH" type="text" id="txtDiaChiLH" class="textbox" style="width:400px;">
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
    <div class="rgl">Số điện thoại (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtDienThoaiLH" type="text" id="txtDienThoaiLH" class="textbox" style="width:400px;">
    </div>
    <div class="cl"></div>   
    <div class="rgl">Email (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtEmailLH" type="text" id="txtEmailLH" class="textbox" style="width:400px;">
    </div>
    <div class="cl"></div> 
    <div class="cl" style="height:15px;"></div> 
    
    <div class="rggt2"><b>Thỏa thuận sử dụng</b></div>     
    <div class="tt">
        Xin hãy đọc cẩn thận những điều khoản của Bản thỏa thuận sử dụng khi  truy cập vào Website việc làm tuyendungvietnam.com.vn. Việc bạn truy cập, sử  dụng trang web tuyendungvietnam.com.vn có nghĩa là bạn chấp nhận, đồng ý bị  ràng buộc với điều khoản, điều kiện của Bản thỏa thuận sử dụng này.            <br>
<br>
1. Về tài khoản sử dụng ( account ):            <br>
<br>
Khi đăng ký tài khoản, bạn cần phải cung cấp một số thông tin quan  trọng như : tên tuổi, địa chỉ, e-mail, … Những thông tin này sẽ được sử  dụng vào mục đích xác nhận chính xác về bạn khi phát sinh các vấn đề như  quên tên đăng nhập hoặc mật khẩu đăng nhập v.v. Những trường hợp điền  thiếu thông tin trên hoặc thông tin sai sự thật sẽ không được giải  quyết.            <br>
<br>
2. Tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức  nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu.  Mọi vi phạm khi phát hiện sẽ bị xử lý theo pháp luật.             <br>
<br>
3. Nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động  nào nhằm can thiệp, phá hoại và xâm nhập (hack, cheat…) vào dữ liệu  cũng như hệ thống máy chủ của tuyendungvietnam.com.vn. Tùy theo mức độ vi phạm,  thành viên sẽ bị tước bỏ mọi quyền lợi hoặc bị truy tố trước pháp luật.            <br>
<br>
4. Nghiêm cấm việc phát tán các tranh ảnh, nội dung liên quan văn hóa  phẩm đồi trụy trái với thuần phong mỹ tục của dân tộc Việt nam. Tùy  theo mức độ vi phạm, thành viên sẽ bị tước bỏ mọi quyền lợi hoặc bị truy  tố trước pháp luật.           <br>
<br>
5. Khi phát hiện ra lỗi của hệ thống, xin vui lòng thông báo cho đội  ngũ quản trị Hệ thống Tuyendungvietnam.com.vn theo địa chỉ tuyendungvietnam.com.vn@gmail.com          <br>
<br>
6. Hệ thống tuyển dụng trực tuyến tuyendungvietnam.com.vn không chấp nhận việc mua  bán hoặc chuyển nhượng tài khoản của tuyendungvietnam.com.vn bằng tiền thật hoặc  hiện kim ở trong lẫn ngoài tuyendungvietnam.com.vn.           <br>
<br>
7. Tuyệt đối nghiêm cấm hành vi xúc phạm người khác dưới bất kỳ hình  thức nào (nhạo báng, chê bai, kỳ thị tôn giáo, giới tính, sắc tộc….).             <br>
<br>
8. Tuyệt đối nghiêm cấm mọi hành vi mạo nhận hay cố ý làm người khác  tưởng lầm mình là một thành viên khác của Hệ thống tuyển dụng trực tuyến Tuyendungvietnam.com.vn . Tùy theo mức độ vi phạm, thành viên sẽ bị tước bỏ mọi quyền  lợi hoặc bị truy tố trước pháp luật.          <br>
<br>
9. Trong những trường hợp bất khả kháng như chập điện, hư hỏng phần  cứng, phần mềm, hoặc do thiên tai .v.v. người dùng phải chấp nhận những  thiệt hại nếu có.             <br>
<br>
10. Tuyendungvietnam.com.vn có toàn quyền xóa, sửa chữa hay thay đổi các dữ liệu,  thông tin người dùng trong các trường hợp người đó vi phạm những qui  định kể trên mà không cần sự đồng ý .          <br>
<br>
11. Tuyệt đối nghiêm cấm mọi hành vi tuyên truyền, chống phá và xuyên  tạc chính quyền. Trường hợp bị phát hiện, không những bị xóa bỏ tài  khoản mà chúng tôi sẽ cung cấp thông tin của người đó cho các cơ quan  pháp luật.           <br>
<br>
12. Tuyệt đối không bàn luận về Chính trị .             <br>
<br>
13. Không có những hành vi, thái độ làm tổn hại đến uy tín của Hệ  thống tuyển dụng trực tuyến Tuyendungvietnam.com.vn dưới bất kỳ hình thức nào, phương  thức nào. Mọi vi phạm sẽ bị bị xử lí thông qua hình thức tước bỏ mọi  quyền lợi hoặc truy tố trước pháp luật.             <br>
<br>
14. Tuyendungvietnam.com.vn hoàn toàn không chịu trách nhiệm về mọi giao dịch thỏa  thuận trên Hệ thống. Chúng tôi sẽ không chịu trách nhiệm về bất kỳ sự  mất mát, thiệt hại hay khiếu nại nào liên quan đến việc thỏa thuận, trao  đổi thông tin giữa các bạn.            <br>
<br>
15. Mọi thông tin cá nhân mà bạn không công khai sẽ được chúng tôi  bảo mật, không tiết lộ ra ngoài. Chúng tôi không bán hay trao đổi những  thông tin này với bất kỳ một bên thứ ba nào khác.          <br>
<br>
16. Nghiêm cấm tổ chức các hình thức cá cược, cờ bạc có dính dáng đến tiền.             <br>
<br>
17. Những thông tin không muốn công khai của thành viên sẽ được bảo  mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi buộc  phải cung cấp những thông tin này cho các cơ quan pháp luật.             <br>
<br>
18. Khi phát hiện những vi phạm đã nêu ở các mục trên,tùy theo mức độ  nghiêm trọng của hậu quả gây ra, Tuyendungvietnam.com.vn có quyền cung cấp thông tin  cá nhân của đối tượng đó cho các cơ quan thẩm quyền để truy tố trước  pháp luật .          <br>
<br>
19. Tuyendungvietnam.com.vn có thể thay đổi, bổ sung hoặc sửa chữa thỏa thuận này  bất cứ lúc nào và sẽ công bố rõ trên trang chủ của website Tuyendungvietnam.com.vn.<br>
<br type="_moz">
    </div> 
    <div class="ck">
        <input id="chkTT" type="checkbox" name="chkTT"><label for="chkTT">Tôi đã đọc và đồng ý với thỏa thuận sử dụng</label>
    </div>  
    
    <!--<div class="invalid">
        <span id="RequiredFieldValidator12" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập email đăng nhập!</span>
        <span id="RequiredFieldValidator1" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mật khẩu!</span>
        <span id="chkpass2" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng xác nhận lại mật khẩu!</span>
        <span id="RequiredFieldValidator7" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập họ tên!</span>
        
        <span id="RequiredFieldValidator5" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ liên hệ!</span>
        <span id="RequiredFieldValidator11" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng chọn tỉnh, thành phố!</span>
        <span id="RequiredFieldValidator6" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập số điện thoại liên hệ!</span>
        <span id="RequiredFieldValidator8" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập email liên hệ</span>
        <span id="RequiredFieldValidator9" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mã bảo vệ!</span>
    </div>-->
    
    <div class="bt">
<div class="adsoptimal-slot" style="width: 300px; height: 100px;"></div>
    <button type="submit" class="btn btn-primary button">Đăng ký ngay</button>
    <button type="reset" class="btn btn-primary button">Làm lại</button>
    
    </div>
    
</div>
</form>
<div class="ctr">
    <div class="bgr2"><strong>Tuyển dụng vip</strong></div>
    <ul class="vipr">
        
    </ul>   
    <div class="avr"></div>
    
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
            <a href="3">Việc làm bán thời gian</a>
            <a href="#">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a>
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

                    $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
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
