<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'poli_id' => '1',
            'name' => 'Dr. Iqrima Nanda A.',
            'gender' => 'Perempuan',
            'photo' => 'doctor/doctor_1.jpg',
        ]);
        DB::table('doctors')->insert([
            'poli_id' => '1',
            'name' => 'Dr. Akmal Aliffandhi A.',
            'gender' => 'Laki-laki',
            'photo' => 'doctor/doctor_2.jpg',
        ]);
        DB::table('doctors')->insert([
            'poli_id' => '1',
            'name' => 'Dr. Nicola Fonda.',
            'gender' => 'Laki-laki',
            'photo' => 'doctor/doctor_3.jpg',
        ]);

        // poli 2
        DB::table('doctors')->insert([
            'poli_id' => '2',
            'name' => 'Dr. Manisa Buchori',
            'gender' => 'Perempuan',
            'photo' => 'doctor/doctor_1.jpg',
        ]);
        DB::table('doctors')->insert([
            'poli_id' => '2',
            'name' => 'Dr. Ivan Gunawan S.Pd',
            'gender' => 'Laki-laki',
            'photo' => 'doctor/doctor_2.jpg',
        ]);
        DB::table('doctors')->insert([
            'poli_id' => '2',
            'name' => 'Dr. Nicholas Cage',
            'gender' => 'Laki-laki',
            'photo' => 'doctor/doctor_3.jpg',
        ]);

        // poli 3
        DB::table('doctors')->insert([
            'poli_id' => '3',
            'name' => 'Dr. Manisa Buchori',
            'gender' => 'Perempuan',
            'photo' => 'doctor/doctor_1.jpg',
        ]);
        DB::table('doctors')->insert([
            'poli_id' => '3',
            'name' => 'Dr. Ivan Gunawan S.Pd',
            'gender' => 'Laki-laki',
            'photo' => 'doctor/doctor_2.jpg',
        ]);
        DB::table('doctors')->insert([
            'poli_id' => '3',
            'name' => 'Dr. Nicholas Cage',
            'gender' => 'Laki-laki',
            'photo' => 'doctor/doctor_3.jpg',
        ]);

        DB::table('doctors')->insert([
            'poli_id' => '4',
            'name' => 'Dr. Iqrima Nanda A.',
            'gender' => 'Perempuan',
            'photo' => 'doctor/doctor_1.jpg',
        ]);
        DB::table('doctors')->insert([
            'poli_id' => '4',
            'name' => 'Dr. Akmal Aliffandhi A.',
            'gender' => 'Laki-laki',
            'photo' => 'doctor/doctor_2.jpg',
        ]);
        DB::table('doctors')->insert([
            'poli_id' => '4',
            'name' => 'Dr. Nicola Fonda.',
            'gender' => 'Laki-laki',
            'photo' => 'doctor/doctor_3.jpg',
        ]);

    }
}
