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

                                        <li role="presentation" class="active"><a href="#img-one" role="tab"
                                                                                  data-toggle="tab"><img
                                                    style="width: 100%" class="product-image-intro"
                                                    src="{{ asset('/'.$product->product_image_intro)}}"></a></li>
                                        <br>
                                        <li role="presentation"><a href="#img-two" role="tab" data-toggle="tab"><img
                                                    style="width: 30%" src="{{ asset('/'.$detailGall->image)}}"
                                                    alt="tab-img"></a></li>
                                        <li role="presentation" class="tab-last-li"><a href="#img-three" role="tab"
                                                                                       data-toggle="tab"><img
                                                    style="width: 30%" src="{{ asset('/'.$detailGall->image1)}}"
                                                    alt="tab-img"></a></li>
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
                                            <span class="prices">{{$product->getPrice()}}</span>
                                            <span class="currency"> vnđ</span>
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
                                        {!! $product->description !!}
                                    </div>
                                </div>
                                <div style="color: #7dff38" class="well">
                                    @if(session('thongbao'))
                                        {{session('thongbao')}}
                                    @endif
                                </div>
                                @if(auth()->user())
                                    <div class="well" id="txt ">
                                        {{--                                    @if(session('thongbao'))--}}
                                        {{--                                        {{session('thongbao')}}--}}
                                        {{--                                    @endif--}}
                                        <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                                        <form action="" method="post" role="form">
                                            @csrf
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" id="txt" name="body"></textarea>
                                                <input id="txt" type="hidden" name="product_id"
                                                       value="{{$product->id}}">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Gửi</button>
                                        </form>


                                    </div>
                                @endif
                                <hr>
                                <div class="comment-box-wrapper" style="font-size: 100px ">

                                        <h3>Các bình luận</h3>
                                    <div class="fb-comments" data-href="http://localhost:8000/showDetail/{{$product->id}}" data-width="" data-numposts="10"></div>

{{--                                    @foreach($comments as $comment)--}}

{{--                                        <div class="comment-box">--}}

{{--                                            <img class="commenter-image"--}}
{{--                                                 src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png"/>--}}
{{--                                            <div class="comment-content">--}}
{{--                                                <div class="commenter-head"><span style="font-size: 20px "--}}
{{--                                                                                  class="commenter-name"><a--}}
{{--                                                            href="">{{$comment->user->name}}</a></span> <span--}}
{{--                                                        style="font-size: 20px " class="comment-date"><i--}}
{{--                                                            class="far fa-clock"></i>{{$comment->created_at}}</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="comment-body">--}}
{{--                                                    <span style="font-size: 20px "--}}
{{--                                                          class="comment">{!! $comment->body !!}</span>--}}

{{--                                                </div>--}}
{{--                                                <div class="comment-footer">--}}
{{--                                                    <button style="float: right" aria-expanded="false"--}}
{{--                                                            class="btn btn-outline-danger"--}}
{{--                                                            data-toggle="collapse"--}}
{{--                                                            data-target="#boxreply{{$loop->index}}">Trả lời--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}

{{--                                        </div>--}}

{{--                                        @if($comment->getChildren())--}}
{{--                                            <div class="nested-comments">--}}

{{--                                                <div class="comment-box-wrapper">--}}
{{--                                                    <div class="comment-box">--}}
{{--                                                        <img class="commenter-image"--}}
{{--                                                             src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png"/>--}}
{{--                                                        <div class="comment-content">--}}
{{--                                                            <div class="commenter-head"><span style="font-size: 18px"--}}
{{--                                                                                              class="commenter-name"><a--}}
{{--                                                                        href="">{{$comment->user->name}}</a></span>--}}
{{--                                                                <span style="font-size: 18px" class="comment-date"><i--}}
{{--                                                                        class="far fa-clock"></i>{{$comment->created_at}}</span>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-body">--}}
{{--                                                                <span--}}
{{--                                                                    style="font-size: 18px">{{$comment->getChildren()}}</span>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-footer">--}}

{{--                                                                <div class="collapse mt-4"--}}
{{--                                                                     id="boxreply{{$loop->index}}">--}}
{{--                                                                    <form--}}
{{--                                                                        action="{{route('reply.comment',['comment_id'=>$comment->id,'product_id'=>$product->id])}}"--}}
{{--                                                                        method="post" role="form">--}}
{{--                                                                        @csrf--}}
{{--                                                                        <div class="card card-body bg-warning">--}}
{{--                                                                            <textarea class="form-control" rows="3"--}}
{{--                                                                                      id="body" name="body"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                        <button type="submit" class="btn btn-primary">--}}
{{--                                                                            Gửi--}}
{{--                                                                        </button>--}}
{{--                                                                    </form>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}


{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @else--}}
{{--                                            <div class="nested-comments">--}}
{{--                                                <div class="comment-box-wrapper">--}}
{{--                                                    <div class="comment-box">--}}
{{--                                                        <div class="comment-content" style="background: #fff">--}}
{{--                                                            <div class="comment-footer">--}}
{{--                                                                <div class="collapse mt-4"--}}
{{--                                                                     id="boxreply{{$loop->index}}">--}}
{{--                                                                    <form--}}
{{--                                                                        action="{{route('reply.comment',['comment_id'=>$comment->id,'product_id'=>$product->id])}}"--}}
{{--                                                                        method="post" role="form">--}}
{{--                                                                        @csrf--}}
{{--                                                                        <div class="card card-body bg-warning">--}}
{{--                                                                            <textarea class="form-control" rows="3"--}}
{{--                                                                                      id="body" name="body"></textarea>--}}
{{--                                                                        </div>--}}
{{--                                                                        <button type="submit" class="btn btn-primary">--}}
{{--                                                                            Gửi--}}
{{--                                                                        </button>--}}
{{--                                                                    </form>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}

                                </div>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=232587937746885&autoLogAppEvents=1"></script>

{{--    <script language="javascript">--}}
{{--        CKEDITOR.replace('txt');--}}

{{--    </script>--}}
{{--    <br>--}}
@endsection
