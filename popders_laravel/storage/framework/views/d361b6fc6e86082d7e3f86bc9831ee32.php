<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('login')); ?>">Longin</a>
<a href="<?php echo e(route('register')); ?>">Register</a>

<h1>POPDERS HOME</h1>

<a href="<?php echo e(route('playlist.index')); ?>">Playlist</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\popders_laravel\popders_laravel\resources\views/home.blade.php ENDPATH**/ ?>