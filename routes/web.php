<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PublicController::class, 'index'])->name('landipage');
Route::get('shows-and-events', [PublicController::class, 'showEvents'])->name('showevent');

Route::resource('events', EventController::class);
Route::resource('forms', FormsController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
