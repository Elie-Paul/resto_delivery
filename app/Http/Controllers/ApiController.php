<?php

namespace App\Http\Controllers;

use App\Restaurant;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Intervention\Image\Facades\Image;

class ApiController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        //return view('resto.list', compact('restaurants'));
        return Response()->json($restaurants);
    }
}
