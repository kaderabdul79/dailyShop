<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function showHomePage(){
        return view('frontend.home');
    }
    
    public function showShopPage(){
        return view('frontend.shop.shop');
    }
    
    public function showProductDetails(){
        return view('frontend.product.product-details');
    }

    public function showCart(){
        return view('frontend.cart.cart');
    }
    
}
