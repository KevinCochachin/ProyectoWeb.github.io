<?php
include("conexion.php");


$usuario = $_POST["usuario"];
$pass = $_POST["pass"];
$rol = $_POST["rol"];


$sql="UPDATE login SET  usuario='$usuario',pass='$pass',rol='$rol' WHERE usuario='$usuario'";
$resultado=mysqli_query($conn,$sql);

if($resultado){
    Header("Location: pag_admi.php");
    
}else {
}
?>