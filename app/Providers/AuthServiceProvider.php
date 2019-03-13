<?php

namespace App\Providers;
use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //Kiểm tra xem user hiện tại có phải SuperAdmin không?
        //Nếu phải thì sẽ được phép truy cập tất cả các quyền.
        //Do biến $user thuộc Model User nên hàm isSuperAdmin() sẽ nằm bên Model User.
        Gate::before(function($user){
            if ($user->isSuperAdmin()) {
                return true;
            }
        });
        //Kiểm tra xem có phải chạy trên Console không?
        //Console là chạy trên composer, vì khi chạy composer nó sẽ quét cái này.
        //Lần đầu tiên không có dữ liệu, nếu quét mà không có dữ liệu sẽ lỗi.
        //Nếu không phải là chạy trên Console thì chạy tiếp hàm register_permissions().
        if (!$this->app->runningInConsole()) {
            $this->register_permissions();
        }
    }
    public function register_permissions(){
        //Permission:all() là lấy tất cả dữ liệu trong bảng Permissions.
        //Trong bảng Permissions sẽ có nhiều permission.
        //Lấy từng permission đi check coi User hiện tại có permission đó không.
        //Vì $user là đối tượng từ Model User nên đặt hàm hasPermission() để check.
        //Tham số truyền vào là Collection của permission.
        foreach (Permission::all() as $permission) {
            Gate::define($permission->key,function($user) use ($permission) {
                return $user->hasPermission($permission);
            });
        }
    }
}
