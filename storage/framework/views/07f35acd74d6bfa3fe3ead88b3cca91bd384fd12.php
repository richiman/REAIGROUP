

<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('plugins.Chartjs',true); ?>
<?php $__env->startSection('plugins.Sweetalert2',true); ?>
<?php $__env->startSection('plugins.ionicon',true); ?>
<?php $__env->startSection('content'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner"> 
                      
                      <h3>$ 0.00</h3>
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
                      <p>Avance general</p>
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
                      <h3>0%</h3>
                      <p>Tus acciones</p>
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
                      <h3>0</h3>
      
                      <p>Inversionitas en el proyecto</p>
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
                      <h5 class="card-title">Barlovento Las Varas | Desarrollo</h5>
      
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
                            <strong>Cumplimiento de objetivos</strong>
                          </p>
      
                          <div class="progress-group">
                             Infraestructura del proyecto
                            <span class="float-right"><b>0</b>/100</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-info" style="width: 0%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
      
                          <div class="progress-group">
                            Retorno de capital
                            <span class="float-right"><b>0</b>/100</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-danger" style="width: 0%"></div>
                            </div>
                          </div>
      
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            Pagos del desarrollo 
                            <span class="float-right"><b>0</b>/100</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-warning" style="width: 0%"></div>
                            </div>
                          </div>
      
                          <!-- /.progress-group -->
                          <div class="progress-group">
                             Utilidad
                            <span class="float-right"><b>0</b>/100</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-success" style="width: 0%"></div>
                            </div>
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
                            <span class="description-percentage text-info"><i class="fas fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">$ 5,000,000.00</h5>
                            <span class="description-text">Etapa 1</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-danger"><i class="fas fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">$ 5,000,000.00</h5>
                            <span class="description-text">Etapa 2 </span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">$ 5,000,000.00</h5>
                            <span class="description-text">Etapa 3 </span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block">
                            <span class="description-percentage text-success"><i class="fas fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">$ 20,000,000.00</h5>
                            <span class="description-text">Completo</span>
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
                <section class="col-lg connectedSortable ui-sortable ">
                  <div class="card  bg-dark">
                      <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                          <h3 class="card-title">Ventas</h3>
                          <div class="card-tools">
                              <!-- button with a dropdown -->
                             
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                        </div>
                      </div>
                      <div class="card-body ">
                        <div class="d-flex">
                          <p class="d-flex flex-column">
                            <span class="text-bold text-lg">$0.00</span>
                            <span>Ganancias </span>
                          </p>
                          <p class="ml-auto d-flex flex-column text-right">
                            <span class=" ">
                              <i class="fas fa-arrow-up"></i> 0.0%
                            </span>
                            <span class="text">Desde el mes pasado</span>
                          </p>
                        </div>
                        <!-- /.d-flex -->
                          <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class="">
                              </div>
                          </div>
                          <div class="chartjs-size-monitor-shrink"><div class="">
                              </div>
                          </div>
                      </div>
                           <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 447px;" width="447" height="250" class="chartjs-render-monitor"></canvas>
                          </div>
                      </div>
                    </div>
                  
                      <!-- /.card-body -->
                    </div>
              </section>
           <!-- Left col -->

  
        </div>
       </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>  
<script>
    //-------------
    //- BAR CHART -
    //-------------
    var ctx = document.getElementById('barChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'bar',
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


</script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC bre\Desktop\ReaiGroupLaravel\ReaiGroup\resources\views/layouts/desarrollos/barloventoLasVaras.blade.php ENDPATH**/ ?>