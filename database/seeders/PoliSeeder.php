<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('polis')->insert([
            'id' => '1',
            'name' => 'Poli Anak',
            'photo' => 'poli/ha1.jpg',
        ]);
        DB::table('polis')->insert([
            'id' => '2',
            'name' => 'Poli Umum',
            'photo' => 'poli/ha2.jpg',
        ]);
        DB::table('polis')->insert([
            'id' => '3',
            'name' => 'Poli Gigi',
            'photo' => 'poli/ha.jpg',
        ]);
        DB::table('polis')->insert([
            'id' => '4',
            'name' => 'Poli THT',
            'photo' => 'poli/ha4.jpg',
        ]);
    }
}
