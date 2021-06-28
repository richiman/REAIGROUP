<?php $__env->startSection('plugins.Sweetalert2',true); ?>
<?php $__env->startSection('title', 'Perfil'); ?>
<?php $__env->startSection('plugins.Chartjs',true); ?>
<?php $__env->startSection('content'); ?>

<style>
  
</style>
<div class="container-fluid ">
    <?php $__currentLoopData = $proyects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- Card Start -->
            <div class="card bg-dark px-3 py-2" >
                <div class="row ">
                <div class="col-md-8 px-2">
                    <div class="card-block px-6">
                    <h2 class=" text-bold"> <?php echo e($item->name); ?> </h2>
                    <h5 class="card-text text-justify"> <?php echo e($item->desc); ?> </h5>
                    <p class="card-text text-muted"> <?php echo e($item->explic); ?>  </p>
                    <br><br>
                    <form class="text-center" action="">
                        <a href="<?php echo e(route('desarrollo.ver',$item->id)); ?>" class="mt-auto btn btn-primary btn-sm px-3">Desarrollo</a>
                        <a href="<?php echo e(route('inversion.invertir',$item->id)); ?>" class="mt-auto btn btn-success btn-sm px-3">Invertir</a>
                        <input class="mt-auto btn btn-info btn-sm px-3" type="button" value="Pagina web" onclick="window.open('http://<?php echo e($item->link); ?>')">
                    </form>
                    <br>
                    </div>
                </div>
               
                <!-- Carousel start -->
                <img style=" width: 100%; height: auto; max-width: 400px;" class="rounded float-right" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT46-O_sN9KxdRbVL765n7j4-atMmvw9CpMek1fDcJ56cEs_qnIl7y1xYMr91X8OVGzGjE&usqp=CAU" alt="">
                <!-- End of carousel -->
                </div>
            </div>
  <!-- End of card -->
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc gamer\Desktop\ReaiGroup So\ReaiGroup main\resources\views/layouts/proyectos.blade.php ENDPATH**/ ?>