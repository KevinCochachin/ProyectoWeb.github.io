<?php
include("conexion.php");

$id=$_GET['id'];

$sql="SELECT * FROM login WHERE usuario='$id'";

$resultado=mysqli_query($conn,$sql);
$mostrar=mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    
<style>
body {

font-size: 1.4rem;
line-height: 5rem;
background-image: url(/img/login/patron.jpg) ;
    
}

h1 {
    background: #DA0D48;
    text-align: center;
}
</style>




    <body>

<h1>Editar Registro</h1>
    <br>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="usuario" value="<?php echo $mostrar['usuario']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $mostrar['usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="pass" placeholder="contraseña" value="<?php echo $mostrar['pass']  ?>">
                                <input type="text" class="form-control mb-3" name="rol" placeholder="rol" value="<?php echo $mostrar['rol']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>