<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index($slug = null)
    {
        //dd($slug);
        return view('frontend.shop.index', compact('slug'));
    }
}
