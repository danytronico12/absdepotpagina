<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    $multi11 = \App\Models\ddi::orderBy('id','desc')->get();
    $multi22 = \App\Models\contacteno::orderBy('id','desc')->get();

    return Inertia::render('Dashboard',[ 'multi11' => $multi11,'multi22' => $multi22]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/nosotros', function () {

    return Inertia::render('nosotros');
});
Route::get('/ddi', function () {

    return Inertia::render('ddi');
});
Route::get('/servicios', function () {

    return Inertia::render('servicios');
});
Route::get('/valores', function () {

    return Inertia::render('valores');
});
Route::get('/contactenos', function () {

    return Inertia::render('contactenos');
});
Route::get('/ddi', function () {

    return Inertia::render('ddi');
});
require __DIR__.'/auth.php';
