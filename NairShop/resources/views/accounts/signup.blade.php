@extends('layout')

@section('title','Đăng ký')
@section('content')
<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    <li class="active">Đăng ký</li>
                </ol>
            </div>
        </div>
	 <!-- reg-form -->
    <div class="reg-form">
        <div class="container">
            <div class="reg">
                <h3>Thông tin đăng ký</h3>
                <p>Bạn đã có tài khoản, <a href="login">Click để đăng nhập</a></p>
                <p>Xin chào, vui lòng nhập đầy đủ thông tin tài khoản ở phía dưới để tiếp tục.</p>
                 {!! Form::open(['url' => 'signup','method'=>'post']) !!}
                    <ul>
                        <li class="text-info">Họ tên: </li>
                        <li>
                         {{ Form::text('name','',['placeholder'=>'Họ tên...'])}}
                        </li>
                    </ul>
                    <ul>
                        <li class="text-info">Email: </li>
                        <li>
                             {{ Form::email('email','',['placeholder'=>'Email...'])}}
                        </li>
                    </ul>
                    <ul>
                        <li class="text-info">Mật khẩu: </li>
                        <li>
                        {{ Form::password('password','',['placeholder'=>'Mật khẩu...'])}}
                        </li>
                    </ul>
                    <ul>
                        <li class="text-info">Nhập lại mật khẩu:</li>
                        <li>{{ Form::password('re_password','',['placeholder'=>'Nhập lại mật khẩu...'])}}</li>
                    </ul>
                    <ul>
                        <li class="text-info">Di động:</li>
                        <li>{{ Form::text('phone','',['placeholder'=>'Số điện thoại...'])}}</li>
                    </ul>                       
                    {{ Form::submit('Tiếp tục')}}
                    <p class="click"><strong>Tiếp tục</strong> đồng nghĩa với việc bạn đồng ý với  <a href="#">Điều khoản và Chính sách</a></p> 
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop