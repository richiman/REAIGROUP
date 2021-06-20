
@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Chartjs',true)
@section('plugins.Sweetalert2',true)
@section('plugins.ionicon',true)
@section('content')
<div class="container">
  <h2 class="text-center"> {{$proyecto->name}} </h2>
    <div class="container card bg-dark ">
        
        
      
        <div class="row">
            <div class="col-sm-6 text-center">
              <div class="card bg-dark">
                <div class="card-body">
                  <h4 class=" text-center">Comprar acciones </h4>
                  <p class="card-text"> <h5>Ventas</h5> </p>
                    <p class="text-muted">  Costo por accion {{"$ " . number_format($proyecto->costoPaccion, 0, ",", ",")}}.00 MXN con utilidad del 25% Anual. </p>
                    <form class="form-inline d-flex justify-content-center " action="{{ route('inversion.invertirUpdate' , $proyecto->id) }}"  method="POST">
                      @method('put')
                      @csrf
                      <input type="text" name="proyectoId" value="{{$proyecto->id}}" style="display: none ;">
                      <input type="text" name="tipoCotrato" value="1" style="display: none;">
                        <div class="form-group mx-sm-2 mb-2">
                            @if ($disponible >= $proyecto->costo)
                            <h6 class="text-success" >Lo sentimos ya no existen acciones disponibles para este proyecto. </h6>
                            </div>
                            @else
                            <div class="container ">
                              <div class="row ">
                                <div class="col-md ">
                                  <h5>Inversion por accion</h5>
                                  <input  id="myText" class="form-control" disabled type="text" placeholder="0">
                                  <br><br>
                                </div>
                              </div>
                              <div class="row " >
                                <div class="col-md " >
                                  <h5>Porcentaje</h5>
                                  <select type="number" class="form-control" name="cantidadInvertida"  onchange="myFunction(event)" required>
                                    <option value="0"> 0%</option>
                                    <option value="{{ $proyecto->costoPaccion}}">10%</option>
                                    <option value="{{ $proyecto->costoPaccion * 2}}">20%</option>
                                    <option value="{{ $proyecto->costoPaccion * 3}}">30%</option>
                                    <option value="{{ $proyecto->costoPaccion * 4}}">40%</option>
                                    <option value="{{ $proyecto->costoPaccion * 5}}">50%</option>
                                  </select>  
                                  <br><br>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md " >
                                  <input type="currency" min="750000" step="any" name="userId" value="{{$user->id}}" style="display: none;">
                                  <button type="submit" class="btn btn-primary mb-2" >Comprar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                            @endif
                     </form>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-dark">
                  <div class="card-body">
                   <h4 class="text-center">Disponibles | No disponibles</h4> 
                <canvas id="barChart2"  ></canvas>
                <br><br><br>
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
                @foreach ($proyectos as $proyecto)
                @if ($item->proyecto ==  $proyecto->id)
                <th scope="row">{{$proyecto->name}}</th>
                @elseif($item->proyecto == $proyecto->id)
                @endif
                @endforeach
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
                data: [{{$vendido}},{{$disponible}}],
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
    function myFunction(e) {
    document.getElementById("myText").value = e.target.value
}
    </script>
    
</div>
@endsection