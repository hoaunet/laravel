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
        <label class="col-sm-3 control-label" for="title">Name<font class="redFont">*</font></label>
        <div class="controls col-sm-6"><input class="form-control" type="text" id="mc_ title" name="mc_ title" value="{{old('mc_ title')}}"></div>      
        <div class="controls col-sm-3"><span class="help-inline control-label" id="help_title"></span></div>
      </div>
      <div class="row" id="field_description">
  <label class="control-label col-sm-3" for="description">Details<font class="redFont">*</font></label>
  <div class="controls col-sm-6">
    <textarea class="form-control" type="textarea" rows="4" id="mc_description" name="mc_description" value="{{old('mc_description')}}"></textarea>
  </div>
  <div class="controls col-sm-3">
    <span class="help-inline control-label" id="help_description"></span>
  </div>
</div>
  <div class="row" id="field_address">
    <label class="control-label col-sm-3" for="address">Address</label>
    <div class="controls col-sm-6">
      <textarea class="form-control" type="textarea" rows="4" id="mc_address" name="mc_address" validation="none" value="{{old('mc_address')}}"></textarea>
    </div>
    <div class="controls col-sm-3">
      <span class="help-inline control-label" id="help_address"></span>
    </div>
  </div>
    <div class="row" id="field_type">
      <label class="control-label col-sm-3" for="type">Type<font class="redFont">*</font></label>
      <div class="controls col-sm-6">
        <select type="select-one" class="form-control" id="mc_type" name="mc_type">
          
          </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_type"></span>
      </div>
    </div>
    <div class="row" id="field_country">
      <label class="control-label col-sm-3" for="country">Country<font class="redFont">*</font></label>
      <div class="controls col-sm-6">
        <select type="select-one" class="form-control select2Field select2-offscreen" id="mc_country" name="mc_country" value="{{old('mc_country')}}">
          
        </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_country"></span>
      </div>
    </div>
    <div class="row" id="field_timezone">
      <label class="control-label col-sm-3" for="timezone">Time Zone<font class="redFont">*</font></label>
      <div class="controls col-sm-6">
        <select type="select-one" class="form-control select2Field select2-offscreen" id="mc_timezone" name="mc_timezone" value="{{old('mc_timezone')}}">
          </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_timezone"></span>
      </div>
    </div>
    <div class="row" id="field_parent">
      <label class="control-label col-sm-3" for="parent">Parent Structure</label>
      <div class="controls col-sm-6">
        <select type="select-one" class="form-control" id="mc_parent" name="mc_parent">
          
        </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_parent"></span>
      </div>
    </div>
    <div class="row" id="field_heads">
      <label class="control-label col-sm-3" for="heads">Heads<font class="redFont">*</font></label>
      <div class="controls col-sm-6">
        <select type="select-multi" multiple="multiple" class="form-control select2Multi select2-offscreen" id="mc_heads" name="mc_heads" >
          <option value="NULL">Select</option>
          </select>
      </div>
      <div class="controls col-sm-3">
        <span class="help-inline control-label" id="help_heads"></span>
      </div>
    </div>  
    <div class="control-group row">
      <div class="controls col-sm-9">
        <button class="saveBtn btn btn-primary pull-right" id="btnSubmit"><i class="fa fa-save"></i> Save</button>
        <button class="cancelBtn btn pull-right" style="margin-right:5px;"><i class="fa fa-times-circle-o"></i> Cancel</button>
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