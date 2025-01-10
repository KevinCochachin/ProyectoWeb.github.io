<?php

include('conexion.php');

$usu 	= $_POST["txtusuario"];
$contra = $_POST["txtcontraseña"];
$rol 	= $_POST["rol"];



$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usu' and pass = '$contra ' and rol = '$rol'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($rol=="Usuario")
			{	
				header("Location: pag_user.php");
			}
		else if ($rol=="Admin")
			{
				header("Location: pag_admi.php");
			}
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= '../html/index.html' </script>";
	}


?>

