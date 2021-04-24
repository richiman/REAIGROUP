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
                    <div class="inner"> 
                      
                      <h3>{{"$ " . number_format($capitalInvertido, 0, ",", ",")}}.00</h3>
                      <p>Capital invertido en pesos.</p>
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
                      <h3>0</h3>
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
                            <strong>Proyectos con participacion</strong>
                          </p>
      
                          <div class="progress-group">
                            Sin proyectos 
                            <span class="float-right"><b>0</b>/100</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 0%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
      
                          
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
                            <span class="description-text">INGRESOS TOTALES</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 0%</span>
                            <h5 class="description-header">$0.00</h5>
                            <span class="description-text">COSTO TOTAL </span>
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
                            <span class="description-text">CUMPLIMIENTO DE OBJETIVOS</span>
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
            <section class="col-lg-6 connectedSortable ui-sortable">


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
                              <i class="far fa-circle text-danger"></i> Invierte para ver datos
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
                            <td class="text-center">Sin proyectos</td>
                            <td class="text-center text-success">0.00</td>
                            <td class="text-center text-success">0%</td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                    <!-- /.footer -->
                  </div>
                  
           

          <!-- Calendar -->
        
            
          </section>
          
        </div>
       </div>
@endsection
@section('js')  
<script>
    
//-------------
    //- line CHART -
    //-------------
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
  /*  var ctx = document.getElementById('pieChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Barlovento', 'Nuevo Chacala' ],
        datasets: [{
            label: '# Proyectos',
            data: [0, 0,],
            backgroundColor: [
                'rgba(255, 162, 35, 0.5)',
                'rgba(54, 162, 235, 0.5)',   
            ],
            borderWidth: 1
        }]
    },
    options: {
      
    }
});*/


</script>
    
@endsection