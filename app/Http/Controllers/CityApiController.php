<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\CityProduct;
use DB;
use App\Http\Requests\StoreCityRequest;

class CityApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $cities = City::all();
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request)
    {
        $city = City::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $city = City::find($id);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find(id);

        $city->delete();
    }
}
