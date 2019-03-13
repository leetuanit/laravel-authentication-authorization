<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function getRoles(){
    	return $this->belongsToMany(Role::class,'role_permission');
    }
}
