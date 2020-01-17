<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aoclb_products=DB::table('products')->where('category_id','=',8)->get();
        $aodoituyen_products=DB::table('products')->where('category_id','=',9)->get();
        $aologo_products=DB::table('products')->where('category_id','=',10)->get();
        return view('frontend.home.index',compact('aoclb_products','aodoituyen_products','aologo_products'));
    }
}
