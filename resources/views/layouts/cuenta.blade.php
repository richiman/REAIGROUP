@extends('adminlte::page')
@section('title', 'Proyectos')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-gradient-dark">
                <div class="card-header"><h4>Datos bancarios</h4></div>
                <div class="card-body">
                    @csrf
                      <h1>MXN:{{"$ " . number_format($user->capital, 0, ",", ".")}}.00</h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
