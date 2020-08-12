<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	'name' => 'Admin',
        	'email' => 'meow@email.com',
        	'password' => Hash::make('maryber123'),
        	'role_id' => 1
        ]);


        DB::table('users')->insert([

        	'name' => 'normal user',
        	'email' => 'meisheng@email.com',
        	'password' => Hash::make('maryber123'),
        	'role_id' => 2
        ]);
    }
}
