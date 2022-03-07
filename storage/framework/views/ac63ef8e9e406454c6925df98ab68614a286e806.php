<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">
    <?php echo $__env->yieldContent('styles'); ?>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
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
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <?php if(Auth::check()): ?>
                    <div class="col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item bg-info">
                                <a href="<?php echo e(route('get.messages')); ?>">Messages</a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="<?php echo e(route('home')); ?>">Dashboard</a>
                            </li>

                            <li class="list-group-item">
                                <a href="<?php echo e(route('posts')); ?>">Posts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo e(route('categories')); ?>">Categories</a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo e(route('pages')); ?>">Pages</a>
                            </li>

                            <li class="list-group-item">
                                <a href="<?php echo e(route('tags')); ?>">Tags</a>
                            </li>

                            <?php if(Auth::user()->admin): ?>
                                <li class="list-group-item">
                                    <a href="<?php echo e(route('users')); ?>">Users</a>
                                </li>
                            <?php endif; ?>

                            <li class="list-group-item">
                                    <a href="<?php echo e(route('user.profile')); ?>">My profile</a>
                                </li>

                            <?php if(Auth::user()->admin): ?>
                                <li class="list-group-item">
                                    <a href="<?php echo e(route('settings')); ?>">Settings</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="<?php echo e(route('posts.trashed')); ?>">All trashed posts</a>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="col-lg-8">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
    <script>
            <?php if(Session::has('success')): ?>
                toastr.success("<?php echo e(Session::get('success')); ?>")
            <?php endif; ?>

            <?php if(Session::has('info')): ?>
                toastr.info("<?php echo e(Session::get('info')); ?>")
            <?php endif; ?>
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\mcms3.1\resources\views/layouts/app.blade.php ENDPATH**/ ?>