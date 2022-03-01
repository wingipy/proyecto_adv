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
    <title>Camara de comercio</title>
    <link rel="icon" type="icon" href="img/camara.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom align-items-center">
      <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <img class="img-camara" src="img/camara.png" width="75px" height="75px"/>
      <span class="fs-4">Campaña de Protestos</span>
      </a>
      <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active text-dark" href="campaña.php">INICIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="agregar.php" >AGREGAR</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="pagare.php" >PAGARE</a>
  </li>
</ul>
    </header>
<form class="name"action="agregar.php" method="post">
<div class="row g-2 justify-content-center">
  <div class="col-sm-6 col-md-3">
  <label for="inputState" class="form-label">NOMBRE:</label>
    <input type="text" class="form-control" name="name" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-6 col-md-2">
  <label for="inputState" class="form-label">RUC JURIDICO:</label>
    <input type="number" class="form-control" name="rucju" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-5 col-md-2">
  <label for="inputState" class="form-label">RUC NATURAL:</label>
    <input type="number" class="form-control" name="rucnat" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-6 col-md-2 justify-content-center">
  <label for="inputState" class="form-label">DNI:</label>
    <input type="number" class="form-control" name="dni" placeholder="" aria-label="State">
  </div>
    <div class="col-sm-6 col-md-4 justify-content-center">
  <label for="inputdom" class="form-label">DOMICILIO:</label>
    <input type="text" class="form-control" name="dom" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-5 col-md-3 justify-content-center">
  <label for="inputState" class="form-label">ENTIDAD FINANCIERA:</label>
    <input type="text" class="form-control" name="entidad" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-6 col-md-1 justify-content-center">
    <label for="exampleFormControlSelect1">MONEDA:</label>
    <select class="form-control" name="moneda" id="exampleFormControlSelect1">
      <option>S/.</option>
      <option>U$$</option>
    </select>
  </div>
  <div class="col-sm-7 col-md-1 justify-content-center">
  <label for="inputState" class="form-label">IMPORTE:</label>
    <input type="text" class="form-control" name="impo" placeholder="" aria-label="City">
  </div>
  <div class="row g-1 justify-content-center">
  <div class="col-sm-6 col-md-2 justify-content-center">
  <label for="inputState" class="form-label">FECHA:</label>
    <input type="date" class="form-control" name="fecha" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-6 col-md-2 justify-content-center">
  <label for="inputState" class="form-label">CLASE:</label>
    <input type="text" class="form-control" name="clasee" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-5 col-md-5 justify-content-center">
  <label for="inputState" class="form-label">MOTIVO PROTESTO:</label>
    <input type="text" class="form-control" name="motivo" placeholder="" aria-label="City">
  </div>
  <div class="row g-2 justify-content-center">
  <div class="row-sm-6 col-md-2 justify-content-center">
  <label for="inputState" class="form-label">NUM VALOR:</label>
    <input type="number" class="form-control" name="num" placeholder="" aria-label="State">
  </div>

  <div class="col-sm-6 col-md-2 justify-content-center">
  <label for="inputState" class="form-label">FECHA NOTIFICADA:</label>
    <input type="date" class="form-control" name="fechanoti" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-6 col-md-2 justify-content-center">
  <label for="inputState" class="form-label">FECHA VENCIMIENTO:</label>
    <input type="date" class="form-control" name="fechavenci" placeholder="" aria-label="City">
  </div>
  <div class="col-sm-6 col-md-3 justify-content-center">
  <label for="inputState" class="form-label">PROVEEDOR:</label>
    <input type="text" class="form-control" name="provee" placeholder="" aria-label="City">
  </div>
  <div class="row g-3 justify-content-center">
    <div class="col-md-6 offset-md-5">
    <div class="btn-group" role="group" aria-label="Basic example">
  <button type="submit" name="agregar" class="btn btn-secondary">AGREGAR</button>
</div>
    </div>
  </div>
</div>
</form>
<?php
if(isset($_POST['agregar'])){

  $name = $_POST['name'];
  $rucju = $_POST['rucju'];
  $rucnat = $_POST['rucnat'];
  $dni = $_POST['dni'];
  $dom = $_POST['dom'];
  $entidad = $_POST['entidad'];
  $moneda = $_POST['moneda'];
  $impo = $_POST['impo'];
  $fecha = $_POST['fecha'];
  $clasee = $_POST['clasee'];
  $num = $_POST['num'];
  $motivo = $_POST['motivo'];
  $fechanoti = $_POST['fechanoti'];
  $fechavenci = $_POST['fechavenci'];
  $provee = $_POST['provee'];

  $insertar="INSERT INTO  protestos(`RAZ SOC O NOM`,`RUC JURIDICO`,`RUC NATURAL`,DNI,DOMICILIO,`ENTIDAD FINANCIERA`,MONEDA,
  IMPORTE,`FECHA PROTE`, CLASE, `NUM VALOR`, `MOTIVO PROTE`, `FECHA NOTI`,`FECHA VENCI`,PROVEEDOR) VALUES('$name','$rucju','$rucnat','$dni','$dom','$entidad','$moneda',
  '$impo','$fecha','$clasee','$num','$motivo','$fechanoti','$fechavenci','$provee')";

$resultado = mysqli_query($conexion,$insertar);

if($resultado){
  echo ('Se  he registrado correctamente');
}else{
  echo('No se registro correctamente');
}

}

    

?>
</body>
</html>