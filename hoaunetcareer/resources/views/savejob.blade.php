@extends('layouts.master')
@section('title', 'Đăng ký tài khoản người tìm việc')
@section('content')
<div class="rgt2">Các tin tuyển dụng đã lưu</div>
<div id="pel_tin_luu">
	
<table cellpadding="0" cellspacing="0">
    <tbody><tr class="t">
        <td class="col1"><div><input type="checkbox" id="selectall"></div></td>
        <td class="col2">Tên việc làm</td>
        <td class="col3">Tên công ty</td>
        <td class="col4">Nơi làm việc</td>
        <td class="col5">Mức lương</td>
        <td class="col6">Ngày đăng</td>
        <td class="col7">Hạn nộp hồ sơ</td>
        <td class="col8">Số lần xem</td>
        <td class="col10">Thao tác</td>
    </tr>
    
</tbody></table>

</div>
<div class="qlt_list'"><div class="blank">Trang này không có dữ liệu!<br>Vui lòng thử thay đổi các điều kiện tìm kiếm hoặc nhấn <a href="/">vào đây</a> để về trang chủ.</div></div>
@endsection


