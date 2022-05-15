<?php

use App\Http\Controllers\Admin\Home\HomeController;
use App\Http\Controllers\Admin\Image\ImageController;
use App\Http\Controllers\Admin\Representative\RepresentativeController;
use App\Http\Controllers\Admin\TouristSpot\TouristSpotController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/admin'); //redireciona sempre para essa rota.

Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('home', HomeController::class)->only(['index', 'show']);
    Route::resource('representatives', RepresentativeController::class);
    Route::resource('tourist_spots', TouristSpotController::class);

});

Route::get('/', function () {
    return redirect()->route('admin.home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
