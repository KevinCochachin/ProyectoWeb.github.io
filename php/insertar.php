<?php
include("conexion.php");


$usuario 	= $_POST["usuario"];
$pass = $_POST["pass"];
$rol 	= $_POST["rol"];


$sql="INSERT INTO login VALUES('$usuario ','$pass','$rol')";
$resultado=mysqli_query($conn,$sql);

if($resultado){
    Header("Location: pag_admi.php");
    
}else {
}
?>