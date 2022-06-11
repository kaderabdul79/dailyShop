<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class FrontendHomeController extends Controller
{
    public function showHomePage(){
        $products = Product::orderBy('id','DESC')->take(4)->get();
        $cartCollection = Cart::content();
        // slider
        $sliders = Slider::where('publication_status',1)->get();
        return view('frontend.home',[
            'products' => $products,
            'cartCollection' => $cartCollection,
            'sliders' => $sliders
        ]);

        
    }
    
    public function showProductDetails($id){
        $product = Product::find($id);
        return view('frontend.product.product-details',[
            'product' => $product
        ]);
    }

    public function showProductPage(){
        $products = Product::where('publication_status',1)->get();
        return view('frontend.shop.shop',[
            'products' => $products
        ]);
    } 

    
    
}
