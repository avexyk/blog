<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', HomeController::class)->name('home');

// Individual
// Route::get('gallery', [GalleryController::class, 'index']);
// Route::get('gallery/create', [GalleryController::class, 'create']);
// Route::get('gallery/{gallery}', [GalleryController::class, 'show']);

// Grupo
// Route::controller(GalleryController::class)->group(function () {
//     Route::get('galleries', 'index')->name('galleries.index');
//     Route::get('galleries/create', 'create')->name('galleries.create');
//     Route::post('galleries', 'store')->name('galleries.store');
//     Route::get('galleries/{gallery}', 'show')->name('galleries.show');
//     Route::get('galleries/{gallery}/edit', 'edit')->name('galleries.edit');
//     Route::put('galleries/{gallery}', 'update')->name('galleries.update');
//     Route::delete('galleries/{gallery}', 'destroy')->name('galleries.destroy');
// });

// Route::get('gallery/{gallery}/{category?}', function ($gallery, $category = null) {
//     if ($category) {
//         return "gallery de un $gallery en galeria con categoria $category";
//     } else {
//         return "Photo title: $gallery";
        
//     }
// });

Route::resource('galleries', GalleryController::class);

// Cambiando el nombre de las rutas en la url sin alterar internamente
// Route::resource('photos', GalleryController::class)->parameters(['photos' => 'gallery'])->names('galleries');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
