<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
        	'name' => 'MX Keyboard',
        	'price' => 300.00,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque quasi, dolore omnis rem illo. Nesciunt numquam voluptatem, animi earum illo temporibus ducimus, qui ipsum officia fugiat, culpa velit tenetur?',
        	'image' => 'https://via.placeholder.com/150',
        	'category_id' => 1
        ]);

        DB::table('products')->insert([
        	'name' => 'Yamaha Mio',
        	'price' => 1500.00,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis rerum unde quas magnam tempore numquam at vel modi officiis! Illum sint cum sequi asperiores impedit maxime, debitis, sit ab ducimus?',
        	'image' => 'https://via.placeholder.com/150',
        	'category_id' => 3
        ]);
        DB::table('products')->insert([
        	'name' => 'Wave Honda',
        	'price' => 900.00,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi enim neque numquam maxime, fugit suscipit, nostrum similique praesentium vero debitis tempora! Vero assumenda modi reiciendis, voluptate amet ex quae! At!',
        	'image' => 'https://via.placeholder.com/150',
        	'category_id' => 3
        ]);

        DB::table('products')->insert([
        	'name' => 'Mouse',
        	'price' => 40.00,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorem, quas tempora repudiandae. Natus a consectetur laudantium dolore tenetur repellendus ut aspernatur tempore, ea, rem temporibus velit quam ipsam. Repudiandae!',
        	'image' => 'https://via.placeholder.com/150',
        	'category_id' => 2
        ]);
        DB::table('products')->insert([
        	'name' => 'Cat',
        	'price' => 45.00,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fugit voluptates odit velit reprehenderit! Molestias provident, rerum ipsam voluptatem mollitia voluptate unde incidunt nulla culpa, blanditiis. Laborum, voluptate ipsa itaque.',
        	'image' => 'https://via.placeholder.com/150',
        	'category_id' => 2
        ]);
        DB::table('products')->insert([
        	'name' => 'Jeep',
        	'price' => 4500.00,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium odio atque, dolorum officia commodi placeat et voluptates sint expedita repellendus dolor vero dignissimos pariatur natus corporis omnis provident facere impedit!',
        	'image' => 'https://via.placeholder.com/150',
        	'category_id' => 3
        ]);
    }

    }

