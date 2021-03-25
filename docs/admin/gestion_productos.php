<?php
session_start();
if(isset($_SESSION['usuario'])){
    //echo "Estoy conectada";
    echo "<br><br><a href=./?page=panel&des=1>Salir del sistema</a>";
include "conexion.php";
                    if(isset($_GET['idProducto'])){
                    ?>
					<div class="container">
                    <div class="row">
                    <div class="col-sm-12">
                    <div class="title-box text-center">
                    <h1 class="title"> Actualización del Producto </h1>
                
                    <div class="line-mf"></div>
                    </div>
                    </div>
                    </div>
                    <?php
                    }else{
                    ?>
                    <div class="container">
                    <div class="row">
                    <div class="col-sm-12">
                    <div class="title-box text-center">
                     <h1 class="title"> Nuevo Producto</h1>
            
                    <div class="line-mf"></div>
                    </div>
                    </div>
                    </div>
                    <?php } ?>
                    <br><br>
                    <?php
//INICIO DEL INSERTAR NUEVO PRODUCTO
if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $stock=$_POST['stock'];
    $imagen=$_FILES['imagen'];
    $mensaje=CrearProducto($nombre, $precio, $descripcion, $stock,$imagen);
    echo MostrarMensaje($mensaje);
}

//INICIO DEL SELECT PARA EL UPDATE Y MOSTRAR LA DATA DE UN SOLO PRODUCTO
if(isset($_GET['idProducto'])){
    $id=$_GET['idProducto'];
    $sql='SELECT *FROM productos WHERE idProducto=?';
    $producto=$conexion->prepare($sql);
    $producto->bindParam(1,$id,PDO::PARAM_INT);
    if($producto->execute()){
        $fila=$producto->fetch();
    }

}
//FIN DEL SELECT

//AQUI HACEMOS EL UPDATE ******
if(isset($_POST['actualizar'])){
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $stock=$_POST['stock'];
    $idProducto=$_POST['idProducto'];
    $imagenActual=$_POST['imagenActual'];
    $imagen=$_FILES['imagen'];
    $mensaje=actualizarProducto($nombre, $precio, $descripcion, $stock,$imagenActual,$imagen,$idProducto);
    echo MostrarMensaje($mensaje);
}


                ?>
                    <div class="contact-form">
                    <form action="" method="post" enctype="multipart/form-data">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" <?php if(isset($_GET['idProducto'])){ ?> value="<?php echo $fila['Nombre'];?>"<?php } else{ ?> placeholder="Nombre"<?php } ?>>
                    <label for="Precio">Precio:</label>
					<input type="text" class="form-control" name="precio" <?php if(isset($_GET['idProducto'])){ ?> value="<?php echo $fila['Precio'];?>"<?php } else{ ?> placeholder="Precio"<?php } ?> >
                    
                    <label for="Descripcion">Descripción</label>
                    <input type="text" class="form-control"  name="descripcion" <?php if(isset($_GET['idProducto'])){ ?> value="<?php echo $fila['Descripcion'];?>"<?php } else{ ?> placeholder="Descripción"<?php } ?> > <br>
                    <label for="Stock">Stock</label>
                    <input type="text" class="textbox" placeholder="Stock" name="stock" <?php if(isset($_GET['idProducto'])){ ?> value="<?php echo $fila['Stock'];?>"<?php } else{ ?> placeholder="Stock"<?php } ?>> <br><br>

                    <?php if(isset($_GET['idProducto'])){ ?>
                    <input type="hidden" name="idProducto" value="<?php echo $_GET['idProducto'] ?>">
                    <input type="hidden" name="imagenActual" value="<?php echo $fila["Imagen"]; ?>">
                    <?php }
                    //imagen guardada

                    ?>

                    <img src="../img/productos/<?php echo $fila['Imagen']; ?>" alt="" style="width:100px;">

                    <input type="file" name="imagen" multiple="multiple">

                    <br><br>

                    <?php
                    if(isset($_GET['idProducto'])){
                    ?>
                    <input type="submit" value="Actualizar Producto" name="actualizar">

                    <?php
                    }else{
                    ?>
                    <input type="submit" value="Guardar Nuevo Producto" name="enviar">
                    <?php } ?>

                    <button type="submit"><a href="./?page=listado">Volver</a></button><br><br><br><br>

					<div class="clearfix"></div>
				</form>


			</div>
      <?php
}
       ?>
