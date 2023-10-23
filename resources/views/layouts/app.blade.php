<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- META -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta property="og:title" itemprop="headline" content="Grupo T&G Ingenieros" />
        <meta property="og:description" itemprop="description" content="Grupo TyG Ingenieros | Agencia innovadora de soluciones de TI" />
        <meta property="og:keywords" itemprop="keywords" content="tyg, tecnologia, ti, grupo, business, branding, asesoramiento, web, diseño, pagina, agencia">
        <meta name="googlebot" content="noindex">
        <meta name="googlebot-news" content="nosnippet">
        <meta property="og:image" itemprop="image" content="{{asset('img/logo3.jpg')}}" />
        <meta property="og:url" itemprop="url" content="https://grupotyg.pe/" />
        <meta property="og:type" content="website" />
        <!-- FB -->
        <meta property="fb:app_id" content="" />
        <meta property="fb:admins" content="" />
        <meta property="fb:pages" content="" /> 
        <meta name="lang" content="es" itemprop="inLanguage" />
        <base href="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Grupo TyG Ingenieros | Agencia innovadora de soluciones de TI">
        <meta name="keywords" content="tyg, tecnologia, ti, grupo, business, branding, asesoramiento, web, diseño, pagina, agencia">
        <meta name="news_keywords" content="tyg, tecnologia, ti, grupo, business, branding, asesoramiento, web, diseño, pagina, agencia">
        <meta name="author" content="Ing. Juan Carlos Torres del Castillo">
        <meta name='robots' content='index, follow' />
        <!-- APPLE -->
        <link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-icon-180x180.png">
        <!-- Google -->
        <link rel="icon" type="image/png" sizes="192x192" href="/icon/favicon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">

        <link href="/img/iso-02.png" rel="icon" type="image/x-icon"> 

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <?php
            $version = '1993.1.4';
        ?>
        <link href="{{asset('lib/animate/animate.min.css')}}?v=<?php echo $version ?>" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}?v=<?php echo $version ?>" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}?v=<?php echo $version ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}?v=<?php echo $version ?>" rel="stylesheet">

        <link href="{{asset('css/mystyle.css')}}?v=<?php echo $version ?>" rel="stylesheet">

        @stack('css')

    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>     
    @include('layouts.header')
    <main>
        @yield('content')
        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>
    </main>
    @include('layouts.footer')
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
        @stack('javascript')
</body>
</html>
