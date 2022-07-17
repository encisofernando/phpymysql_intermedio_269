<?php
include ("cn_bd.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM alumnos WHERE alumnos.id = 'id'";
$resultado = mysqli_query($conexion, $eliminar);

if ($resultado) {
  header("Location: lista.php");
} else {
  echo"<script>alert('No se pudo eliminar'); windows.history.go(-1);</script>";
}
?>