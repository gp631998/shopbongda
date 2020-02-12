<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public  function gioithieu(){
        return view('frontend.gioithieu');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        dd(Auth::user()->type);

        $aoclb_products = Product::where('category_id', 8)->get();
        $aodoituyen_products = Product::where('category_id',9)->get();
        $aologo_products = Product::where('category_id', 10)->get();
        return view('frontend.home.index', compact('aoclb_products', 'aodoituyen_products', 'aologo_products'));
    }
}
