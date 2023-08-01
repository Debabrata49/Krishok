<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\User;
use DB;
use \Crypt;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Carbon\Carbon;

class UserController extends Controller
{	
	public function userLoginView(){
		return view('user_login');
	}

	public function userLogin(request $request){

		$userName = $request->userid;
        $password = $request->userpass;

        $user_data = DB::table('customers_details')
            ->select('*')
            ->where('email_id', $userName)
            ->first();
        if($user_data == false){
        	return redirect('userloginView');
        }else {
            if (Crypt::decrypt($user_data->password) == $password) {
                $request->session()->put('userData',$user_data->id);
                return redirect('product_list');
            } else {
                return redirect('userloginView')->with(
                    'fail',
                    'Password Incorrect!'
                );
            }
        }
	}

	public function userRegisterView(){
		return view('user_register');
	}

	public function userRegister(request $request)
	{
		if($request->reg_user_password === $request->reg_user_Cpassword){
			$data = DB::table('customers_details')->insert([
	            'name' => $request->reg_user_name,
	            'mobile_number' => $request->reg_user_phone,
	            'email_id' => $request->reg_user_email,
            	'address' => $request->reg_user_address,
	            'password' => Crypt::encrypt($request->reg_user_password),
	            'order_history' => ''
	        ]);
	        if ($data == true) {
	            return redirect('userloginView');
	        }
    	}else{
    		return Redirect::back();
    	}
	}

	public function UserLogout(){
		if(session::has('userData')){
            session::pull('userData');
            return redirect('/');
        }
	}

	public function product_list(){
		if(session::has('userData')){
			$userDetails = DB::table('customers_details')->where('id', session::get('userData'))->select('*')->first();
			// $listProduct = DB::table('product_list')->select('*')->orderByDesc('created_at')->get();
			$listProduct = [];
			return view('product_list',compact('userDetails','listProduct'));
		}	
	}

	public function productListingApi(request $request){
		if(session::has('userData')){
			$userDetails = DB::table('customers_details')->where('id', session::get('userData'))->select('id')->first();
			$listProduct=[];
			$searchName = $request->search_name;
			if(!empty($searchName)){
				$listProduct = DB::table('product_list')->select('*')
					->orWhere(function ($query) use($searchName) {
					$query
                      ->where('product_price', 'like', "%$searchName%")
                      ->orwhere('product_name', 'like', "%$searchName%");
            		})
            		->orderByDesc('created_at')->get();	
            }else{
            	$listProduct = DB::table('product_list')->select('*')->orderByDesc('created_at')->get();
            }
			
			if( count($listProduct)>0){
				return response()->json([
					'error' => false,
					'data' => $listProduct,
					'user_data' => $userDetails
				]);
			}else{
				return response()->json([
					'error' => true,
					'data' => ''
				]);
			}
			
		}
	}

	public function buyNowData(request $request)
	{
		$userId = $request->user_id;
		$product_id = $request->itemId;
		$currentTime = Carbon::now();
		$formattedTime = $currentTime->format('s');

		$userData = DB::table('customers_details')->where('id',$userId)->first();
		$productData = DB::table('product_list')->where('id',$product_id)->first();

		DB::table('order_history')->insert([
			'order_id' =>'krishok'.$userData->id.$productData->id.$formattedTime,
			'coustomer_id' => $userData->id,
			'product_id' => $productData->id,
			'product_name' => $productData->product_name,
			'product_price' => $productData->product_price
		]);

		$orderHistory = DB::table('order_history')->select('*')->where('coustomer_id',$userId)->where('product_id',$product_id)->first();

		 return response()->json(['status' => '200', 'message' => 'Data received successfully', 'UserData' => $userData, 'ProductData' => $productData,'orderHistory' => $orderHistory]);	
	}

	//admin part

	public function adminDashboard()
	{
		$orderHistory = DB::table('order_history')->select('*')->orderByDesc('created_at')->get();
		return view('admin_dashboard',compact('orderHistory'));
	}	

	public function viewCart(){
		return view('productCart');
	}

	public function addProductToCart($pId){
		
	}
}
