<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--plugins-->
    <link href="/css/plugins/plugins.css" rel="stylesheet">

@yield('style')

<!--Custom css-->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<div id="preloader">
    <div id="preloader-inner"></div>
</div><!--/preloader-->
@section('header')
    @include('components.menu')
@show
@yield('content')
<!--footer-->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 margin-btm-20">
                <div class="footer-col">
                    <h3>Bizwrap</h3>
                    <p>
                        aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                        aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                    </p>
                </div>
                <div class="space-20"></div>
                <div class="footer-col">
                    <h3>contact info</h3>
                    <p><i class="ion-home"></i> pearl tower,3rd floor,jaipur,302012</p>
                    <p><i class="ion-iphone"></i> +91 9887568614</p>
                    <p><i class="ion-email"></i> mail@domain.com</p>
                </div>
                <div class="space-20"></div>
                <div class="footer-col">
                    <h3>Follow us</h3>
                    <ul class=" list-inline social-btn">
                        <li class="list-inline-item"><a href="#"><i class="ion-social-facebook"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Like On Facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-twitter" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Follow On twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-googleplus"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Follow On googleplus"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-pinterest"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ion-social-skype" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="skype"></i></a></li>
                    </ul>
                </div><!--footer social col-->
            </div><!--col-4 end-->
            <div class="col-md-3 margin-btm-20">
                <div class="footer-col">
                    <h3>Latest post</h3>
                    <ul class="post-list list-unstyled">
                        <li><a href="#" class="hover-color">Blog post with image</a></li>
                        <li><a href="#" class="hover-color">lorem ipsum dollor sit amet</a></li>
                        <li><a href="#" class="hover-color">Blog post with audio</a></li>
                        <li><a href="#" class="hover-color">lorem ipsum dollor sit amet</a></li>
                        <li><a href="#" class="hover-color">Blog post with quote</a></li>
                    </ul>
                </div>
            </div><!--latest post col end-->
            <div class="col-md-5">
                <div class="footer-col">
                    <h3>Get in touch</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Name...">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email...">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Subject...">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Massage..." rows="7"></textarea>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-lg btn-white">Send massege</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--get in touch col end-->
        </div><!--footer main row end-->
        <div class="space-70"></div>
        <div class="row">
            <div class="col-md-12 text-center footer-bottom">
                <a href="index.html"> <img src="/img/logo-white.png" alt=""></a>
                <div class="space-20"></div>
                <span>&copy;2017. All right reserved. Design by design_mylife</span>
            </div>
        </div><!--footer copyright row end-->
    </div><!--container-->
</div><!--footer main end-->
<!--back to top-->
<a href="#" class="scrollToTop"><i class="ion-android-arrow-dropup-circle"></i></a>
<!--back to top end-->
<!-- jQuery plugins. -->
<script src="/js/plugins/plugins.js"></script>
<script src="/js/app.js"></script>
@yield('script')
</body>
</html>
