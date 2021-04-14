@extends('adminlte::page')
@section('plugins.Sweetalert2',true)
@section('title', 'Perfil')
@section('plugins.Chartjs',true)
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline bg-dark">
          <div class="card-body ">
            @csrf
            <h3 class="profile-username text-center">{{$user->name}}</h3>
            <p class="text-muted text-center">Software Engineer</p>
            <br>
            
           
              <div class="nav flex-column  " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link  nav-link navbar-dark bg-dark active  " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Fondear</a>
                <a class="nav-link nav-link navbar-dark bg-dark" id="v-pills-retirar-tab" data-toggle="pill" href="#v-pills-retirar" role="tab" aria-controls="v-pills-retirar" aria-selected="false">Retirar</a>
                <a class="nav-link nav-link navbar-dark bg-dark" id="v-pills-config-tab" data-toggle="pill" href="#v-pills-config" role="tab" aria-controls="v-pills-config" aria-selected="false">Configuracion</a>
              </div>
              
          </div>
        </div>
      </div>
        <div class="col-md-8">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="container text-center">
            <h3>Fondear a cuenta bancaria</h3>
            <h6 class="text-muted">Beneficiario<h6>
              <h4>REAIGROUP</h4>
              <br>
              <h6 class="text-muted">Banco reseptor</h6>
              <h4>Bancomer</h4>
              <h6 class="text-muted">Clabe</h6>
              <h4>646180115427950481</h4>
            <h6>Tu referencia: 415200{{$user->id}}</h6>
          </div>
          </div>
          <div class="tab-pane fade" id="v-pills-retirar" role="tabpanel" aria-labelledby="v-pills-retirar-tab">
            <div class="container text-center">
              <h3>Retirar a cuenta bancaria</h3>
              <h6 class="text-muted">Tienes: <h6>
                <h4>{{"$ " . number_format($user->capital, 0, ",", ",")}}.00</h4>
                <br>
                <h6 class="text-muted">Monto</h6>
            
                <input type="text" class="form-control  col-md-4 mx-auto"  placeholder="100.00">
         
                <br>
                <h6 class="text-muted ">Ingresa tu cuenta bancaria</h6>
                <input type="text" class="form-control  col-md-4 mx-auto"  placeholder="123456">
                <br>
                <button type="button" class="btn btn-secondary">Retirar</button>
                <br>
            </div>
            <br> 
          </div>
          <div class="tab-pane fade" id="v-pills-config" role="tabpanel" aria-labelledby="v-pills-config-tab">
            <h2>Configuracion de la cuenta</h2>
          </div>
         
         
        </div>
      </div>
      
      </div>
    </div>
  </div>
@endsection
