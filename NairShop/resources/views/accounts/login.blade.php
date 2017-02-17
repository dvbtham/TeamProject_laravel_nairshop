@extends('layout')

@section('title','Đăng nhập')
@section('content')
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Trang chủ</a></li>
            <li class="active">Đăng nhập</li>
        </ol>
    </div>
</div>
<!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>Đăng nhập hệ thống</h3>
                             <div class="strip"></div>

                             <p>Xin chào, vui lòng nhập đầy đủ thông tin tài khoản ở phía dưới để tiếp tục.</p>
                             {!! Form::open(['url' => 'login','method'=>'post']) !!}
                                 <h5>Tên đăng nhập:</h5>    
                                 {{ Form::text('username','',['placeholder'=>'Tên đăng nhập...'])}}
                                 <h5>Mật khẩu:</h5>
                                 {{ Form::password('password',['placeholder'=>'Mật khẩu...'])}}
                                 <br>                   
                                {{ Form::submit('Đăng nhập')}}

                              {!! Form::close() !!}
                            <a href="#">Quên mật khẩu ?</a>
                    </div>
                    <div class="col-md-6 login-right">
                            <h3>Đăng ký tài khoản mới</h3>
                            <div class="strip"></div>
                            <p>Bạn có thể theo dõi quá trình chuyển hàng một cách nhanh chóng khi đăng ký thành viên.</p>
                            <a href="signup" class="button">Tạo mới tài khoản</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<!-- //login-page -->
@stop