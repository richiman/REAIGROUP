<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Proyects;
use Illuminate\Http\Request;
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

Route::get('profile', function () {
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


//editar Usuario

Route::put('user/{id}', function(Request $request, $id){
       $user = User::findOrFail($id);
       $user->direccion = $request->input('direccion');
       $user->ciudad = $request->input('ciudad');
       $user->estado = $request->input('estado');
       $user->telf = $request->input('telf');
       $user->cp = $request->input('cp');
        if($request -> hasFile('imagen')){
            $file = $request -> imagen;
            $file->move(public_path(). '/imagenes', $file->getClientOriginalName());
            $user->imagen = $file->getClientOriginalName();
        }
       $user->save();
       return redirect('/perfil')->with('info', 'Datos de perfil actualizados correctamente');
})->name('user.update');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('layouts.dashboard');

