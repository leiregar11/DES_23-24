<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Mary Roe',
            'description' => 'sdhj',
            'count' => 4,
            'price' => 100
            
        ]);
    }
}
        

