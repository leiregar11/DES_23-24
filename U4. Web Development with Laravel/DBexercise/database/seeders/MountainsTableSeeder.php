<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use \App\Models\Mountain;
class MountainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            DB::table('mountains')->insert([
                'name' => 'Mountain1',
                'height' => 2000,
                'belongsToRange' => false,
                'firstClimbDate' => '2022-01-01',
                'continent' => 'Europe'
                ]);

                Mountain::factory(10)->create();
        
                $mountain=new Mountain();
    }
}
