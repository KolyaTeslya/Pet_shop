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
        $randProducts = Product::query()->inRandomOrder()->limit(4)->get();

        $product =Product::query()->select()->inRandomOrder()->limit(1)->get();

        return view('pet-shop/index', ['randProducts' => $randProducts, 'product' => $product]);
    }
    public function productDetails(Request $request)
    {
        $product = Product::query()->where(['id' => $request->id])->get();

        return view('pet-shop/product-details', ['product' => $product]);
    }

}
