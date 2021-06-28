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
                    <div class="inner "> 
                      <h3 class="cabeza" ><?php echo e("$" . number_format($capitalInvertido, 0, ",", ",")); ?></h3>
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
                      <h3><?php echo e($numProyectos); ?></h3>
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
                      <h3><?php echo e($count); ?></h3>
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
                            <strong>Proyectos con participacion <?php echo e($proyectosRegistrados); ?></strong>
                          </p>
                        <!-- /.progress-group -->
                        <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="progress-group"> 
                             <?php echo e($proyecto->name); ?>

                             <span class="float-right"><b>0</b>/100</span>
                             <div class="progress progress-sm ">
                              <div class="progress-bar bg-primary " style="width: 0%"></div>
                            </div>
                             <br>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <i class="far fa-circle text-success"></i> - <?php echo e($proyecto->name); ?>

                                <br><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
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
                            <th class="text-center" scope="col">Proyecto</th>
                            <th class="text-center" scope="col">Inversion</th>
                            <th class="text-center" scope="col">Participacion</th>
                            <th class="text-center" scope="col">$/Accion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr> 
                          <th scope="row" class="text-center text-info"><?php echo e($proyecto->name); ?></th>
                          <th scope="row" class="text-center text-success"><?php echo e("$ " . number_format($inversion->where('proyecto', $proyecto->id)->sum('monto'), 0, ",", ",")); ?>.00</th>
                          <th scope="row" class="text-center text-info"><?php echo e($inversion->where('proyecto', $proyecto->id)->sum('monto')   / $proyecto->costo * 100); ?> %</th>
                          <th scope="row" class="text-center text-danger"><?php echo e("$ " . number_format($proyecto->costoPaccion, 0, ",", ",")); ?>.00</th>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
          </section>
        </div>
       </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>  
<script>
    //--------------
    //- pie CHART -
   //--------------
    
 
    var ctx = document.getElementById('barChart2').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        datasets: [{
            label: 'Registro de inversion ',
            data: [<?php echo e($ene); ?>, <?php echo e($feb); ?>,<?php echo e($mar); ?>, <?php echo e($abr); ?>,<?php echo e($may); ?>,<?php echo e($jun); ?>,<?php echo e($jul); ?>,<?php echo e($ago); ?>,<?php echo e($sep); ?>,<?php echo e($oct); ?>,<?php echo e($nov); ?>,<?php echo e($dec); ?>],
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


var obj = <?php echo json_encode(($proyectos)->toArray()); ?>;
var arreglo = [];
  for (let step = 0; step < obj.length ; step++) {
    arreglo.push(obj[step].name);
  }
var obj2 = <?php echo json_encode(($inversion)->toArray()); ?>;
var arreglo2 = [];
    var holder = []
     obj2.forEach( index => {
                  const data = holder.find( i => i.proyecto=== index.proyecto)
                 if(!data){
                   holder.push({proyecto:index.proyecto,monto:index.monto})
                   }else{
                    data.monto = parseInt(data.monto) + parseInt(index.monto)
                   }
                  });
            for (let step = 0; step < holder.length ; step++) {
              arreglo2.push(holder[step].monto);
            
            }
  var ctx = document.getElementById('pieChart').getContext('2d');
  var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
      labels: arreglo,
      datasets: [{
          label: 'Acciones disponibles ',
          data: arreglo2,
          backgroundColor: [
              'rgba(255, 99, 142, 0.3)',
              'rgba(54, 162, 235, 0.3)',
              'rgba(255, 206, 86, 0.3)',
              'rgba(235, 136, 186, 0.3)','rgba(255, 99, 142, 0.3)',
              'rgba(54, 162, 235, 0.3)',
              'rgba(255, 206, 86, 0.3)',
              'rgba(235, 136, 186, 0.3)',
          ],
        borderWidth: 1
      }]
  }, options:{
    responsive: true
  },
  });


  
<?php if(session('info')): ?>
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
      title: '<?php echo e(session('info')); ?> '
    })
    
    <?php endif; ?>
    
    <?php if(session('error')): ?>
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
      title: '<?php echo e(session('error')); ?> ' 
    })
    
    <?php endif; ?>
    
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u410124972/domains/reaigroup.com/public_html/resources/views/layouts/dashboard.blade.php ENDPATH**/ ?>