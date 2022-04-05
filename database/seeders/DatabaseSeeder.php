<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Dos formar de declarar los factories
        \App\Models\User::factory(10)->create();
        // $this->call(GallerySeeder::class);
        Gallery::factory(50)->create();
    }
}
