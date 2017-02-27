@extends('admin.admin_layout')

@section('admin_title','Thêm mới sản phẩm')
@section('admin_content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Thêm mới sản phẩm
    </h1>
    <ol class="breadcrumb">
        <li><a href="/myadmin/home"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="/myadmin/products">sản phẩm</a></li>
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
                    {!! Form::open(['route' => 'products.store','files'=>true]) !!}

                        {{Form::label('name','Tên sản phẩm: ')}}
                        {{Form::text('name',null,['class'=>'form-control','required' =>'','maxlength'=>'250','minlength'=>'2'])}}
                        <br/>
                        {{Form::label('category_id','Danh mục: ')}}
                       {{ Form::select('category_id', $cates, null, ['class'=>'form-control','placeholder' => 'Chọn danh mục']) }}
                        <br/>
                        {{Form::label('intro','Mô tả: ')}}
                        {{Form::textarea('intro',null,['class'=>'form-control','required' =>'','minlength'=>'2'])}}
                        <br/>
                        {{Form::label('image','Hình ảnh: ')}}
                        {{Form::file('image')}}
                        <br/>
                        {{Form::label('unit_price','Giá gốc: ')}}
                        {{Form::number('unit_price',null,['class'=>'form-control'])}}
                        <br/>
                        {{Form::label('price','Giá thị trường: ')}}
                        {{Form::number('price',null,['class'=>'form-control'])}}
                        
                        <br/>
                        {{Form::label('discount','Giá khuyến mãi: ')}}
                        {{Form::number('discount',null,['class'=>'form-control'])}}
                        <br/>
                         {{Form::label('meta_keyword','Meta keyword: ')}}
                        {{Form::text('meta_keyword',null,['class'=>'form-control','maxlength'=>'500','minlength'=>'2'])}}
                        <br/>
                         {{Form::label('meta_description','Meta description: ')}}
                        {{Form::text('meta_description',null,['class'=>'form-control','maxlength'=>'500','minlength'=>'2'])}}
                        <br/>
                        {{Form::label('tags','Thẻ: ')}}
                        {{Form::text('tags',null,['class'=>'form-control','maxlength'=>'250','minlength'=>'2'])}}
                        <br/>
                        <br/>
                        {{Form::submit('Hoàn tất',['class'=>'btn btn-success'])}}
                        {{Html::linkRoute('products.index','Hủy',"",['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!}
                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop