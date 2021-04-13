@extends('adminlte::page')

@section('title', 'Proyectos')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Lista de proyectos disponibles (Ejemplos)</h4></div>
                <div class="card-body ">
                    <div class="card-deck">
                    @foreach ($proyects as $proyect)
                    <div class="card" style="width: 18rem;">
                        @csrf
                        <img class="card-img-top" src="https://picsum.photos/300/300" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$proyect->name}}</h5>
                          <p class="card-text">{{$proyect->desc}}.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{$proyect->estatus}}.</small>
                          </div>
                      </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
