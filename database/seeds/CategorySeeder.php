<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // to put a data in database
        DB::table('categories')->insert([

          'name' => 'Clothes'

        ]);

        DB::table('categories')->insert([

          'name' => 'Shoes'

        ]);

         DB::table('categories')->insert([

          'name' => 'Watch'

        ]);
    }
}
