<?php
include "admin/conexion.php";
function CargarPagina($pagina){
    $pagina=$pagina.".php";
    if(file_exists($pagina)){
        include($pagina);
    }else{
        include("404.php");
    }
  
}

function MostrarMensaje($rta){
    $mensaje="";
    switch($rta){
        case "0x001":
            $mensaje="<strong style=color:red>Datos de nombre inválido</strong>";
        break;
        case "0x002":
            $mensaje="<strong style=color:orange>Datos de email inválido</strong>";
        break;
        case "0x003":
            $mensaje="<strong style=color:red>Datos de mensaje inválido</strong>";
        break;
        case "0x004":
            $mensaje="<strong style=color:green>Consulta enviada correctamente</strong>";
        break;
        case "0x005":
            $mensaje="<strong style=color:orange>Consulta no enviada</strong>";
        break;
        case "0x006":
            $mensaje="<strong style=color:orange>Nombre y correo no pueden quedar en blanco</strong>";
        break;
        case "0x007":
            $mensaje="<strong style=color:green>Producto borrado correctamente</strong>";
        break;
        case "0x008":
            $mensaje="<strong style=color:red>ERROR producto no borrado</strong>";
        break;
        case "0x009":
            $mensaje="<strong style=color:green>Producto agregado correctamente</strong>";
        break;
        case "0x010":
            $mensaje="<strong style=color:red>ERROR producto no agregado</strong>";
        break;
        case "0x011":
            $mensaje="<strong style=color:green>Producto actualizado correctamente</strong>";
        break;
        case "0x012":
            $mensaje="<span style=color:red>ERROR Producto no actualizado </strong>";
        break;
        case "0x013":
            $mensaje="<span style=color:blue>Usuario registrado correctamente</strong>";
        break;
        case "0x014":
            $mensaje="<strong style=color:red>ERROR no se pudo registrar al usuario</strong>";
        break;
    }
    return $mensaje;
}

function MostrarProductos(){
    $archivo="listadoProductos.csv";
    if($gestor=@fopen($archivo,'r')){
        while ($datos = fgetcsv($gestor, 1000, ",")) {
            echo '<div class="product-grid">
			<div class="content_box">
				<a href="./?page=producto">
					<div class="left-grid-view grid-view-left">
						<img src="images/productos/'.$datos[0].'.jpg" class="img-responsive watch-right" alt=""/>
					</div>
				</a>
				<h4><a href="#">'.$datos[1].'</a></h4>
				<p>'.$datos[4].' - '.$datos[5].'</p>
				<span>$'.$datos[2].'</span>
			</div>
		</div>';
            
        }
    }
    else{
        echo "no puedo abrir el archivo";
    }
}


function borrarProducto($idProducto){
    global $conexion;
    $sql='DELETE FROM productos WHERE idProducto=?';
    $producto=$conexion->prepare($sql);
    $producto->bindParam(1,$idProducto,PDO::PARAM_INT);
    if($producto->execute()){
        $mensaje="0x007";
    }else{
        $mensaje="0x008";
    }
    return $mensaje;
}


function CrearProducto($nombre, $precio, $descripcion, $stock,$imagen){
    global $conexion;
    //guardar imagen en carpeta
    $tmp_name=$imagen["tmp_name"];
    $directorio="../img/productos";
    $name=$imagen["name"];
    move_uploaded_file($tmp_name,"$directorio/$name");

    //sql del insertar
    $sql='INSERT INTO productos(Nombre,Precio,Descripcion,Stock,Imagen) VALUES (?,?,?,?,?)';
    $producto=$conexion->prepare($sql);
    $producto->bindParam(1,$nombre,PDO::PARAM_STR);
    $producto->bindParam(2,$precio,PDO::PARAM_STR);
    $producto->bindParam(3,$descripcion,PDO::PARAM_STR);
    $producto->bindParam(4,$stock,PDO::PARAM_INT);
    $producto->bindParam(5,$imagen["name"],PDO::PARAM_STR);
    if($producto->execute()){
        $mensaje="0x009";
    }else{
        $mensaje="0x010";
    }
    return $mensaje;
}

function actualizarProducto($nombre, $precio, $descripcion, $stock,$imagenActual,$imagen,$idProducto){
    global $conexion;
    
    $tmp_name=$imagen["tmp_name"];
    $directorio="../img/productos";
    $name=$imagen["name"];
    if(move_uploaded_file($tmp_name,"$directorio/$name")==TRUE){
        $imagen=$imagen["name"];
    }else{
        $imagen=$imagenActual;
    }
    $sql='UPDATE productos SET Nombre=?,Precio=?,Descripcion=?,Stock=?,Imagen=? WHERE idProducto=?';
    $producto=$conexion->prepare($sql);
    $producto->bindParam(1,$nombre,PDO::PARAM_STR);
    $producto->bindParam(2,$precio,PDO::PARAM_STR);
    $producto->bindParam(3,$descripcion,PDO::PARAM_STR);
    $producto->bindParam(4,$stock,PDO::PARAM_INT);
    $producto->bindParam(5,$imagen,PDO::PARAM_STR);
    $producto->bindParam(6,$idProducto,PDO::PARAM_INT);
    if($producto->execute()){
        $mensaje="0x011";
    }else{
        $mensaje="0x012";
    }
    return $mensaje;
}


function CrearUsuario($usuario,$email,$clave){
    global $conexion;
    $clave=password_hash($clave,PASSWORD_DEFAULT);
   //sql del insertar
    $sql='INSERT INTO usuarios(Usuario,Email,Clave) VALUES (?,?,?)';
    $producto=$conexion->prepare($sql);
    $producto->bindParam(1,$usuario,PDO::PARAM_STR);
    $producto->bindParam(2,$email,PDO::PARAM_STR);
    $producto->bindParam(3,$clave,PDO::PARAM_STR);
    if($producto->execute()){
        $mensaje="0x013";
    }else{
        $mensaje="0x014";
    }
    return $mensaje;
}
?>