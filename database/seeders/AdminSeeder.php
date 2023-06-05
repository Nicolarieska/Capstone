<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Jeremy William',
            'email' => 'jeremy'.'@gmail.com',
            'password' => Hash::make('jeremy-admin'),
        ]);
        DB::table('admins')->insert([
            'name' => 'Akmal Aliffandhi ',
            'email' => 'akmal'.'@gmail.com',
            'password' => Hash::make('akmal-admin'),
        ]);
        DB::table('admins')->insert([
            'name' => 'Nikola Arieska',
            'email' => 'nikola'.'@gmail.com',
            'password' => Hash::make('nikola-admin'),
        ]);
        DB::table('admins')->insert([
            'name' => 'Fikri Zamzam',
            'email' => 'fikri'.'@gmail.com',
            'password' => Hash::make('fikri-admin'),
        ]);
    }
}
