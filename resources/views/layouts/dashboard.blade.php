@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Chartjs',true)
@section('plugins.Sweetalert2',true)
@section('plugins.ionicon',true)

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner "> 
                      <h3 class="cabeza" >{{"$" . number_format($capitalInvertido, 0, ",", ",")}}</h3>
                      <p>Capital invertido</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>0<sup style="font-size: 20px">%</sup></h3>
                      <p>Incremento</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-chart-line"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>{{$numProyectos}}</h3>
                      <p>Proyectos registrados </p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-file-alt"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>{{$count}}</h3>
                      <p>Inversionitas registrados</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <div class="row ">
                <div class="col-md-12">
                  <div class="card bg-dark">
                    <div class="card-header">
                      <h5 class="card-title">General</h5>
      
                      <div class="card-tools ">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header --> 
                    <div class="card-body " >
                      <div class="row">
                        <div class="col-md-8">
                          
                          <div class="chart">
                            <div class="chartjs-size-monitor">
                              <div class="chartjs-size-monitor-expand">
                                <div class="">
                                  </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                  <div class="">
                                    </div>
                                  </div>
                                </div>
                            <!-- Sales Chart Canvas -->
                            <canvas id="barChart2" width="500" height="200">

                            </canvas>
                          </div>
                          <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                          <p class="text-center">
                            <strong>Proyectos con participacion {{$proyectosRegistrados}}</strong>
                          </p>
                        <!-- /.progress-group -->
                      

                          <div class="progress-group"> 
                            @foreach ($proyectosRegistradosList as $item)
                            @if($item->proyecto == 1)         
                            Barlovento tepic  
                            <span class="float-right"><b>0</b>/100</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 0%"></div>
                            </div>
                            <br>
                          
                             @elseif($item->proyecto == 2)         
                             Barlovento las varas
                             <span class="float-right"><b>0</b>/100</span>
                             <div class="progress progress-sm">
                               <div class="progress-bar bg-primary" style="width: 0%"></div>
                             </div>
                             <br>
                             @elseif($item->proyecto == 3)         
                             Barlovento New chacal 
                             <span class="float-right"><b>0</b>/100</span>
                             <div class="progress progress-sm">
                               <div class="progress-bar bg-primary" style="width: 0%"></div>
                             </div>
                             <br>
                              @else
                          @endif
                          @endforeach
                         
                          
                        </div>
                          <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-sm-3 col-6 ">
                          <div class="description-block border-right ">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 0%</span>
                            <h5 class="description-header">$0.00</h5>
                            <span class="description-text">VENTAS TOTALES</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 0%</span>
                            <h5 class="description-header">$0.00</h5>
                            <span class="description-text">CAPITAL TOTAL </span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 0%</span>
                            <h5 class="description-header">$0.00</h5>
                            <span class="description-text">GANANCIA TOTAL </span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 0%</span>
                            <h5 class="description-header">0</h5>
                            <span class="description-text">UTILIDADES
                            </span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
            </div>
            <div class="row">
            <section class="col-lg-12  ">
                <div class="card bg-dark">
                    <div class="card-header">
                      <h3 class="card-title">Acciones</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="chart-responsive"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                          <canvas id="pieChart" width="300" height="150">
                          </div>
                          
                          <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4 ">
                          <ul class="chart-legend clearfix">
                            <li>
                              <div class="progress-group">
                                @if($proyectosRegistradosList->proyecto ='1')         
                                <i class="far fa-circle text-danger"></i> - Barlovento tepic 
                                <br><br>
                                @else
                                @endif
                                @if($proyectosRegistradosList->proyecto  ='2') 
                                <i class="far fa-circle text-info"></i> - Barlovento Las varas
                                <br><br>
                                @else
                                @endif
                                @if($proyectosRegistradosList->proyecto  ='3') 
                                <i class="far fa-circle text-warning"></i> - Barlovento Chacala
                                <br><br>
                                @else
                                @endif
                            </li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                    </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer   p-0">
                      <table class="table bg-dark  ">
                        <thead>
                          <tr>
                            <th class="text-center" scope="col">Coin</th>
                            <th class="text-center" scope="col">Proyecto</th>
                            <th class="text-center" scope="col">Inversion</th>
                            <th class="text-center" scope="col">Participacion</th>
                            <th class="text-center" scope="col">$/Accion</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                           
                          @if($proyectosRegistradosList->proyecto ='1')    
                          <tr>     
                          <td class="text-center"><img style=" width: 25px;" src="..\imagenes\t.png" /> </td>  
                            <td class="text-center"> Barlovento tepic</td>   
                            <td class="text-center text-success">{{"$ " . number_format($capitaTep, 0, ",", ",")}}.00</td>
                            <td class="text-center text-success">{{$partTepic}}%</td>
                            <td class="text-center text-success">$ 750,000.00</td>
                          </tr>
                          @else
                          @endif
                          <tr>
                           @if($proyectosRegistradosList->proyecto ='2') 
                           <td class="text-center"><img style=" width: 25px;" src="..\imagenes\l.png" /> </td>  
                           <td class="text-center"> Barlovento Las varas</td>   
                           <td class="text-center text-success">{{"$ " . number_format($capitaVars, 0, ",", ",")}}.00</td>
                           <td class="text-center text-success">{{$parVars}}%</td>
                           <td class="text-center text-success">$ 500,000.00</td>
                          </tr>
                          @else
                          @endif
                          <tr>
                           @if($proyectosRegistradosList->proyecto ='3') 
                            <td class="text-center"><img style=" width: 25px;" src="..\imagenes\c.png" /> </td>  
                            <td class="text-center">  Barlovento Chacala</td>  
                            <td class="text-center text-success">{{"$ " . number_format($capitaChaca, 0, ",", ",")}}.00</td>
                            <td class="text-center text-success">{{$parChaca}}%</td>
                            <td class="text-center text-success">$ 500,000.00</td>
                          </tr>
                          @else 

                           @endif
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
          </section>
        </div>
       </div>
@endsection
@section('js')  
<script>
    //--------------
    //- pie CHART -
   //--------------
   var ctx = document.getElementById('pieChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Barlovento tepic', 'Barlovento Las varas','Barlovento Chacala'],
        datasets: [{
            label: 'Acciones disponibles ',
            data: [{{$capitaTep}},{{$capitaVars}},{{$capitaChaca}}],
            backgroundColor: [
                'rgba(255, 99, 142, 0.3)',
                'rgba(54, 162, 235, 0.3)',
                'rgba(255, 206, 86, 0.3)',
            ],
          borderWidth: 1
        }]
    }, options:{
      responsive: true
    },
});

    
    var ctx = document.getElementById('barChart2').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        datasets: [{
            label: 'Registro de inversion ',
            data: [{{$ene}}, {{$feb}},{{$mar}}, {{$abr}},{{$may}},{{$jun}},{{$jul}},{{$ago}},{{$sep}},{{$oct}},{{$nov}},{{$dec}}],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',      
            ],
          borderWidth: 1
        }]
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


