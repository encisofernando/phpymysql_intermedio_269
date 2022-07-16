<?php
  include("./cn_bd.php");
  $id = $_GET["id"];
  $alumnos = "SELECT * FROM alumnos WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <!-- GOOGLE FONTs -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="./css/style.css">
  
  <title>Modificar Alumnos</title>
</head>
<body>

      <div>
      <?php
      include("./header.php");
      ?>
      </div>

    <form class="container-table" action="procesar.php" method="post">
      <div class="table__title">Panel de edición </div>
      <div class="table__header">Nombre</div>
      <div class="table__header">Apellido</div>
      <div class="table__header">Dirección</div>
      <div class="table__header">Teléfono</div>
      <div class="table__header">Opcion</div>
      <?php $resultados = mysqli_query($conexion, $alumnos);
      while($row=mysqli_fetch_assoc($resultados)){?>
      <input type="hidden" class="table__item" value="<?php echo $row["id"];?>" name="id">
      <input type="text" class="table__item" value="<?php echo $row["nombre"];?>" name="nombre">
      <input type="text" class="table__item" value="<?php echo $row["apellido"];?>" name="apellido">
      <input type="text" class="table__item" value="<?php echo $row["direccion"];?>" name="direccion">
      <input type="text" class="table__item" value="<?php echo $row["telefono"];?>" name="telefono">
      <input class="form_submit" type="submit" value="Actualizar" name="" id="">
      <?php } ?>
    </form>

      <div>
    <?php
      include("./footer.php");
    ?>
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>  
</body>
</html>

