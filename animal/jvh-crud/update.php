<?php

include("conexion.php");
$con=conectar();

$cod_animal=$_POST['cod_animal'];
$nombre=$_POST['nombre'];
$nombre_cientifico=$_POST['nombre_cientifico'];

$sql="UPDATE animal SET  nombre='$nombre',nombre_cientifico='$nombre_cientifico' WHERE cod_animal='$cod_animal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: animal.php");
    }
?>
