<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function addProduct(){
        $categories = Category::all();
        $brands     = Brand::all();
        return view('backend.product.add-product',[
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    public function newProduct(Request $request){ 
        $product = new Product();

        $image      = $request->file('product_image');
        $imageName  = $image->getClientOriginalName();
        $directory  = './product-image/';
        $image->move($directory,$imageName);
        $imageUrl   = $directory.$imageName;

        $product->product_name              = $request->product_name;
        $product->product_code              = $request->product_code;
        $product->product_price             = $request->product_price;
        $product->product_quantity          = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description  = $request->product_long_description;
        $product->brand_id                  = $request->brand_id;
        $product->category_id               = $request->category_id;
        $product->product_image             = $imageUrl;
        $product->publication_status        = $request->publication_status;
        // return $product;
        $product->save();

        // for multiple images upload in different table
        $files = $request->file('file');
        foreach ($files as $file) {
            $newImageName = $file->getClientOriginalName();
            $newDirectory = './product-sub-images/';
            $file->move($newDirectory, $newImageName);
            $imagePath = $newDirectory.$newImageName;

            $subImage = new SubImage();
            $subImage->product_id = $product->id;
            $subImage->sub_image = $imagePath;
            $subImage->save ();
        }
        
        return redirect()->back()->with("message","product Created Sucessfully");
    }
    
}
