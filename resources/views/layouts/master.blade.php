<!DOCTYPE html>
<html lang="en">
    @php
    $base_url = url('/');
    @endphp
    <head>
        <!-- Title -->
        <title>Unified</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#0082CC">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/frontend/brand.webp')}}">

        <!-- Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/fontawesome/css/all.css')}}">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/swiper/css/swiper.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/fancybox/css/jquery.fancybox.min.css')}}">
        <!-- DATATABLE -->
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/datatable/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/datatable/responsive.bootstrap4.min.css')}}">
        <!-- CSS Front Template -->
        @yield('css')
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/jquery-ui/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/responsive.css')}}">
        <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    </head>

    <body>
        <!-- Header -->
        @include('layouts.header')
        <!-- End Footer -->
        @yield('content')
         <!-- Footer -->
         @include('layouts.footer')
        <!-- End Footer -->
        <!-- JS Global Compulsory -->
        <script src="{{asset('assets/frontend/assets/vender/jquery/jquery-3.5.1.min.js')}}"></script>
        <script defer src="{{asset('assets/frontend/assets/vender/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Swiper js -->
        @yield('script')
        <script defer src="{{asset('assets/frontend/assets/vender/swiper/js/swiper.min.js')}}"></script>
        <!--Fancybox -->
        <script defer src="{{asset('assets/frontend/assets/vender/fancybox/js/jquery.fancybox.min.js')}}"></script>
        <!--DATATABLE -->
        <script defer src="{{asset('assets/frontend/assets/vender/datatable/jquery.dataTables.min.js')}}"></script>
        <script defer src="{{asset('assets/frontend/assets/vender/datatable/dataTables.bootstrap4.min.js')}}"></script>
        <script defer src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
        <script defer src="{{asset('assets/frontend/assets/vender/datatable/responsive.bootstrap4.min.js')}}"></script>
        <!-- SVG inject -->
        <script defer src="{{asset('assets/frontend/assets/vender/svg-inject/svg-injector.min.js')}}"></script>
        <!-- AUTOCOMPLETE JS Front -->
        <script defer src="{{asset('assets/frontend/assets/vender/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Validation JS -->
        {{--<script defer src="{{$base_url}}/js/jquery.validate.min.js"></script>
        <!-- JS Front -->
        <script defer src="{{asset('assets/frontend/assets/js/custom.js}}"></script>--}}
        {{--% block script_content %}
        {% endblock script_content %--}}
        {{-- Zoho chat integration --}}
        <script defer type="text/javascript" id="zsiqchat">
            var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
            {widgetcode:"bfa66eac1366706d3522800a167f574a52d434462786f69d527a811bdef506450513f78de63e7d3918454b30e8fb8680", values:{},ready:function(){}};
            var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
            s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
        </script>
    </body>

</html>
