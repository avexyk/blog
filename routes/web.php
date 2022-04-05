<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

// Individual
// Route::get('gallery', [GalleryController::class, 'index']);
// Route::get('gallery/create', [GalleryController::class, 'create']);
// Route::get('gallery/{foto}', [GalleryController::class, 'show']);

// Grupo
Route::controller(GalleryController::class)->group(function () {
    Route::get('gallery', 'index');
    Route::get('gallery/create', 'create');
    Route::get('gallery/{foto}', 'show');
});

// Route::get('gallery/{foto}/{category?}', function ($foto, $category = null) {
//     if ($category) {
//         return "Foto de un $foto en galeria con categoria $category";
//     } else {
//         return "Photo title: $foto";
        
//     }
// });
