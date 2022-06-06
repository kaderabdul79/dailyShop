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
    
    public function editProduct($id){
        $product = Product::where('id',$id)->first();
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.product.edit-product',[
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    public function updateProduct(Request $request){
        // return $request;
        // $image = $request->file('product_image');
        // $product = Product::find($request->product_id);
        // $product = new Product();

        // if($image){
        //     unlink($product->product_image);
        //     $imageName = $image->getClientOriginalName();
        //     $directory = './product-image/';
        //     $image->move($directory,$imageName);
        //     $imageUrl = $directory.$imageName;

        //     // for multiple images upload in different table
        //     $files = $request->file('file');

        //     if($files){
        //         return "difficult";
                // $subImage = new SubImage();
                // unlink($subImage->subImage_image);
                // foreach ($files as $file) {
                // $newImageName = $file->getClientOriginalName();
                // $newDirectory = './product-sub-images/';
                // $file->move($newDirectory, $newImageName);
                // $imagePath = $newDirectory.$newImageName;

                
                // $subImage->product_id = $product->id;
                // $subImage->sub_image = $imagePath;
                // $subImage->save ();
        //     }
        // }else{
        //     $imageUrl = $product->brand_image;
        // }

        // $product->product_name              = $request->product_name;
        // $product->product_code              = $request->product_code;
        // $product->product_price             = $request->product_price;
        // $product->product_quantity          = $request->product_quantity;
        // $product->product_short_description = $request->product_short_description;
        // $product->product_long_description  = $request->product_long_description;
        // $product->brand_id                  = $request->brand_id;
        // $product->category_id               = $request->category_id;
        // $product->product_image             = $imageUrl;
        // $product->publication_status        = $request->publication_status;
        // $product->save();
        return redirect()->back()->with("message","Product Updated Sucessfully");
    }

    public function manageProduct(){
        $products = Product::orderBy('id','DESC')->take(10)->select('id','category_id','brand_id','product_image','product_name','product_code','product_price','product_quantity','publication_status')->get();
        return view('backend.product.manage-product',[
            'products' => $products
        ]);
    }

    public function viewProduct($id){
        $product = Product::find($id);
        return view('backend.product.view-product',[
            'product' => $product
        ]);
    }

    public function deleteProduct($id){
        // $product_id = $id;
        // $product = Product::find($product_id);
        // $a = $product->product_id;
        // $subImage = SubImage::find($a);
        
        $product = Product::find($id);
        $sub_image = SubImage::find($product->id);
        return $sub_image;
        // unlink($brand->brand_image);
        // $product->delete();
        // return redirect()->route('manage-brand');
        
        // return redirect()->route('manage-product');
    }
}
