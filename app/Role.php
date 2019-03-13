<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function getPermissions(){
    	return $this->belongsToMany(Permission::class,'role_permission');
    }
}
