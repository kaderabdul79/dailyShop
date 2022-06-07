<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendHomeController extends Controller
{
    public function showHomePage(){
        return view('frontend.home');
    }
    
    public function showShopPage(){
        $products = Product::where('publication_status',1)->get();
        return view('frontend.shop.shop',[
            'products' => $products
        ]);
    }
    
    public function showProductDetails(){
        return view('frontend.product.product-details');
    }

    public function showCart(){
        return view('frontend.cart.cart');
    }
    
}
