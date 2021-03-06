<!-- HEADER AREA -->
<div class="header-area">
    <div class="header-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="header-top-left">
                        <div class="header-top-menu">
                            {{--                            <ul class="list-inline">--}}
                            {{--                                <li><img src="assets/frontend/img/flag.png" alt="flag"></li>--}}
                            {{--                                <li class="dropdown"><a href="#" data-toggle="dropdown">VietNam</a>--}}
                            {{--                                    <ul class="dropdown-menu">--}}
                            {{--                                        <li><a href="#">English</a></li>--}}
                            {{--                                        <li><a href="#">China</a></li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </li>--}}
                            {{--                                <li class="dropdown"><a href="#" data-toggle="dropdown">USD</a>--}}
                            {{--                                    <ul class="dropdown-menu usd-dropdown">--}}
                            {{--                                        <li><a href="#">VNĐ</a></li>--}}
                            {{--                                        <li><a href="#">USD</a></li>--}}
                            {{--                                        <li><a href="#">GBP</a></li>--}}
                            {{--                                        <li><a href="#">EUR</a></li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                        </div>
                        <p>Welcome visitor!</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-right">
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-user"></i>My Account</a></li>
                            <li><a href="checkout.html"><i class="fas fa-check-square"></i>Checkout</a></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Login</a></li>
                            <li><a href="#"><i class="fa fa-pencil-square-o"></i>Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="header-logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets/frontend/img/logoaobongda.png')}}"
                                                         alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="search-chart-list">
                        <div class="header-search">
                            <form action="search">
                                <input type="text" name="key" placeholder="My Search"/>
                                <button type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="cart">
                        <a href="{{route('gio-hang')}}"
                           style="display: inline-block;color: white;line-height: 30px;padding: 5px 25px;vertical-align: middle;background: #ff0300;font-size: 20px;border-radius: 5px">
                            <span> Giỏ hàng</span>
                        </a>
                        {{csrf_field()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

