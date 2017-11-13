@extends('backend.layouts.app')
@section('content')
 <link rel="stylesheet" href="{{ asset('') }}public/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<section class="content-header">
  <h1>熟練 <small>目録</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> 管理者</a></li>       
        <li class="active">給与等級</li>
      </ol>
    </section>  
 <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><button onclick="location.href='{{route('backend.paygrade.regist')}}'" class="btn btn-small btn-primary">新しく追加する <i class="fa fa-plus"></i></button></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div id="CompanyStructure" class="reviewBlock" data-content="List" style="padding-left:5px;">
            <div class="box-body table-responsive">
              <div id="grid_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <div class="row">
                  <div class="col-xs-6">
                    <div id="grid_length" class="dataTables_length" style="display: none;">
                      <label>
                            <select size="1" name="grid_length" aria-controls="grid">
                               <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
                             </select> records per page</label>
                    </div>
                  </div>                  
                </div>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped dataTable" id="grid"  >
                  <thead>
                    <tr role="row">
                      <th >名</th>
                      <th >描写</th>
                      
                      <th ></th>
                    </tr>
                  </thead>
                  <tbody >
                    <?php $row=0;?>
                    <tr class="{{($row%2==0)?'odd':'even'}}"">
                       <td >Programming and Application Development</td>
                       <td >Programming and Application Development</td>                      
                       <td ><div style="width:80px;"><img class="tableActionButton" src="{{ asset('') }}public/images/edit.png" style="cursor:pointer;" rel="tooltip" title="" onclick="modJs.edit(1);return false;" data-original-title="Edit"><img class="tableActionButton" src="{{ asset('') }}public/images/delete.png" style="margin-left:15px;cursor:pointer;" rel="tooltip" title="" onclick="#" data-original-title="Delete"><img class="tableActionButton" src="{{ asset('') }}public/images/clone.png" style="margin-left:15px;cursor:pointer;" rel="tooltip" title="" onclick="modJs.copyRow(1);return false;" data-original-title="Copy"></div></td>
                     </tr>
                   </tbody>
                 </table>                 
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        
        </div>
      </div>
      <!-- /.box -->
</section>

@endsection

@section('js')
<script src="{{ asset('') }}public/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('') }}public/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#grid').DataTable()    
  })
</script>  
@endsection