<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = new Gallery();

        $gallery->name = "Bosque";
        $gallery->description = "Fotografía del bosque";
        $gallery->category = "Naturaleza";

        $gallery->save();
    }
}
