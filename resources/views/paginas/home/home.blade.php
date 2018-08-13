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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img style="height:45px; " src="{{url()}}/imagenes/{{$Empresa->logo_horizontal}}"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">NOSOTROS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">ACTIVIDADES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">GALERIA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">CONTACTO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   @include('paginas.home.slider')
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">¡En URUWILD adoramos la naturaleza!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Paisajes, animales, arroyos y ríos; nos tomamos la pesca deportiva
y el ecoturismo como una forma de revalorizar nuestros tierras,
promoviendo la consciencia ecológica mientras disfrutamos
de memorables experiencias.
</p>
            
          </div>
        </div>
      </div>
    </section>

    {{-- imagen de seccion --}}
    <img src="{{url()}}/imagenes/Slider/uruwild_section_foto1.jpg" class="get_width_100">

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Actividades</h2>
            <hr class="my-4">
            <P class="class="text-faded mb-4">Pensar una frase de un renglón para poner aquí</P>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Pesca</h3>
              <p class="text-muted mb-0">¡Vení a vivir la pesca deportiva de una manera diferente! Aguas de Vadeo, float tubes y canoas. Te acercamos a los mejores ríos, arroyos y cañadas de agua clara para perseguir a pez visto las increíbles tarariras tornasol y los esafiantes dorados del Uruguay.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Ecoturismo</h3>
              <p class="text-muted mb-0">Paseos en canoa y en bici, cabalgatas, caminatas y senderos, birdwatching y fotografía, reconocimiento de flora y fauna, o simplemente disfrutar de la tranquilidad de la naturaleza como más te guste.</p>
            </div>
          </div>          
        </div>
      </div>
    </section>

    {{-- imagen de seccion --}}
    <img src="{{url()}}/imagenes/Slider/uruwild_section_foto2.jpg" class="get_width_100">

    {{-- morethanfishing --}}

    {{-- la experiencia Uruwild --}}
    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="{{url()}}/imagenes/img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="{{url()}}/imagenes/img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="{{url()}}/imagenes/img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="{{url()}}/imagenes/img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="{{url()}}/imagenes/img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="{{url()}}/imagenes/img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </section>

    @include('paginas.home.home_contacto')



    <!-- Scripts -->
    <script src="{{url()}}{{ elixir('js/all.js')}} " ></script>  

   

  </body>

</html>
