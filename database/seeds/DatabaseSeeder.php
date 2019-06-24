<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(FacultiesTableSeeder::class);
        $this->call(ProgramStudiesTableSeeder::class);
        $this->call(SettingTableSeeder::class);
    }
}
