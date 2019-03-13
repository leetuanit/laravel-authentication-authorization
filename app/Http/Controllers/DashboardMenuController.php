<?php

namespace App\Http\Controllers;
use App\DashboardMenu;
class DashboardMenuController extends Controller
{
    public function show(){
        return DashboardMenu::all();
    }
}
