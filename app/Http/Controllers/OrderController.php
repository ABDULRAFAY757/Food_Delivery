<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Food;
use App\Models\Customer;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    //
    public function read()
    {
        $orders = Order::all();
        return view('order/read')->with(['orders' => $orders]);
    }
  

    public function create() {
        $customers = Customer::all(); // Load all departments. To add in the dropdown
        $foods = FOOD::all();
        return view ("order/create")
        // return view('order/create',['foods'=>$foods,'customers'=>$customers]);
        ->with(['customers' => $customers])
        ->with(['foods' => $foods]);
        }
    public function store(Request $request)
{
    $order = new Order; // Must import the Model file: use App\Order;
    $order->invoice_id = $request->get('invoice_id');
    // $order->restaurant_id = $request->get('restaurant_id');
    $order->quantity = $request->get('quantity');
    $order->order_date = $request->get('order_date');
    $order->order_status = $request->get('order_status');
    $order->total_cost = $request->get('total_cost');
    $order->customer_id = $request->get('customer');
    $order->food_id = $request->get('food');
    $order->save(); /* Store data inside the table */
    return redirect('order/read')
        ->with('status', 'Invoice ID '.$order->invoice_id.' added successfully!');
}   
public function loadDeletePage()
{
    return view ("order/delete");    // Page will be searched in Laravel > resources >  views
}

    public function deleteOrderRecord(Request $request)
{
    $stdHandler = Order::where('id', $request->std_id);
    

    $stdHandler->delete();
return redirect('order/read');
}
// 4.1. Load the search page where user enters Registration Number 
public function loadSearchPage()
{
    return view("order/search"); // Page will be searched in Laravel > resources > views
}


public function searchOrderRecord(Request $request)
{
    $stdHandler = Order::where('id', $request->std_id)->first();

    if (is_null($stdHandler)) {
        echo "<b>Error 404:</b>\nOrder Id. " . $request->std_id. " is Not Found...";
    } else {
        return view("order/edit")->with('DEF', $stdHandler);
    }
}

















public function updateOrderRecord(Request $request)
{
    $order = Order::find($request->id); // Find the Order based on Primary Key

    if (is_null($order)) {
        return redirect('order/read')->with('error', 'Order record not found.');
    }
 //   $stdHandler = Order::find($request->std_id); 
    // Update the order record with the validated data
    $order->invoice_id = $request->std_invoice_id;
    // $order->restaurant_id = $request->std_restaurant_id;
    $order->quantity = $request->std_quantity;
    $order->order_date = $request->std_order_date;
    $order->order_status = $request->std_order_status;
    $order->total_cost = $request->std_total_cost;
    $order->save();

    return redirect('order/read')->with('status', 'Order ID '.$order->order_id.' updated successfully!');
}








}