<?php

namespace App\Http\Controllers;
use App\Models\DeliveryPersonnel;
use Illuminate\Http\Request;
use App\Models\city;

class DeliveryPersonnelController extends Controller
{
    public function read()
    {
        $DeliveryPersonnels = DeliveryPersonnel::all(); // Load DeliveryPersonnel using the model 'DeliveryPersonnel'      
        // Pass the $DeliveryPersonnels to the view, 'DeliveryPersonnel/read'
        return view('DeliveryPersonnel/read')
        ->with(['DeliveryPersonnels' => $DeliveryPersonnels]);
    }
 /*   public function create()
{
    return view ("DeliveryPersonnel.create");
}*/

public function store(Request $request)
{
    $DeliveryPersonnel = new DeliveryPersonnel; // Must import the Model file: use App\Customer;
    $DeliveryPersonnel->personnel_id = $request->get('personnel_id');
    $DeliveryPersonnel->personnel_name = $request->get('personnel_name');
    $DeliveryPersonnel->personnel_address = $request->get('personnel_address');
    $DeliveryPersonnel->personnel_phone = $request->get('personnel_phone');
    $DeliveryPersonnel->city_id = $request->get('city_id');
    $DeliveryPersonnel->save(); /* Store data inside the table */
   /* return redirect('DeliveryPersonnel/read')
    ->with('status', 'personnel_id '.$DeliveryPersonnel->personnel_id.' added Successfully!');*/
}
public function loadDeletePage()
    {
        return view ("DeliveryPersonnel/delete");    // Page will be searched in Laravel > resources >  views
    }

    public function deleteDeliveryPersonnelRecord(Request $request)
    {
        $stdHandler = DeliveryPersonnel::where('personnel_id', $request->std_personnel_id);
    
        $stdHandler->delete();
    return redirect('DeliveryPersonnel/read');
    }
    // 4.1. Load the search page where user enters Registration Number 
public function loadSearchPage()
{
    return view ("DeliveryPersonnel/search");    // page will be searched in Laravel > resources >  views
}
// 4.2. Search the record based on Registration Number, and pass it to the update page
public function searchDeliveryPersonnelRecord(Request $request)
{
    $stdHandler = DeliveryPersonnel::where('personnel_id', $request->std_personnel_id)->first();
    if(is_null($stdHandler))
    {
        echo nl2br("<b>Error 404:</b>\nPersonnel Id. ". $request->std_personnel_id. " is Not Found...");
    }
    else
    {
        return view ("DeliveryPersonnel/edit") 
            ->with(['DEF' => $stdHandler]);
    }
}
// 4.3. Save the updated data 
public function updateDeliveryPersonnelRecord(Request $request)
{
    $stdHandler = DeliveryPersonnel::find($request->std_id);    // Find the personnel based on Primary Key
    $stdHandler->personnel_id             = $request->std_personnel_id;
    $stdHandler->personnel_name           = $request->std_personnel_name;
    $stdHandler->personnel_address        = $request->std_personnel_address;
    $stdHandler->personnel_phone          = $request->std_personnel_phone;
    $stdHandler->save();
    return redirect('DeliveryPersonnel/read')
    ->with('status', 'personnel_id '.$stdHandler->personnel_id.' added Successfully!');
}
public function create()
{
   $cities = city::all(); // Load all departments. To add in the dropdown
   return view ("DeliveryPersonnel/create")
   ->with(['cities' => $cities]);
   }

}
