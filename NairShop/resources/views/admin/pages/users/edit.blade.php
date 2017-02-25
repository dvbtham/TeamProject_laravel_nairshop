@extends('admin.admin_layout')

@section('admin_title','Cập nhật người dùng')
@section('admin_content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Cập nhật người dùng
    </h1>
    <ol class="breadcrumb">
        <li><a href="/myadmin/home"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="/myadmin/users">Người dùng</a></li>
        <li class="active">Cập nhật</li>
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
                    {!! Form::model($user,['route' => ['users.update',$user->id],'method'=>'put']) !!}
                        {{ Form::hidden('password', null) }}
                        {{Form::label('name','Họ tên: ')}}
                        {{Form::text('name',null,['class'=>'form-control','placeholder'=>'nhập họ tên','required' =>'','maxlength'=>'250','minlength'=>'6'])}}
                        <br/>
                        {{ Form::label('email', 'Email: ') }}
                        {{ Form::email('email',$user->email,['class'=>'form-control', 'placeholder'=>'Email...'])}}
                        
                        {{ Form::label('is_deleted', 'Đồng ý xóa: ') }}
                        {{Form::radio('is_deleted',0)}}
                        <br/>
                        {{ Form::label('is_deleted', 'Bỏ xóa: ') }}
                        {{Form::radio('is_deleted',1)}}
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