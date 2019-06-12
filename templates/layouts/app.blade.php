<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '蓝叮咚官网')</title>
    <meta name="keywords" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/service.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/about_us.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/business.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/school.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/goods.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/news.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/ldd/css/second1.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" />
    <script src="{{ asset('assets/ldd/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('assets/ldd/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/ldd/js/swiper.min.js') }}"></script>
    @yield('customer-css')
</head>
<body style="min-height: 100%;overflow: hidden;overflow-y: auto;">
{{--@include('layouts._contact_customer_service')--}}
@include('layouts._nav')
@yield('content')
</body>
<script>
    $(window).load(function() {
        $(".mobile-inner-header-icon").click(function() {
            $(this).toggleClass("mobile-inner-header-icon-click mobile-inner-header-icon-out");
            $(".mobile-inner-nav").slideToggle(250);

        });

        $(".mobile-inner-nav a").each(function(index) {
            $(this).css({
                'animation-delay': (index / 10) + 's'
            });
        });
    });
</script>
@yield('customer-js')
</html>