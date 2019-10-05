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
       $user = App\User::create([

        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456'),
            'admin' => 1
        ]); 

        App\Profile::create([

            'user_id' => $user->id ,
            'avatar' => 'uploads/avatars/s1.jpeg',
            'about' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube'

        ]);
    }
}
