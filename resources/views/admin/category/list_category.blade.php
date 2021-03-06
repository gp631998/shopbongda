@extends('admin.layouts.a')

@section('content')
    <div class="view-list-category">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Category name</th>
                <th>Parent id</th>
                <th>Image</th>
                <th>Description</th>
                <th><a href="{{route('them-danh-muc')}}" class="btn btn-primary" >Add category</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->parent}}</td>
                    <td><img class="image-category" src="{{url('/')}}/{{$category->image_category}}"></td>
                    <td>{{$category->description}}</td>
                    <th><a href="{{route('sua-danh-muc',$category->id)}}" class="btn btn-primary">Edit</a><a href="{{route('xoa-danh-muc',$category->id)}}" class="btn btn-primary">Delete</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
