<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-header <?php echo e($item['class'] ?? ''); ?>">

    <?php echo e(is_string($item) ? $item : $item['header']); ?>


</li><?php /**PATH /home/u410124972/domains/reaigroup.com/public_html/resources/views/vendor/adminlte/partials/sidebar/menu-item-header.blade.php ENDPATH**/ ?>