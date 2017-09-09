@extends('layouts.master')
@section('title', 'Nhà tuyển dụng')
@section('content')
<script src="/js/calendar/calendar.js" type="text/javascript"></script>
    <style type="text/css" media="screen">@import "/css/calendar.css";</style>
    <div class="cl" style="height:10px;"></div>
<form method="POST" action="/employer/create">
    {{ csrf_field() }}

<form name="form1" method="post" action="/doimatkhau.aspx?id=16669" onsubmit="javascript:return WebForm_OnSubmit();" id="form1" style="font-size:12px; font-family:Arial; padding:0px; margin:0px;">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE1NTcxNTkxNjUPZBYCAgMQZGQWBAIODw8WAh4EVGV4dAUFOTc5NjZkZAIPDw8WAh8ABQExZGRkjq+KCrjJSIlt31WEEjjEU4gdyJ8=">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=L4LLN8_aTZS519NAgFH6H_cuPPgeejwCCfrjiUPidvWUzJbdnrgh3T4WriIFSRtSfit0FUEjOJpaFdmNKQxLgyv20R01&amp;t=635588870547524888" type="text/javascript"></script>


<script src="/WebResource.axd?d=ibOeKvTNJHd9n3q5xNN4KG8BbMxPXwvr2aHqcLZ8m4KEOp2IfLsVPk0-rtsgD-HZd13lFZ870W3j1QK4kBd9SVyNxDeL7ViTbciFYEt06_YULdY50&amp;t=635588870547524888" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div>

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="45E2DED3">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWCALl0/6OCgLKw4qXDgK11Ya7AQLKw6LdBQKRvMuJDQKShvT6DALChPzDDQLdkrXHBT9JHAOJ+8UIfBmC3kjp25lpGxla">
</div>
    <div class="rgl">Mật khẩu hiện tại (<span class="sao">*</span>):</div>
    <div class="rgr">
        <div style="display:none;"><input name="txtPassN" type="text" value="0909683850" id="txtPassN"></div>
        <input name="txtPassNew" type="password" id="txtPassNew" class="textbox">
        <div><span id="RequiredFieldValidator2" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mật khẩu cũ!</span></div>
        <div><span id="CompareValidator1" class="valerror" style="color:Red;font-size:11px;display:none;">Mật khẩu cũ không đúng!</span></div>
    </div>
    <div class="cl"></div>
    <div class="rgl">Mật khẩu mới (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtPass" type="password" id="txtPass" class="textbox">
        <div><span id="RequiredFieldValidator1" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mật khẩu mới!</span></div>
    </div>
    <div class="cl"></div>
    <div class="rgl">Xác nhận lại mật khẩu (<span class="sao">*</span>):</div>
    <div class="rgr">
        <input name="txtRePass" type="password" id="txtRePass" class="textbox">
        <div><span id="chkpass2" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng xác nhận lại mật khẩu mới!</span></div>
        <div><span id="comparePasswords" class="valerror" style="color:Red;font-size:11px;display:none;">Xác nhận mật khẩu sai!</span></div>
    </div>
    <div class="cl"></div>
    <div class="rgl">Mã bảo vệ (<span class="sao">*</span>):</div>
    <div class="rgr"><img src="code.aspx?id=97966" style="vertical-align:middle;" alt=""></div>
    <div class="cl"></div> 
    <div class="rgl">Nhập mã bảo vệ (<span class="sao">*</span>):</div>
    <div class="rgr">
        <div style="display:none;"><input name="txtC" type="text" value="97966" id="txtC"></div>
        <input name="txtCode" type="text" id="txtCode" class="textbox">
        <div><span id="RequiredFieldValidator9" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mã bảo vệ!</span></div>
        <div><span id="CompareValidator2" class="valerror" style="color:Red;font-size:11px;display:none;">Mã bảo vệ sai!</span></div>
    </div>
    <div class="cl" style="height:15px;"></div>     
    <div class="bt">
        <button type="submit" class="btn btn-primary button">Đổi mật khẩu</button>
        
    </div>   
</form>

@endsection