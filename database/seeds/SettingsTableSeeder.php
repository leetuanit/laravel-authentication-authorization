<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name'     =>   'sitetitle',
            'title'    =>   'Site title',
            'value'    =>   'Vilhouse',
        ]);
        DB::table('settings')->insert([
            'name'     =>   'sitename',
            'title'    =>   'Site name',
            'value'    =>   'Vilhouse.com',
        ]);
        DB::table('settings')->insert([
            'name'     =>   'tagline',
            'title'    =>   'Tag line',
            'value'    =>   'Vui song',
        ]);
        DB::table('settings')->insert([
            'name'     =>   'siteaddress',
            'title'    =>   'Site address(URL)',
            'value'    =>   'https://vilhouse.com',
        ]);
        DB::table('settings')->insert([
            'name'     =>   'emailwebmaster',
            'title'    =>   'Email webmaster',
            'value'    =>   'admin@vilhouse.com',
        ]);
        
    }
}
