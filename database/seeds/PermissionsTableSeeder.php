<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'key'   =>   'view-dashboard',
            'title' =>   'view-Dashboard',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-overview',
            'title' =>   'view-Overview',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-projects',
            'title' =>   'view-Projects',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-investors',
            'title' =>   'view-Investors',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-partners',
            'title' =>   'view-Partners',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-posts',
            'title' =>   'view-Posts',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-pages',
            'title' =>   'view-Pages',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-comments',
            'title' =>   'view-Comments',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-profile',
            'title' =>   'view-Profile',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-permissions',
            'title' =>   'view-Permissions',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-roles',
            'title' =>   'view-Roles',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-users',
            'title' =>   'view-Users',
        ]);
        DB::table('permissions')->insert([
            'key'   =>   'view-settings',
            'title' =>   'view-Settings',
        ]);
    }
}
