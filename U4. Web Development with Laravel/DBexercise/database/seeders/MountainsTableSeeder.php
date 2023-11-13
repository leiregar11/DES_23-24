<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MountainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            DB::table('mountains')->insert([
                'name' => 'Mountain1',
                'height' => 1000,
                'belongsToRange' => true,
                'firstClimbDate' => '2022-01-01',
                'continent' => 'Asia'
                ]);

                \App\Models\Mountain::factory(10)->create();
        
    }
}
