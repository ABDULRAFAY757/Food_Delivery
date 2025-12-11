<?php

namespace App\Http\Controllers;
use App\Models\Resturant;
use Illuminate\Http\Request;

class ResturantController extends Controller
{
    public function read()
    {
        $resturants = Resturant::all(); // Load customer using the model 'customer'      
        // Pass the $customers to the view, 'customer/read'
        return view('resturant/read')
        ->with(['resturants' => $resturants]);
    }
    public function create()
{
    return view ("resturant.create");
}
public function store(Request $request)
{
    $resturant = new Resturant; // Must import the Model file: use App\Customer;
    $resturant->resturant_name = $request->get('resturant_name');
    $resturant->resturant_address = $request->get('resturant_address');
    $resturant->resturant_phone= $request->get('resturant_phone');
    $resturant->resturant_email = $request->get('resturant_email');

    $resturant->save(); /* Store data inside the table */
    return redirect('resturant/read')
    ->with('status', 'resturant_name '.$resturant->resturant_name.' added Successfully!');
}
public function loadDeletePage()
    {
        return view ("resturant/delete");    // Page will be searched in Laravel > resources >  views
    }

    public function deleteResturantRecord(Request $request)
    {
        $stdHandler = Resturant::where('id', $request->std_id);
    
        $stdHandler->delete();
    return redirect('resturant/read');
    }
    // 4.1. Load the search page where user enters Registration Number 
public function loadSearchPage()
{
    return view ("resturant/search");    // page will be searched in Laravel > resources >  views
}
// 4.2. Search the record based on Registration Number, and pass it to the update page
public function searchResturantRecord(Request $request)
{
    $stdHandler = Resturant::where('id', $request->std_id)->first();
    if(is_null($stdHandler))
    {
        echo nl2br("<b>Error 404:</b>\nResturant ID. ". $request->std_id. " is Not Found...");
    }
    else
    {
        return view ("resturant/edit") 
            ->with(['DEF' => $stdHandler]);
    }
}
// 4.3. Save the updated data 
public function updateResturantRecord(Request $request)
{
    $stdHandler = Resturant::where('id', $request->std_id)->first(); // Find the Student based on Primary Key
    $stdHandler->id             = $request->std_id;
    $stdHandler->resturant_name             = $request->std_resturant_name;
    $stdHandler->resturant_address                   = $request->std_resturant_address;
    $stdHandler->resturant_phone                    = $request->std_resturant_phone;
    $stdHandler->resturant_email                  = $request->std_resturant_email;
    $stdHandler->save();
    return redirect('resturant/read')
    ->with('status', 'id'.$stdHandler->std_id.' added Successfully!');
}

}

