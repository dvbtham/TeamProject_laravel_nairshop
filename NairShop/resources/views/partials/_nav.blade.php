 <div class="header">
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <a href="/">N-AIR</a>
                </div>
                <div class="login-bars">
                    
                    @if (Auth::guest())
                           <a href="{{ url('/login') }}" class="btn btn-default log-bar">Đăng nhập</a></li>
                           <a href="{{ url('/register') }}" class="btn btn-default log-bar">Đăng ký</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)
                                </div></h3>
                                </a>
                                <p><a href="javascript:;" class="simpleCart_empty">Giỏ hàng trống</a></p>
                                <div class="clearfix"> </div>
                            </div>	
                        </div>
                        <div class="clearfix"></div>
                    </div>
              

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
                                <li class="{{ Request::is('/') ? "active" : ""}}">
                                    <a href="/">Trang chủ</a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                      @foreach($cates as $cate )
                                         <li class="{{ Request::is('danh-muc') ? "active" : ""}}">
                                         <a href="/danh-muc/{{$cate->id}}">{{$cate->name}}</a>
                                         </li>
                                      @endforeach 
                                        
                                    </ul>
                                </li>
                                <li class="{{ Request::is('san-pham') ? "active" : ""}}">
                                    <a href="/san-pham">Sản phẩm</a>
                                </li>
                                <li class="{{ Request::is('about') ? "active" : ""}}">
                                    <a href="/about" >Giới thiệu</a>
                                </li>
                                <li class="{{ Request::is('contact') ? "active" : ""}}">
                                    <a href="/contact">Liên hệ</a>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                    <div class="clearfix"></div>
                </div>
                    <!--/.content-->
                </div>
                <!--header-bottom-->
            </div>
        </div>