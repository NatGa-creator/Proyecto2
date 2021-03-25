<?php
session_start();
if(isset($_SESSION['usuario'])){
    //echo "Estoy conectada";

    require("conexion.php");
    ?>


    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h1 class="title">
             Listado de Productos
            </h1>
            
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
    <a href="./?page=gestion_productos" class="button button-a button-rouded">Nuevo Producto</a>
   
     <br><br>
    <?php
if(isset($_GET['idProducto'])){
    $idProducto=$_GET['idProducto'];
    $mensaje=borrarProducto($idProducto);
    echo MostrarMensaje($mensaje);
}
    ?>
    <br>
    <table class="table table-hover table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <!-- <th>Marca</th> -->
            <!-- <th>Categoría</th> -->
            <th>Descripción</th>
            <th>Stock</th>
            <th colspan="2">Operaciones</th>
        </tr>
       
    
        <?php
      /*
      ->query($sql)
      ->execute
      ->exec
      ->prepare 
      ->fetch 
      ->bindParam
      ->bindValue

      */
      $sql='SELECT *FROM productos';
$rows=$conexion->prepare($sql);
$rows->execute();
while($row=$rows->fetch(PDO::FETCH_ASSOC)){

         ?>
        <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Stock']; ?></td>
            <td> <a href="./?page=gestion_productos&idProducto=<?php echo $row['idProducto']; ?>">Actualizar</a> </td>
            <td><a href="./?page=listado&idProducto=<?php echo $row['idProducto']; ?>">Borrar</a></td>
        </tr>
<?php } ?>
    </table>


</body>
</html>
<?php
 echo "<br><a href=./?page=panel&des=1" ?> class="button button-a button-rouded"> <?php echo "Salir del sistema</a>";

}else{
    echo "NO estas conectada no puedes ver esta página";
}

?>
