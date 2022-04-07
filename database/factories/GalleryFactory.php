<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // No es necesario declarar esta variable
    // protected $model = Gallery::class;

    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' =>$name, 
            'slug' =>Str::slug($name, '-'), 
            'description' =>$this->faker->paragraph(), 
            'category' =>$this->faker->randomElement(['Nature', 'City'])
        ];
    }
}
