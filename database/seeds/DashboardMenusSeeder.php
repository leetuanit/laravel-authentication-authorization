<?php

use Illuminate\Database\Seeder;

class DashboardMenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dashboard_menus')->insert([
            'name'             =>   'dashboard',
            'title'            =>   'Dashboard',
            'route'            =>   'dashboard',
            'order'            =>   1,
            'icon_class'       =>   'fas fa-fw fa-tachometer-alt',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'overview',
            'title'            =>   'Overview',
            'route'            =>   'dashboard.overview',
            'order'            =>   2,
            'icon_class'       =>   'fas fa-fw fa-tachometer-alt',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'projects',
            'title'            =>   'Projects',
            'route'            =>   'dashboard.projects',
            'order'            =>   3,
            'icon_class'       =>   'fas fa-project-diagram',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'investors',
            'title'            =>   'Investors',
            'route'            =>   'dashboard.investors',
            'order'            =>   4,
            'icon_class'       =>   'fas fa-hand-holding-usd',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'partners',
            'title'            =>   'Partners',
            'route'            =>   'dashboard.partners',
            'order'            =>   5,
            'icon_class'       =>   'fas fa-handshake',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'posts',
            'title'            =>   'Posts',
            'route'            =>   'dashboard.posts',
            'order'            =>   6,
            'icon_class'       =>   'fas fa-blog',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'pages',
            'title'            =>   'Pages',
            'route'            =>   'dashboard.pages',
            'order'            =>   7,
            'icon_class'       =>   'far fa-file',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'comments',
            'title'            =>   'Comments',
            'route'            =>   'dashboard.comments',
            'order'            =>   8,
            'icon_class'       =>   'fas fa-comments',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'profile',
            'title'            =>   'Profile',
            'route'            =>   'dashboard.profile',
            'order'            =>   9,
            'icon_class'       =>   'fas fa-user-circle',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'permissions',
            'title'            =>   'Permissions',
            'route'            =>   'dashboard.permissions',
            'order'            =>   10,
            'icon_class'       =>   'fas fa-user-circle',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'roles',
            'title'            =>   'Roles',
            'route'            =>   'dashboard.role',
            'order'            =>   11,
            'icon_class'       =>   'fas fa-user-circle',
        ]);

        DB::table('dashboard_menus')->insert([
            'name'             =>   'users',
            'title'            =>   'Users',
            'route'            =>   'dashboard.users',
            'order'            =>   12,
            'icon_class'       =>   'fas fa-users',
        ]);
        DB::table('dashboard_menus')->insert([
            'name'             =>   'settings',
            'title'            =>   'Settings',
            'route'            =>   'dashboard.settings',
            'order'            =>   13,
            'icon_class'       =>   'fas fa-cogs',
        ]);
    }
}
