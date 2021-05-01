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
                      <h3>3</h3>
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
                      <h5 class="card-title">General | inversiones</h5>
      
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
                          
                          <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <!-- Sales Chart Canvas -->
                            <canvas id="barChart2" height="198" style="height: 180px; display: block; width: 550px;" width="605" class="chartjs-render-monitor"></canvas>
                          </div>
                          <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                          <p class="text-center">
                            <strong>Proyectos con participacion {{$proyectosRegistrados}}</strong>
                          </p>
                        <!-- /.progress-group -->
                          @foreach ($proyectosRegistradosList as $item)
                          <div class="progress-group">
                           @if($item->proyecto =='1')         
                              Barlovento tepic
                          @elseif($item->proyecto =='2') 
                              Barlovento Las varas
                          @elseif($item->proyecto =='3') 
                              Barlovento Chacala
                          @endif
                            <span class="float-right"><b>0</b>/100</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 0%"></div>
                            </div>
                          </div>
                          @endforeach

                      
      
                          
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
              <div class="row">
           <!-- Left col -->
            <section class="col-lg-8  ">


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
                            <canvas id="pieChart" height="84" width="170" class="chartjs-render-monitor -" style="display: block; height: 77px; width: 155px;"></canvas>
                          </div>
                          <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4 ">
                          <ul class="chart-legend clearfix">
                            <li>
                              @foreach ($proyectosRegistradosList as $item)
                              <div class="progress-group">
                               @if($item->proyecto =='1')         
                               <i class="far fa-circle text-success"></i>Barlovento tepic
                              @elseif($item->proyecto =='2') 
                              <i class="far fa-circle text-success"></i>Barlovento Las varas
                              @elseif($item->proyecto =='3') 
                              <i class="far fa-circle text-success"></i>Barlovento Chacala
                              @else
                              Invierte para ver datos
                              @endif
                              @endforeach
                            </li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer  p-0">
                      <table class="table bg-dark">
                        <thead>
                          <tr>
                            <th class="text-center" scope="col">Proyecto</th>
                            <th class="text-center" scope="col">Inversion</th>
                            <th class="text-center" scope="col">Participacion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           @foreach ($proyectosRegistradosList as $item)
                            @if($item->proyecto =='1')         
                            <td class="text-center"> Barlovento tepic</td>   
                            <td class="text-center text-success">{{"$ " . number_format($item->monto, 0, ",", ",")}}.00</td>
                            <td class="text-center text-success">10%</td>
                          </tr>
                           @elseif($item->proyecto =='2') 
                           <td class="text-center"> Barlovento Las varas</td>   
                           <td class="text-center text-success">{{"$ " . number_format($item->monto, 0, ",", ",")}}.00</td>
                           <td class="text-center text-success">10%</td>
                          </tr>
                           @elseif($item->proyecto =='3') 
                            <td class="text-center">  Barlovento Chacala</td>  
                            <td class="text-center text-success">{{"$ " . number_format($item->monto, 0, ",", ",")}}.00</td>
                            <td class="text-center text-success">10%</td>
                          </tr>
                           @endif
                           @endforeach
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
    //- line CHART -
   //--------------
    var ctx = document.getElementById('barChart2').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        datasets: [{
            label: '# Ganancia Mensual',
            data: [0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0],
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
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    //-------------
    //- radial CHART -
    //-------------
  var ctx = document.getElementById('pieChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["
          Barlovento Tepic,  Barlovento las Varas, Barlovento Chacala"
        ],
        datasets: [{
            label: '# Proyectos',
            data: [1, 4,],
            backgroundColor: [
                'rgba(255, 162, 35, 0.5)',
                'rgba(54, 162, 235, 0.5)',   
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});

</script>
@endsection


