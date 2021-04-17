

<?php $__env->startSection('title', 'Dashboard'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Bienvenido')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                           
                        </div>
                    <?php endif; ?>
                 
                    <?php echo e(__('Inicio session satisfactoriamente')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection; ?>('content'
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC bre\Desktop\ReaiGroupLaravel\ReaiGroup\resources\views/proyectos.blade.php ENDPATH**/ ?>