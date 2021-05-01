
@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Chartjs',true)
@section('plugins.Sweetalert2',true)
@section('plugins.ionicon',true)
@section('content')


<div class="container  ">
  <div class="container card bg-dark ">
    <div class="row">
     <br>
    </div>
    <h4>Capital: {{"$ " . number_format($user->capital, 0, ",", ",")}}.00</h4>
    <br>
  </div>


    <div class="row">
        <div class="col-sm-6">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Contrato tipo 1</h5>
              <p class="card-text">
                  <h3>Ventas</h3>
                </p>
                <p class="text-muted">
                  Costo por accion $ 500,000.00 MXN
                </p>
                <br>
                <form class="form-inline d-flex justify-content-center " action="{{ route('crear.inversion2') }}"  method="POST">
                  @method('post')
                  @csrf
                  <input type="text" name="proyectoId" value="2" style="display: none;">
                  <input type="text" name="tipoCotrato" value="1" style="display: none;">
                    <div class="form-group mx-sm-2 mb-2">
                      <input type="text" class="form-control" name="cantidadInvertida"  placeholder="Multiplos de 500,000.00" required>
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
              <h5 class="card-title">Contrato tipo 2</h5>
              <p class="card-text">
                  <h3>Porcentaje</h3>
                </p>
                <p class="text-muted">
                  Costo por accion $ 500,000.00 MXN
                </p>
                <br>
                <form class="form-inline d-flex justify-content-center " action="{{ route('crear.inversion2') }}"  method="POST">
                  @method('post')
                  @csrf
                  <input type="text" name="proyectoId" value="2" style="display: none;">
                  <input type="text" name="tipoCotrato" value="2" style="display: none;">
                    <div class="form-group mx-sm-2 mb-2">
                      <input type="text" class="form-control" name="cantidadInvertida"  placeholder="Multiplos de 500,000.00" required>
                    </div>
                    <input type="currency" min="500000" step="any" name="userId" value="{{$user->id}}" style="display: none;">
                    <button type="submit" class="btn btn-primary mb-2">Invertir</button>
                 </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container bg-dark rounded">
        <h5 class="text-center">Historial de inversiones</h5>
      <table class="table table-hover rounded bg-dark table-responsive-sm">
        <thead>
          <tr>
            <th class="text-center" scope="col text-center">Proyecto</th>
            <th class="text-center" scope="col text-center">Contrato</th>
            <th class="text-center" scope="col text-center">Cantidad</th>
            <th class="text-center" scope="col text-center">Fecha</th>
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
            <td class="text-center"><small>{{"$" . number_format($item->monto, 0, ",",",")}}.00</small></td>
            <td class="text-center"><small>{{date('d-m-Y',strtotime($item->created_at))}}</small></td>
            
          </tr>
          @endforeach
         
        </tbody>
      </table>
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
