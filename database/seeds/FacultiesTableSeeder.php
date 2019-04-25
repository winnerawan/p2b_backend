<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Faculty::insert([

            [
                'name' => 'Fakultas Keguruan dan Ilmu Pendidikan (FKIP)'
            ],
            [
                'name' => 'Fakultas Ekonomi dan Bisnis (FEB)'
            ],
            [
                'name' => 'Fakultas Ilmu Kesehatan dan Sains (FIKS)'
            ],
            [
                'name' => 'Fakultas Teknik (FT)'
            ]
        ]);
    }
}
