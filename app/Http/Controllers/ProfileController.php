<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    public function show(){
        $this->authorize('view-profile');
    	return view('dashboard.profile',['profile' => Auth::user()]);
    }
    public function update(Request $request){
        $this->authorize('update-profile');
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return back();
    }
}
