<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\CityRequest;
use Illuminate\Http\Request;


class CitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cities = City::orderBy('id','DESC')->paginate(10);
        return view('cities.index',compact('cities'));
    }

    public function create()
    {

        return view('cities.create');
    }
    public function store(CityRequest $request)
    {
        City::create($request->all());
        return redirect(route('cities.index'));
    }
    public function edit (City $city)
    {
        return view('cities.edit',compact('city'));
    }
    public function update(CityRequest $request, City $city )
    {
        $city->update($request->all());
        return redirect()->route('cities.index');
    }
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index');

    }
}
