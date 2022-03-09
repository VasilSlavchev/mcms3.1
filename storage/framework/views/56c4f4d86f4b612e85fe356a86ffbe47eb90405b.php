<!DOCTYPE html>
<!-- saved from url=(0051)https://demo.graygrids.com/themes/space/blog-1.html -->
<html class="no-js" lang="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e($title); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app/css/LineIcons.2.0.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app/css/tiny-slider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app/css/glightbox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('app/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">


<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="preloader" style="opacity: 0; display: none;">
    <div class="loader">
        <div class="spinner">
            <div class="spinner-container">
                <div class="spinner-rotator">
                    <div class="spinner-left">
                        <div class="spinner-circle"></div>
                    </div>
                    <div class="spinner-right">
                        <div class="spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--header-->
<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--/header-->

<section class="page-banner-section pt-75 pb-75 img-bg"
         style="background-image: url(<?php echo e(asset('app/img/bg/common-bg.jpg')); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="banner-content">
                    <h2 class="text-white">Category: <?php echo e($category->name); ?></h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Category</li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($category->name); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-section pt-130">
    <div class="container">
        <div class="row">

                <div class="col-xl-8 col-lg-7">
                    <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="left-side-wrapper">
                        <div class="single-blog blog-style-2 mb-60 wow fadeInUp" data-wow-delay=".2s"
                             style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="blog-img">
                                <a href="<?php echo e(route('post.single', ['slug' => $post->slug ])); ?>">
                                    <img src="<?php echo e(asset( $post->featured)); ?>" alt="<?php echo e($post->title); ?>">
                                </a>
                            </div>
                            <div class="blog-content">

                                <div class="blog-meta">
                                    <a href="<?php echo e(route('post.single', ['slug' => $post->slug ])); ?>"><h6 class="case-item__title"><?php echo e($post->title); ?></h6></a>
                                    <span class="date"><i class="lni lni-calendar"></i> <?php echo e($post->created_at->toFormattedDateString()); ?></span>
                                    <span class="category"><i class="lni lni-folder"></i> <a
                                            href="<?php echo e(route('category.single', ['id' => $category->id ])); ?>"><?php echo e($post->category->name); ?></a> </span>
                                    <span class="category"><i class="lni lni-user"></i> <?php echo e($post->user->name); ?> </span>
                                </div>


                            </div>

                        </div>


                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-box search-form-box mb-30">
                            <?php echo $__env->make('includes.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <div class="sidebar-box catagories-box mb-30">
                            <h4>Categories</h4>
                            <ul>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('category.single', ['id' => $category->id ])); ?>"><?php echo e($category->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                        <div class="sidebar-box mb-30">
                            <h4>Follow On</h4>
                            <div class="footer-social-links">
                                <ul class="d-flex justify-content-start">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>


<section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-title mb-30">
                    <span class="text-white wow fadeInDown" data-wow-delay=".2s"
                          style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Questions?</span>
                    <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Ask me!</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <?php echo $__env->make('includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- End Footer -->


<a href="#" class="scroll-top">
    <i class="lni lni-arrow-up"></i>
</a>
<script src="<?php echo e(asset('app/js/jquery-2.1.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/bootstrap.bundle-5.0.0-beta1.min.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/contact-form.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/count-up.min.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/tiny-slider.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/isotope.min.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/glightbox.min.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/imagesloaded.min.js')); ?>"></script>
<script src="<?php echo e(asset('app/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>

<script>
    <?php if(Session::has('subscribed')): ?>
    toastr.success("<?php echo e(Session::get('subscribed')); ?>");
    <?php endif; ?>
</script>
</body>
</html>

<?php /**PATH C:\laragon\www\mcms3.1\resources\views/category.blade.php ENDPATH**/ ?>