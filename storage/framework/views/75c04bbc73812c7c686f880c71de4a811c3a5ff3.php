<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/page.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">
    <link rel="icon" href="<?php echo e(asset('img/favicon.png')); ?>">
</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">
                <img class="logo-dark" src="<?php echo e(asset('img/logo-dark.png')); ?>" alt="logo">
                <img class="logo-light" src="<?php echo e(asset('img/logo-light.png')); ?>" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>

            <ul class="nav nav-navbar">

            </ul>
        </section>
        <?php if(auth()->guard()->check()): ?>
            <a class="btn btn-xs btn-round btn-success mr-3" href="<?php echo e(route('home')); ?>">Dashboard</a>
            <form action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <button class ="btn btn-xs btn-round btn-danger" type="submit">Logout</button>
            </form>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
        <a class="btn btn-xs btn-round btn-success" href="<?php echo e(route('login')); ?>">Login</a>
        <a class="btn btn-xs btn-round btn-warning ml-3" href="<?php echo e(route('register')); ?>">Register</a>
        <?php endif; ?>
    </div>
</nav><!-- /.navbar -->

<?php echo $__env->yieldContent('header'); ?>
<!-- Main Content -->

<?php echo $__env->yieldContent('content'); ?>


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">
                <a href="/"><img src="<?php echo e(asset('img/logo-dark.png')); ?>" alt="logo"></a>
            </div>

            <div class="col-6 col-lg-3 text-right order-lg-last">
                <div class="social">
                    <a class="social-facebook" href="https://www.facebook.com/marsislav515"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="#/"><i class="fa fa-instagram"></i></a>
                    <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>

        </div>
    </div>
</footer><!-- /.footer -->


<!-- Scripts -->
<script src="<?php echo e(asset('js/page.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c78fd2aaeb1fe96"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\mcms3.1\resources\views/layouts/blog.blade.php ENDPATH**/ ?>