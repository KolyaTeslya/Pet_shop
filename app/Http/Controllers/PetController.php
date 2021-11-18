<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function about()
    {
        return view('pet-shop/about-us');
    }

}
