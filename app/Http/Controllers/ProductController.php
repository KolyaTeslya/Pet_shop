<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shopList()
    {
       $products = Product::query()->limit(3)->offset(1)->get();

       return view('pet-shop/shop-page', [
           'products' => $products,
       ]);
    }

    public function shopIndex()
    {
        $randProducts = Product::query()->inRandomOrder()->limit(3)->get();

        return view('pet-shop/index', ['$randProducts' => $randProducts]);
    }
}
