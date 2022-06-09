<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendHomeController extends Controller
{
    public function showHomePage(){
        $products = Product::orderBy('id','DESC')->take(4)->get();
        return view('frontend.home',[
            'products' => $products
        ]);
    }
    
    // public function showProduct(){
    //     $products = Product::where('publication_status',1)->get();
    //     return view('frontend.shop.shop',[
    //         'products' => $products
    //     ]);
    // }
    
    public function showProductDetails($id){
        $product = Product::find($id);
        return view('frontend.product.product-details',[
            'product' => $product
        ]);
    }

    public function showShopPage(){
        $products = Product::where('publication_status',1)->get();
        return view('frontend.shop.shop',[
            'products' => $products
        ]);
    } 

    
    
}
