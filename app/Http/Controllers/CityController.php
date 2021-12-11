<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\CityProduct;
use DB;
use App\Http\Requests\StoreCityRequest;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();

        return view('cities' , compact('cities'));
    }

    public function show($slug)
    {
        $city = City::where('slug' , $slug)->first();

        $cproducts = CityProduct::where('city_id' , $city->id)->get();
        
        return view('city' , compact('city' , 'cproducts'));
    }



    public function store(StoreCityRequest $request)
    {
        $city = City::create($request->all());

        return back()->with('success','City Created Succesfully !');
    }


    public function destroy($id)
    {
        $city = City::find($id);

        $city->delete();
    }
}
