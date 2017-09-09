@extends('layouts.master')
@section('title', 'Đăng ký tài khoản người tìm việc')
@section('content')
<div class="cl" style="height:10px;"></div>
<div class="rgt">Quản lý hồ sơ ứng viên</div>
<div id="pel_HS_ung_vien">
    
<table cellpadding="0" cellspacing="0">
    <tbody><tr class="t">
        <td class="col1"><div><input type="checkbox" id="selectall"></div></td>
        <td class="col2">Thông tin ứng viên</td>
        <td class="col3">CV/hồ sơ tìm việc liên quan</td>
        <td class="col4">Mức lương mong muốn</td>
        <td class="col5">Ngày gửi</td>
        <td class="col6">Ngày xử lý</td>
        <td class="col7">Ngày hẹn tiếp theo</td>
        <td class="col8">Trạng thái hồ sơ</td>
        <td class="col9">Thao tác</td>
    </tr>
    
</tbody></table>   
<input type="hidden" name="checkedvalues" id="checkedvalues" value="0"> 

</div>
<div class="qlt_list'"><div class="blank">Trang này không có dữ liệu!<br>Vui lòng thử thay đổi các điều kiện tìm kiếm hoặc nhấn <a href="/">vào đây</a> để về trang chủ.</div></div>
@endsection
