@extends('layouts.master')
@section('title', 'Nhà tuyển dụng')
@section('content')
<script src="/js/calendar/calendar.js" type="text/javascript"></script>
    <style type="text/css" media="screen">@import "/css/calendar.css";</style>
<form method="POST" action="/employer/create">
    {{ csrf_field() }}

<div class="cl" style="height:10px;"></div>
<div class="rgt">Đăng tin tuyển dụng</div>
<div id="pel_ntd_dangtin">   
    
    <div class="tt">
        <b style="color:red; font-size:16px;">Quy định đăng tin tuyển dụng:</b>         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Viết tiếng Việt <span style="color:red;">có dấu.</span>         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Không viết chữ in hoa (trừ chữ cái đầu câu)         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Giữa hàng nghìn tin tuyển dụng mỗi ngày, tin tuyển dụng của bạn sẽ được nhiều ứng viên tìm việc quan tâm nếu:         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>+ Thông tin chi tiết, rõ ràng, đầy đủ.</b>         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Điền mã số thuế và upload giấy phép kinh doanh  để trở thành nhà tuyển dụng uy tín đối với ứng viên và ban quản trị  trang Tuyendungvietnam.com.vn.         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Không đăng tin của các công ty thuộc loại hình sau        <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.  Trung tâm việc làm, môi giới việc làm         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.  Đa cấp.         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.  Công ty môi giới bảo hiểm, đại lý bảo hiểm        <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.  Công ty đăng tin tuyển sinh ,thu hút học viên         <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Các tin tuyển dụng không đúng quy định, không đạt chất lượng, nội dung không nghiêm túc sẽ bị xóa không cần báo trước.
    </div><a name="href-tieu_de"></a>
    <div class="rggt"><b>Thông tin tuyển dụng</b></div>
    <div class="rgl">Vị trí tuyển dụng (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtViTriTD" type="text" id="txtViTriTD" class="textbox">
        
    </div>
    <div class="cl"></div><a name="href-cap-bac"></a>
    <div class="rgl">Cấp bậc (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpCB" id="drpCB" class="textbox" style="width:265px;">
    <option value="--Chọn cấp bậc--">--Chọn cấp bậc--</option>
    @if(count($levels) >0)
      @foreach($levels as $level)
        <option value="{{$level->id}}">{{$level->level_name}}</option> 
      @endforeach
    @endif   

  </select>
        
    </div>
    <div class="cl"></div><a name="href-nganh-nghe"></a> 
    <div class="rgl">Chọn ngành nghề (<span class="sao">*</span>):</div>
    <div class="rgr">
      <select name="cbcareer" id="cbcareer" class="textbox" style="width:265px;">
        <option value="--Chọn cấp bậc--">--Chọn cấp bậc--</option>
        @if(count($careers) >0)
          @foreach($careers as $career)
            <option value="{{$career->id}}">{{$career->career_name}}</option> 
          @endforeach
        @endif   

      </select>
    </div>
    <div class="cl"></div><a name="href-dia-diem"></a> 
    <div class="rgl">Địa điểm làm việc (<span class="sao">*</span>): <div class="ifo">(Tối đa 10 địa điểm)</div></div>
    <div class="rgr"><select name="list_city" id="list_city" class="textbox" style="width:265px;">
        <option value="--Chọn cấp bậc--">--Chọn cấp bậc--</option>
        @if(count($provinces) >0)
          @foreach($provinces as $province)
            <option value="{{$province->id}}">{{$province->province_name}}</option> 
          @endforeach
        @endif   

      </select>
        
        <div class="cl"></div>
        
    </div>
    <div class="cl"></div><a name="href-hinh-thuc_lv"></a> 
    <div class="rgl">Hình thức làm việc (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpHT" id="drpHT" class="textbox" style="width:265px;">
          <option value="--Chọn hình thức làm việc--">--Chọn hình thức làm việc--</option>
          @if(count($typeworks) >0)
                @foreach($typeworks as $typework)
                  <option value="{{$typework->id}}">{{$typework->name}}</option> 
                @endforeach
              @endif   
        </select>
        
    </div>
    <div class="cl"></div><a name="href-muc-luong"></a>  
    <div class="rgl">Mức lương (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpML" id="drpML" class="textbox" style="width:265px;">
    <option value="--Chọn mức lương--">--Chọn mức lương--</option>
    @if(count($salaries ) >0)
                @foreach($salaries  as $salary)
                  <option value="{{$salary->id}}">{{$salary->name}}</option> 
                @endforeach
              @endif

  </select>
        
    </div>
    <div class="cl"></div><a name="href-so-luong"></a>
    <div class="rgl">Số lượng tuyển (<span class="sao">*</span>): <div class="ifo">(Nhập ký tự số)</div></div>
    <div class="rgr">
        <input name="txtSL" type="text" id="txtSL" class="textbox">
        
    </div>
    <div class="cl"></div><a name="href-quyen-loi"></a>    
    <div class="rgl">Quyền lợi được hưởng (<span class="sao">*</span>):</div>
    <div class="rgr">
        <textarea name="txtQuyenLoi" rows="5" cols="20" id="txtQuyenLoi" class="textbox" style="width:400px;"></textarea>
        
    </div>   
    <div class="cl"></div><a name="href-mo-ta_cv"></a>               
    <div class="rgl">Mô tả công việc (<span class="sao">*</span>):<div class="ifo">(Tối thiểu 100 ký tự)</div></div>
    <div class="rgr">
        <textarea name="txtMoTa" rows="5" cols="20" id="txtMoTa" class="textbox" style="width:400px;"></textarea>
        
    </div>   
    <div class="cl"></div><a name="href-kinh_nghiem"></a>
    <div class="rgl">Yêu cầu số năm kinh nghiệm (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpKN" id="drpKN" class="textbox" style="width:265px;">
    <option value="">--Chọn số năm kinh nghiệm--</option>
        @if(count($experiences ) >0)
                @foreach($experiences  as $experience)
                  <option value="{{$experience->id}}">{{$experience->name}}</option> 
                @endforeach
        @endif

  </select>
        
    </div>
    <div class="cl"></div><a name="href-bang-cap"></a>   
    <div class="rgl">Yêu cầu bằng cấp (<span class="sao">*</span>):</div>
    <div class="rgr">
        <select name="drpBC" id="drpBC" class="textbox" style="width:265px;">
        <option value="">--Chọn yêu cầu bằng cấp--</option>
        @if(count($degrees ) >0)
          @foreach($degrees  as $degree)
            <option value="{{$degree->id}}">{{$degree->name}}</option> 
          @endforeach
        @endif


  </select>
        
    </div>
    <div class="cl"></div> 
    <div class="rgl">Yêu cầu ngoại ngữ:</div>
    <div class="rgr"><select name="cblanguage" id="cblanguage" class="textbox" style="width:265px;">
             <option value="">--Chọn ngôn ngữ --</option>
             @if(count($languages ) >0)
                @foreach($languages  as $language)
                  <option value="{{$language->id}}">{{$language->name}}</option> 
                @endforeach
              @endif    
    </div>      
    <div class="cl"></div>
    <div class="rgl">Ngoại ngữ khác:</div>
    <div class="rgr">
        <input name="txtNNOther" type="text" id="txtNNOther" class="textbox">
        <div class="ifo" style="color:Red;">Nhập mục này nếu Ngoại ngữ của bạn không có trong mục "Yêu cầu ngoại ngữ"</div>
    </div>       
    <div class="cl"></div>
    <div class="rgl">Yêu cầu giới tính:</div>
    <div class="rgr">
        <select name="drpGT" id="drpGT" class="textbox" style="width:265px;">
    <option value="--Chọn yêu cầu giới tính--">--Chọn yêu cầu giới tính--</option>
    <option value="1">Nam</option>
    <option value="2">Nữ</option>
    <option value="3">Khác</option>

  </select>
    </div>
    <div class="cl"></div>             
    <div class="rgl">Yêu cầu độ tuổi:</div>
    <div class="rgr">
            <select name="drpDT" id="drpDT" class="textbox" style="width:265px;">
        <option value="--Chọn yêu cầu độ tuổi--">--Chọn yêu cầu độ tuổi--</option>
        <option value="Dưới 18 tuổi">Dưới 18 tuổi</option>
        <option value="18 - 24 tuổi">18 - 24 tuổi</option>
        <option value="25 - 29 tuổi">25 - 29 tuổi</option>
        <option value="30 - 34 tuổi">30 - 34 tuổi</option>
        <option value="35 - 39 tuổi">35 - 39 tuổi</option>
        <option value="40 - 44 tuổi">40 - 44 tuổi</option>
        <option value="Trên 45 tuổi">Trên 45 tuổi</option>
        <option value="Từ 30 - 40 Tuổi">Từ 30 - 40 Tuổi</option>
        <option value="Từ 25 - 40 Tuổi">Từ 25 - 40 Tuổi</option>
        <option value="Từ 18 - 40 Tuổi">Từ 18 - 40 Tuổi</option>

      </select>
    </div>
    <div class="cl"></div>
    <div class="rgl">Độ tuổi khác: </div>
    <div class="rgr">
        <input name="txtdotuoiOther" type="text" id="txtdotuoiOther" class="textbox">
        <div class="ifo" style="color:Red;">Nhập mục này nếu độ tuổi của bạn không có trong mục "Yêu cầu độ tuổi"</div>
    </div>    
    <div class="cl"></div>   
    <div class="rgl">Yêu cầu khác:</div>
    <div class="rgr">
        <textarea name="txtYeuCauKhac" rows="5" cols="20" id="txtYeuCauKhac" class="textbox" style="width:400px;"></textarea>
    </div>   
    <div class="cl"></div><a name="href-ho-so"></a>  
    <div class="rgl">Hồ sơ bao gồm(<span class="sao">*</span>):</div>
    <div class="rgr">
        <textarea name="record_include" rows="5" cols="20" id="record_include" class="textbox" style="width:400px;"></textarea>
        
    </div>   
    <div class="cl"></div><a name="href-han-nop"></a>
    <div class="rgl">Hạn nộp hồ sơ (<span class="sao">*</span>):</div>
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
    <div class="rgl">Hình thức nộp hồ sơ:</div>
    <div class="rgr">
        <select name="drpHTHS" id="drpHTHS" class="textbox" style="width:265px;">
    <option value="1">Trực tiếp</option>
    <option value="2">Trực tuyến</option>
    <option value="3">Qua Email</option>

  </select>
    </div>
    <div class="cl" style="height:15px;"></div>     
    <div class="rggt"><b>Thông tin nhà tuyển dụng</b></div>   
    <div class="rgl" style="text-align:center;">
        <span id="lblImgLogo"><img src="/images/user/null.gif" style="width:100px;height:auto"></span>
    </div>
    <div class="rgr">
        <ul class="list_ntd">
            
            <li class="l">Tên công ty:</li><li class="r">S3s</li>
            <li class="cl"></li>
            <li class="l">Quy mô công ty:</li><li class="r">Ít hơn 10 nhân viên</li>
            <li class="cl"></li>   
            <li class="l">Sơ lược về công ty:</li><li class="r">sadsad
dsad
sad
sadsa</li>
            <li class="cl"></li>  
            <li class="l">Địa chỉ:</li><li class="r">Tô Hiến Thành</li>
            <li class="cl"></li>   
            <li class="l">Mã số thuế:</li><li class="r"></li>
            <li class="cl"></li> 
            <li class="l">Website:</li><li class="r"></li>
            <li class="cl"></li>                                                                  
            
        </ul>
    </div>   
    <div class="cl"></div>   
    <div class="rggt"><b>Thông tin liên hệ</b></div>   
    <div class="rgl">&nbsp;</div>
    <div class="rgr">
        <ul class="list_ntd">
            
            <li class="l">Người liên hệ:</li><li class="r">Lê Hoa</li>
            <li class="cl"></li>
            <li class="l">Địa chỉ liên hệ:</li><li class="r">dsadsad</li>
            <li class="cl"></li>   
            <li class="l">Email liên hệ:</li><li class="r">banhangonlinetohienthanh@gmail.com</li>
            <li class="cl"></li>  
            <li class="l">Điện thoại liên hệ:</li><li class="r">0909683851</li>
            <li class="cl"></li>                                                              
            
        </ul>
    </div>   
    <div class="cl"></div> 
    <div class="rgl">&nbsp;</div>
    <div class="rgr">
        <div class="bt">
           <button type="submit" class="btn btn-primary button">Đăng ký ngay</button>
           <button type="reset" class="btn btn-primary button">Làm lại</button>
        </div>         
    </div>
    <div class="cl" style="height:15px;"></div>         

</div>
</form>
@endsection