<?php

namespace App\Http\Controllers;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{    
    public function read()
    {
        $foods = Food::all(); // Load customer using the model 'customer'      
        // Pass the $customers to the view, 'customer/read'
        return view('food/read')
        ->with(['foods' => $foods]);
    }
    public function create()
    {
        return view ("food.create");
    }
    public function store(Request $request)
    {
        $food = new Food; // Must import the Model file: use App\Customer;
        $food->id = $request->get('id');
        $food->food_name = $request->get('food_name');
        $food->food_description = $request->get('food_description');
        $food->food_category = $request->get('food_category');
        $food->quantity = $request->get('quantity');
        $food->price = $request->get('price');
        $food->dietaryinformation = $request->get('dietaryinformation');
        $food->save(); /* Store data inside the table */
        return redirect('food/read')
        ->with('status', 'id '.$food->id.' added Successfully!');
    }
    public function loadDeletePage()
    {
        return view ("food/delete");    // Page will be searched in Laravel > resources >  views
    }

    public function deleteFoodRecord(Request $request)
    {
        $stdHandler = Food::where('id', $request->std_id);
    
        $stdHandler->delete();
    return redirect('food/read');
    }


    public function loadSearchPage()
    {
        return view("food/search"); // Page will be searched in Laravel > resources > views
    }
    
    public function searchFoodRecord(Request $request)
    {
        $food = Food::where('id', $request->std_id)->first();

        if (is_null($food)) {
            echo nl2br("<b>Error 404:</b>\nFood Id. ". $request->std_id. " is Not Found...");
        } else {
            return view("food.edit")->with(['food' => $food]);
        }
    }

    public function updateFoodRecord(Request $request)
    {
        $food = Food::find($request->std_id);

        if (is_null($food)) {
            return redirect('food/read')->with('error', 'Food record not found.');
        }

        $validatedData = $request->validate([
            'std_food_name' => 'required',
            // Add validation rules for other fields as needed
        ]);

        $food->food_name = $validatedData['std_food_name'];
        $food->food_description = $request->std_food_description;
        $food->food_category = $request->std_food_category;
        $food->quantity = $request->std_quantity;
        $food->price = $request->std_price;
        $food->dietaryinformation = $request->std_dietaryinformation;
        $food->save();

        return redirect('food/read')->with('status', 'Food ID '.$food->id.' updated successfully!');
    }


    // 4.3. Save the updated data 
    // public function updateFoodRecord(Request $request)
    // {
    //     $stdHandler = Food::where('id',$request->std_id)->first();    // Find the Student based on Primary Key
    //     $stdHandler->id             = $request->std_id;
    //     $stdHandler->food_name                   = $request->std_food_name;
    //     $stdHandler->food_description                    = $request->std_food_description;
    //     $stdHandler->food_category                  = $request->std_food_category;
    //     $stdHandler->quantity                = $request->std_quantity;
    //     $stdHandler->price            = $request->std_price;
    //     $stdHandler->dietaryinformation            = $request->std_dietaryinformation;
    //     $stdHandler->save();
    //     return redirect('food/read')
    //     ->with('status', 'id '.$stdHandler->id.' added Successfully!');
    // }
}