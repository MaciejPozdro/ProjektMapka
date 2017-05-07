<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index',compact('places'));
    }

    public function places($min, $max)
    {
        $places = Announcement::where('price', '>=', $min)
            ->where('price', '<=', $max)
            ->with('city')->orderBy('id','DESC')->get();

        $temp = [];

        foreach ($places as $place) {
            $temp['address'][] = $place->address . ',' . $place->city->city_name;
            $temp['more'][] =
                [
                    'id'=> $place->id,
                    'price'=> $place->price,
                    'description'=> mb_strcut($place->description, 0, 59),
                    'address' => $place ->address. ',' . $place->city->city_name,
                    'photo'=> $place->photo()->first()->name
                ];
        }
        return $temp;
    }

    public function offer()
    {
        return view('front.offer');
    }

}
