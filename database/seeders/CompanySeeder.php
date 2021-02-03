<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Plants Zubiri',
        ]);
        DB::table('companies')->insert([
            'name' => 'IrrP',
        ]);
        DB::table('companies')->insert([
            'name' => 'System77',
        ]);
        DB::table('companies')->insert([
            'name' => 'Your Plants',
        ]);
        DB::table('companies')->insert([
            'name' => 'Sunshine',
        ]);
        DB::table('companies')->insert([
            'name' => 'R12',
        ]);
        DB::table('companies')->insert([
            'name' => 'Planetta',
        ]);

    }
}
