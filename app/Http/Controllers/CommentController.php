<?php

namespace App\Http\Controllers;

use App\Galleries;
use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $comments = $product->comments;
        $detailGall = Galleries::where('product_id', $id)->first();
        Comment::create([
            'product_id' => $product->id,
            'body' => $request->body,
        ]);
        return view('frontend.detail.product', compact('product', 'detailGall', 'comments'))->with('thongbao', 'Bình luận thành công');
    }
}
