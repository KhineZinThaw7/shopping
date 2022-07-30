<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('home', compact('products', 'categories'));
    }

    public function productDetail($id)
    {
        $product = Product::findOrFail($id);
        
        return view('product-detail', compact('product'));
    }
}
