@extends('frontend.master')
@section('content')
    <!-- Product Item AREA -->
    <div class="product-item-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="product-item-categori">
                        <div class="product-type">
                            <h2>List Product</h2>
                            <ul>
                                @foreach($list_sub_category as $category)
                                    <li class="list-group-item"><a
                                            href="{{route('danh-muc',$category->id)}}">{{$category->category_name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <div class="product-item-list">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="product-item-heading">
                                    <div class="item-heading-title">
                                        <h2>ÁO BÓNG ĐÁ</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item-area">
                                    <div class="single-item">
                                        <div class="product-item-img">
                                            <a href="#">
                                                <img class="clb-image-intro"
                                                     src="{{url('/')}}/{{$product->product_image_intro}}">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">{{$product->product_name}}</a></h2>
                                            <h3>{{$product->price}} đ</h3>
                                        </div>
                                    </div>
                                    <div class="item-action-button fix">
                                        <a href="{{route('product-detail',$product->id)}}"><i class="fas fa-search-plus"></i> Mua Hàng</a>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="shop-pagination floatright">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
