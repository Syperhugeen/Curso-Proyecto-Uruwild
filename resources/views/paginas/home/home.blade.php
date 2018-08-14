<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    {{-- css --}}
   
    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/mixer.css') }}"> 
     <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/creative_template_mixer.css') }}">     
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

 

  </head>

  <body id="page-top">

    <!-- Navigation -->
    @include('paginas.home.home_nav')
    @include('paginas.home.slider')
    @include('paginas.home.home_about')
    {{-- imagen de seccion --}}
    <img src="{{url()}}/imagenes/Slider/uruwild_section_foto1.jpg" class="get_width_100">
    @include('paginas.home.home_actividades')  
    {{-- imagen de seccion --}}
    <img src="{{url()}}/imagenes/Slider/uruwild_section_foto2.jpg" class="get_width_100">

    {{-- morethanfishing --}}
    @include('paginas.home.home_morethanfishing') 

    @include('paginas.home.home_services')

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </section>

    
    @include('paginas.home.home_galeria')
    @include('paginas.home.home_contacto')
    @include('paginas.home.home_footer')



    <!-- Scripts -->
    <script src="{{url()}}{{ elixir('js/all.js')}} " ></script>  

   

  </body>

</html>
