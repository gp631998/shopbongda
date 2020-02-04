@extends('frontend.master')
@section('content')
    <br>
    <div class="product-item-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="product-item-tab">
                                <!-- Tab panes -->
                                <div class="single-tab-content">
                                    <div class="tab-content">
                                        <div role="presentation" class="active"><a href="#img-one" role="tab" data-toggle="tab"><img style="width: 50%" class="product-image-intro" src="{{ asset('/'.$product->product_image_intro)}}"></a></div>
                                    </div>
                                </div>
                                <!-- Nav tabs -->
                                <div class="single-tab-img">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"><img style="width: 50%" src="{{ asset('/'.$detailGall->image)}}" alt="tab-img"></li>
                                        <li role="presentation" class="tab-last-li"><img style="width: 50%"  src="{{ asset('/'.$detailGall->image1)}}" alt="tab-img"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <form action="{{route('add-to-cart',$product->id)}}" method="post">
                                <div class="product-tab-content">
                                    <div class="product-tab-header">
                                        <h3>{{$product->product_name}}</h3>
                                        <div class="prices">
                                            <span class="prices">{{$product->price}}</span>
                                            <span class="currency"> đ</span>
                                        </div>
                                    </div>
                                    <div class="available-option">
                                        <h2>Available Options:</h2>
                                        <p class="quality">Số lượng</p>
                                        <select name="quality">
                                            @for($i=1;$i<=10;$i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
{{--                                        <div class="product-quantity">--}}
{{--                                            <input name="quanlity" class="qty" type="number" value="{{ $product['qty'] }}" min="1">--}}
{{--                                        </div>--}}
                                        <div class="size-option fix">
                                            <p>Size:</p>
                                            <select>
                                                <option value="Choose an option">Choose an option</option>
                                                <option value="Lg">Lg</option>
                                                <option value="M">M</option>
                                                <option value="S">S</option>
                                                <option value="S">S</option>
                                                <option value="S">S</option>
                                                <option value="Xs">Xs</option>
                                            </select>
                                        </div>
                                        <button style="margin-top: 10px" type="submit" class="btn btn-primary"><i
                                                class="fas fa-cart-plus"></i> Thêm hànga
                                        </button>
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="description-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#description" role="tab" data-toggle="tab">Description</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        {{$product->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

