@extends('layouts.master')
@section('title', 'Tuyển dụng S3S')
@section('content')
<?php print_r($employments);?>
<div class="adtop"><a href="#" target="_blank"><img src="/uploads/banners/homepage.JPG" alt="Banner top"></a></div>
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
<div class="ctl">
    
    <div class="bgt">
        
        <strong>Việc làm mới nhất Ngành IT phần cứng/mạng</strong>
    </div>      
    <div class="chuc_nang">
        <span id="lblPage"> <a class="cpage">1</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-2.html">2</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-3.html">3</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-4.html">4</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-5.html">5</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-2.html">Tiếp</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-8.html">Cuối</a></span>
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
        <div class="col1"><input type="checkbox" id="chk_item0" class="case" name="chk_item[]" value="17163"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/tuyen-dung-nhan-vien-kiem-thu-id17163.html">TUYỂN DỤNG NHÂN VIÊN KIỂM THỬ</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd12536.html">CÔNG TY CP CON ĐƯỜNG TƠ LỤA THÁI BÌNH DƯƠNG</a></p> 
                <i>(23 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">3 - 5 triệu</div>
        <div class="col4">16-06</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan0" value="12536">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item1" class="case" name="chk_item[]" value="17005"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-tin-hoc-nam-id17005.html">Nhân viên tin học (Nam)</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16304.html">Công ty TNHH thiết bị Cường Anh</a></p> 
                <i>(139 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">07-06</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan1" value="16304">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item2" class="case" name="chk_item[]" value="16985"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/kinh-doanh-it-id16985.html">Kinh Doanh IT</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16542.html">Công ty MaiC Group</a></p> 
                <i>(31 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">15 - 20 triệu</div>
        <div class="col4">06-06</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan2" value="16542">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item3" class="case" name="chk_item[]" value="16974"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/thuc-tap-lap-trinh-vien-id16974.html">Thực tập Lập trình viên</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd14410.html">Công ty Cổ Phần Giải Pháp Phần Mềm Hanel (HanelSoft)</a></p> 
                <i>(27 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">1 - 3 triệu</div>
        <div class="col4">06-06</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan3" value="14410">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item4" class="case" name="chk_item[]" value="16863"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-it-phan-cung-id16863.html">Nhân viên IT phần cứng</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16499.html">Công ty TNHH TM &amp; DVKT Trường Hải</a></p> 
                <i>(31 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">29-05</div>
        <div class="col5">20/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan4" value="16499">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item5" class="case" name="chk_item[]" value="16760"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/process-innovator-associate-id16760.html">Process Innovator Associate</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16450.html">KY NGUYEN VANG CONSULTANT</a></p> 
                <i>(37 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Bình Phước</span></div>
        <div class="col3">15 - 20 triệu</div>
        <div class="col4">23-05</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan5" value="16450">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item6" class="case" name="chk_item[]" value="16725"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/ky-su-tu-van-giai-phap-jd-presale-id16725.html">kỹ sư tư vấn giải pháp ( JD-presale)</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(2 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">15 - 20 triệu</div>
        <div class="col4">21-05</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan6" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item7" class="case" name="chk_item[]" value="16724"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-cham-soc-khach-hang-khoi-kh-doanh-nghiep-id16724.html">nhân viên chăm sóc khách hàng (khối KH doanh nghiệp)</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(2 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">21-05</div>
        <div class="col5">30/07</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan7" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item8" class="case" name="chk_item[]" value="16723"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/ky-su-mang-id16723.html">Kỹ sư mạng</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16322.html">Công ty Cổ phần Hạ tầng Viễn thông CMC</a></p> 
                <i>(1 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">21-05</div>
        <div class="col5">30/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan8" value="16322">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item9" class="case" name="chk_item[]" value="16643"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-it-hõ-trọ-id16643.html">Chuyên viên IT hỗ trợ</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd14359.html">VP Bank Securities</a></p> 
                <i>(56 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">17-05</div>
        <div class="col5">31/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan9" value="14359">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item10" class="case" name="chk_item[]" value="16592"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-it-quan-tri-mang-id16592.html">Nhân viên IT - Quản trị mạng</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd6189.html">Công ty TNHH Dịch vụ Doanh nghiệp Nguồn Lực Việt</a></p> 
                <i>(44 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">15-05</div>
        <div class="col5">15/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan10" value="6189">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item11" class="case" name="chk_item[]" value="16572"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-phan-phoi-id16572.html">Nhân Viên Kinh Doanh Phân Phối</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16354.html">CÔNG TY CỔ PHẦN DTP</a></p> 
                <i>(45 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">13-05</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan11" value="16354">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item12" class="case" name="chk_item[]" value="16571"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-ky-thuat-may-tinh-id16571.html">Nhân Viên Kỹ Thuật Máy Tính</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16354.html">CÔNG TY CỔ PHẦN DTP</a></p> 
                <i>(43 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">13-05</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan12" value="16354">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item13" class="case" name="chk_item[]" value="16481"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-quan-tri-chat-luong-du-an-pqa-id16481.html">Chuyên viên quản trị chất lượng dự án (PQA)</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd14410.html">Công ty Cổ Phần Giải Pháp Phần Mềm Hanel (HanelSoft)</a></p> 
                <i>(50 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span><span>Miền Bắc</span></div>
        <div class="col3">Thỏa thuận</div>
        <div class="col4">08-05</div>
        <div class="col5">26/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan13" value="14410">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item14" class="case" name="chk_item[]" value="16480"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/quan-ly-van-hanh-he-thong-id16480.html">Quản lý vận hành hệ thống</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd14410.html">Công ty Cổ Phần Giải Pháp Phần Mềm Hanel (HanelSoft)</a></p> 
                <i>(51 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span><span>Miền Nam</span></div>
        <div class="col3">Thỏa thuận</div>
        <div class="col4">08-05</div>
        <div class="col5">26/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan14" value="14410">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item15" class="case" name="chk_item[]" value="16472"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/ky-su-he-thong-pacs-id16472.html">Kỹ sư hệ thống Pacs</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16174.html">Công ty Liên Doanh Y học Việt - Hàn</a></p> 
                <i>(30 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span><span>TP.HCM</span></div>
        <div class="col3">Thỏa thuận</div>
        <div class="col4">08-05</div>
        <div class="col5">31/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan15" value="16174">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item16" class="case" name="chk_item[]" value="16442"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/chuyen-vien-it-nam-id16442.html">Chuyên viên IT (Nam)</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16304.html">Công ty TNHH thiết bị Cường Anh</a></p> 
                <i>(31 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">Thỏa thuận</div>
        <div class="col4">05-05</div>
        <div class="col5">15/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan16" value="16304">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item17" class="case" name="chk_item[]" value="16306"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-ki-thuat-id16306.html">Nhân viên kĩ thuật</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16223.html">Công ty Cổ phần Đầu tư Phát triển Anh và Em</a></p> 
                <i>(81 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">27-04</div>
        <div class="col5">31/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan17" value="16223">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item18" class="case" name="chk_item[]" value="16292"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/it-id16292.html">IT</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16121.html">CÔNG TY TNHH BỆNH VIỆN ĐA KHOA NHI SÀI GÒN- CHI NHÁNH TẠI ĐỒNG NAI</a></p> 
                <i>(51 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Đồng Nai</span></div>
        <div class="col3">Thỏa thuận</div>
        <div class="col4">27-04</div>
        <div class="col5">15/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan18" value="16121">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item19" class="case" name="chk_item[]" value="16242"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-it-id16242.html">Nhân viên IT</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16160.html">Khách sạn Hoa Ban Trắng</a></p> 
                <i>(54 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Đà Nẵng</span></div>
        <div class="col3">Thỏa thuận</div>
        <div class="col4">26-04</div>
        <div class="col5">31/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan19" value="16160">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item20" class="case" name="chk_item[]" value="16193"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-it-id16193.html">Nhân viên IT</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd16134.html">Công ty Cổ phần B-GATE</a></p> 
                <i>(55 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span><span>Hải Phòng</span><span>Nghệ An</span></div>
        <div class="col3">Thỏa thuận</div>
        <div class="col4">25-04</div>
        <div class="col5">30/06</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan20" value="16134">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item21" class="case" name="chk_item[]" value="16154"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/layout-engineer-id16154.html">Layout Engineer </a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd9058.html">Công ty TNHH Active-semi Việt Nam </a></p> 
                <i>(69 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">24-04</div>
        <div class="col5">23/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan21" value="9058">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item22" class="case" name="chk_item[]" value="16121"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-toi-uu-quang-cao-id16121.html">Nhân viên tối ưu quảng cáo</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd10952.html">Công ty Cổ phần Truyền Thông Trực Tuyến Netlink</a></p> 
                <i>(89 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">10 - 15 triệu</div>
        <div class="col4">21-04</div>
        <div class="col5">31/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan22" value="10952">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item23" class="case" name="chk_item[]" value="14979"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-it-id14979.html">NHÂN VIÊN IT </a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd15980.html">CÔNG TY TNHH MTV TRANG THIẾT BỊ TRƯỜNG HỌC THÀNH PHÁT</a></p> 
                <i>(51 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">18-04</div>
        <div class="col5">30/04</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan23" value="15980">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item24" class="case" name="chk_item[]" value="14914"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-kinh-doanh-id14914.html">NHÂN VIÊN KINH DOANH</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd6412.html">Công ty cổ phần dữ liệu trực tuyến Việt Nam - VDO</a></p> 
                <i>(68 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>Hà Nội</span></div>
        <div class="col3">5 - 7 triệu</div>
        <div class="col4">15-04</div>
        <div class="col5">15/05</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan24" value="6412">
    </div></span><br><span>  
    <div class="box_list_duoi">
        <div class="col1"><input type="checkbox" id="chk_item25" class="case" name="chk_item[]" value="14867"></div>
        <div class="col2">
            <div class="">
                <strong><a class="" href="/nguoi-tim-viec/nhan-vien-it-id14867.html">Nhân viên IT</a>  </strong>
                <p><a href="/danh-sach-cac-tin-tuyen-dung-ntd14781.html">Công ty cổ phần thiết kế S.O.C</a></p> 
                <i>(69 lượt xem)</i>
            </div>
        </div>
        <div class="col3"><span>TP.HCM</span></div>
        <div class="col3">7 - 10 triệu</div>
        <div class="col4">13-04</div>
        <div class="col5">20/04</div>
        <div class="cl"></div> 
        <input type="hidden" id="tai_khoan25" value="14781">
    </div></span><br><span>  
    <input type="hidden" name="tong_tin" id="tong_tin" value="60">
    <input type="hidden" name="checkedvalues" id="checkedvalues" value="0"> 
    <input type="hidden" name="dang_luu_ho_so" id="dang_luu_ho_so" value="">    
    <div style=" clear:both; float:right; padding:10px 0;"> <a class="cpage">1</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-2.html">2</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-3.html">3</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-4.html">4</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-5.html">5</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-2.html">Tiếp</a> <a class="apage" href="/nguoi-tim-viec/it-phan-cung-mang-c78/page-8.html">Cuối</a></div>
    
</div>
<div class="ctr">
 <!-- <div class="bgr mtop"><strong>Video tuyển dụng</strong></div>
  <div class="vipr">

  </div>-->
  <div class="bgr mtop"><strong>Tìm ứng viên theo tính chất</strong></div>
  <ul class="vipr">
    <li class="search"> 
       <a href="#">Việc làm lương từ 30 triệu trở lên</a> 
       <a href="#">Việc làm lương từ 20 - 30 triệu</a> 
       <a href="#">Việc làm lương từ 15 -20 triệu</a> 
       <a href="#">Việc làm lương từ 10 - 15 triệu</a> 
       <a href="#">Việc làm cấp quản lý</a>
       <a href="#">Việc làm bán thời gian</a> 
       <a href="#">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a> </li>
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

                    $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                    $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                    //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                    //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                    $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
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
                @foreach($articles as $article)
              <div class="list_newr" style="transform: perspective(2000px);"><a class="img" href="/huong-nghiep/cam-nang-tuyen-dung-viec-lam-voi-nguoi-nhat-nid259.html" style="transform: perspective(2000px);"><img src="/images/news/259.jpg" alt="Cẩm nang tuyển dụng việc làm với người Nhật" style="transform: perspective(2000px);"></a><strong style="transform: perspective(2000px);"><a href="#" style="transform: perspective(2000px);">{{ $article->title}}</a></strong>
                <p style="transform: perspective(2000px);">{{ $article->short_url}}</p>
              </div>
              @endforeach
              
              
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