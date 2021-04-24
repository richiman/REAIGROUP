<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Proyects;
use App\Inversiones;
use App\Services\PayUService\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;


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
    //Rutas Dashboard
Route::get('dashboard', function () {
    $user = Auth::user();
    $count = DB::table('users')->count();
    $capitalInvertido = DB::table("inversiones")->where('userId',  $user->id)->get()->sum("monto");
    return view('layouts.dashboard', compact('user','count','capitalInvertido'));
});

//Rutas BarloTepic 
//invertir
Route::get('invertirBarloTepic', function () {
    $user = Auth::user();
    return view('layouts.desarrollos.invertirBarloTepic', compact('user'));
    
});
Route::post('invertirBarloTepic', function(Request $request){
    $nuevaInversion = new Inversiones;
    $user = Auth::user();
    if($nuevaInversion-> monto = $request->input('cantidadInvertida') <  $user->capital   ){

    return redirect('/invertirBarloTepic')->with('error', 'No puede invertir esa cantidad.');

    }elseif( $nuevaInversion-> monto = $request->input('cantidadInvertida') > $user->capital ){
        return redirect('/barloventoTepic')->with('error', 'Error inesperado.');
    }else{

        $nuevaInversion-> proyecto = $request->input('proyectoId');
        $nuevaInversion-> userId = $request->input('userId');
        $nuevaInversion-> monto = $request->input('cantidadInvertida');
        $nuevaInversion->save();
        DB::table('users')->where('id',  $user->id )->decrement('capital' , $nuevaInversion-> monto = $request->input('cantidadInvertida'));
        return redirect('/barloventoTepic')->with('info', 'Inversion guardada.');
       
    }
})->name('crear.inversion');

//Dashboard barloventoTepic
Route::get('barloventoTepic', function (){
    $user = Auth::user();
    $capitalInvertidoEnProyecto = DB::table("inversiones")->where('userId',  $user->id )->get()->sum("monto");
    $invertsInProyect = DB::table("inversiones")->where('proyecto', 1 )->get()->count();
    return view ('layouts.desarrollos.barloventoTepic', compact('user','capitalInvertidoEnProyecto','invertsInProyect'));
});
//Rutas BarloTepic



    //Ruta Barlo Las Varas
Route::get('barloventoLasVaras', function () {
    $user = Auth::user();
    return view('layouts.desarrollos.barloventoLasVaras', compact('user'));
});
Route::get('invertirBarloLasVaras', function (){
    $user = Auth::user();
    return view ('layouts.desarrollos.invertirBarloLasVaras', compact('user'));
});
    //Ruta Barlo Las Varas

    //Ruta New Chacala
Route::get('NewChacala', function () {
    $user = Auth::user();
    return view('layouts.desarrollos.NewChacala', compact('user'));
});
Route::get('invertirNewChacala', function (){
    $user = Auth::user();
    return view ('layouts.desarrollos.invertirNewChac', compact('user'));
});
    //Ruta New Chacala


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
       return redirect('/profile')->with('info', 'Datos de perfil actualizados correctamente');
})->name('user.update');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('layouts.dashboard');

