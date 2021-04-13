@extends('adminlte::page')

@section('title', 'Perfil')
@section('plugins.Chartjs',true)
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline bg-dark">
          <div class="card-body box-profile">
            @csrf
            <h3 class="profile-username text-center">{{$user->name}}</h3>
            <p class="text-muted text-center">Software Engineer</p>
          </div>
        </div>
        <div class="card card-primary bg-dark">
          <div class="card-header">
            <h3 class="card-title">Acerca de mi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Educación</strong>

            <p class="text-muted">
              {{$user->educt}}
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicacion</strong>

            <p class="text-muted">{{$user->locat}}</p>
            <hr>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card bg-dark">
          <div class="card-header p-2">
             <h4 class="nav-link active" href="#activity" data-toggle="tab">Cuenta | valance</h4>
          </div>
          <div class="card-body">
            <div class="container">
             <div class="row">
              <div class="col-4">
                <h1>MXN:{{"$ " . number_format($user->capital, 0, ",", ".")}}.00
                </h1> <br>
              </div>
             </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

    