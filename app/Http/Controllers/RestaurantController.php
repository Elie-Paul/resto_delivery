<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('resto.list');
    }

    public function populaire()
    {
        return view('resto.pop');
    }

    public function access()
    {
        return view('resto.access');
    }
}
