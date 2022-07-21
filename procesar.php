<?php
include("cn_bd.php");

if (isset($_POST['actualizar'])) {
  $id = trim($_POST['id']);
  $nombre = trim($_POST['nombre']);
  $apellido = trim($_POST['apellido']);
  $direccion = trim($_POST['direccion']);
  $telefono = trim($_POST['telefono']);

      $actualizar = "UPDATE alumnos SET nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono' WHERE id='$id'";

      $resultado=mysqli_query($conexion, $actualizar);

        if ($resultado) {
          ?>
            <h3 class="ok">¡Alumno modificado con exito!</h3>
          <?php
           header("Location: lista.php");
        } else {
                ?>
                  <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
              } 
}
?>