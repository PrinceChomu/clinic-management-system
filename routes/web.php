<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

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

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/', function () {return view('dashboard');});

    /**
     * Apponintment controller
     */
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
    Route::get('/appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('appointment.edit');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});