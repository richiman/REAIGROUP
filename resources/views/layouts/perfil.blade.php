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
        <div class="card card-primary  card-outline bg-dark">
          <div class="card-body">
            @csrf
            <div class=" d-flex justify-content-between style="width: 18rem;">
              <img src="{{asset('imagenes/'.Auth::user()->imagen) }}"  class="card-img-top" alt="Profile pict">
            </div>
            <h3 class="profile-username text-center">{{$user->name}}</h3>
            <p class="text-muted text-center">Capital</p>
            <h5 class=" text-center">{{"$ " . number_format($user->capital, 0, ",", ",")}}.00</h5>
            <br>
            
           
              <div class="nav flex-column  " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link  nav-link navbar-dark bg-dark active  " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Fondear</a>
                <a class="nav-link nav-link navbar-dark bg-dark" id="v-pills-retirar-tab" data-toggle="pill" href="#v-pills-retirar" role="tab" aria-controls="v-pills-retirar" aria-selected="false">Retirar</a>
                <a class="nav-link nav-link navbar-dark bg-dark" id="v-pills-historial-tab" data-toggle="pill" href="#v-pills-historial" role="tab" aria-controls="v-pills-historial" aria-selected="false">Historial</a>
                <a class="nav-link nav-link navbar-dark bg-dark" id="v-pills-config-tab" data-toggle="pill" href="#v-pills-config" role="tab" aria-controls="v-pills-config" aria-selected="false">Configuracion</a>
              </div>
              
          </div>
        </div>
      </div>
        <div class="col-md-8 card card-primary  card-outline bg-dark ">
        <div class="tab-content  " id="v-pills-tabContent">
          <div class="tab-pane  fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <br><br><br><br>
            <div class="container text-center">
            <h3>Fondear </h3>
            <h6 class="text-mted">Beneficiario<h6>
              <h4>REAIGROUP S.A.P.I. DE C.V.</h4>
              <br>
              <h6 class="text-muted">Banco</h6>
              <h4>BBVA</h4>
              <h6 class="text-muted">Clabe</h6>
              <h4>646180115427950481</h4>
              <h6 class="text-muted">Referencia</h6>
            <h6>415200{{$user->id}}</h6>
          </div>
          </div>
          <div class="tab-pane fade  " id="v-pills-retirar" role="tabpanel" aria-labelledby="v-pills-retirar-tab">
            <br><br><br><br>
            <div class="container text-center">
              <h3>Retirar </h3>
              <h6 class="text-muted">Tienes: <h6>
                <h4>{{"$ " . number_format($user->capital, 0, ",", ",")}}.00</h4>
                <h6 class="text-muted ">Beneficiario</h6>
                <h4>{{$user->name}}</h4>
                <br>
                <h6 class="text-muted ">Ingresa tu cuenta bancaria</h6>
                <input type="text" class="form-control  col-md-4 mx-auto"  placeholder="1234-5678-9101-1120">
                <br>
                <h6 class="text-muted">Monto</h6>
                <input type="text" class="form-control  col-md-4 mx-auto"  placeholder="100.00">
                <br>
                <button type="button" class="btn btn-secondary">Retirar</button>
                <br>
            </div>
            <br> 
          </div>
          <div class="tab-pane fade  " id="v-pills-historial" role="tabpanel" aria-labelledby="v-pills-historial-tab">
            <br><br><br><br>
            <div class="container text-center">
              <h3>Historial de inversiones </h3>
              <table class="table table-hover rounded bg-dark table-responsive-sm">
                <thead>
                  <tr>
                    <th class="text-center" scope="col text-center">Proyecto</th>
                    <th class="text-center" scope="col text-center">Tipo de contrato</th>
                    <th class="text-center" scope="col text-center">Cantidad</th>
                    <th class="text-center" scope="col text-center">Fecha de inversion</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($historial as $item)
                  <tr>
                    @if($item->proyecto =='1')         
                    <td class="text-center">Barlo tepic</td>
                    @elseif($item->proyecto =='2') 
                    <td class="text-center">Barlo las varas</td>
                    @elseif($item->proyecto =='3') 
                    <td class="text-center">Barlo nuevo chacala</td>
                    @endif
                     @if($item->tipoCotrato =='1')         
                     <td class="text-center">Ventas</td>
                     @elseif($item->tipoCotrato =='2') 
                     <td class="text-center">Porcentaje</td>
                     @endif
                    <td class="text-center"><small>{{"$" . number_format($item->monto, 0, ",", ",")}}.00</small></td>
                    <td class="text-center"><small>{{  date('d-m-Y', strtotime($item->created_at))}}</small></td>
                  
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>
            <br> 
          </div>
          <div class="tab-pane fade" id="v-pills-config" role="tabpanel" aria-labelledby="v-pills-config-tab">
            
            <div class="container">
              <h2 class="text-center">Configuracion de la cuenta</h2>
              
              <form action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data" method="POST">
                @method('put')
                @csrf
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imagen" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Imagen de perfil</label>
                  </div>
                </div>
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
