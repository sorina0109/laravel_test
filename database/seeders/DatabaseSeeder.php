<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PageSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\StaffSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //UserSeeder::class,
            StaffSeeder::class,
            //SectionSeeder::class,
            //BrandSeeder::class,
            //ProductSeeder::class,
            //CategorySeeder::class,


        ]);
    }
}
