@extends('layout')
@section('title', 'Trang chủ')

@section('content')
@include('partials._slide')
<div class="feel-fall">
    <div class="container">
        <div class="pull-left fal-box">
            <div class=" fall-left">
                <h3>Fall</h3>
                <img src="images/f-l.png" alt="/" class="img-responsive fl-img-wid">
                <p>Inspiration and innovation<br> for every athlete in the world</p>
                <span class="fel-fal-bar"></span>
            </div>
        </div>
        <div class="pull-right fel-box">
            <div class="feel-right">
                <h3>Feel</h3>
                <img src="images/f-r.png" alt="/" class="img-responsive fl-img-wid">
                <p>Inspiration and innovation<br> for every athlete in the world</p>
                <span class="fel-fal-bar2"></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="shop-grid">
    <div class="container">
        @foreach($prods as $prod)
        <div class="col-md-4 grid-stn simpleCart_shelfItem">
         <!-- normal -->
           <div class="ih-item square effect3 bottom_to_top">
            <div class="bottom-2-top">
                <div class="img"><img src="{{asset('images/'.$prod->image)}}"  width="300" height="200" alt="/" class="img-responsive gri-wid"></div>
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
                    
        <div class="sub-news">
            <div class="container">
                <form>
                    <h3>NewsLetter</h3>
                    <input type="text" class="sub-email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                    <a class="btn btn-default subs-btn" href="#" role="button">SUBSCRIBE</a>
                </form>
            </div>
        </div>
        <br/>
        <br/>
@stop