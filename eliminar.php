<?php
//include ("cn_bd.php");

// $id = $_GET['id'];
// $eliminar = "DELETE FROM alumnos WHERE id = 'id'";
// $resultado = mysqli_query($conexion, $eliminar);

// if ($resultado) {
  ?>
    <!-- <h3 class="ok">¡Alumno eliminado con exito!</h3> -->
  <?php
  // header("Location: lista.php");
// } else {
        ?>
          <!-- <h3 class="bad">¡Ups ha ocurrido un error!</h3> -->
        <?php
      // } 
?>

<?php
include_once("cn_bd.php");
if($_REQUEST['id']) {
	$sql = "DELETE FROM alumnos WHERE id='".$_REQUEST['id']."'";
	$resultset = mysqli_query($conexion, $sql) or die("database error:". mysqli_error($conexion));	
	if($resultset) {
		echo "Registro Borrado";
    header("Location: lista.php");
	}
}
?>