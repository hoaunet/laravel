@extends('layouts.master')

@section('content')
<div class="container box_send_mail">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Yêu cầu Email lấy lại mật khẩu</h1></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span><br>
                                @endif
                    </div>            

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Địa chỉ E-Mail </label>

                            <div class="col-md-6"><br>
                                <input id="email" type="email" class="form-control textbox" name="email" value="{{ old('email') }}" required placeholder="Nhập địa chỉ email của bạn">

                               
                            </div>
                        </div>
                        <div style="font-size:11px; font-style:italic; padding-top:10px; color:#666;">Bạn hãy nhập địa chỉ email đã dùng để đăng ký tài khoản trên website</div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="background: url('/images/btnEmail.gif'); height: 43px; width: 200px">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
