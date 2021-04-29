


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
                <form class="form-inline d-flex justify-content-center " action="<?php echo e(route('crear.inversion')); ?>"  method="POST">
                  <?php echo method_field('post'); ?>
                  <?php echo csrf_field(); ?>
                  <input type="text" name="proyectoId" value="2" style="display: none;">
                    <div class="form-group mx-sm-2 mb-2">
                      <input type="text" class="form-control" name="cantidadInvertida"  placeholder="cantidad" required>
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
             <label for="staticEmail2" class="sr-only">Cantidad</label>
              <p class="card-text"> <h3>Ventas</h3>
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