<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    public function getDataFoodByKeyWord($keyword){
        $data=DB::table('products')->where('product_name','=',$keyword)->get();
        return $data;
    }
}
