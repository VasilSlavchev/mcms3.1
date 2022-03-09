<!DOCTYPE html>
<!-- saved from url=(0051)https://demo.graygrids.com/themes/space/blog-1.html -->
<html class="no-js" lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/LineIcons.2.0.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('app/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">


<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
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
@include('includes.header')
<!--/header-->


<section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url({{ asset('app/img/bg/common-bg.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="banner-content">
                    <h2 class="text-white">Latest Blog</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                <div class="left-side-wrapper">
                    <div class="single-blog blog-style-2 mb-60 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-img">
                            <a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}"><img src="{{asset( $third_post->featured)}}" alt="{{ $first_post->title }}"></a>
                        </div>
                        <div class="blog-content">
                            <h4><a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}">{{ $first_post->title }}</a></h4>
                            <div class="blog-meta">
                                <a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}" class="read-more-btn">Read More <i class="lni lni-angle-double-right"></i></a>
                                <span class="date"><i class="lni lni-calendar"></i> {{ $first_post->created_at->toFormattedDateString() }}</span>
                                <span class="category"><i class="lni lni-folder"></i>  <a href="{{ route('category.single', ['id' => $first_post->category->id ]) }}">{{ $first_post->category->name }}</a> </span>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog blog-style-2 mb-60 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-img">
                            <a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}"><img src="{{asset( $second_post->featured)}}" alt="{{ $second_post->title }}"></a>
                        </div>
                        <div class="blog-content">
                            <h4><a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}">{{ $second_post->title }}</a></h4>
                            <div class="blog-meta">
                                <a href="{{ route('post.single', ['slug' => $second_post->slug ]) }}" class="read-more-btn">Read More <i class="lni lni-angle-double-right"></i></a>
                                <span class="date"><i class="lni lni-calendar"></i>  At: {{ $first_post->created_at->toFormattedDateString() }}</span>
                                <span class="category"><i class="lni lni-folder"></i> In category: <a href="{{ route('category.single', ['id' => $second_post->category->id ]) }}">{{ $second_post->category->name }}</a> </span>

                            </div>
                        </div>
                    </div>
                    <div class="single-blog blog-style-2 mb-60 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-img">
                            <a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}"><img src="{{asset( $third_post->featured)}}" alt="{{ $third_post->title }}"></a>
                        </div>
                        <div class="blog-content">
                            <h4><a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}">{{ $third_post->title }}</a></h4>
                            <div class="blog-meta">
                                <a href="{{ route('post.single', ['slug' => $third_post->slug ]) }}" class="read-more-btn">Read More <i class="lni lni-angle-double-right"></i></a>
                                <span class="date"><i class="lni lni-calendar"></i>  At: {{ $third_post->created_at->toFormattedDateString() }}</span>
                                <span class="category"><i class="lni lni-folder"></i> In category: <a href="{{ route('category.single', ['id' => $third_post->category->id ]) }}">{{ $third_post->category->name }}</a> </span>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="pagination">
                        <ul class="d-flex justify-content-center align-items-center">
                            <li><a href="javascript:void(0)"><i class="lni lni-arrow-left"></i></a></li>
                            <li><a href="javascript:void(0)">1</a></li>
                            <li><a href="javascript:void(0)" class="active">2</a></li>
                            <li><a href="javascript:void(0)">3</a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-arrow-right"></i></a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
</section>



<section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-title mb-30">
                    <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Questions?</span>
                    <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Ask me!</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                @include('includes.form')
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

@include('includes.footer')

<!-- End Footer -->



<a href="#" class="scroll-top">
    <i class="lni lni-arrow-up"></i>
</a>
<script src="{{ asset('app/js/jquery-3.6.0.js')}}"></script>
<script src="{{ asset('app/js/bootstrap.bundle-5.0.0-beta1.min.js')}}"></script>
<script src="{{ asset('app/js/contact-form.js')}}"></script>
<script src="{{ asset('app/js/count-up.min.js')}}"></script>
<script src="{{ asset('app/js/tiny-slider.js')}}"></script>
<script src="{{ asset('app/js/isotope.min.js')}}"></script>
<script src="{{ asset('app/js/glightbox.min.js')}}"></script>
<script src="{{ asset('app/js/wow.min.js')}}"></script>
<script src="{{ asset('app/js/imagesloaded.min.js')}}"></script>
<script src="{{ asset('app/js/main.js')}}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>

<script>
    @if(Session::has('subscribed'))
    toastr.success("{{ Session::get('subscribed') }}");
    @endif
</script>
</body>
</html>

