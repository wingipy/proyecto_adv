<?php
include('conectar.php');
$conexion=mysqli_connect('localhost','root','','campaña');
?>
<?php
if(isset($_POST['buscar'])){
  $busqueda = $_POST['buscar'];
  $SQL_READ= "SELECT * FROM  protestos where `RAZ SOC O NOM` like '%".$busqueda."%'";

}
?>
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

$resultado = mysqli_query($conexion,$SQL_READ);
while($mostrar=mysqli_fetch_array($resultado)){
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
      ?>