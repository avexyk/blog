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
        // \App\Models\User::factory(10)->create();
        $gallery = new Gallery();

        $gallery->name = "Bosque";
        $gallery->description = "Fotografía del bosque";
        $gallery->category = "Naturaleza";

        $gallery->save();
    }
}
