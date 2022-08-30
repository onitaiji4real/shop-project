
<?php $__env->startSection('title', 'product show'); ?>
<?php $__env->startSection('content'); ?>

<h1>product show</h1>
<img width="600" src="<?php echo e($product['imgUrl']); ?>" alt="">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('inline_js'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('inline_js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yen2047\Desktop\w14\resources\views/product/show.blade.php ENDPATH**/ ?>