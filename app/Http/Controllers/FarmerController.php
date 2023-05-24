<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerController extends Controller
{
    //
    public function farmerDashboard()
    {
        return view('farmer_dashboard');
    }
}
