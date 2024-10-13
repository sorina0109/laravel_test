<?php

namespace Database\Seeders;

use App\Models\Content\Section;
use Illuminate\Database\Seeder;
use App\Models\content\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = Section::all()->each(function ($section) {

            $categories = Category::factory(rand(1, 3))->make();
            $section->categories()->saveMany($categories);
        });
    }
}
