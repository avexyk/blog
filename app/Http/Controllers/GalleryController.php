<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index () {
        $galleries = Gallery::paginate();

        return view('galleries.index', ['galleries' => $galleries]);
    }

    public function create () {
        return view('galleries.create'); 
    }

    public function show ($id) {

        // Método compact
        // compact('foto'); // ['foto' => $foto]
        $photo = Gallery::find($id);

        return view('galleries.show', ['photo' => $photo]);
    }
}
