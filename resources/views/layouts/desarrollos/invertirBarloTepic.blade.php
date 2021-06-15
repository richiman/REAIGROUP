
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
        <div class="col-sm-6 text-center">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Comprar acciones </h5>
              <p class="card-text"> <h3>Ventas</h3> </p>
                <p class="text-muted">  Costo por accion $ 750,000.00 MXN </p>
                <form class="form-inline d-flex justify-content-center " action="{{ route('crear.inversion') }}"  method="POST">
                  @method('post')
                  @csrf
                  <input type="text" name="proyectoId" value="1" style="display: none;">
                  <input type="text" name="tipoCotrato" value="1" style="display: none;">
                    <div class="form-group mx-sm-2 mb-2">
                      @if ($porcProyecto >= 7500000)
                      <h6 class="text-success" >Lo sentimos ya no existen acciones   disponibles para este proyecto. </h6>
                      </div>
                      @else
                         <select type="number" class="form-control" name="cantidadInvertida"  placeholder="Multiplos de 750,000.00" required>
                          <option value="750000"> 1 = 10%</option>
                          <option value="1500000"> 2 = 20%</option>
                          <option value="2250000"> 3 = 30%</option>
                          <option value="3000000"> 4 = 40%</option>
                          <option value="3750000"> 5 = 50%</option>
                        </select>
                      </div>
                      <input type="currency" min="750000" step="any" name="userId" value="{{$user->id}}" style="display: none;">
                      <button type="submit" class="btn btn-primary mb-2" >Invertir</button>
                      @endif
                 </form>
                 <br><br><br><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-dark">
              <div class="card-body">
               <h6 class="text-center">Disponibles | No disponibles</h6> 
            <canvas id="barChart2"  ></canvas>
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
    //--------------
    //- pie CHART -
   //--------------
   var ctx = document.getElementById('barChart2').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Disponible', 'Comprado'],
        datasets: [{
            label: 'Acciones disponibles ',
            data: [{{$disponibleTepic}},{{$porcProyecto}}],
            backgroundColor: [
                'rgba(128, 255, 128, 0.75)',
                'rgba(255, 92, 51, 0.75)',
               
            ],
          borderWidth: 1
        }]
    }, options:{
      responsive: true
    },
});

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