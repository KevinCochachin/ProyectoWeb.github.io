<?php
include("conexion.php");
$usuario= $_GET['id'];

$sql="DELETE FROM login  WHERE usuario='$usuario'";

$resultado=mysqli_query($conn,$sql);

if($resultado){
    
    Header("Location: pag_admi.php");
    
}else {
}
?>