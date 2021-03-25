<?php
include("admin/conexion.php");
	if(isset($_GET['alerta1'])){
    ?>
	<script>
alert('El mensaje se envio con exito!');
	</script>
  <?php }
  if(isset($_GET['aviso'])){
    ?>
	<script>
alert('Error, mensaje no enviado(Todos los campos deben ser completados)');
	</script>
  <?php } 

  
	if(isset($_GET['idProducto'])){
		$id=$_GET['idProducto'];
		$sql='SELECT *FROM productos WHERE idProducto=?';
		$producto=$conexion->prepare($sql);
		$producto->bindParam(1,$id,PDO::PARAM_INT);
		if($producto->execute()){
			$fila=$producto->fetch();
		}
	?>


   <!--/ Intro Skew Star /-->
   <div id="home" class="intro route bg-image" style="background-image: url(img/footer.jpg); height:100px; width:100% ">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        
      </div>
    </div>
  </div>
  <!--/ Section Portfolio Star /-->
<br>
<div class="container">
  <div class="col-md-6">
          <div class="work-box">
            <a href="descipcion">
            <a href="img/P016.1.jpg" data-lightbox="img16">
              <div class="work-img">
                <img src="img/P016.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Cremallera De Hierro Agulo 1 X 1/4 Modulo 4 Por Metro  </h2>
                    <div class="w-more">
                    <span><strong>$ 1.044</strong></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        </div>

<?php

  }
  ?>