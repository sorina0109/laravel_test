<?php

namespace Database\Seeders;

use App\Models\content\Product;
use App\Models\content\Section;
use Illuminate\Database\Seeder;
use App\Models\content\Category;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::truncate();

        $sections = Section::all()->each(function ($section) {

            $products = Product::factory(rand(2, 4))->make();
            $section->products()->saveMany($products);

        });
    }
}
