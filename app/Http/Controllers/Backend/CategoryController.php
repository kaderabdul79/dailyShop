<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CategoryStoreRequest;

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

    public function editCategory($id){
        $category = Category::where('id',$id)->first();
        return view('backend.category..edit-category',['category' => $category]);
    }

    public function updateCategory(Request $request){
        $image = $request->file('category_image');
        $category = Category::find($request->category_id);

        if($image){
            unlink($category->category_image);
            $imageName = $image->getClientOriginalName();
            $directory = './category-image/';
            $image->move($directory,$imageName);
            $imageUrl = $directory.$imageName;
        }else{
            $imageUrl = $category->category_image;
        }
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_image = $imageUrl;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect()->route('manage-category');
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        // unlink($category->category_image);
        $category->delete();
        return redirect()->route('manage-category');
    }

    // public function getCategoryName($category_name){
    //     $categoryName = Category::find($category_name)->$category_name;

    //     $result = [
    //         'category_name' => $categoryName
    //     ];
    //     // from a funtion just return can 1 statement
    //     // return json_encode($categoryName);
    //     // return json_encode($brandName);
    //     return json_encode($result);
    // }

    
}
