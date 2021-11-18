<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shopList()
    {
       $products = Product::all();

       return view('pet-shop/shop-page', [
           'products' => $products,
       ]);
    }
}
