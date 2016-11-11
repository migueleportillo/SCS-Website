<?php $__env->startSection('title'); ?> <title>SCS | About Us</title><?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <script>
        swapActive('#about')
    </script>
    <div>
        <h1>This is the about page</h1>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>