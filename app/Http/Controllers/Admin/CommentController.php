<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function getDeleteComment($id){
        $comments=Comment::find($id);
        $comments->delete();
        return redirect(route('list-comment'));
    }
    public function getComment(Request $request){
        $comments=Comment::all();
        return view('admin.comment.list_comment',compact('comments'));
    }
}
