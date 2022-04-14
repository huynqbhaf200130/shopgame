<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\EditProductRequest;

class ProductController extends Controller
{
    public function ProductDetail(){
        return view('admin.pages.product.product-details');
    }


    public function listproduct(){
        $product=Product::all();
        $category=Category::all();
        return view('admin.pages.product.listproduct',compact('product','category'));
    }
    
    public function getAddProduct()
    {
        return view('listproduct');
    }
    //Hàm store để thêm dữ liệu
    public function postAddProduct(StoreProductRequest $request)
    {
       //dd($request);
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_image = $request->product_image;
        $product->product_des = $request->product_des;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->intended('admin/manageproduct');

    }
    public function getEditProduct($category_id)
    {
        $data = Product::find($product_id);
        return view('admin.pages.product.listproduct',['data'=>$data]);
    }
    public function postEditProduct(EditProductRequest $request,$category_id)
    {
        $category = Category::find($product_id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_image = $request->product_image;
        $product->product_des = $request->product_des;
        $product->category_id = $request->category_id;
        $category->save();
        return redirect()->intended('product/listproduct');
    }
    public function delete($category_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        return redirect()->intended('admin/manageproduct');
    }
}
