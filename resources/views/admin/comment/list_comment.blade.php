@extends('admin.layouts.a')
@section('content')
    <div class="view-list-order">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>STT</th>
                <th>User Name</th>
                <th>Product Id</th>
                <th>Comment</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$comment->user->name}}</td>
                    <td>{{$comment->product->product_name}}</td>
                    <td>{!! $comment->body !!}</td>
                    <td>
                        <a onclick="return confirm('bạn có muốn xóa không?')" href="{{route('xoa-comment',$comment->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
