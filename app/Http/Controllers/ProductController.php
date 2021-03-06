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
    public function ProductDetail($product_id){
        $data = Product::find($product_id);
        $category=Category::all();
        return view('admin.pages.product.product-details',compact('data','category'));
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
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $path = public_path('/img/');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        $product->product_image = $filename;
        $product->product_des = $request->product_des;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->intended('admin/manageproduct');

    }
    public function getEditProduct($product_id)
    {
        $data = Product::find($product_id);
        $category=Category::all();
        return view('admin.pages.product.editproduct',compact('data','category'));
    }
    public function postEditProduct(EditProductRequest $request,$product_id)
    {
        $product = Product::find($product_id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $path = public_path('/img/');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        $product->product_image = $filename;
        $product->product_des = $request->product_des;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->intended('admin/manageproduct');
    }
    public function deleteProduct($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        return redirect()->intended('admin/manageproduct');
    }
}
