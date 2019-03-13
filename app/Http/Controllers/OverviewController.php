<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function show(){
        $this->authorize('view-overview');
        return view('dashboard.overview');
    }
}
