<?php
//LOCALHOST*****
$host="localhost";
$usuario="root";
$clave="";
$bd="pagina_leo";

//HOSTING***
/*$host="localhost";
$usuario="ibydicom_admin";
$clave="0}&mFzjblrn-";
$bd="ibydicom_comercioit";*/

try{
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$clave);
    //echo "Nos conectamos ;)";
    
}catch(PDOException $e){
    print 'ERROR ALERTA'.$e->getMessage(); 
    
}


?>