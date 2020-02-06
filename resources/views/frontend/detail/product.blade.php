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
                                <!-- Nav tabs -->
                                <div class="single-tab-img">
                                    <ul class="nav nav-tabs" role="tablist">

                                        <li role="presentation" class="active"><a href="#img-one" role="tab" data-toggle="tab"><img style="width: 100%" class="product-image-intro" src="{{ asset('/'.$product->product_image_intro)}}"></a></li><br>
                                        <li role="presentation"><a href="#img-two" role="tab" data-toggle="tab"><img style="width: 30%" src="{{ asset('/'.$detailGall->image)}}" alt="tab-img"></a></li>
                                        <li role="presentation" class="tab-last-li"><a href="#img-three" role="tab" data-toggle="tab"><img style="width: 30%"  src="{{ asset('/'.$detailGall->image1)}}" alt="tab-img"></a></li>
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
                                                class="fas fa-cart-plus"></i> Thêm hàng
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
                                <div style="color: #7dff38" class="well">
                                    @if(session('thongbao'))
                                        {{session('thongbao')}}
                                    @endif
                                </div>
                                <div class="well" id="txt ">
                                    {{--                                    @if(session('thongbao'))--}}
                                    {{--                                        {{session('thongbao')}}--}}
                                    {{--                                    @endif--}}
                                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span> </h4>
                                    <form action="" method="post" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" id="body" name="body"></textarea>
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Gửi</button>
                                    </form>
                                    {{--                                    @foreach($comment as $item)--}}
                                    {{--                                        	    //show comment--}}
                                    {{--                                        	    //or--}}
                                    {{--                                        	    includes('childrenComments',['childrenComments'=>$item->childrenComments])--}}
                                    {{--                                        	@foreach--}}

                                </div>
                                <hr>
                                <div class="tab-content">
                                    <H4>Các bình luận</H4>
                                    <div role="tabpanel" class="form-inline" id="description">
                                        <ul>
                                            @foreach($comments as $comment)
                                                <li> <b style="color: red;font-size: 20px">{{$comment->user->name}}</b> : {!! $comment->body !!}</li>
                                            @endforeach
                                        </ul>
                                    </div>


                                </div>
                                {{--                                @foreach($comment->$item)--}}
                                {{--                                    <tr class="odd gradex" align="center">--}}

                                {{--                                        <td>{{$comment->body}}</td>--}}

                                {{--                                    </tr>--}}
                                {{--                                    @endforeach--}}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        CKEDITOR.replace( 'txt' );
    </script>
    <br>
@endsection
