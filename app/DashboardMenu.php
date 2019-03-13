<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DashboardMenu extends Model
{
    public function getSettings(){
    	return $this->hasMany(Setting::class,'dashboard_menus_id');
    }
}
