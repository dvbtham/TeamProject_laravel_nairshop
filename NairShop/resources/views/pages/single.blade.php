@extends('layout')

@section('title','Giới thiệu')
@section('content')
<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href="/san-pham">Sản phẩm</a></li>
                    <li class="active">{{$prod->name}}</li>
                </ol>
            </div>
        </div>
	<div class="container">
		<div class="showcase-grid">
            <div class="container">
                    <div class="showcase-last">
                        <h3>Giới thiệu</h3>
                        <ul>
                            <li>Tên sản phẩm: {{$prod->name}}</li> 
                            <li>Ảnh: <img src="{{asset('images/'.$prod->image)}}" width="300" height="200" /></li>
                            <li>Giá bán: ${{number_format($prod->price,0)}}</li>
                            <li><p>Mô tả: <br/>{{$prod->intro}}</p></li>
                        </ul>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
        </div>
	</div>
@stop