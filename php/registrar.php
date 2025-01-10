<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VaidrollTeam Registrar</title>
    <link rel="stylesheet" href="/css/Estilos.css">	
</head>
<body>
<div class="caja1">

<form method="post" action="registrar.php" name="vaidrollteam">

<div class="formtlo">Registrarse</div>
<div class="ub1">&#128273; Ingresar usuario</div>

<input type="text" name="txtusuario" placeholder="Usuario">

<div class="ub1">&#128274; Ingresar Contraseña</div>

<input type="password" name="txtcontraseña" id="txtcontraseña" placeholder="Contraseña">

<div class="ub1">
<input type="checkbox" onclick="vercontraseña()" >Mostrar contraseña</div>
<div class="ub1">Rol</div>
<input type="text" name="txtrol" placeholder=" Ingresar rol (Admin-Usuario)" required />
</select>

<div align="center">
<input type="submit" value="Registrar" name="btnregistrar" class="botones">
<input type="reset" value="Cancelar" class="botones"> <br> <br>
<a href="/html/index.html"> Iniciar Sesion</a>
</div>
<form>
</div>
</body>
<script>
function vercontraseña(){
    var tipo = document.getElementById("txtcontraseña");
    if(tipo.type == "password")
	{
        tipo.type = "text";
    }
	else
	{
        tipo.type = "password";
    }
}
</script>

</html>

<?php
include('conexion.php');

session_start();


if(isset($_POST["btnregistrar"]))
{

$nombre = $_POST["txtusuario"];
$contra  = $_POST["txtcontraseña"];
$rol = $_POST["txtrol"];


	$sqlgrabar = "INSERT INTO login (usuario,pass,rol) values ('$nombre','$contra ','$rol')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='/html/index.html' </script>";
	}
} 
?>





