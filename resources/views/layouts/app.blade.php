<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'GrupoTyG') }}</title>

  <!-- META -->
  <meta name="description" content="Grupo TyG Ingenieros | Agencia innovadora de soluciones de TI">
  <link rel="canonical" href="https://grupotyg.pe">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:title" itemprop="headline" content="GrupoTyG">
  <meta property="og:description" itemprop="description" content="Grupo TyG Ingenieros | Agencia innovadora de soluciones de TI">
  <meta property="og:keywords" itemprop="keywords" content="tyg, tecnologia, ti, grupo, business, branding, asesoramiento, web, diseño, pagina, agencia">
  <!-- <meta name="googlebot" content="noindex"> -->
  <meta name="googlebot-news" content="nosnippet">
  <meta property="og:image" itemprop="image" content="{{asset('img/logo3.jpg')}}">
  <meta property="og:url" itemprop="url" content="https://grupotyg.pe">
  <meta property="og:type" content="website">

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

  <!-- GOOGLE ANALYTICS -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-T06FB7DMGS"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-T06FB7DMGS');
  </script>
  <!-- FIN GOOGLE ANALYTICS -->

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
  $version = '1993.2.3';
  ?>
  <!-- <link href="{{asset('lib/animate/animate.min.css')}}?v=<?php echo $version ?>" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}?v=<?php echo $version ?>" rel="stylesheet"> -->

  <!-- Customized Bootstrap Stylesheet -->
  <!-- <link href="{{asset('css/bootstrap.min.css')}}?v=<?php echo $version ?>" rel="stylesheet"> -->

  <!-- Template Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "tertiary-fixed": "#efdbff",
            "on-primary": "#1000a9",
            "on-surface": "#dae2fd",
            "on-tertiary-fixed-variant": "#573878",
            "on-secondary": "#00344d",
            "tertiary-fixed-dim": "#dbb8ff",
            "primary-fixed": "#e1e0ff",
            "tertiary-container": "#a482c8",
            "primary-container": "#8083ff",
            "on-tertiary-fixed": "#29074a",
            "on-secondary-container": "#00344e",
            "primary": "#c0c1ff",
            "secondary-container": "#00a2e6",
            "inverse-surface": "#dae2fd",
            "secondary": "#89ceff",
            "on-primary-container": "#0d0096",
            "primary-fixed-dim": "#c0c1ff",
            "on-primary-fixed": "#07006c",
            "surface-container-highest": "#2d3449",
            "surface-variant": "#2d3449",
            "error-container": "#93000a",
            "on-secondary-fixed": "#001e2f",
            "on-tertiary-container": "#381959",
            "inverse-on-surface": "#283044",
            "outline-variant": "#464554",
            "on-surface-variant": "#c7c4d7",
            "tertiary": "#dbb8ff",
            "surface-tint": "#c0c1ff",
            "surface-container": "#171f33",
            "surface-dim": "#0b1326",
            "on-primary-fixed-variant": "#2f2ebe",
            "surface-bright": "#31394d",
            "on-error": "#690005",
            "on-background": "#dae2fd",
            "error": "#ffb4ab",
            "outline": "#908fa0",
            "surface-container-high": "#222a3d",
            "on-error-container": "#ffdad6",
            "on-secondary-fixed-variant": "#004c6e",
            "surface-container-low": "#131b2e",
            "on-tertiary": "#3f2160",
            "inverse-primary": "#494bd6",
            "surface": "#0b1326",
            "secondary-fixed": "#c9e6ff",
            "surface-container-lowest": "#060e20",
            "background": "#0b1326",
            "secondary-fixed-dim": "#89ceff"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "sm": "8px",
            "xl": "40px",
            "md": "16px",
            "margin": "32px",
            "gutter": "24px",
            "xs": "4px",
            "lg": "24px",
            "3xl": "104px",
            "2xl": "64px",
            "unit": "4px"
          },
          "fontFamily": {
            "body-md": ["Inter"],
            "label-sm": ["Inter"],
            "body-lg": ["Inter"],
            "display-xl": ["Space Grotesk"],
            "headline-md": ["Space Grotesk"],
            "headline-lg": ["Space Grotesk"],
            "space-grotesk": ["Space Grotesk"]
          },
          "fontSize": {
            "body-md": ["16px", {
              "lineHeight": "1.5",
              "letterSpacing": "0em",
              "fontWeight": "400"
            }],
            "label-sm": ["12px", {
              "lineHeight": "1",
              "letterSpacing": "0.05em",
              "fontWeight": "600"
            }],
            "body-lg": ["18px", {
              "lineHeight": "1.6",
              "letterSpacing": "0em",
              "fontWeight": "400"
            }],
            "display-xl": ["64px", {
              "lineHeight": "1.1",
              "letterSpacing": "-0.04em",
              "fontWeight": "700"
            }],
            "headline-md": ["24px", {
              "lineHeight": "1.3",
              "letterSpacing": "-0.01em",
              "fontWeight": "500"
            }],
            "headline-lg": ["32px", {
              "lineHeight": "1.2",
              "letterSpacing": "-0.02em",
              "fontWeight": "600"
            }]
          }
        },
      },
    }
  </script>

  <link href="{{asset('css/style.css')}}?v=<?php echo $version ?>" rel="stylesheet">

  <!-- <link href="{{asset('css/mystyle.css')}}?v=<?php echo $version ?>" rel="stylesheet"> -->

  @stack('css')

  <!-- Scripts -->
  <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>

<body class="bg-background text-on-background font-body-md selection:bg-primary/30">
  <!-- Messenger plugin del chat Code -->
  <div id="fb-root"></div>

  <!-- Your plugin del chat code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "139518552583643");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,
        version: 'v18.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  @include('layouts.header')
  <main class="pt-16">
    @yield('content')
  </main>
  <!-- WhatsApp Floating Icon -->
  <a
    href="https://wa.me/51978209130?text=Hola,%20quiero%20información"
    target="_blank"
    class="fixed bottom-6 right-6 z-50 w-14 h-14 flex items-center justify-center bg-[#25D366] text-white rounded-full shadow-[0_0_20px_rgba(37,211,102,0.4)] hover:scale-110 transition-all duration-300 hover:shadow-[0_0_30px_rgba(37,211,102,0.7)]">
    <i class="fa-brands fa-whatsapp text-2xl"></i>
  </a>
  @include('layouts.footer')
  <!-- JavaScript Libraries -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>


  <script src="{{asset('js/main.js')}}"></script> -->
  @stack('javascript')
</body>

</html>