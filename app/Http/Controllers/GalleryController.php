<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGallery;

class GalleryController extends Controller
{
    public function index () {
        $galleries = Gallery::orderBy('id', 'desc')->paginate();

        return view('galleries.index', ['galleries' => $galleries]);
    }

    public function create () {
        return view('galleries.create'); 
    }

    public function store (StoreGallery $request) {
        // return $request->all();

        // $gallery = new Gallery();

        // $gallery->name = $request->name;
        // $gallery->description = $request->description;
        // $gallery->category = $request->category;

        // $gallery->save();

        // Asignación masiva para gran cantidad de campos en un formulario
        // $gallery = Gallery::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category
        // ]);
        $gallery = Gallery::create( $request->all() );

        return redirect()->route('galleries.show', $gallery->id);
    }

    public function show (Gallery $photo) {

        // Método compact
        // compact('foto'); // ['foto' => $foto]
        // $photo = Gallery::find($id);

        return view('galleries.show', ['photo' => $photo]);
    }

    public function edit (Gallery $photo) {
        // $photo = Gallery::find($id);
        // return $photo;
        return view('galleries.edit', ['photo' => $photo]);
    }

    public function update (Request $request, Gallery $photo) {

        $request->validate([
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);


        // $photo->name = $request->name;
        // $photo->description = $request->description;
        // $photo->category = $request->category;

        // $photo->save();
        $photo->update( $request->all() );

        return redirect()->route('galleries.show', $photo->id);
    }
}
