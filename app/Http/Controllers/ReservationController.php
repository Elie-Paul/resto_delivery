<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Restaurant $restaurant)
    {

        return view('resto.reserv', compact('restaurant'));
    }
}
