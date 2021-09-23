<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_REQUEST["cod_estudiante" ];
$dni=$_REQUEST['dni'];
$nombres=$_REQUEST['nombres'];
$apellidos=$_REQUEST['apellidos'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>