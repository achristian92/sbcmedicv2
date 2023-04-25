<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
    return redirect()->route('home');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::get('/appointments', [AppointmentController::class,'index'])->name('appointment.index');
    Route::get('/appointments/{appointment}/payments', [AppointmentController::class,'addPayment'])->name('appointment.add-payment');
    Route::get('/appointments/{appointment}/remove/payments', [AppointmentController::class,'addRemove'])->name('appointment.add-remove');
});

Route::group(['prefix' => 'setting', 'middleware' => ['auth'], 'as' => 'setting.' ], function () {
    Route::resource('users', \App\Http\Controllers\Setting\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Setting\RoleController::class);
    Route::resource('permissions', \App\Http\Controllers\Setting\PermissionController::class);
    Route::resource('doctors', \App\Http\Controllers\Setting\DoctorController::class);
    Route::resource('schedules', \App\Http\Controllers\Setting\ScheduleController::class);
    Route::get('schedules/{doctor_id}/{date}/delete', [\App\Http\Controllers\Setting\ScheduleController::class,'delete'])->name('schedules.delete');
});

Route::group(['prefix' => 'service', 'middleware' => ['auth'], 'as' => 'service.' ], function () {
    Route::resource('specialties', \App\Http\Controllers\Service\SpecialtyController::class);
    Route::resource('procedures', \App\Http\Controllers\Service\ProcedureController::class);
});


Route::get('test',[\App\Http\Controllers\TestController::class,'index']);


Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('custom-login', [AuthenticatedSessionController::class, 'login'])->name('login.custom');

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');