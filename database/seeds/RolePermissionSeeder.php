<?php

use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_permission')->insert([
            'role_id'   =>  '5',
            'permission_id' =>  '1',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '1',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '2',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '3',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '4',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '5',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '6',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '7',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '8',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '9',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '10',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '11',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '12',
        ]);
        DB::table('role_permission')->insert([
            'role_id'   =>  '1',
            'permission_id' =>  '13',
        ]);
    }
}
