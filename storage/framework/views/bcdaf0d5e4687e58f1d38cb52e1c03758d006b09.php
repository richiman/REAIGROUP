
<?php $__env->startSection('title', 'Proyectos'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-gradient-dark">
                <div class="card-header"><h4>Datos bancarios</h4></div>
                <div class="card-body">
                    <?php echo csrf_field(); ?>
                      <h1>MXN:<?php echo e("$ " . number_format($user->capital, 0, ",", ".")); ?>.00</h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC bre\Desktop\ReaiGroupLaravel\ReaiGroup\resources\views/layouts/cuenta.blade.php ENDPATH**/ ?>