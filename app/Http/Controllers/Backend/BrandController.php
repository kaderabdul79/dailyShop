<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('backend.brand.add-brand');
    }

    // public function newBrand(Request $request){
    //     $brand = new Brand();

    //     $image = $request->file('brand_image');
    //     $imageName = $image->getClientOriginalName();
    //     $directory = './brand-image/';
    //     $image->move($directory,$imageName);
    //     $imageUrl = $directory.$imageName;

    //     $brand->brand_name = $request->brand_name;
    //     $brand->brand_description = $request->brand_description;
    //     $brand->brand_image = $imageUrl;
    //     $brand->publication_status = $request->publication_status;

    //     $brand->save();
        
    //     return redirect()->back()->with("message","brand Created Sucessfully");
    // }

    // public function manageBrand(){
    //     $brands = Brand::all();
    //     return view('backend.brand.manage-brand',['brands' => $brands]);
    // }
}
