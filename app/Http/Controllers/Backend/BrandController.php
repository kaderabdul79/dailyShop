<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function addBrand(){
        return view('backend.brand.add-brand');
    }

    public function newBrand(Request $request){
        $brand = new Brand();

        $image = $request->file('brand_image');
        $imageName = $image->getClientOriginalName();
        $directory = './brand-image/';
        $image->move($directory,$imageName);
        $imageUrl = $directory.$imageName;

        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_image = $imageUrl;
        $brand->publication_status = $request->publication_status;

        $brand->save();
        
        return redirect()->back()->with("message","brand Created Sucessfully");
    }

    public function manageBrand(){
        $brands = Brand::all();
        return view('backend.brand.manage-brand',['brands' => $brands]);
    }

    public function editbrand($id){
        $brand = Brand::where('id',$id)->first();
        return view('backend.brand..edit-brand',['brand' => $brand]);
    }

    public function updatebrand(Request $request){
        $image = $request->file('brand_image');
        $brand = Brand::find($request->brand_id);

        if($image){
            unlink($brand->brand_image);
            $imageName = $image->getClientOriginalName();
            $directory = './brand-image/';
            $image->move($directory,$imageName);
            $imageUrl = $directory.$imageName;
        }else{
            $imageUrl = $brand->brand_image;
        }
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_image = $imageUrl;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect()->route('manage-brand');
    }

    public function deletebrand($id){
        $brand = Brand::find($id);
        // unlink($brand->brand_image);
        $brand->delete();
        return redirect()->route('manage-brand');
    }

}
