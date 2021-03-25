<?php
    require("conexion.php");
    ?>
	


	<div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
             ACCESO AL SISTEMA
            </h3>
            
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
	  
<div class="contact-form">
				<form action="" method="post" >
<input type="text" name="usuario" class="textbox" placeholder="Usuario">
<input type="text" name="clave" class="textbox" placeholder="Contraseña">
<input type="submit" value="Ingresar al sistema" name="enviar">
               			<div class="clearfix"></div>
				</form>

               
            </div>

			</div>
<?php
 if(isset($_POST['enviar'])){
	 $usuario=$_POST['usuario'];
	 $clave=$_POST['clave'];
	$sql='SELECT *FROM usuarios WHERE Usuario=?';
    $user=$conexion->prepare($sql);
    $user->bindParam(1,$usuario,PDO::PARAM_STR);
    if($user->execute()){
        $fila=$user->fetch();
	}
	$usuarioC=$fila['Usuario'];
	$claveC=$fila['Clave'];
	if(password_verify($clave,$claveC)){
		session_start();
		$_SESSION['usuario']=$usuarioC;
		header("Location:./?page=listado&conectado=si");
	}else{
		echo "NOO datos incorrectos";
	}
 }  
 if(isset($_GET['des'])){
	session_start();
	unset($_SESSION);
	session_destroy();
	echo "SESSION CERRADA";
	header("Location:../?alerta=si");
}