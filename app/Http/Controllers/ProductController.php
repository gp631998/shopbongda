<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getDetailProduct($id,Request $request){
        $product=Product::find($id);
        return view('frontend.detail.product',compact('product'));
    }
    public function getProductsById($id,Request $request){
        $products=DB::table('products')->where('category_id','=',$id)->orderBy('sale_price')->get();
        $category=Category::find($id);
        $list_sub_category=Category::query()->where('parent','=',$category->parent)->get();
        return view('frontend.allproduct.list_product',compact('category','products','list_sub_category'));
    }
}
