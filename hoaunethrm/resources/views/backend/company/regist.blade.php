@extends('backend.layouts.app')
@section('content')
<section class="content-header">
  <h1>会社の構成 <small>目録</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> 管理者</a></li>       
        <li class="active">新しく追加する</li>
      </ol>
    </section>  
 <section class="content"> 
  {!! Form::open(array('url' => 'company/regist','id'=>'frmRegist', 'method' => 'post','class'=>'form-horizontal')) !!}
  <div class="box box-default">
    <div class="box-header with-border"><h3 class="box-title">新しく追加する </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
     <div class="control-group">
        <div class="controls">
            <span class="label label-warning" id="CompanyStructure_submit_error" style="display:none;"></span>
        </div>
      </div>
      <div class="row" id="field_title">
        <label class="col-sm-3 control-label" for="title">社名 <font class="redFont">*</font></label>
        <div class="controls col-sm-6"><input class="form-control" type="text" id="mc_title" name="mc_title" value="{{old('mc_title')}}"></div>      
        <div class="controls col-sm-3"><span class="help-inline control-label" id="help_title">@if ($errors->first('mc_title')) ※{!! $errors->first('mc_title') !!} @endif</span></div>
      </div>
      <div class="row" id="field_description">
  <label class="control-label col-sm-3" for="description">形容 <font class="redFont">*</font></label>
  <div class="controls col-sm-6">
    <textarea class="form-control" type="textarea" rows="4" id="mc_description" name="mc_description" value="{{old('mc_description')}}"></textarea>
  </div>
  <div class="controls col-sm-3">
    <span class="help-inline control-label" id="help_description">@if ($errors->first('mc_description')) ※{!! $errors->first('mc_description') !!} @endif</span>
  </div>
</div>
  <div class="row" id="field_address">
    <label class="control-label col-sm-3" for="address">住所</label>
    <div class="controls col-sm-6">
      <textarea class="form-control" type="textarea" rows="4" id="mc_address" name="mc_address" validation="none" value="{{old('mc_address')}}"></textarea>
    </div>
    <div class="controls col-sm-3">
      <span class="help-inline control-label" id="help_address"></span>
    </div>
  </div>
    <div class="row" id="field_type">
      <label class="control-label col-sm-3" for="type">会社の種類<font class="redFont">*</font></label>
      <div class="controls col-sm-6">
        <select type="select-one" class="form-control" id="mc_type" name="mc_type">
          @foreach($company_types as $key=>$company_type)
          <option value="{{ $key }}" @if($key==1) selected="" @endif>{{ $company_type }} </option> 
          @endforeach
          </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_type"></span>
      </div>
    </div>
    <div class="row" id="field_country">
      <label class="control-label col-sm-3" for="country">国<font class="redFont">*</font></label>
      <div class="controls col-sm-6">
        <select type="select-one" class="form-control select2Field select2-offscreen" id="mc_country" name="mc_country" value="{{old('mc_country')}}">
           @foreach($countries as $country)
          <option value="{{$country->country_code}}" @if($country->country_code==1) selected="" @endif>{{$country->country_name}} </option> 
          @endforeach
        </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_country">@if ($errors->first('mc_country')) ※{!! $errors->first('mc_country') !!} @endif</span>
      </div>
    </div>
    <div class="row" id="field_timezone">
      <label class="control-label col-sm-3" for="timezone">時間帯 <font class="redFont">*</font></label>
      <div class="controls col-sm-6">
        <select type="select-one" class="form-control select2Field select2-offscreen" id="mc_timezone" name="mc_timezone" value="{{old('mc_timezone')}}">
           @foreach($time_zones as $key=>$time_zone)
          <option value="{{$time_zone->mtz_name}}" @if($key==1) selected="" @endif>{{$time_zone->mtz_details}} </option> 
          @endforeach
          </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_timezone">@if ($errors->first('mc_timezone')) ※{!! $errors->first('mc_timezone') !!} @endif</span>
      </div>
    </div>
    <div class="row" id="field_parent">
      <label class="control-label col-sm-3" for="parent">親</label>
      <div class="controls col-sm-6">
        <select type="select-one" class="form-control" id="mc_parent" name="mc_parent">
         @foreach($company_types as $key=>$company_type)
          <option value="{{ $key }}" @if($key==1) selected="" @endif>{{ $company_type }} </option> 
          @endforeach  
        </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_parent"></span>
      </div>
    </div>
    <div class="row" id="field_heads">
      <label class="control-label col-sm-3" for="heads">首長 <font class="redFont">*</font></label>
      <div class="controls col-sm-6">
        <input class="form-control" type="text" id="mc_heads" name="mc_heads" value="{{old('mc_heads')}}">
        
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_heads">@if ($errors->first('mc_heads')) ※{!! $errors->first('mc_heads') !!} @endif</span>
      </div>
    </div>  
    <div class="control-group row">
      <div class="controls col-sm-9"><br>
        <button class="saveBtn btn btn-primary pull-right" id="btnSubmit"><i class="fa fa-save"></i> 登録する</button>
        <button class="cancelBtn btn pull-right" style="margin-right:5px;" value="クリア" type="reset"><i class="fa fa-times-circle-o"></i> クリア</button>
      </div>
      <div class="controls col-sm-3"></div>
    </div>

  </div>
        <!-- /.box-body -->
    <div class="box-footer">
        
    </div>
  </div>
  {!! Form::close() !!}
 </section>      
<script type="text/javascript">
$("#btnSubmit").on("click",function() {  
  var flag = true;
  /*if (!$("#belong_name").val().replace(/ /g, "")) {  
    $("#error-belong-name").html('<?php //echo $error['error_belong_name_required'];?>');             
    $("#error-belong-name").css('display','block');   
    $('#belong_name').focus();
    flag = false;    
  } 
  if (!$("#belong_code").val().replace(/ /g, "")) {  
    $("#error-belong_code").html('<?php //echo $error['error_belong_code_required'];?>');             
    $("#error-belong_code").css('display','block');   
    $('#belong_code').focus();
    flag = false; 
  }  */
  if(flag) $( "#frmRegist" ).submit(); 
});
</script>
@endsection