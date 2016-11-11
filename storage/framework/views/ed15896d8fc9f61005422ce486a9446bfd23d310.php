<?php $__env->startSection('body'); ?>
    <script>
        swapActive('#news')
    </script>
    <div class="row">
        This is the news
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>