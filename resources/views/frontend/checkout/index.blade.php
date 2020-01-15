@extends('frontend.master')
@section('content')
    <!-- Checkout khach hang -->
    <div class="checkout-area">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <div class="billing-address">
                            <div class="checkout-head">
                                <h2>HÓA ĐƠN</h2>
                                <p>Vui lòng điền đầy đủ thông tin khách hàng</p>
                            </div>
                            <div class="checkout-form">
                                <form action="{{route('thanh-toan')}}" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label  class="control-label col-md-3">
                                            First Name <sup>*</sup>
                                        </label>
                                        <div class="col-md-9">
                                            <input name="first_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">
                                            Last Name <sup>*</sup>
                                        </label>
                                        <div class="col-md-9">
                                            <input name="last_name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">
                                            Address <sup>*</sup>
                                        </label>
                                        <div class="col-md-9">
                                            <input name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">
                                            E-mail Address <sup>*</sup>
                                        </label>
                                        <div class="col-md-9">
                                            <input name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">
                                            Phone <sup>*</sup>
                                        </label>
                                        <div class="col-md-9">
                                            <input name="phone_number" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button href="{{route('login')}}" style="margin: 10px"
                                                class="btn btn-primary pull-right">
                                            ĐĂNG NHẬP
                                        </button>
                                        <button style="margin: 10px" class="btn btn-primary pull-right">
                                            THANH TOÁN
                                        </button>
                                    </div>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="review-order">
                            <div class="checkout-head">
                                <h2>XEM LẠI HÓA ĐƠN</h2>
                            </div>
                            {{--                        <div class="single-review">--}}
                            {{--                            <div class="single-review-img">--}}
                            {{--                                <a href="#"><img src="img/checkout.jpg" alt="review"></a>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="single-review-content fix">--}}
                            {{--                                <h2><a href="#">Lorem ipsum dolor sit</a></h2>--}}
                            {{--                                <p><span>Color :</span> Verdigris Red</p>--}}
                            {{--                                <p><span>Size :</span> L</p>--}}
                            {{--                                <h3>$150.0</h3>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="single-review">--}}
                            {{--                            <div class="single-review-img">--}}
                            {{--                                <a href="#"><img src="img/checkout.jpg" alt="review"></a>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="single-review-content fix">--}}
                            {{--                                <h2><a href="#">Lorem ipsum dolor sit</a></h2>--}}
                            {{--                                <p><span>Color :</span> Verdigris Red</p>--}}
                            {{--                                <p><span>Size :</span> L</p>--}}
                            {{--                                <h3>$150.0</h3>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="single-review">--}}
                            {{--                            <div class="single-review-img">--}}
                            {{--                                <a href="#"><img src="img/checkout.jpg" alt="review"></a>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="single-review-content fix">--}}
                            {{--                                <h2><a href="#">Lorem ipsum dolor sit</a></h2>--}}
                            {{--                                <p><span>Color :</span> Verdigris Red</p>--}}
                            {{--                                <p><span>Size :</span> L</p>--}}
                            {{--                                <h3>$150.0</h3>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="subtotal-area">--}}
                            {{--                            <div class="subtotal-content fix">--}}
                            {{--                                <h2 class="floatleft">Subtotal</h2>--}}
                            {{--                                <h2 class="floatright">$450</h2>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="subtotal-content fix">--}}
                            {{--                                <h2 class="floatleft">Shipping & Handling </h2>--}}
                            {{--                                <h2 class="floatright">$15</h2>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="subtotal-content fix">--}}
                            {{--                                <h2 class="floatleft">Grand Total</h2>--}}
                            {{--                                <h2 class="floatright">$465</h2>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
