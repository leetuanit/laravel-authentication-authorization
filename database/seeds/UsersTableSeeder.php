<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  =>  'SuperAdmin',
            'email' =>  'superadmin@admin.com',
            'password'  =>  bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name'  =>  'Admin',
            'email' =>  'admin@admin.com',
            'password'  =>  bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name'  =>  'Editor',
            'email' =>  'editor@admin.com',
            'password'  =>  bcrypt('123456'),
        ]);
    }
}
