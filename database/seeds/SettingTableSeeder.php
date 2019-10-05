<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

        	'site_name' => "Laravel's Blog",
        	'address' => 'Russa, Petersburg',
        	'contact_number' => '8 9000 7562 4844',
        	'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
