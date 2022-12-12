<?php
include("conexion.php");
$con=conectar();

$cod_animal=$_POST['cod_animal'];
$nombre=$_POST['nombre'];
$nombre_cientifico=$_POST['nombre_cientifico'];


$sql="INSERT INTO animal VALUES('$cod_animal','$nombre','$nombre_cientifico')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: animal.php");
    
}else {
}
?>