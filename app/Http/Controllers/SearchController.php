<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    function search(Request $req) {
       $data = Product::where('product_name','like','%'.$req->input('query').'%')
       ->get();
       return view('user.pages.search',['products'=>$data]);
    }
}