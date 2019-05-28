<?php

use Illuminate\Database\Seeder;

class ProgramStudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ProgramStudy::insert([

            [
                'name' => 'Pendidikan Guru Sekolah Dasar',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Guru Pendidikan Anak Usia Dini',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Bimbingan Konseling',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Sejarah',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Akuntansi',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Ekonomi',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Bahasa dan Sastra Indonesia',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Bahasa Inggris',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Matematika',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Biologi',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Fisika',
                'faculty_id' => 1,
            ],
            [
                'name' => 'Pendidikan Teknik Elktro',
                'faculty_id' => 1,
            ],

            //fakultas ekonomi dan bisnis
            [
                'name' => 'Akuntansi',
                'faculty_id' => 2,
            ],
            [
                'name' => 'Manajemen',
                'faculty_id' => 2,
            ],

            //fakultas ilmu kesehatan dan sains
            [
                'name' => 'Farmasi',
                'faculty_id' => 3,
            ],
            [
                'name' => 'Ilmu Keolahragaan',
                'faculty_id' => 3,
            ],

            //fakultas teknik
            [
                'name' => 'Teknik Informatika',
                'faculty_id' => 4,
            ],
            [
                'name' => 'Sistem Informasi',
                'faculty_id' => 4,
            ],
            [
                'name' => 'Teknik Industri',
                'faculty_id' => 4,
            ],
            [
                'name' => 'Teknik Kimia',
                'faculty_id' => 4,
            ],
            [
                'name' => 'Teknik Elektro',
                'faculty_id' => 4,
            ]
        ]);
    }
}
