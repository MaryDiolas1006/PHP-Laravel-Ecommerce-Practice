<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// to put a data in database
        DB::table('roles')->insert([

          'name' => 'admin'

        ]);

        DB::table('roles')->insert([

   			'name' => 'normal user'
 
        ]);
    }
}
