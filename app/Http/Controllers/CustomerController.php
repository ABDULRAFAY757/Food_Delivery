<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Resturant;
class CustomerController extends Controller
{
    public function read()
    {
        $customers = Customer::all(); // Load customer using the model 'customer'      
        // Pass the $customers to the view, 'customer/read'
        return view('customer/read')
        ->with(['customers' => $customers]);
    }
//     public function create()
// {
//     return view ("customer.create");
// }
public function store(Request $request)
{
    $customer = new Customer; // Must import the Model file: use App\Customer;
    $customer->id = $request->get('id');
    $customer->email = $request->get('email');
    $customer->name = $request->get('name');
    $customer->address = $request->get('address');
    $customer->phone_no = $request->get('phone_no');
    $customer->payment_info = $request->get('payment_info');
    $customer->resturant_id = $request->get('resturant');
    $customer->save(); /* Store data inside the table */
    return redirect('customer/read')
    ->with('status', 'id '.$customer->id.' added Successfully!');
}
public function loadDeletePage()
    {
        return view ("customer/delete");    // Page will be searched in Laravel > resources >  views
    }

    public function deleteCustomerRecord(Request $request)
    {
        $stdHandler = Customer::where('id', $request->std_id);
    
        $stdHandler->delete();
    return redirect('customer/read');
    }
    // 4.1. Load the search page where user enters Registration Number 
public function loadSearchPage()
{
    return view ("customer/search");    // page will be searched in Laravel > resources >  views
}
// 4.2. Search the record based on Registration Number, and pass it to the update page
public function searchCustomerRecord(Request $request)
{
    $stdHandler = Customer::where('id', $request->std_id)->first();
    if(is_null($stdHandler))
    {
        echo nl2br("<b>Error 404:</b>\nCustomer Id. ". $request->std_id. " is Not Found...");
    }
    else
    {
        return view ("customer/edit") 
            ->with(['DEF' => $stdHandler]);
    }
}
// 4.3. Save the updated data 
public function updateCustomerRecord(Request $request)
{
    $stdHandler = Customer::find($request->std_id);    // Find the Student based on Primary Key
    $stdHandler->id             = $request->std_id;
    $stdHandler->email                   = $request->std_email;
    $stdHandler->name                    = $request->std_name;
    $stdHandler->address                  = $request->std_address;
    $stdHandler->phone_no                = $request->std_phone_no;
    $stdHandler->payment_info            = $request->std_payment_info;
    $stdHandler->save();
    return redirect('customer/read')
    ->with('status', 'id '.$stdHandler->id.' added Successfully!');
}

public function create() {
    $resturants = Resturant::all(); // Load all departments. To add in the dropdown
    return view ("customer/create")
    ->with(['resturants' => $resturants]);
   
}

}
