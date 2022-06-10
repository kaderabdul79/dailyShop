<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activeCategory = Category::where('publication_status','=','1')->count();
        $activeBrand = Brand::where('publication_status','=','1')->count();
        $activeProduct = Product::where('publication_status','=','1')->count();
        return view('backend.home.home',[
            'activeProduct'     =>  $activeProduct,
            'activeBrand'       =>  $activeBrand,
            'activeCategory'  =>    $activeCategory
        ]);
    }
}
