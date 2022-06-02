<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('backend.category.add-category');
    }

    public function newCategory(Request $request){
        $category = new Category();

        $image = $request->file('category_image');
        $imageName = $image->getClientOriginalName();
        $directory = './category-image/';
        $image->move($directory,$imageName);
        $imageUrl = $directory.$imageName;

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_image = $imageUrl;
        $category->publication_status = $request->publication_status;

        $category->save();
        
        return redirect()->back()->with("message","Category Created Sucessfully");
    }

    public function manageCategory(){
        $categories = Category::all();
        return view('backend.category.manage-category',['categories' => $categories]);
    }

    
}
