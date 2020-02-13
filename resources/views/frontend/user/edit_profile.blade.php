@extends('frontend.master')
@section('content')
    <div class="view-edit-product">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th><input readonly type="text" class="form-control" value="{{Auth::user()->name}}"
                               name="name"></th>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <th>
                        <input type="text" class="form-control" value="{{Auth::user()->full_name}}" name="full_name">
                    </th>
                </tr>
                <tr>
                    <th>Email</th>
                    <th>
                        <input type="email" class="form-control" value="{{Auth::user()->email}}" name="email">
                    </th>
                </tr>
                <tr>
                    <th>Phone</th>
                    <th>
                        <input type="text" class="form-control" value="{{Auth::user()->phone}}" name="phone">
                    </th>
                </tr>
                <tr>
                    <th>Note</th>
                    <th>
                        <input type="note" class="form-control" value="{{Auth::user()->note}}" name="note">
                    </th>
                </tr>
                <tr>
                    <th>New Password</th>
                    <th>
                        <input type="password" class="form-control"  name="password">
                    </th>
                </tr>
                <tr>
                    <th>Password Confirm</th>
                    <th>
                        <input type="password" class="form-control"  name="password_confirmation">
                    </th>
                </tr>

                <tr>
                    <td colspan="3">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{route('profile',Auth::user()->id)}}" class="btn btn-primary">Cancel</a>
                        </div>
                    </td>
                </tr>
            </table>
            {{csrf_field()}}
        </form>
        <script type="text/javascript">
            //CKEDITOR.replace( 'full_description' );
        </script>
    </div>
@endsection
