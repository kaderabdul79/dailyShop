<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function showCart(){
        $cartCollection = Cart::content();
        // return  $cartCollection;
        $products = Product::all();
        $categories = Category::where('publication_status',1)->get();
        return view('frontend.cart.cart',[
            'categories' => $categories,
            'products' => $products,
            'cartCollection' => $cartCollection
        ]);
    }

    public function addToCart(Request $request){
        $product = Product::find($request->product_id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => $request->qty,
            'weight' => 1, 
            'options' => [
                'image' => $product->product_image,
                'code' => $product->product_code,
            ],
        ]);
        return redirect()->route('cart.show-cart');
    }

    public function updateToCart(Request $request,$rowId){
        Cart::update($rowId, ['qty' => $request->qty]);
        return redirect()->back();
    }

    public function removeToCart($rowId){
       Cart::remove($rowId);
       return redirect()->back();
    }

}
