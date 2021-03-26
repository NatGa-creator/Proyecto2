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

<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<?php
if(isset($_GET['idProducto'])){
  $id=$_GET['idProducto'];
  $sql='SELECT *FROM productos WHERE idProducto=?';
  $producto=$conexion->prepare($sql);
  $producto->bindParam(1,$id,PDO::PARAM_INT);
  if($producto->execute()){
    $fila=$producto->fetch();
  }
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php if(isset($_GET['idProducto'])){ echo $fila['Nombre']; }?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>

      <?php
 $sql='SELECT *FROM productos ';
 $rows=$conexion->prepare($sql);
 $rows->execute();
 while($row=$rows->fetch(PDO::FETCH_ASSOC)){
		echo '

      <div class="col-md-3">
          <div class="work-box">
            <a href="idProducto='.$row['idProducto'].'" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="work-img">
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
            </a>
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
            <h3 class="title-a">
             Quiénes Somos
            </h3>
            <p>
              Somos una empresa familiar que empezo hace más de 25 años en el mercado
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>

  <!-- End -->

