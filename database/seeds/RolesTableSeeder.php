<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' =>  'Adminstrator',
        ]);
        DB::table('roles')->insert([
            'title' =>  'Editor',
        ]);
        DB::table('roles')->insert([
            'title' =>  'Author',
        ]);
        DB::table('roles')->insert([
            'title' =>  'Contributor',
        ]);
        DB::table('roles')->insert([
            'title' =>  'Subscriber',
        ]);
        DB::table('roles')->insert([
            'title' =>  'Banned',
        ]);
    }
}
