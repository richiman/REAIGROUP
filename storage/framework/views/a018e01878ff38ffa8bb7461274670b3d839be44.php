<?php $menuItemHelper = app('JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper'); ?>

<?php if($menuItemHelper->isSubmenu($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.dropdown-item-submenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($menuItemHelper->isLink($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.dropdown-item-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH C:\Users\PC bre\Desktop\ReaiGroupLaravel\ReaiGroup\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/navbar/dropdown-item.blade.php ENDPATH**/ ?>