<?php
require("admin/conexion.php");

?>



  <!--/ Intro Skew Star /-->

   <!--/ Intro Skew Star /-->
   <div id="home" class="intro route bg-image" style="background-image: url(img/footer2.jpeg); ">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">LF Automatizaciones</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Automatización de portones, Instalaciones, Service, Asesoramiento Tecnico</span><strong class="text-slider"></strong></p>
           <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Leer Más</a></p>  -->
        </div>
      </div>
    </div>
  </div>
  <!-- / Section Portfolio Star / -->


</div>
  <nav class="navbar navbar-b navbar-trans navbar-expand-md" id="mainNav">
    <div class="container">
        <span></span>
        <span></span>
        <span></span>
      </button> 
      <div class="navbar-collapse collapse justify-content-end" >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#productos">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#quienes">Quiénes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section id="productos" class="portfolio-mf sect-pt4 route" >
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
             Productos
            </h3>
            <p class="subtitle-a">
              Consulte para mas información
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

      <?php
 $sql='SELECT *FROM productos ';
 $rows=$conexion->prepare($sql);
 $rows->execute();
 while($row=$rows->fetch(PDO::FETCH_ASSOC)){
		echo '

      <div class="col-md-3">
          <div class="work-box"> '
             .'<div class="work-img">
                <img src="img/productos/'.$row['Imagen'].'" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">'.$row['Nombre'].'</h2>
                    <div class="w-more">
                      <span><strong>$ '.$row['Precio'].'</strong></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        ';
 }
 ?>
    </section>

     <!-- Quienes somos -->
  <section id="quienes" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a mb-5">
             Quiénes Somos<div class="line-mf"></div>
            </h3>
            <div class="row">
            </div>
            <p class=" col-12" style="font-size: 20px;">
                Somos una empresa familiar que empezo hace más de 25 años en el mercado.
                Nuestros valores están basados siempre en la honestidad, respeto y profesionalismo, ofreciendo a nuestros clientes los mejores productos y la mejor atención para obtener los mejores resultados y lo más importante, su satisfacción.
            </p>
            </div>
          </div>
        </div>
      </div>

  <!-- End -->


