<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function show(){
    	return view('dashboard.investors');
    }
}
