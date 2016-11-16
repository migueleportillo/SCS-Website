

<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('global_config', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <link rel="stylesheet" href= <?php echo e(asset('css/agency.css')); ?>>
    <link rel="stylesheet" href= <?php echo e(asset('css/homePage.css')); ?>>
    <script src=<?php echo e(asset('js/activeLinks.js')); ?>></script>
    <?php echo $__env->yieldContent('title'); ?>
</head>
<body>
<div id="navContainer" class="container-fluid">

        <ul class="nav nav-tabs col-lg-12 col-md-12 hidden-sm hidden-xs center-block">
            <li id="home" class="col-lg-2 col-md-2"><a href= <?php echo e(route('home')); ?>><?php echo e(config('app.name')); ?></a></li>
            <li id="news" class="col-lg-2 col-md-2"><a href= <?php echo e(route('news')); ?>>News</a></li>
            <li id="projects" class="col-lg-2 col-md-2"><a href= <?php echo e(route('projects')); ?>>Projects</a></li>
            <li id="about" class="col-lg-2 col-md-2"><a href= <?php echo e(route('about')); ?>>About Us</a></li>
            <!-- Authentication Links -->
            <?php if(Auth::guest()): ?>
                <li class="col-lg-2 col-md-2"><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                <li class="col-lg-2 col-md-2"><a href="<?php echo e(url('/register')); ?>">Register</a></li>
            <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo e(url('/logout')); ?>"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>



</div>
<div class="container-fluid">

    <?php echo $__env->yieldContent('body'); ?>
</div>
</body>

</html>