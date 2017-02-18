@extends('admin.admin_layout')
@section('admin_title','Thêm mới nhãn hiệu')
@section('admin_content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Thêm mới nhãn hiệu
    </h1>
    <ol class="breadcrumb">
        <li><a href="/myadmin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="brands">Nhãn hiệu</a></li>
        <li class="active">Thêm mới</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Thông tin nhãn hiệu</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/brands/create"  novalidate role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tên nhãn hiệu</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" required name="name" placeholder="tên nhãn hiệu"/>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mô tả ngắn</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" ckeditor="ckeditorOptions"  name="description" placeholder="mô tả"></textarea>
                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Hình ảnh</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="image" placeholder="hình ảnh">
                        <button type="button" class="btn btn-default">Chọn ảnh</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="actived" required />Kích hoạt
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-info">Lưu lại</button>
                    <button onlick="window.location.href='/brand/index'" class="btn btn-default">Hủy</button>
                </div>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
    <!-- /.box -->
</section><!-- /.content -->

@stop