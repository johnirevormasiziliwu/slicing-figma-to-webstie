<?php

use App\Http\Controllers\Event\EventController;
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



//Route Event
Route::prefix('event')->group(function() {
    Route::get('/', [EventController::class, 'index'])->name('event.index');
});