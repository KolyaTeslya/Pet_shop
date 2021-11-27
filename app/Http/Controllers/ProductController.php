<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function shopList()
    {
       $products = Product::query()->limit(4)->offset(1)->get();

       return view('pet-shop/shop-page', [
           'products' => $products,
       ]);
    }

    public function shopIndex()
    {
        $randProducts = Product::query()->inRandomOrder()->limit(4)->get();

        $product =Product::query()->select()->inRandomOrder()->limit(1)->get();

        $sessionId = Session::getId();

        \Cart::session($sessionId);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        return view('pet-shop/index', [
            'randProducts' => $randProducts,
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }
    public function productDetails(Request $request)
    {
        $product = Product::query()->where(['id' => $request->id])->get();

        return view('pet-shop/product-details', ['product' => $product]);
    }

    public function addCart(Request $request)
    {
        $product = Product::query()->where(['id' => $request->id])->first();

        $sessionId = Session::getId();

        \Cart::session($sessionId)->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
                'image' => $product->image,
            ],

        ]);

        $cart = \Cart::getContent();

        return redirect()->back();
    }

}
