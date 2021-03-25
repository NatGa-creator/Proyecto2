<h1>Gestión de nuevos usuarios</h1><br><br>
<div class="contact-form">
				<form action="" method="post" >
<input type="text" name="usuario" class="textbox" placeholder="Usuario">
<input type="text" name="email" class="textbox" placeholder="Correo Electrónico">
<input type="text" name="clave" class="textbox" placeholder="Contraseña">
<input type="submit" value="Guardar nuevo usuario" name="enviar">
                	<div class="clearfix"></div>
				</form>
			</div>
<?php
if(isset($_POST['enviar'])){
	$usuario=$_POST['usuario'];
	$email=$_POST['email'];
	$clave=$_POST['clave'];
	$mensaje=CrearUsuario($usuario,$email,$clave);
    echo MostrarMensaje($mensaje);
}
