<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\EditCartRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class CartController extends Controller
{
    public function showcart()
    {
        $cart=Cart::paginate(10);
        
        $products = DB::table('cart')
        ->join('product','cart.product_id','=','product.product_id')
        ->join('users','users.user_id','=','cart.user_id')
        ->select('product.*','cart.cart_id','users.username')->where('users.user_id',Auth()->user()->user_id)->get();
        
        return view('user.pages.cart',compact("cart",'products'));
    }

    public function Addtocart(Request $req){
        $cart = new Cart;
        $cart->user_id=Auth()->user()->user_id;
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('user/cart');
    }
    public function deleteCategory($cart_id)
    {
        $cart = Category::find($cart_id);
        $cart->delete();
        return redirect()->intended('user/cart');
    }
    
    public function deleteCart($cart_id) {
        $data = Cart::find($cart_id);
        // dd($data);
        $data->delete();
         return redirect('user/cart');
    }
}
