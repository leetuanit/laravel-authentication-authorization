<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
class DashboardController extends Controller
{
    public function show(){
        $this->authorize('view-dashboard');
        return view('dashboard.index');
    }
}
