<?php
require("admin/conexion.php");
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
  
	if(isset($_GET['alerta'])){
    ?>
	<script>
alert('Sesión cerrada correctamente');
	</script>
	<?php } ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>LF | Automatización</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap -->
  <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Librerias de CSS -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Carpeta de Estilos CSS-->
  <link href="css/style-orange.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="img/favicon.png"> Automatización</a>
       
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">

        <li><span class="ico"><a href="https://goo.gl/maps/z9jQFe1LVpFoqqH66" target="blank"><img src="img/ubicacion.svg" width="55px" alt="ubicacion"></a></span></li>
        
        <h6 style="margin:20px">Patricios 2245,<br>
        Santos Lugares, Bs As</h6>
        <li><span class="ico"><img src="img/reloj.svg" width="80px" alt="reloj"></span></li>
        <h6 style="margin:20px">Lunes a Viernes,<br>  
        08.30 - 17.00hs</h6>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->