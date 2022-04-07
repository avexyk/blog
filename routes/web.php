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
    Route::get('galleries', 'index')->name('galleries.index');
    Route::get('galleries/create', 'create')->name('galleries.create');
    Route::post('galleries', 'store')->name('galleries.store');
    Route::get('galleries/{photo}', 'show')->name('galleries.show');
    Route::get('galleries/{photo}/edit', 'edit')->name('galleries.edit');
    Route::put('galleries/{photo}', 'update')->name('galleries.update');
    Route::delete('galleries/{photo}', 'destroy')->name('galleries.destroy');
});

// Route::get('gallery/{foto}/{category?}', function ($foto, $category = null) {
//     if ($category) {
//         return "Foto de un $foto en galeria con categoria $category";
//     } else {
//         return "Photo title: $foto";
        
//     }
// });
