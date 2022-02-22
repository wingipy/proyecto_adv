<?php
include('conectar.php');
$conexion = mysqli_connect('localhost','root', '','campaña');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="icon" href="img/camara.png">
    <title>Camara de comercio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <img class="img-camara" src="img/camara.png" width="75px" height="75px"/>
      <span class="fs-4">Camara de comercio</span>
      </a>
      <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="campaña.php">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="agregar.php">Agregar</a>
  </li>
</ul>
    </header>

<form class="name"action="" method="post">
<div class="row g-2 justify-content-center">
  <div class="col-sm-6 col-md-6">
  <label for="inputState" class="form-label">NOMBRE:</label>
    <input type="text" class="form-control" name="name" placeholder="" aria-label="City">
  </div>
  <div class="row g-3 justify-content-center">
    <div class="col-md-6 col-md-5">
    <div class="btn-group" role="group" aria-label="Basic example">
  <button type="submit" name="buscar" class="btn btn-secondary">BUSCAR</button>
</div>
    </div>
</form>
<div class='sm-11 md-15 col-lg-11-responsive-12'><br>
  <table class="table aling-items-center justify-content-center">
    <thead class="text-muted">
      <th>ITEM</th>
      <th>NOMBRE O RAZ SOC</th>
      <th>RUC JURIDICO</th>
      <th>RUC NATURAL</th>
      <th>DNI</th>
      <th>DOMICILIO</th>
      <th>RAZON SOCIAL</th>
      <th>MONEDA</th>
      <th>IMPORTE</th>
      <th>FECHA PROT</th>
      <th>CLASE</th>
      <th>PROVEEDOR</th>
    </thead>
    <tbody> 
      <tr>
        <?php
        if(isset($_POST['buscar'])){
          $busqueda = $_POST['name'];
          $sql="SELECT * FROM protestos where `RAZ SOC O NOM` like '%".$busqueda."%'";
          
          $resultado = mysqli_query($conexion,$sql);
          while($mostrar=mysqli_fetch_assoc($resultado)){
  ?>

      </tr>
      <tr>
        <td><?php echo $mostrar['ITEM'] ?></td>
        <td><?php echo $mostrar['RAZ SOC O NOM'] ?></td>
        <td><?php echo $mostrar['RUC JURIDICO'] ?></td>
        <td><?php echo $mostrar['RUC NATURAL'] ?></td>
        <td><?php echo $mostrar['DNI'] ?></td>
        <td><?php echo $mostrar['DOMICILIO'] ?></td>
        <td><?php echo $mostrar['RAZ SOC'] ?></td>
        <td><?php echo $mostrar['MONEDA'] ?></td>
        <td><?php echo $mostrar['IMPORTE'] ?></td>
        <td><?php echo $mostrar['FECHA PROT'] ?></td>
        <td><?php echo $mostrar['CLASE'] ?></td>
        <td><?php echo $mostrar['PROVEEDOR'] ?></td>
      </tr>

      <?php
}
        }
      ?>
    </tbody>

  </table>

</div>
</body>
</html>