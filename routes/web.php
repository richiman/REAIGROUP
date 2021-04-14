<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Proyects;
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
    $user = Auth::user();
    return view('welcome');
});

Route::get('Proyectos', function () {
    $proyects = Proyects::all();
    return view('layouts.proyectos', compact('proyects'));
});

Route::get('perfil', function () {
    $user = Auth::user();
    return view('layouts.perfil', compact('user'));
    
});

Route::get('dashboard', function () {
    $user = Auth::user();
    return view('layouts.dashboard', compact('user'));
});
Route::get('invertirBarlo', function () {
    $user = Auth::user();
    return view('layouts.desarrollos.invertirBarlo', compact('user'));
});

Route::get('barlovento', function (){
    $user = Auth::user();
    return view ('layouts.desarrollos.barlovento', compact('user'));
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('layouts.dashboard');

