<?php $__env->startSection('title'); ?> <title>SCS | Projects</title><?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
 <script>
          swapActive('#projects')
 </script>
 <div>
     <h1>This is the projects</h1>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>