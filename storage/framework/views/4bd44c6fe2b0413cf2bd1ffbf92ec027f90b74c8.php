<form method="post" action="<?php echo e(route('products.store')); ?>">
    <?php echo csrf_field(); ?>
    <input type="text" name="title">
    <button type="submit">submit</button>
</form><?php /**PATH C:\Users\yen2047\Desktop\w14\resources\views/product/create.blade.php ENDPATH**/ ?>