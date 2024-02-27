<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function products()
    {
        return view('products.products');
    }

    public function foodAndBeverage()
    {
        return view('products.food_and_beverage');
    }

    public function beautyAndHealth()
    {
        return view('products.beauty_and_health');
    }

    public function homeCare()
    {
        return view('products.home_care');
    }

    public function babyAndKid()
    {
        return view('products.baby_and_kid');
    }
}

