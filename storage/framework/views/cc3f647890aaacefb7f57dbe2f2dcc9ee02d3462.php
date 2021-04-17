
<?php $__env->startSection('plugins.Sweetalert2',true); ?>
<?php $__env->startSection('title', 'Perfil'); ?>
<?php $__env->startSection('plugins.Chartjs',true); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('info')): ?>
<div class="alert alert-success">
<?php echo e(session('info')); ?>

</div>
<?php endif; ?>
<div class="container-fluid">
    <div class="row">
     

      <div class="col-md-3">
       

        <!-- Profile Image -->
        <div class="card card-primary card-outline bg-dark">
          <div class="card-body ">
            <?php echo csrf_field(); ?>
            <div class=" d-flex justify-content-between style="width: 18rem;">
              <img src="<?php echo e(asset('imagenes/'.Auth::user()->imagen)); ?>"  class="card-img-top" alt="Profile pict">
            </div>
            <h3 class="profile-username text-center"><?php echo e($user->name); ?></h3>
            <p class="text-muted text-center">Software Engineer</p>
            <br>
            
           
              <div class="nav flex-column  " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link  nav-link navbar-dark bg-dark active  " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Fondear</a>
                <a class="nav-link nav-link navbar-dark bg-dark" id="v-pills-retirar-tab" data-toggle="pill" href="#v-pills-retirar" role="tab" aria-controls="v-pills-retirar" aria-selected="false">Retirar</a>
                <a class="nav-link nav-link navbar-dark bg-dark" id="v-pills-config-tab" data-toggle="pill" href="#v-pills-config" role="tab" aria-controls="v-pills-config" aria-selected="false">Configuracion</a>
              </div>
              
          </div>
        </div>
      </div>
        <div class="col-md-8">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="container text-center">
            <h3>Fondear a cuenta bancaria</h3>
            <h6 class="text-muted">Beneficiario<h6>
              <h4>REAIGROUP</h4>
              <br>
              <h6 class="text-muted">Banco reseptor</h6>
              <h4>BBVA</h4>
              <h6 class="text-muted">Clabe</h6>
              <h4>646180115427950481</h4>
            <h6>Tu referencia: 415200<?php echo e($user->id); ?></h6>
          </div>
          </div>
          <div class="tab-pane fade" id="v-pills-retirar" role="tabpanel" aria-labelledby="v-pills-retirar-tab">
            <div class="container text-center">
              <h3>Retirar a cuenta bancaria</h3>
              <h6 class="text-muted">Tienes: <h6>
                <h4><?php echo e("$ " . number_format($user->capital, 0, ",", ",")); ?>.00</h4>
                <br>
                <h6 class="text-muted">Monto</h6>
            
                <input type="text" class="form-control  col-md-4 mx-auto"  placeholder="100.00">
         
                <br>
                <h6 class="text-muted ">Ingresa tu cuenta bancaria</h6>
                <input type="text" class="form-control  col-md-4 mx-auto"  placeholder="123456">
                <br>
                <button type="button" class="btn btn-secondary">Retirar</button>
                <br>
            </div>
            <br> 
          </div>
          <div class="tab-pane fade" id="v-pills-config" role="tabpanel" aria-labelledby="v-pills-config-tab">
            
            <div class="container">
              <h2 class="text-center">Configuracion de la cuenta</h2>
              
              <form action="<?php echo e(route('user.update', $user->id)); ?>" enctype="multipart/form-data" method="POST">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
               
               
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imagen" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Imagen de perfil</label>
                  </div>
                </div>
                <div class="">
                  <label for="">Nombre completo</label>
                  <input type="text" class="form-control" value="<?php echo e($user->name); ?>" disabled >
                </div>
                <div class="">
                  <label for="">Correo</label>
                  <input type="email" class="form-control" value="<?php echo e($user->email); ?>"  disabled>
                </div>
                <div class="">
                  <label for="">Numero de telefono</label>
                  <input type="number" class="form-control" value="<?php echo e($user->telf); ?>" name="telf"  placeholder="3111234567">
                </div>
                <div class="form-group">
                  <label for="">Direccion</label>
                  <input type="text" class="form-control" value="<?php echo e($user->direccion); ?>" name="direccion" placeholder="Calle numero col">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="">Ciudad</label>
                    <input type="text" class="form-control" value="<?php echo e($user->ciudad); ?>" name="ciudad" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Estado</label>
                 <input type="text" class="form-control" value="<?php echo e($user->estado); ?>" name="estado" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="">Codigo postal</label>
                    <input type="text" class="form-control" name="cp" value="<?php echo e($user->cp); ?>">
                  </div>
                </div>
                <button type="submit" style="float: right;" class="btn btn-primary">Guardar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC bre\Desktop\ReaiGroupLaravel\ReaiGroup\resources\views/layouts/perfil.blade.php ENDPATH**/ ?>