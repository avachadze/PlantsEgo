<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'ctaboadafe19dw31@ikzubirimanteo.com',
            'Password' => Hash::make('recordar'),
            'role' => 'admin',
            'email_verified_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Ana',
            'email' => 'ana@admin.com',
            'Password' => Hash::make('suuhdude'),
            'role' => 'admin',
            'email_verified_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Urbil',
            'email' => 'urbil@admin.com',
            'Password' => Hash::make('urbilurbil'),
            'role' => 'admin',
            'email_verified_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.com',
            'Password' => Hash::make('testtest'),
            'role' => 'user',
            'email_verified_at' => now()
        ]);
    }
}
