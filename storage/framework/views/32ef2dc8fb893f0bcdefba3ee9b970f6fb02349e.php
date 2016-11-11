<?php $__env->startSection('title'); ?><title>Sewanee Computing</title><?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <script>
        swapActive('#home')
    </script>

    <header>
        <div id="headerIntro" class="intro-text">
            <div class="intro-lead-in"><h3>Here comes the Boom!</h3></div>
            <div class="intro-heading">Welcome to the css page</div>
            <a href="#" class="page-scroll btn btn-xl">Am I still blank?</a>
        </div>
    </header>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>