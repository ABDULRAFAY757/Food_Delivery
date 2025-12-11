<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ResturantController;

use App\Http\Controllers\mailController;
use App\Http\Controllers\FileController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





// Route::get('/', function () {
//     return view('Upload_file');
// });
// Route::get('/', function () {
//     return view('home');
// });
/***********Read******************/

Route::get('customer/read', [CustomerController::class,'read'])->name('customer.read');
/***********Create******************/

Route::get('customer/create', [CustomerController::class,'create'])->name('customer.create');

Route::post('customer/store', [CustomerController::class,'store'])->name('customer.store');
/***********delete******************/
Route::get('customer/delete',
[CustomerController::class,'loadDeletePage']);

Route::post('customer/deleted',
[CustomerController::class,'deleteCustomerRecord'])->name('customer.delete');
/***********Update******************/

Route::get('customer/search', 
[CustomerController::class, 'loadSearchPage']);

Route::post('customer/search', 
[CustomerController::class, 'searchCustomerRecord'])->name('customer.search');

Route::post('customer/updated', 
[CustomerController::class, 'updateCustomerRecord'])->name('customer.update');

/***********Read******************/
Route::get('food/read', [FoodController::class, 'read'])->name('food.read');
/***********Create******************/


Route::get('food/create', [FoodController::class, 'create'])->name('food.create');
Route::post('food/store', [FoodController::class, 'store'])->name('food.store');



/***********Delete******************/
Route::get('food/delete', [FoodController::class, 'loadDeletePage']);
Route::post('food/deleted', [FoodController::class, 'deleteFoodRecord'])->name('food.delete');

/***********Update******************/
Route::get('food/search', [FoodController::class, 'loadSearchPage']);
Route::post('food/search', [FoodController::class, 'searchFoodRecord'])->name('food.search');
Route::post('food/updated', [FoodController::class, 'updateFoodRecord'])->name('food.update');


/****Read*******/
Route::get('order/read', [OrderController::class, 'read'])->name('order.read');
/****Create*******/


Route::get('order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('order/store', [OrderController::class, 'store'])->name('order.store');



/****Delete*******/
Route::get('order/delete', [OrderController::class, 'loadDeletePage']);
Route::post('order/deleted', [OrderController::class, 'deleteOrderRecord'])->name('order.delete');

/****Update*******/
Route::get('order/search', [OrderController::class, 'loadSearchPage']);
Route::post('order/search', [OrderController::class, 'searchOrderRecord'])->name('order.search');
Route::post('order/updated/{id}', [OrderController::class, 'updateOrderRecord'])->name('order.update');



/***********Read******************/

Route::get('resturant/read', [ResturantController::class,'read'])->name('resturant.read');
/***********Create******************/

Route::get('resturant/create', [ResturantController::class,'create'])->name('resturant.create');

Route::post('resturant/store', [ResturantController::class,'store'])->name('resturant.store');


/***********delete******************/
Route::get('resturant/delete',
[ResturantController::class,'loadDeletePage']);

Route::post('resturant/deleted',
[ResturantController::class,'deleteResturantRecord'])->name('resturant.delete');
/***********Update******************/

Route::get('resturant/search', 
[ResturantController::class, 'loadSearchPage']);

Route::post('resturant/search', 
[ResturantController::class, 'searchResturantRecord'])->name('resturant.search');

Route::post('resturant/updated', 
[ResturantController::class, 'updateResturantRecord'])->name('resturant.update');








// Route::get('/send_mail', function () {
//     Mail::to('iamrafay757@gmail.com')
//         ->send(new form_mail());
// });

Route::get('/mail_form', [mailController::class, 'open_form' ])
->name('mail_form');
Route::post('/send_mail', [mailController::class, 'send_mail'])
->name('send_mail');








/***********Uploading******************/

Route::get('/file_upload', [FileController::class,'open_file_form']);
Route::post('/file_store', [FileController::class,'store_file']);

/***********VIEW AND DOWNLOADING******************/

Route::get('/show_data', [FileController::class, 'show_file_data']);

Route::get('/view_file/{id}', [FileController::class, 'file_view']);

Route::get('/download_file/{file}', [FileController::class,'file_download']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
