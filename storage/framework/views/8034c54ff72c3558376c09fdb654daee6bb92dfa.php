
<?php $__env->startSection('title', 'products index'); ?>
<?php $__env->startSection('content'); ?>


<h1>products index</h1>

<div><a href="<?php echo e(route('products.create')); ?>">Create</a></div>
<hr>


<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
    <a href="<?php echo e(route('products.show', ['product' => $product['id'] ])); ?>">
        <img width="400" src="<?php echo e($product['imgUrl']); ?>">
    </a>
</div>
<div>
    <a href="<?php echo e(route('products.edit', ['product' => $product['id'] ])); ?>">edit</a>
</div>

<form method="POST" action="<?php echo e(route('products.destroy', ['product' => $product['id'] ])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>

    <button type="submit">delete</button>
</form>
<hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('inline_js'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('inline_js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yen2047\Desktop\w14\resources\views/product/index.blade.php ENDPATH**/ ?>