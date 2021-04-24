
@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Chartjs',true)
@section('plugins.Sweetalert2',true)
@section('plugins.ionicon',true)
@section('content')


<div class="container ">
  <div class="row"><h1>¿Como invertir? </h1>  </div>
  <h1>Capital: {{"$ " . number_format($user->capital, 0, ",", ",")}}.00</h1>

    <div class="row">
        <div class="col-sm-6">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Contrato tipo 1</h5>
              <p class="card-text">
                  <h4>A base de las ventas</h4>
                </p>
                <form class="form-inline d-flex justify-content-center " action="{{ route('crear.inversion') }}"  method="POST">
                  @method('post')
                  @csrf
                  <input type="text" name="proyectoId" value="1" style="display: none;">
                    <div class="form-group mx-sm-2 mb-2">
                      <input type="text" class="form-control" name="cantidadInvertida"  placeholder="cantidad" required>
                    </div>
                    <input type="currency" min="500000" step="any" name="userId" value="{{$user->id}}" style="display: none;">
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
                  <input type="password" class="form-control" id="inputPassword2" placeholder="cantidad" required>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Invertir</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
</div>


@endsection
@section('js')  
<script>

@if (session('info'))
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
Toast.fire({
  type: 'success',
  title: '{{session('info')}} ' 
})

@endif

@if (session('error'))
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
Toast.fire({
  type: 'warning',
  title: '{{session('error')}} ' 
})

@endif
</script>

@endsection