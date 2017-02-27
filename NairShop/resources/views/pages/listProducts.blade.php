@extends('layout')
@section('title', 'Danh sách sản phẩm')

@section('content')

<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    <li class="active">sản phẩm</li>
                </ol>
            </div>
        </div>
<div class="shop-grid">
    <div class="container">
        @foreach($prods as $prod)
        <div class="col-md-4 grid-stn simpleCart_shelfItem">
         <!-- normal -->
           <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
                <div class="img"><img src="{{asset('images/'.$prod->image)}}" width="300" height="200" alt="/" class="img-responsive gri-wid"></div>
                <div class="info">
                    <div class="pull-left styl-hdn">
                        <h3>{{$prod->name}}</h3>
                    </div>
                    <div class="pull-right styl-price">
                        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">${{number_format($prod->price,0)}}</span></a></p>
                    </div>
                    <div class="clearfix"></div>
                </div></div>
            </div>
            <!-- end normal -->
             <div class="quick-view">
                <a href="/san-pham/{{$prod->id}}">Chi tiết</a>
            </div>
        </div>
        @endforeach
        <br/>
        <br/>
        <div class='clearfix'></div>
        <ul class="paginationn">
           {!! $prods->links(); !!}
        </ul>
        <div class='clearfix'></div>
        
@stop