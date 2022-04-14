<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\EditCategoryRequest;

class CategoryController extends Controller
{
    public function listcategory()
    {
        $category=Category::paginate(10);
        return view('admin.pages.category.listcategory',compact("category"));
    }
    public function getAddCategory()
    {
        return view('listcategory');
    }
    //Hàm store để thêm dữ liệu
    public function postAddCategory(StoreCategoryRequest $request)
    {
       //dd($request);
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->description = $request->description;
        $category->save();
        return redirect()->intended('admin/managecategory');

    }
    public function getEditcategory($category_id)
    {
        $data = Category::find($category_id);
        return view('admin.pages.category.editcategory',['data'=>$data]);
    }
    public function postEditcategory(EditCategoryRequest $request,$category_id)
    {
        $category = Category::find($category_id);
        $category->category_name = $request->category_name;
        $category->description = $request->description;
        $category->save();
        return redirect()->intended('admin/managecategory');
    }
    public function delete($category_id)
    {
        $category = Category::find($category_id);
        $category->delete();
        return redirect()->intended('admin/managecategory');
    }

}