<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart(){
        return view('frontend.cart.cart');
    }

    // public function addToCart(){
    //     return "ef";
    // }

}
