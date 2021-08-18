<?php

use App\Http\Controllers\EventosController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register Routes
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Management Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Routes
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('admin/users/register', 'Admin\UsersController@register')->name('admin.users.register');
Route::get('admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::post('admin/save', 'Admin\UsersController@save')->name('admin.users.save');

route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});


Route::get('secretaria/home', 'Secretaria\HomeController@index')->name('secretaria.home');
Route::resource('secretaria/calendario','Secretaria\EventosController');
Route::resource('configuracion/centros', 'CentroController')->names('configuracion.centro');

Route::post('centros', 'CentroController@store');

Route::resource('configuracion/administradores', 'PersonaController')->names('configuracion.administradores');
Route::resource('configuracion/recursos', 'RecursoFisicoBoxController')->names('configuracion.recursos');
Route::resource('configuracion/bloques', 'BloqueController')->names('configuracion.bloques');
Route::resource('configuracion/bloqueos', 'BloqueosController')->names('configuracion.bloqueos');
Route::resource('configuracion/especialidades', 'EspecialidadController')->names('configuracion.especialidades');
Route::resource('configuracion/medicos', 'MedicoController')->names('configuracion.medicos');
Route::resource('configuracion/equipamientos', 'EquipamientoController')->names('configuracion.equipamientos');

Route::get('admincentro/home', 'Admincentro\HomeController@index')->name('admincentro.home');

Route::get('paciente/home', 'Paciente\HomeController@index')->name('paciente.home');




