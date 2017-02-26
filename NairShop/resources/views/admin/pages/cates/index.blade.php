@extends('admin.admin_layout')

@section('admin_title','Danh sách danh mục')
@section('admin_content')
@section('styles')
{!! Html::style("/css/modal.css")!!}
@stop
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Danh mục
    </h1>
    <ol class="breadcrumb">
        <li><a href="/myadmin/home"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="myadmin/cates">Danh mục</a></li>
        <li class="active">Danh sách</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Danh sách danh mục</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-6">
                        {!! Form::open(['route'=>'cates.index','method'=>'get','class'=>'input-group'])!!}
                        <input type="text" name="search" value="{{Session::get('currfilter')}}" class="form-control" placeholder="Từ khóa">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Tìm kiếm</button>
                        </span>
                        {!! Form::close()!!}
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <a href="{{route('cates.create')}}" class="btn btn-sm btn-success btn-bottom-spacing">Thêm mới</a>
                </div>
            </div>
            <br />
            @include('admin.partials._modal')
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered" data-form="deleteForm">
                        <tr>
                            <th style="width: 20%">Tên danh mục</th>
                            <th style="width: 10%">Danh mục cha</th>
                            <th style="width: 32%">Mô tả</th>
                            <th style="width: 20%">Ngày tạo</th>
                            <th style="width: 15%">Thao tác</th>
                        </tr>
                        @foreach($cates as $cate)
                        <tr>
                            <td class="name">{{$cate->name}}</td>
                            <td>{{$cate->parent_id}}</td>
                            <td>
                                {{$cate->description}}
                            </td>
                            <td>
                                <span>
                                   {{ date('d/m/Y',strtotime($cate->created_at)) }}
                                </span>
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary cus-title" href="{{route('cates.edit',$cate->id)}}">
                                    Sửa
                                </a>
                                
                                @section('controller',$cate->name)
                                {!! Form::model($cate,['route'=>['cates.destroy',$cate->id],'method'=>'delete',
                                    'class' =>'form-inline form-delete'])!!}
                                    {!! Form::hidden('id', $cate->id) !!}
                                    {!! Form::submit('Xóa', ['class' => 'btn btn-xs btn-danger cus-title delete', 'name' => 'delete_modal']) !!}
                                {!! Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>
                    <ul class="paginationn">
                        {!! $cates->links(); !!}
                    </ul>
                </div>
            </div>
        </div><!-- /.box-body -->
        
    </div><!-- /.box -->
</section><!-- /.content -->

@stop
@section('scripts')
{!! Html::script("/js/deleteConfirm.js")!!}
@stop

