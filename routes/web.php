<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RegistrationsController;
use App\Http\Controllers\TimeController;
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

Route::post('/search', [PublicController::class, 'search'])->name('search.index');
Route::get('/', [PublicController::class, 'index'])->name('landipage');
Route::get('shows-and-events', [PublicController::class, 'showEvents'])->name('showevent');

Route::resource('reminders', TimeController::class);
Route::resource('events', EventController::class);
Route::resource('forms', FormsController::class);
Route::resource('registration', RegistrationsController::class);

Route::get('events/{event}/registration', [PublicController::class, 'registration'])->name('events.registration');
Route::get('eventstable/{event}/registration', [PublicController::class, 'regtable'])->name('events.regtable');

Route::post('/events/register', [EventController::class,  'save'])->name('event.save');
Route::get('admin/logout', [PublicController::class, 'adminDestroy'])->name('admin.logout');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
