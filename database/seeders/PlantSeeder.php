<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([
            'name' => 'Placeholder plant1',
            'system_id' => 1,
        ]);

        DB::table('plants')->insert([
            'name' => 'Placeholder plant2',
            'system_id' => 2,
        ]);
    }
}
