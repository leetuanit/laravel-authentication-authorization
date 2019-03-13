<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DashboardMenu;
use App\Setting;
class SettingController extends Controller
{
    public function show(){
        $this->authorize('view-settings');
        $menus = DashboardMenu::all();
        foreach ($menus as $menu) {
            if ($menu->name === 'settings') {
                return view('dashboard.settings',['units'=> $menu->getSettings]);
            }
        }
    }
    public function get(){
        $datas = Setting::all()->keyBy('name')->toArray();
        $options = array();
        foreach ($datas as $value) {
            $options[$value['name']] = $value['value'];
        }
        return $options;
    }
    public function update(Request $request){
        $this->authorize('update-settings');
        $options = Setting::all()->keyBy('name')->toArray();
        Setting::find($options['sitename']['id'])->update([
            'value' =>  $request->input('sitename'),
        ]);
        Setting::find($options['sitetitle']['id'])->update([
            'value' =>  $request->input('sitetitle'),
        ]);
        Setting::find($options['tagline']['id'])->update([
            'value' =>  $request->input('tagline'),
        ]);
        Setting::find($options['siteaddress']['id'])->update([
            'value' =>  $request->input('siteaddress'),
        ]);
        Setting::find($options['emailwebmaster']['id'])->update([
            'value' =>  $request->input('emailwebmaster'),
        ]);
        return back();
    }
}
