<?php 
   include('conexion.php');

   $sql="select * from login";
   $resultado=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA REGISTROS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>


    <style>
h1{
    
    font-weight: 900;
    padding-left: 600px;
   
}

h2{
    font-weight: 900;
}

.btn{
    font-size: 1.4rem;
}

body {
    font-size: 1.4rem;
    line-height: 5rem;
    background-image: url(/img/login/patron.jpg) ;    
}

.btn-inicio{
    color: white;
    background-color: #12D809;
    padding: 4px;
    margin: 3px;
    border-radius: 4px;
}

    </style>

    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 >Registros</h1> <br>
                            <h2>Crear Usuario</h2>
                            <br>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario">
                                    <input type="text" class="form-control mb-3" name="pass" placeholder="Contraseña">
                                    <input type="text" class="form-control mb-3" name="rol" placeholder="Tipo de rol">
                                    
                                    
                                    <input type="submit" class="btn btn-primary" value="Registrar">
                                    <br>
                                    <a href="/inicio.php" class="btn-inicio">Ir a la Página web</a>
                                </form>

                               
                        </div>
                      

                        <div class="col-md-8"> 
                            <br>    

                            <table class="table" border="5">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Rol</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    
                                </thead>

                                <tbody >
                                        <?php
                                            while($mostrar=mysqli_fetch_array($resultado)){
                                        ?>
                                            <tr >
                                                <th><?php  echo $mostrar['usuario']?></th>
                                                <th><?php  echo $mostrar['pass']?></th>
                                                <th><?php  echo $mostrar['rol']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $mostrar['usuario'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $mostrar['usuario'] ?>" class="btn btn-danger">Eliminar</a></th>
                                                                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>