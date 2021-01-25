<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensors')->insert([
            'type' => 'Placeholder sensor1',
            'plant_id' => 1,
        ]);

        DB::table('sensors')->insert([
            'type' => 'Placeholder sensor2',
            'plant_id' => 2,
        ]);
    }
}
