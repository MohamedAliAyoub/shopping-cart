<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use RealRashid\SweetAlert\Facades\Alert;

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
        $categories = Category::get();
        $brands = Brand::get();
        return view('home' , compact('categories' , 'brands'));
    }
    public function store()
    {
        if ( session('success'))
        {
            toast(session('success'), 'success');
        }
        $categories = Category::get();
        $brands = Brand::get();
        $latestProducts = Product::latest()->take(3)->get();
        return view('store' , compact('latestProducts' , 'categories' , 'brands'));
    }
}
