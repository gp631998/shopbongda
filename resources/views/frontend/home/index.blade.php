@extends('frontend.master')
@section('content')
    <!-- SLIDESHOW -->
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="w3-content w3-display-container" style=".mySlides {display:none}">
        <img class="mySlides" src="upload\products\sl1.jpg" style="width:100%">
        <img class="mySlides" src="upload\products\sl2.jpg" style="width:100%">
        <img class="mySlides" src="upload\products\sl3.jpg" style="width:100%">
    </div>


    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds

        }
        // var myIndex1 = 0;
        // carousel1();
        // function carousel1() {
        //     var i;
        //     var x = document.getElementsByClassName("primary-img");
        //     for (i = 0; i < x.length; i++) {
        //         x[i].style.display = "none";
        //     }
        //     myIndex1++;
        //     if (myIndex1> x.length) {
        //         myIndex1 = 1
        //     }
        //     x[myIndex1 - 1].style.display = "block";
        //     setTimeout(carousel1, 20); // Change image every 2 seconds
        //
        // }

    </script>


    <!-- ENDSLIDESHOW -->
    <!-- Product AREA -->
    <div class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="product-items-area">
                        <div class="product-items">
                            <h2 class="product-header">ÁO CÂU LẠC BỘ</h2>
                            <div class="row">
                                <div id="product-slider" class="owl-carousel">
                                    @foreach($aoclb_products as $product)
                                        <div class="col-md-4">
                                            <div class="single-product">
                                                <div class="single-product-img">
                                                    <a href="{{route('showDetail',$product->id)}}"><img class="primary-img" src="{{ asset('/'.$product->product_image_intro)}}"></a>
{{--                                                    <a href="#">--}}
{{--                                                        <img class="primary-img"--}}
{{--                                                             src="{{url('/')}}/{{$product->product_image_intro}}"--}}
{{--                                                             alt="product">--}}
{{--                                                    </a>--}}
                                                </div>
                                                <div class="single-product-content">
                                                    <div class="product-content-left">
                                                        <h2><a style="font-weight: bold"
                                                               href="{{route('product-detail',$product->id)}}">MUA
                                                                HÀNG</a></h2>
                                                        <p>{{$product->product_name}}</p>
                                                    </div>
                                                    <div style="margin-top: 18px" class="product-content-right pull-right">
                                                        <p>{{$product->price}} đ</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-items">
                        <h2 class="product-header">ÁO ĐỘI TUYỂN</h2>
                        <div class="row">
                            <div id="product-slider-women" class="owl-carousel">
                                @foreach($aodoituyen_products as $product)
                                    <div class="col-md-4">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="{{route('showDetail',$product->id)}}"><img class="primary-img" src="{{ asset('/'.$product->product_image_intro)}}"></a>
{{--                                                <a href="#">--}}
{{--                                                    <img class="primary-img"--}}
{{--                                                         src="{{url('/')}}/{{$product->product_image_intro}}"--}}
{{--                                                         alt="product">--}}
{{--                                                </a>--}}
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-left">
                                                    <h2><a href="{{route('product-detail',$product->id)}}">MUA HÀNG</a>
                                                    </h2>
                                                    <p>{{$product->product_name}}</p>
                                                </div>
                                                <div style="margin-top: 18px" class="product-content-right pull-right">
                                                    <p>{{$product->price}} đ</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrivals-area single-add">
                    <a href="#"> <img style="height: 100px" src="assets/frontend/img/banner/banner.jpg"
                                      alt="arrivals"> </a>
                </div>
                <div class="product-items">
                    <h2 class="product-header">ÁO LOGO</h2>
                    <div class="row">
                        <div id="product-slider-women" class="owl-carousel">
                            @foreach($aologo_products as $product)
                                <div class="col-md-4">
                                    <div class="single-product">
                                        <div class="single-product-img">
                                            <a href="{{route('showDetail',$product->id)}}"><img class="primary-img" src="{{ asset('/'.$product->product_image_intro)}}"></a>
{{--                                            <a href="#">--}}
{{--                                                <img class="primary-img"--}}
{{--                                                     src="{{url('/')}}/{{$product->product_image_intro}}" alt="product">--}}
{{--                                            </a>--}}
                                        </div>
                                        <div class="single-product-content">
                                            <div class="product-content-left">
                                                <h2><a href="{{route('product-detail',$product->id)}}">MUA HÀNG</a></h2>
                                                <p>{{$product->product_name}}</p>
                                            </div>
                                            <div style="margin-top: 18px" class="product-content-right pull-right">
                                                <p>{{$product->price}} đ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
