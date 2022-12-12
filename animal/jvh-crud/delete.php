<?php

include("conexion.php");
$con=conectar();

$cod_animal=$_GET['id'];

$sql="DELETE FROM animal  WHERE cod_animal='$cod_animal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: animal.php");
    }
?>