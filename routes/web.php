<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Proyects;
use App\Inversiones;
use App\Documentos;
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
    $proyectos = Proyects::All();
    $inversion = DB::table("inversiones")->where('userId', $user->id)->get();
    
    $capitalInvertido = DB::table("inversiones")->where('userId',  $user->id)->get()->sum("monto");
    $numProyectos = DB::table("proyects")->get()->count();
    $proyectosRegistrados = DB::table("inversiones")->where('userId',  $user->id)->get()->count();
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


      
 return view('layouts.dashboard', compact('user','inversion','proyectos','numProyectos','count', 'capitalInvertido', 'proyectosRegistrados','proyectosRegistradosList','ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dec'));
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

    return redirect('/dashboard')->with('error', 'No puede ingresar valores inferiores al valor de la accion o su capital.');

    }elseif( $nuevaInversion-> monto = $request->input('cantidadInvertida') > $user->capital ){
        return redirect('/dashboard')->with('error', 'No puede ingresar valores superiores a su capital a su capital.');
    }else{
        $nuevaInversion-> proyecto = $request->input('proyectoId');
        $nuevaInversion-> tipoCotrato = $request->input('tipoCotrato');
        $nuevaInversion-> userId = $request->input('userId');
        $nuevaInversion-> monto = $request->input('cantidadInvertida');
        $nuevaInversion->save();
        DB::table('users')->where('id',  $user->id )->decrement('capital' , $nuevaInversion-> monto = $request->input('cantidadInvertida'));
        return redirect('/dashboard')->with('info', 'Inversion guardada.');
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
    $proyectos = Proyects::All();
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


Route::get('documentosChacala', function (){
    $user = Auth::user();
    return view ('layouts.desarrollos.documentosChacala');
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
       $user->rfc = $request->input('rfc');
        if($request -> hasFile('imagen')){
            $file = $request -> imagen;
            $file->move(public_path(). '/imagenes', $file->getClientOriginalName());
            $user->imagen = $file->getClientOriginalName();
        }
        if($request -> hasFile('ineFro')){
            $file = $request -> ineFro;
            $file->move(public_path(). '/imagenes', $file->getClientOriginalName());
            $user->ineFro = $file->getClientOriginalName();
        }
        if($request -> hasFile('inePos')){
            $file = $request -> inePos;
            $file->move(public_path(). '/imagenes', $file->getClientOriginalName());
            $user->inePos = $file->getClientOriginalName();
        }
       $user->save();
       return redirect('/profile')->with('info', 'Datos de perfil actualizados correctamente');
})->name('user.update');

//-------------------------------------------------------editar Usuario-----------------------------------------------------------------------------
//-------------------------------------------------------Proyectos 2-----------------------------------------------------------------------------

Route::get('proyectos', function (){
    $user = Auth::user();
    $proyects = Proyects::all();
    return view ('layouts.proyectos' , compact('user', 'proyects'));
});

Route::get('inversion/{id}/invertir', function($id){
    $user = Auth::user();
    $proyectos = Proyects::All();
    $proyecto = Proyects::findOrFail($id);
    $disponible = DB::table("inversiones")->where('proyecto',  $id )->get()->sum("monto");
    $vendido = $costo = DB::table("proyects")->where('id', $id )->sum("costo") - $disponible  ;
    $historial = DB::table("inversiones")->where('userId',  $user->id )->get();
    return view('layouts.invertir', compact('user','proyecto', 'disponible','historial', 'vendido','proyectos' ));    
})->name('inversion.invertir');


Route::put('/inversion/{id}',function(Request $request, $id){
    $inversion = new Inversiones;
    $user = Auth::user();
    if( $user->capital < 1  ){
        return redirect('/dashboard')->with('error', 'No puede ingresar valores inferiores al valor de la accion o su capital.');
        }elseif( $inversion -> monto = $request->input('cantidadInvertida') > $user->capital ){
            return redirect('/dashboard')->with('error', 'No puede ingresar valores superiores a su capital a su capital.');
        }else{
            $inversion->proyecto = $request->input('proyectoId');
            $inversion->tipoCotrato = $request->input('tipoCotrato');
            $inversion->monto = $request->input('cantidadInvertida');
            $inversion->userId = $request->input('userId');
            $inversion->save();
            DB::table('users')->where('id',  $user->id )->decrement('capital' , $inversion-> monto = $request->input('cantidadInvertida'));
        }
    return redirect('/dashboard')->with('info',  'Inversion guardada.' );
})->name('inversion.invertirUpdate');

Route::get('/desarrollo/{id}',function(Request $request, $id){
    $user = Auth::user();
    $capInvertido = DB::table("inversiones") ->where('userId',  $user->id )->where( 'proyecto' , $id )->get()->sum("monto");
    $nomProyect = DB::table("proyects")->where( 'id' , $id )->value('name');
    $inversInProy = DB::table('inversiones')->where( 'proyecto' , $id )->distinct('userId')->count('userId');
    $numDocuments = DB::table("documentos")->where( 'idProyecto' , $id )->get()->count();
    $documents = DB::table("documentos")->where( 'idProyecto' , $id )->get();
    return view('layouts.desarrollo', compact('documents','numDocuments','user','capInvertido','nomProyect','inversInProy'));
})->name('desarrollo.ver');
//-------------------------------------------------------Proyectos 2-----------------------------------------------------------------------------





Auth::routes();
Route::get('/home', 'HomeController@index')->name('layouts.dashboard');

