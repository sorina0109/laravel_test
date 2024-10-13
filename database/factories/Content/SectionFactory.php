<?php

namespace Database\Factories\Content;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence(4);

        return [
            'name' => $name,
            'slug' => Str::slug($name) . '_' . Str::random(4),
            'description' => $this->faker->paragraph(),
            'position' => $this->faker->numberBetween(0, 100),
            'meta_title' => $this->faker->text(),
            'meta_description' => $this->faker->text(),
            'meta_keywords' => $this->faker->text(),
        ];
    }
}
