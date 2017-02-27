@extends('admin.admin_layout')

@section('admin_title','Thêm mới người dùng')
@section('admin_content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Thêm mới danh mục
    </h1>
    <ol class="breadcrumb">
        <li><a href="/myadmin/home"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="/myadmin/users">Danh mục</a></li>
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
                    {!! Form::open(['route' => 'cates.store']) !!}

                        {{Form::label('name','Tên danh mục: ')}}
                        {{Form::text('name',null,['class'=>'form-control','placeholder'=>'nhập tên danh mục','required' =>'','maxlength'=>'250'])}}
                        <br/>
                        {{Form::hidden('alias',null)}}
                        <br/>
                        {{Form::label('parent_id','Danh mục cha: ')}}
                       {{ Form::select('parent_id', $cates, null, ['class'=>'form-control','placeholder' => 'Chọn danh mục']) }}
                        <br/>
                        {{Form::label('description','Mô tả: ')}}
                        {{Form::textarea('description',null,['class'=>'form-control','placeholder'=>'','required' =>'','maxlength'=>'250','minlength'=>'6'])}}
                        <br/>
                        <br/>
                        <br/>
                        {{Form::submit('Hoàn tất',['class'=>'btn btn-success'])}}
                        {{Html::linkRoute('cates.index','Hủy',"",['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!}
                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop