<?php $__env->startSection('body'); ?>
    <script>
        swapActive('#about')
    </script>
    <div class="row">
        this is the about page
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>