<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SchedulingController;

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('home', function () {
		return view('dashboard');
	})->name('home');

	Route::resource('patients', PatientController::class);
	Route::resource('services', ServiceController::class);
	Route::resource('scheduling', SchedulingController::class);

	Route::get('patients/{patient}/scheduling/create', '\App\Http\Controllers\SchedulingController@create')->name('scheduling.create');

	Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
		// Route::post('abilities/destroy', 'AbilitiesController@massDestroy')->name('abilities.massDestroy');
		// Route::resource('abilities', 'AbilitiesController');
		// Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
		// Route::resource('roles', 'RolesController');
		// Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
		Route::resource('users', 'UsersController');
	});

    Route::get('/logout', [SessionsController::class, 'destroy'])->name('logout');
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
    // return view('session/login-session');
    return view('auth/login');
})->name('login');