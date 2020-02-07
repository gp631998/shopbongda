<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Galleries;
use App\Product;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    //
    public function getDetailProduct($id, Request $request)
    {
        $product = Product::whereId($id)->with(["comments" => function($q){
            $q->whereNull('reply_id');
        }])->first();
        $comments = $product->comments;
        $detailGall = $product->gallery;
        return view('frontend.detail.product', compact('product', 'detailGall', 'comments'));
    }


    public function getProductsById($id, Request $request)
    {
        $products = DB::table('products')->where('category_id', '=', $id)->orderBy('sale_price')->get();
        $category = Category::find($id);
        $list_sub_category = Category::query()->where('parent', '=', $category->parent)->get();
        return view('frontend.allproduct.list_product', compact('category', 'products', 'list_sub_category'));
    }

    public function getSearch(Request $request)
    {
        $search = Product::where('product_name', 'like', '%' . $request->input('key') . '%')->get();

        return view('frontend.search.search', compact('search'));
    }

    public function xoaGalery($id, Request $request)
    {
        $product = Galleries::find($id);
        $product->delete();
        return redirect(route('list-don-hang'));
    }
}
