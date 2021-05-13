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
    return view('auth.login' );
});
Route::get('Proyectos', function () {
    $proyects = Proyects::all();
    return view('layouts.proyectos', compact('proyects'));
});
Route::get('profile', function () {
    $user = Auth::user();
    $historial = DB::table("inversiones")->where('userId',  $user->id )->get();
    $capitalInvertido = DB::table("inversiones")->where('userId',  $user->id)->get()->sum("monto");
    return view('layouts.perfil', compact('user','historial','capitalInvertido'));
});
//------------------------------------------------------------Dashboard------------------------------------------------------------
Route::get('dashboard', function () {
    $user = Auth::user();
    $count = DB::table('users')->count();
    $capitalInvertido = DB::table("inversiones")->where('userId',  $user->id)->get()->sum("monto");
    $proyectosRegistrados = DB::table("inversiones")->where('userId',  $user->id)->get()->count();
    $capitaTep = DB::table("inversiones")->where('userId',  $user->id)->where('proyecto',  1)->get()->sum("monto");
    $capitaVars = DB::table("inversiones")->where('userId',  $user->id)->where('proyecto',  2)->get()->sum("monto");
    $capitaChaca = DB::table("inversiones")->where('userId',  $user->id)->where('proyecto',  3)->get()->sum("monto");

    $partTepic = $capitaTep / 7500000 * 100 ;
    $parVars = $capitaVars / 10000000 * 200 ;
    $parChaca = $capitaChaca / 10000000 * 100 ;

    $proyectosRegistradosList = DB::table("inversiones")->where('userId',  $user->id )->get()->unique('proyecto');
    
    $ene =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '01')->get()->sum('monto');
    $feb =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '02')->get()->sum('monto');
    $mar =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '03')->get()->sum('monto');
    $abr =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '04')->get()->sum('monto');
    $may =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '05')->get()->sum('monto');
    $jun =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '06')->get()->sum('monto');
    $jul =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '07')->get()->sum('monto');
    $ago =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '08')->get()->sum('monto');
    $sep =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '09')->get()->sum('monto');
    $oct=   DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '10')->get()->sum('monto');
    $nov =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '11')->get()->sum('monto');
    $dec =  DB::table('inversiones')->where('userId', $user->id)->whereMonth('created_at', '=', '12')->get()->sum('monto');


      
 return view('layouts.dashboard', compact('user','count','partTepic','parVars','parChaca', 'capitalInvertido', 'proyectosRegistrados','proyectosRegistradosList','ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dec','capitaTep','capitaVars','capitaChaca'));
});
//------------------------------------------------------------Rutas BarloTepic------------------------------------------------------------
//invertir invertirBarloTepic
Route::get('invertirBarloTepic', function () {
    $user = Auth::user();
    $historial = DB::table("inversiones")->where('userId',  $user->id )->get();
    $porcProyecto = DB::table("inversiones")->where('proyecto',  1 )->get()->sum("monto");
    $disponibleTepic = 7500000 - $porcProyecto;
   return view('layouts.desarrollos.invertirBarloTepic', compact('user','historial','porcProyecto','disponibleTepic'));
});





Route::post('invertirBarloTepic', function(Request $request){
    $nuevaInversion = new Inversiones;
    $user = Auth::user();
    if($nuevaInversion-> monto = $request->input('cantidadInvertida') <  750000 || $user->capital < 1  ){

    return redirect('/invertirBarloTepic')->with('error', 'No puede ingresar valores inferiores al valor de la accion o su capital.');

    }elseif( $nuevaInversion-> monto = $request->input('cantidadInvertida') > $user->capital ){
        return redirect('/invertirBarloTepic')->with('error', 'No puede ingresar valores superiores a su capital a su capital.');
    }else{
        $nuevaInversion-> proyecto = $request->input('proyectoId');
        $nuevaInversion-> tipoCotrato = $request->input('tipoCotrato');
        $nuevaInversion-> userId = $request->input('userId');
        $nuevaInversion-> monto = $request->input('cantidadInvertida');
        $nuevaInversion->save();
        DB::table('users')->where('id',  $user->id )->decrement('capital' , $nuevaInversion-> monto = $request->input('cantidadInvertida'));
        return redirect('/invertirBarloTepic')->with('info', 'Inversion guardada.');
    }
})->name('crear.inversion');

//invertir invertirBarloTepic




//Dashboard barloventoTepic
Route::get('barloventoTepic', function (){
    $user = Auth::user();
    $capitalInvertidoEnProyecto = DB::table('inversiones')->where('userId',  $user->id )->where( 'proyecto' , 1 )->get()->sum('monto');
    $invertsInProyect = DB::table('inversiones')->where( 'proyecto' , 1 )->distinct('userId')->count('userId');
    return view ('layouts.desarrollos.barloventoTepic', compact('user','capitalInvertidoEnProyecto','invertsInProyect'));
});
//-------------------------------------------------------- BarloTepic ------------------------------------------------------------------

