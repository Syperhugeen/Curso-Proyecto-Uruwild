<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pesca deportiva y ecoturismo en los lugares naturales más tranquilos del Uruguay.">
    <meta name="author" content="Simbionte">

<!-- META-TAGS DE FAVICONS, DISPOSITIVOS Y THUMBNAILS! -->
    <!-- social media meta-tags for proper sharing (la imagen tiene que estar en la carpeta root, ratio 1.91:1 1200x630px) -->
        <meta property="og:title" content="URUWILD">
        <meta property="og:description" content="Pesca deportiva y ecoturismo.">
        <meta property="og:image" content="https://www.uruwild.com/thumbnail.jpg">
        <meta property="og:url" content="https://www.uruwild.com/">
        
        <!-- Favicons (tienen que estar en la carpeta root) -->
        <link rel="icon" type="image/png" href="https://www.uruwild.com/favicon-16x16.png" sizes="16x16">  
        <link rel="icon" type="image/png" href="https://www.uruwild.com/favicon-32x32.png" sizes="32x32">  
        <link rel="icon" type="image/png" href="https://www.uruwild.com/favicon-96x96.png" sizes="96x96">

        <!-- Apple Touch Icons (tienen que estar en la carpeta root) -->
        <link rel="apple-touch-icon" href="older-iPhone.png"> <!-- // 120px -->  
        <link rel="apple-touch-icon" sizes="180x180" href="iPhone-6-Plus.png">  
        <link rel="apple-touch-icon" sizes="152x152" href="iPad-Retina.png">  
        <link rel="apple-touch-icon" sizes="167x167" href="iPad-Pro.png">
    <!-- / fin del social media meta-tags for proper sharing-->

    <!-- realfavicongenerator headlines -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=rMqPKoN4Rp">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=rMqPKoN4Rp">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=rMqPKoN4Rp">
        <link rel="manifest" href="/site.webmanifest?v=rMqPKoN4Rp">
        <link rel="mask-icon" href="/safari-pinned-tab.svg?v=rMqPKoN4Rp" color="#f2b829">
        <link rel="shortcut icon" href="/favicon.ico?v=rMqPKoN4Rp">
        <meta name="apple-mobile-web-app-title" content="URUWILD">
        <meta name="application-name" content="URUWILD">
        <meta name="msapplication-TileColor" content="#f2b829">
        <meta name="theme-color" content="#ffffff">
    <!-- / fin de realfavicongenerator headlines -->
<!-- / fin de META-TAGS DE FAVICONS, DISPOSITIVOS Y THUMBNAILS -->

    <title>URUWILD</title>

    {{-- css --}}
   
    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/mixer.css') }}"> 
     <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/creative_template_mixer.css') }}">     
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



<!-- SMOOTH SCROLL -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
  $(function() {
    // This will select everything with the class smoothScroll
    // This should prevent problems with carousel, scrollspy, etc...
    $('.smoothScroll').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 800); // The number here represents the speed of the scroll in milliseconds
          return false;
        }
      }
    });
  });
  </script>
  <!-- End of SMOOTH SCROLL -->



  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="62">

    <!-- Navigation -->
    @include('paginas.home.home_nav')
    @include('paginas.home.slider')
    @include('paginas.home.home_about')

   {{--  <div class="parallax_section1"></div> --}}
    {{-- imagen de seccion --}}
    <img src="{{url()}}/imagenes/Slider/uruwild_section_foto1.jpg" class="get_width_100">
    @include('paginas.home.home_actividades')  
    {{-- <div class="parallax_section2"></div> --}}
    {{-- imagen de seccion --}}
    <img src="{{url()}}/imagenes/Slider/uruwild_section_foto2.jpg" class="get_width_100">
    {{-- morethanfishing --}}
    @include('paginas.home.home_morethanfishing') 
    @include('paginas.home.home_services')
    @include('paginas.home.home_galeria')
    @include('paginas.home.home_contacto')
    @include('paginas.home.home_footer')



    <!-- Scripts -->
    <script src="{{url()}}{{ elixir('js/all.js')}} " ></script>  
    @include('paginas.home.home_vue_script')
    </script> 

   

  </body>

</html>
