<?php

namespace Database\Seeders;

use App\Models\Content\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Section::truncate();

         Section::factory(3)->create();
    }
}
