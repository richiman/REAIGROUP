


<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('plugins.Chartjs',true); ?>
<?php $__env->startSection('plugins.Sweetalert2',true); ?>
<?php $__env->startSection('plugins.ionicon',true); ?>
<?php $__env->startSection('content'); ?>


<div class="container  ">
  <div class="container card bg-dark ">
    <div class="row">
     <br>
    </div>
    <h4>Capital: <?php echo e("$ " . number_format($user->capital, 0, ",", ",")); ?>.00</h4>
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
                <form class="form-inline d-flex justify-content-center " action="<?php echo e(route('crear.inversion2')); ?>"  method="POST">
                  <?php echo method_field('post'); ?>
                  <?php echo csrf_field(); ?>
                  <input type="text" name="proyectoId" value="2" style="display: none;">
                  <input type="text" name="tipoCotrato" value="1" style="display: none;">
                    <div class="form-group mx-sm-2 mb-2">
                      <input type="text" class="form-control" name="cantidadInvertida"  placeholder="Multiplos de 500,000.00" required>
                    </div>
                    <input type="currency" min="500000" step="any" name="userId" value="<?php echo e($user->id); ?>" style="display: none;">
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
                <form class="form-inline d-flex justify-content-center " action="<?php echo e(route('crear.inversion2')); ?>"  method="POST">
                  <?php echo method_field('post'); ?>
                  <?php echo csrf_field(); ?>
                  <input type="text" name="proyectoId" value="2" style="display: none;">
                  <input type="text" name="tipoCotrato" value="2" style="display: none;">
                    <div class="form-group mx-sm-2 mb-2">
                      <input type="text" class="form-control" name="cantidadInvertida"  placeholder="Multiplos de 500,000.00" required>
                    </div>
                    <input type="currency" min="500000" step="any" name="userId" value="<?php echo e($user->id); ?>" style="display: none;">
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
          <?php $__currentLoopData = $historial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <?php if($item->proyecto =='1'): ?>         
            <td class="text-center">Barlo tepic</td>
            <?php elseif($item->proyecto =='2'): ?> 
            <td class="text-center">Barlo las varas</td>
            <?php elseif($item->proyecto =='3'): ?> 
            <td class="text-center">Barlo nuevo chacala</td>
            <?php endif; ?>
             <?php if($item->tipoCotrato =='1'): ?>         
             <td class="text-center">Ventas</td>
             <?php elseif($item->tipoCotrato =='2'): ?> 
             <td class="text-center">Porcentaje</td>
             <?php endif; ?>
            <td class="text-center"><small><?php echo e("$" . number_format($item->monto, 0, ",",",")); ?>.00</small></td>
            <td class="text-center"><small><?php echo e(date('d-m-Y',strtotime($item->created_at))); ?></small></td>
            
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
        </tbody>
      </table>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>  
<script>

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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC bre\Desktop\ReaiGroupLaravel\ReaiGroup\resources\views/layouts/desarrollos/invertirBarloLasVaras.blade.php ENDPATH**/ ?>