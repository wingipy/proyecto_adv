<?php
function conectar(){
    $user = "root";
    $pass = "";
    $server= "localhost";
    $DB="campaña";
    $conexion=mysqli_connect($server, $user, $pass, $DB)
    or 
    trigger_error(mysqli_error(),E_USER_ERROR);
    return $conexion;
}
?>