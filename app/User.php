<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //Nếu là User đầu tiên thì mặc định là SuperAdmin.
    public function isSuperAdmin(){
        return $this->id === 1;
    }
    //Lấy những Roles được gán cho USER
    public function getRoles(){
        //Vì quan hệ nhiều - nhiều nên một user có thể có nhiều role và ngược lại.
        return $this->belongsToMany(Role::class,'user_role');
    }
    //Lấy những Permissions được gán thêm cho USER
    public function getPermissions(){
        return $this->belongsToMany(Permission::class,'user_permission');
    }
    public function hasPermission(Permission $permission){
        //CASE 1: Quy trình: getRoles -> getPermissions (trong role) -> Nếu permission giống thì ok
        //Vì một user có thể có nhiều role hoặc 1 hoặc không có role nào trong bảng user_role
        //Dùng hàm getRoles() để lấy tất cả các role của user hiện tại.
        //Hàm getRoles() sẽ vào bảng "user_role" của Model Role để tìm.
        //Vì có nhiều role nên mình sẽ đi check từng role.
        //Nếu role không tồn tại thì optional() sẽ trả role về null
        //Một role có thể có nhiều permission nên mình sẽ đi getPermissions()
        //Lúc này $role đang truy xuất qua model Role nên sẽ viết hàm getPermissions() bên đó.
        //Hàm contains() sẽ đi tìm permission trong bảng permission được xuất ra hay không.
        //Nếu có thì return true nếu không thì return false.
        //!! dùng để ép kiểu bool
        foreach ($this->getRoles as $role) {
            if (!! optional(optional($role)->getPermissions)->contains($permission)){
                return true;
            }
        }
        //Nếu chưa return thì tiếp tục test CASE 2.
        //CASE 2: getPermissions (được gán trực tiếp)-> Nếu permission giống thì ok
        foreach ($this->getPermissions as $permission_direct) {
            if ($permission_direct->key === $permission->key) {
                return true;
            }
            
        }
        return false;
    }
}
