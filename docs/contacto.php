<?php
if(isset($_POST['enviar'])){
  if(!empty($_POST['name']) && !empty($_POST['email']) &&!empty($_POST['subject']) && !empty($_POST['message']) ){
$nombre=$_POST['name'];
$email=$_POST['email'];
$asunto=$_POST['subject'];
$mensaje=$_POST['message'];
$para="lfautomaticos@gmail.com";
    $cuerpo="<h1>Contacto desde mi página</h1>
    <b>Asunto: </b>".$asunto."<br>
    <b>Nombre: </b>".$nombre."<br>
    <b>Email: </b>".$email."<br>
    <b>Mensaje:</b>".$mensaje."<br>";
    $cabecera = "From: página@contact.com \r\n";
	$cabecera.= "MIME-Version: 1.0\r\n";
    $cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";
    $sendMail=(mail($para,$asunto,$cuerpo,$cabecera));
if($sendMail){
  header("Location:./?alerta1=si");
}
}else{
  header("Location:./?aviso=si");
}
}
?>