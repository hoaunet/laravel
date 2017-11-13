@extends('backend.layouts.app')
@section('content')
<section class="content-header">
  <h1>ジョブの詳細設定 <small>目録</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> 管理者</a></li>       
        <li class="active">ジョブの詳細設定</li>
      </ol>
    </section>  
 <section class="content"> 
  {!! Form::open(array('route' => 'backend.employmentstatus.regist','id'=>'frmRegist', 'method' => 'post','class'=>'form-horizontal')) !!}
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
      <div class="row" id="field_name">
        <label class="col-sm-3 control-label" for="title">雇用状況<font class="redFont">*</font></label>
        <div class="controls col-sm-6"><input class="form-control" type="text" id="mem_name" name="mem_name" value="{{old('mem_name')}}"></div>      
        <div class="controls col-sm-3"><span class="help-inline control-label" id="help_title"></span></div>
      </div>
      
      <div class="row" id="field_description">
        <label class="control-label col-sm-3" for="description">形容<font class="redFont">*</font></label>
        <div class="controls col-sm-6">
          <textarea class="form-control" type="textarea" rows="4" id="mem_description" name="mem_description" value="{{old('mem_description')}}"></textarea>
        </div>
        <div class="controls col-sm-3">
          <span class="help-inline control-label" id="help_description"></span>
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