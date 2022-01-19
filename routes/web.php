<?php

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

Route::get('/', 'App\\Http\\Controllers\\HomeController@dashboard')
->name('dashboard');  

Route::get('/igraci', 'App\\Http\\Controllers\\IgracController@index')
->name('igraci.index');

Route::get('/igraci/delete/{igrac}', 'App\\Http\\Controllers\\IgracController@destroy')
->name('igraci.destroy');

Route::get('/turniri', 'App\\Http\\Controllers\\TurnirController@index')
->name('turniri.index');

Route::get('/turniri/delete/{turnir}', 'App\\Http\\Controllers\\TurnirController@destroy')
->name('turniri.destroy');

Route::get('/kategorije_turnira', 'App\\Http\\Controllers\\KategorijaTurniraController@index')
->name('kategorije_turnira.index');

Route::get('/kategorije_turnira/delete/{kategorija_turnira}', 'App\\Http\\Controllers\\KategorijaTurniraController@destroy')
->name('kategorije_turnira.destroy');

Route::get('/rezultati', 'App\\Http\\Controllers\\RezultatController@index')
->name('rezultati.index');

Route::get('/rezultati/delete/{rezultat}', 'App\\Http\\Controllers\\RezultatController@destroy')
->name('rezultati.destroy');

Route::get('/mecevi', 'App\\Http\\Controllers\\MecController@index')
->name('mecevi.index');

Route::get('/mecevi/delete/{mec}', 'App\\Http\\Controllers\\MecController@destroy')
->name('mecevi.destroy');

Route::get('/igre', 'App\\Http\\Controllers\\IgraController@index')
->name('igre.index');

Route::get('/igre/delete/{igra}', 'App\\Http\\Controllers\\IgraController@destroy')
->name('igre.destroy');

Route::get('/logout', 'App\\Http\\Controllers\\AuthController@logout')
->name('auth.logout');

Route::get('/login', 'App\\Http\\Controllers\\AuthController@login')
->name('auth.login');

Route::post('/login', 'App\\Http\\Controllers\\AuthController@attemptLogin')
->name('auth.attempt_login');

Route::get('/register', 'App\\Http\\Controllers\\AuthController@register')
->name('auth.register');

Route::post('/register', 'App\\Http\\Controllers\\AuthController@attemptRegister')
->name('auth.attempt_register');