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
  <form  name="search_employment" method="post" action="/employement/search">
  {{ csrf_field() }}
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
  </form>
</div>