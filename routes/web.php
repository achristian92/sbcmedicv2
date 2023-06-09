<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Setting\ExamController;
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

Route::group(['as' => 'root.'], function() {
    Route::get('/', [\App\Http\Controllers\Root\HomeController::class, 'index'])->name('home.index');
    Route::post('/contact', [\App\Http\Controllers\Root\HomeController::class, 'contact'])->name('home.contact');

    Route::resource('doctors', \App\Http\Controllers\Root\DoctorsController::class)->only(['index', 'show']);
});

//Route::get('/landing', function () {
//    return view('landing.index');
//});
//Route::get('/landing/medicos', function () {
//    return view('landing.doctors');
//});
//Route::get('/landing/medico', function () {
//    return view('landing.doctor');
//});

//Route::get('/', function () {
//    return redirect()->route('home');
//});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::get('/appointments/{appointment}/payments', [AppointmentController::class, 'addPayment'])->name('appointment.add-payment');
    Route::get('/appointments/{appointment}/remove/payments', [AppointmentController::class, 'addRemove'])->name('appointment.add-remove');

    Route::get('/solicitud-citas', [\App\Http\Controllers\Admin\SolicitudCitaController::class, 'index'])->name('solicitud-citas.index');
    Route::get('/solicitud-citas/{id}/delete', [\App\Http\Controllers\Admin\SolicitudCitaController::class, 'delete'])->name('solicitud-citas.delete');
});

Route::group(['prefix' => 'setting', 'middleware' => ['auth'], 'as' => 'setting.'], function () {
    Route::resource('users', \App\Http\Controllers\Setting\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Setting\RoleController::class);
    Route::resource('permissions', \App\Http\Controllers\Setting\PermissionController::class);
    Route::resource('doctors', \App\Http\Controllers\Setting\DoctorController::class);
    Route::resource('schedules', \App\Http\Controllers\Setting\ScheduleController::class);
    Route::resource('exams', ExamController::class);
    Route::get('schedules/{doctor_id}/{date}/delete', [\App\Http\Controllers\Setting\ScheduleController::class, 'delete'])->name('schedules.delete');
});

Route::group(['prefix' => 'landing', 'middleware' => ['auth'], 'as' => 'landing.'], function () {
    Route::resource('doctors', \App\Http\Controllers\Landing\DoctorController::class);
    Route::resource('specialties', \App\Http\Controllers\Landing\SpecialtyController::class);
    Route::resource('locals', \App\Http\Controllers\Landing\LocalController::class);
});

Route::group(['prefix' => 'service', 'middleware' => ['auth'], 'as' => 'service.'], function () {
    Route::resource('recipes', \App\Http\Controllers\Service\RecipeController::class);
    Route::get('recipes/{recipe}/status', [\App\Http\Controllers\Service\RecipeController::class, 'status'])->name('recipes.status');
    Route::post('recipes/import', [\App\Http\Controllers\Service\RecipeController::class, 'import'])->name('recipes.import');
    Route::resource('specialties', \App\Http\Controllers\Service\SpecialtyController::class);
    Route::resource('procedures', \App\Http\Controllers\Service\ProcedureController::class);
});


Route::get('test', [\App\Http\Controllers\TestController::class, 'index']);


Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('custom-login', [AuthenticatedSessionController::class, 'login'])->name('login.custom');

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