//-------------------------------------------------------- Barlo Las Varas -------------------------------------------------------------
//Dashboard barloventoLasVaras
Route::get('barloventoLasVaras', function () {
    $user = Auth::user();
    $capitalInvertidoEnProyecto = DB::table("inversiones")
    ->where('userId',  $user->id )
    ->where( 'proyecto' , 2 )->get()->sum("monto");
    $invertsInProyect = DB::table('inversiones')
    ->where( 'proyecto' , 2 )
    ->distinct('userId')->count('userId');
    return view('layouts.desarrollos.barloventoLasVaras', compact('user','capitalInvertidoEnProyecto','invertsInProyect'));
});
//invertir
Route::get('invertirBarloLasVaras', function (){
    $user = Auth::user();
    $historial = DB::table("inversiones")->where('userId',  $user->id )->get();
    $porcProyecto  = DB::table("inversiones")->where('proyecto',  2 )->get()->sum("monto");
    $disponibleVaras = 5000000 - $porcProyecto;
    return view ('layouts.desarrollos.invertirBarloLasVaras', compact('user','historial','porcProyecto','disponibleVaras'));
});
//invertir
Route::post('invertirBarloLasVaras', function(Request $request){
    $nuevaInversion = new Inversiones;
    $user = Auth::user();
    if($nuevaInversion-> monto = $request->input('cantidadInvertida') <  500000 || $user->capital < 1  ){

    return redirect('/invertirBarloLasVaras')->with('error', 'No puede ingresar valores inferiores al valor de la accion o su capital.');

    }elseif( $nuevaInversion-> monto = $request->input('cantidadInvertida') > $user->capital ){
        return redirect('/invertirBarloLasVaras')->with('error', 'No puede ingresar valores superiores a su capital a su capital.');
    }else{
        $nuevaInversion-> proyecto = $request->input('proyectoId');
        $nuevaInversion-> tipoCotrato = $request->input('tipoCotrato');
        $nuevaInversion-> userId = $request->input('userId');
        $nuevaInversion-> monto = $request->input('cantidadInvertida');
        $nuevaInversion->save();
        DB::table('users')->where('id',  $user->id )->decrement('capital' , $nuevaInversion-> monto = $request->input('cantidadInvertida'));
        return redirect('/invertirBarloLasVaras')->with('info', 'Inversion guardada.');
    }
})->name('crear.inversion2');
//-------------------------------------------------------Barlo Las Varas----------------------------------------------------------------------------


//-------------------------------------------------------New Chacala--------------------------------------------------------------------------------
Route::get('NewChacala', function () {
    $user = Auth::user();
    $capitalInvertidoEnProyecto = DB::table("inversiones")
    ->where('userId',  $user->id )
    ->where( 'proyecto' , 3 )->get()->sum("monto");
    $invertsInProyect = DB::table('inversiones')
    ->where( 'proyecto' , 3 )
    ->distinct('userId')->count('userId');
    return view('layouts.desarrollos.NewChacala', compact('user','capitalInvertidoEnProyecto','invertsInProyect'));
});
//Invertir
Route::post('invertirNewChacala', function(Request $request){
    $nuevaInversion = new Inversiones;
    $user = Auth::user();
    if($nuevaInversion-> monto = $request->input('cantidadInvertida') <  500000 || $user->capital < 1  ){

    return redirect('/invertirNewChacala')->with('error', 'No puede ingresar valores inferiores al valor de la accion o su capital.');

    }elseif( $nuevaInversion-> monto = $request->input('cantidadInvertida') > $user->capital ){
        return redirect('/invertirNewChacala')->with('error', 'No puede ingresar valores superiores a su capital a su capital.');
    }else{
        $nuevaInversion-> proyecto = $request->input('proyectoId');
        $nuevaInversion-> tipoCotrato = $request->input('tipoCotrato');
        $nuevaInversion-> userId = $request->input('userId');
        $nuevaInversion-> monto = $request->input('cantidadInvertida');
        $nuevaInversion->save();
        DB::table('users')->where('id',  $user->id )->decrement('capital' , $nuevaInversion-> monto = $request->input('cantidadInvertida'));
        return redirect('/invertirNewChacala')->with('info', 'Inversion guardada.');
    }
})->name('crear.inversion3');
Route::get('invertirNewChacala', function (){
    $user = Auth::user();
    $historial = DB::table("inversiones")->where('userId',  $user->id )->get();
    $porcProyecto  = DB::table("inversiones")->where('proyecto',  3 )->get()->sum("monto");
    $disponibleChaca = 10000000 - $porcProyecto;
    return view ('layouts.desarrollos.invertirNewChac', compact('user','historial','porcProyecto','disponibleChaca'));
});
//-------------------------------------------------------New Chacala--------------------------------------------------------------------------------


//-------------------------------------------------------editar Usuario-----------------------------------------------------------------------------
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

//-------------------------------------------------------editar Usuario-----------------------------------------------------------------------------

Auth::routes();
Route::get('/home', 'HomeController@index')->name('layouts.dashboard');

