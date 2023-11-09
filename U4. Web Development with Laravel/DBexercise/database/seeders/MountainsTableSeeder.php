<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MountainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mountains = [
            ['name' => 'Mountain1', 'height' => 1000, 'belongsToRange' => true, 'firstClimbDate' => '2022-01-01', 'continent' => 'Asia'],
            ['name' => 'Mountain2', 'height' => 1500, 'belongsToRange' => false, 'firstClimbDate' => '2022-02-15', 'continent' => 'Europe'],
            // Add more mountain data as needed
        ];

        foreach ($mountains as $mountain) {
            DB::table('mountains')->insert($mountain);
        }
    }
}
