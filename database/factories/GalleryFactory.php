<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' =>$this->faker->sentence(), 
            'description' =>$this->faker->paragraph(), 
            'category' =>$this->faker->randomElement(['Nature', 'City'])
        ];
    }
}
