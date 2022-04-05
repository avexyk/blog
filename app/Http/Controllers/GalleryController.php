<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index () {
        return "Gallery page";
    }

    public function create () {
        return 'Create page'; 
    }

    public function show ($foto) {
        return "Photo title: $foto";
    }
}
