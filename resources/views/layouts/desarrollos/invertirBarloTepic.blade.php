
@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Chartjs',true)
@section('plugins.Sweetalert2',true)
@section('plugins.ionicon',true)
@section('content')


<div class="container ">
    <h1>¿Como invertir?</h1>
    <div class="row">
        <div class="col-sm-6">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Contrato tipo 1</h5>
              <p class="card-text">
                  <h4>A base de las ventas</h4>
                </p>
                <form class="form-inline d-flex justify-content-center ">
                    <div class="form-group mx-sm-2 mb-2">
                      <label for="inputPassword2" class="sr-only">Password</label>
                      <input type="password" class="form-control" id="inputPassword2" placeholder="cantidad">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Invertir</button>
                  </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card bg-dark">
            <div class="card-body">
                <h5 class="card-title">Contrato tipo 1</h5>
             <label for="staticEmail2" class="sr-only">Cantidad</label>
              <p class="card-text"> <h4>A base de porcentaje de las ventas anuales</h4>
              </p>
              <form class="form-inline d-flex justify-content-center ">
                <div class="form-group mx-sm-2 mb-2">
                  <label for="inputPassword2" class="sr-only">Password</label>
                  <input type="password" class="form-control" id="inputPassword2" placeholder="cantidad">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Invertir</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>


@endsection