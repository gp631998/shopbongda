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
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li><a href="{{route('logout')}}"><i class="fa fa-check-square-o"></i>Checkout</a></li>
                            <li><a href="{{route('register')}}"><i class="fa fa-pencil-square-o"></i>Register</a></li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                            @endguest
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
                        <a href="{{route('home')}}"><img src="{{asset('assets/frontend/img/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <div class="search-chart-list">
                        <div class="catagori-menu">
                            <ul class="list-inline">
                                <li><i class="fa fa-search"></i></li>
                            </ul>
                        </div>
                        <div class="header-search">
                            <form  action="search">
                                <input type="text" name="key" placeholder="Nhập sản phẩm cần tìm ..."/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
