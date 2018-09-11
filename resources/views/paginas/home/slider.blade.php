
<div  class="{{-- masthead --}} get_width_100 mostrar-cabecera-destop"  >
  
<div id="carouselExampleIndicators" class="carousel slide auto" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto1.jpg" alt="First slide">
     
      
    </div>
    <div class="carousel-item">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto2.jpg" alt="Second slide">
       
    </div>
    <div class="carousel-item">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto3b.jpg" alt="Third slide">
       
    </div>
    <div class="carousel-item">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto4b.jpg" alt="Third slide">
       
    </div>
    <div class="carousel-item">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto5.jpg" alt="Third slide">
       
    </div>
    <div class="carousel-item">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto6a.jpg" alt="Third slide">
       
    </div>
  </div>

      <div class="carousel-caption d-none d-md-block Helper-OrdenarHijos-Row">
        @include('paginas.home.datos_para_carousel')
      </div>
      <img src="{{url()}}/imagenes/Empresa/uruwild_logo_white.png" style="position:absolute; right: 5%; bottom: 5%; height: 7%;">  
  

</div>



 
</div>

<div class="get_width_100 ocultar-cabecera-mobil">
  

 <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          @include('paginas.home.slider_texto_present')
        </div>
      </div>
    </header>
</div>    
