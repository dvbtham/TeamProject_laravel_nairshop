@extends('admin.admin_layout')

@section('admin_title','Thêm mới người dùng')
@section('admin_content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Thêm mới người dùng
    </h1>
    <ol class="breadcrumb">
        <li><a href="/myadmin/home"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="/myadmin/users">Người dùng</a></li>
        <li class="active">Thêm mới</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-md-12">

                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    {!! Form::open(['route' => 'users.store']) !!}

                        {{Form::label('name','Họ tên: ')}}
                        {{Form::text('name',null,['class'=>'form-control','placeholder'=>'nhập họ tên','required' =>'','maxlength'=>'250','minlength'=>'6'])}}
                        <br/>
                        {{ Form::label('password', 'Mật khẩu: ') }}
                        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Mật khẩu...'])}}
                        <br/>
                        {{ Form::label('password_again', 'Xác nhận mật khẩu: ') }}
                        {{ Form::password('password_again',['class'=>'form-control','placeholder'=>'Nhập lại mật khẩu...'])}}
                        <br/>
                        {{ Form::label('email', 'Email: ') }}
                        {{ Form::email('email','',['class'=>'form-control', 'placeholder'=>'Email...'])}}
                        <br/>
                        <br/>
                        {{Form::submit('Hoàn tất',['class'=>'btn btn-success'])}}
                        {{Html::linkRoute('users.index','Hủy',"",['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!}
                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop