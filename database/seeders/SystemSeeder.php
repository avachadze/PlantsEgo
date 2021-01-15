<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('systems')->insert([
            'name' => 'Placeholder Sys1',
        ]);

        DB::table('systems')->insert([
            'name' => 'Placeholder Sys2',
        ]);
    }
}
