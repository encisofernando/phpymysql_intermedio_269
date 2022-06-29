<?php

include("cn_bd.php");

if (isset($_POST['register'])) {  
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['telefono']) >= 1) {
          $nombre = trim($_POST['nombre']);
          $apellido = trim($_POST['apellido']);
          $direccion = trim($_POST['direccion']);
          $telefono = trim($_POST['telefono']);
          $consulta = "INSERT INTO alumnos(nombre, apellido, direccion, telefono) VALUES ('$nombre','$apellido','$direccion','$telefono')";
          $resultado = mysqli_query($conexion,$consulta);
              if ($resultado) {
                ?>
                    <h3 class="ok">¡Alumno cargado con exito!</h3>
                <?php
              } else {
                ?>
                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
              } 
    }     else {
                ?>
                    <h3 class="bad">¡Por favor complete los campos!</h3>
                <?php
              }
}
?>