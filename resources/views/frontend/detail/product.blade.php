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
                                            <span class="prices">{{$product->price}}</span>
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
                                        {{$product->description}}
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
                                                <textarea class="form-control" rows="3" id="body" name="body"></textarea>
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Gửi</button>
                                        </form>


                                    </div>
                                @endif
                                <hr>
                                <div class="tab-content">
                                    <H4>Các bình luận</H4>
                                    <div>
                                        <section class="comment-list">
                                            <!-- First Comment -->
                                            @foreach($comments as $comment)
                                                <article class="row">
                                                    <div style="width: 200px" class="col-md-4 col-sm-4 hidden-xs">
                                                        <figure class="thumbnail">
                                                            <img class="img-responsive"
                                                                 src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png"/>
                                                            <figcaption class="text-center">

                                                                <b style="color: red;font-size: 14px">{{$comment->user->name}}</b>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8">
                                                        <div class="panel panel-default arrow left">
                                                            <div class="panel-body">
                                                                <header class="text-left">
                                                                    <time class="comment-date"><i
                                                                            class="fa fa-clock-o"></i>{{$comment->created_at}}
                                                                    </time>
                                                                </header>

                                                                <div class="comment-post">
                                                                    <b style="color: black;font-size: 13px">{{$comment->body}}</b>

                                                                    <span>{{$comment->getChildren()}}</span>
                                                                </div>
                                                                @csrf

                                                                <button style="float: right" aria-expanded="false"  class="btn btn-outline-danger"
                                                                        data-toggle="collapse" data-target="#boxreply">Trả lời</button>

                                                                <div class="collapse mt-4" id="boxreply">
                                                                    <form action="{{route('reply.comment',['comment_id'=>$comment->id,'product_id'=>$product->id])}}" method="post" role="form">
                                                                        @csrf
                                                                    <div class="card card-body bg-warning">
                                                                        <textarea class="form-control" rows="3" id="body" name="body"></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            @endforeach
                                        </section>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script language="javascript">
        CKEDITOR.replace('txt');
    </script>
    <br>
@endsection
