<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FarmerController;
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
})->middleware('alreadyLoggedIn');

Route::get('fermer_dashboard',[FarmerController::class, 'farmerDashboard'])->middleware('isLoggedIn');  
//route for admin_dashboard
Route::get('admin/dashboard', [UserController::class,'adminDashboard']);
//route for product_list
Route::get('product_list',[UserController::class, 'product_list'])->middleware('authCheckCoustomer');

//delete add item
Route::GET('/items/{id}',[FarmerController::class,'destroy_item']);


//route for farmer_login
Route::get('farmer_login', function () {
    return view('farmer_login');
})->middleware('alreadyLoggedIn');

Route::get('farmer_singup', function () {
    return view('farmer_singup');
})->middleware('alreadyLoggedIn');

Route::post('login', [FarmerController::class, 'farmerLogin']);

Route::post('register', [FarmerController::class, 'farmerRegister']);

Route::GET('farmerLogout',[FarmerController::class,'farmerLogout']);

//add product
Route::POST('add_product', [FarmerController::class, 'addProduct']);

//USER_ROUTE
Route::GET('userloginView',[UserController::class, 'userLoginView']);

Route::POST('user/login',[UserController::class, 'userLogin']);

Route::get('userRegisterView',[UserController::class, 'userRegisterView']);

Route::POST('user/register',[UserController::class, 'userRegister']);

Route::GET('UserLogout',[UserController::class, 'UserLogout']);

// Route::GET('/product/{id}/{uId}',[UserController::class,'buyNowData']);

Route::get('/product',[UserController::class,'buyNowData']);



