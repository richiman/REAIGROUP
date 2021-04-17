

<?php $__env->startSection('title', 'Proyectos'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Lista de proyectos disponibles (Ejemplos)</h4></div>
                <div class="card-body ">
                    <div class="card-deck">
                    <?php $__currentLoopData = $proyects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card" style="width: 18rem;">
                        <?php echo csrf_field(); ?>
                        <img class="card-img-top" src="https://picsum.photos/300/300" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo e($proyect->name); ?></h5>
                          <p class="card-text"><?php echo e($proyect->desc); ?>.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo e($proyect->estatus); ?>.</small>
                          </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC bre\Desktop\ReaiGroupLaravel\ReaiGroup\resources\views/layouts/proyectos.blade.php ENDPATH**/ ?>