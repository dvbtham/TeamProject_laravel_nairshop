@extends('layout')

@section('title','Liên hệ')
@section('content')

<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    <li class="active">Liên hệ</li>
                </ol>
            </div>
        </div>
        <!-- contact -->
        <div class="contact">
            <div class="container">
                <h3>Thông tin của bạn</h3>
                <div class="contact-content">
                {!! Form::open(['url' => 'contact','method'=>'post']) !!}
                    {{ Form::text('name','',
                    ['class'=>'textbox','placeholder'=>'Nhập họ và tên...']) 
                    }}

                    {{ Form::email('email','',
                    ['class'=>'textbox','placeholder'=>'Nhập email...']) 
                    }}

                    {{ Form::textarea('message','',
                    ['class'=>'textbox','placeholder'=>'Nhập nội dung tin nhắn...']) 
                    }}

                    {{ Form::submit('Gửi',
                    ['class'=>'btn btn-default cont-btn']) 
                    }}
                {!! Form::close() !!}
                    <br>
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3834.6392741929367!2d108.21916391441741!3d16.032282888903786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1481539697729" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
	   <!--contact-->

@stop