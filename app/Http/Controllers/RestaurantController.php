<?php

namespace App\Http\Controllers;

use App\BusinessHours;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('resto.list', compact('restaurants'));
    }

    public function store(Request $request)
    {
        /*request()->validate([
            'nom' => ['required', 'string'],
            'email' => ['required', 'string']
        ]);

        $data = $request->all();
        $check = Restaurant::insert($data);

        //dd($check);

        $arr = array('msg' => 'Try again', 'status' => 'false');
        if($check)
        {
            $arr = array('msg' => 'Success', 'status' => 'true');
        }*/

        $request->validate([
            'nom' => ['required', 'string'],
            'email' => ['required', 'string'],
            'image' => ['required', 'image']
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        $image = Image::make(public_path("/storage/{$imagePath}"))->fit(250,190);
        $image->save();

        $restaurant = new Restaurant([
            'nom' => $request->get('nom'),
            'email' => $request->get('email'),
            'image' => $imagePath,
        ]);

        $user = new User([
            'name' => $restaurant->nom,
            'email' => $restaurant->email,
            'password' => Hash::make('1234')
        ]);

        $restaurant->save();
        $user->save();

        return back();

        //return Response()->json($arr);
        //return redirect('/admin/resto/list');
    }

    public function populaire()
    {
        return view('resto.pop');
    }

    public function access(Restaurant $restaurant)
    {
        //$restaurant->update($request->only('nom', 'string'));
        //dd($restaurant);
        return view('resto.access', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'nom'=> 'string',
            'tel1'=> 'string',
            'ville' => 'string',
            'code_postal' => 'string',
            'num_rue' => 'string'
        ]);

        $restaurant->nom = $request->get('nom');
        $restaurant->tel1 = $request->get('tel1');
        //$restaurant->tel2 = $request->get('tel2');
        $restaurant->ville = $request->get('ville');
        $restaurant->code_postal = $request->get('code_postal');
        $restaurant->num_rue = $request->get('num_rue');

        $restaurant->save();

        return Response()->json($restaurant);
        //return redirect()->route('profiles.list');
    }

    public function update_bis(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            //'heure_ouverture'=> ['date']
        ]);
        //dd('ddd');

        $restaurant->heure_ouverture = $request->get('heure_ouverture');

        //dd($restaurant);

        $restaurant->save();

        return back();
        //return redirect()->route('profiles.list');
    }

    public function openhours(Restaurant $restaurant, BusinessHours $businessHours)
    {
        return view('resto.hours', compact('restaurant'));
    }

    public function menu(Restaurant $restaurant)
    {
        return view('resto.menu', compact('restaurant'));
    }
}
