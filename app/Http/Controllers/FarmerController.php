<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use \Crypt;
use Illuminate\Support\Facades\Hash;
// use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class FarmerController extends Controller
{
    public function farmerRegister(request $request)
    {
        $data = DB::table('krishak_admin')->insert([
            'name' => $request->reg_name,
            'adhar_no' => $request->reg_aadhar,
            'phone_number' => $request->reg_phone,
            'login_id' => $request->reg_email,
            'password' => Crypt::encrypt($request->reg_password),
            // 'password' => $request->reg_password,
        ]);
        // if ($data == true) {
        //     return redirect('farmer_login')->with('success','You have registered successfuly!');
        // }
        if ($data == true) {
    return redirect('farmer_login')->with('success', 'You have registered successfully!');
}
    }

    public function farmerLogin(request $request)
    {
        $userName = $request->userid;
        $password = $request->userpass;

        $farmer_data = DB::table('krishak_admin')
            ->select('*')
            ->where('login_id', $userName)
            ->first();
        if ($farmer_data == false) {
            return redirect('farmer_login');
        } else {
            if (Crypt::decrypt($farmer_data->password) == $password) {
                $request->session()->put('loginId',$farmer_data->id);
                return redirect('fermer_dashboard');
            } else {
                return redirect('farmer_login')->with(
                    'status',
                    'Password Incorrect!'
                );
            }
        }
    }
    public function farmerDashboard()
    {   
        $login_id = session::get('loginId');
        $data = array();
        if(session::has('loginId')){
            $data = DB::table('product_list')->select('*')->where('farmers_id',session::get('loginId'))->get();
            $f_data = DB::table('krishak_admin')->select('*')->where('id',session::get('loginId'))->first();
            return view('farmer_dashboard',compact('data','f_data','login_id'));
        }
        
    }
    //add product
    public function addProduct(request $request)
    {
        // dd($request->farmer_id);
        $image_product = "";
        $farmer_id = $request->farmer_id;
        $product_name = $request->Product_name;
        $product_price = $request->Product_price;
        $product_img = $request->Product_image;
        $imageName = $product_img->getClientOriginalName();
        $product_img->move(public_path('images'), $imageName);
        
        $add_product = DB::table('product_list')->insert([
            'farmers_id' => $farmer_id,
            'product_name' => $product_name,
            'product_image' => 'images/'.$imageName,
            'product_price' => $product_price,
        ]);
        return redirect('fermer_dashboard');
    }

    public function destroy_item($id){
        DB::table('product_list')->where('id', $id)->delete();

        // Return a JSON response or any other response as needed
        return response()->json(['status' => '200','message' => 'Item deleted successfully']);
    }

    public function farmerLogout()
    {
        if(session::has('loginId')){
            session::pull('loginId');
            return redirect('/');
        }
    }
}
