@extends('admin.admin_layout')

@section('admin_title','Danh sách nhãn hiệu')
@section('admin_content')

    <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Nhãn hiệu
    </h1>
    <ol class="breadcrumb">
        <li><a href="/myadmin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="/brand/index">Nhãn hiệu</a></li>
        <li class="active">Danh sách</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Danh sách nhãn hiệu</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" ng-model="keyword" class="form-control" placeholder="Từ khóa">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Tìm kiếm</button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <button class="btn btn-primary" onclick="window.location.href='/brand/create'">Thêm mới</button>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th style="width: 45%">Tên nhãn hiệu</th>
                            <th style="width: 20%">Ngày tạo</th>
                            <th style="width: 20%">Trạng thái</th>
                            <th style="width: 10%">Thao tác</th>
                        </tr>
                        <tr>
                            <td>fsdf</td>
                            <td>sdfsf</td>
                            <td>
                                sdfsdf
                            </td>
                            <!--class="badge bg-red"-->
                            <td>
                                <span>
                                   sdfsdf
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary cus-title" href="">
                                    <i class="fa fa-pencil" data-toggle="tooltip" title="Chỉnh sửa">
                                    </i>
                                </button>
                                <button class="btn btn-sm btn-warning cus-title">
                                    <i class="fa fa-trash" data-toggle="tooltip" title="Xóa"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div><!-- /.box-body -->
        
    </div><!-- /.box -->
</section><!-- /.content -->

@stop

