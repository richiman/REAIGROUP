@extends('adminlte::page')
@section('plugins.Sweetalert2',true)
@section('title', 'Perfil')
@section('plugins.Chartjs',true)
@section('content')
@if (session('info'))
<div class="alert alert-success">
{{session('info')}}
</div>
@endif
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
              <h4>BBVA</h4>
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
            
            <div class="container">
              <h2 class="text-center">Configuracion de la cuenta</h2>
              <form action="{{ route('user.update', $user->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="">
                  <label for="">Nombre completo</label>
                  <input type="text" class="form-control" value="{{$user->name}}" disabled >
                </div>
                <div class="">
                  <label for="">Correo</label>
                  <input type="email" class="form-control" value="{{$user->email}}"  disabled>
                </div>
                <div class="">
                  <label for="">Numero de telefono</label>
                  <input type="number" class="form-control" value="{{$user->telf}}" name="telf"  placeholder="3111234567">
                </div>
                <div class="form-group">
                  <label for="">Direccion</label>
                  <input type="text" class="form-control" value="{{$user->direccion}}" name="direccion" placeholder="Calle numero col">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" value="{{$user->ciudad}}" name="ciudad" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Estado</label>
                 <input type="text" class="form-control" value="{{$user->estado}}" name="estado" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Codigo postal</label>
                    <input type="text" class="form-control" name="cp" value="{{$user->cp}}">
                  </div>
                </div>
                <button type="submit" style="float: right;" class="btn btn-primary">Guardar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection
