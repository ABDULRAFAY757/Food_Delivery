<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function read()
    {
        return view("city.read");
    }
    
    public function create()
{
    return view("city.create");
}
    
public function store(Request $request)
    {
        $city = new city; // Must import the Model file: use App\Customer;
        $city->city_code = $request->get('city_code');
        $city->city_name = $request->get('city_name');
        $city->save(); /* Store data inside the table */
        /*return redirect('city/read')
        ->with('status', 'city_id '.$city->city_id.' added Successfully!');*/
        return redirect('city/create')->with('status', 'city_code '.$city->city_code.' added Successfully!');
    }

}
