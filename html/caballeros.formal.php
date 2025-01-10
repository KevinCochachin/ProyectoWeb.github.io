<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>

    <script async>(function(w, d) { var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://app.bluecaribu.com/conversion/integration/e83aa46c55fe89d3ce61e2c75e28edb6"); h.appendChild(s); })(window, document);</script>
    
    <!-- Links Externos -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <script src="https://kit.fontawesome.com/053d7504a2.js" crossorigin="anonymous"></script>

    <!-- Links Internos -->
    
  <link rel="stylesheet" type="text/css" href="/css/inicio.encabezado.css">
    <link rel="icon" type="image/jpg" href="/img/inicio/Icono.png">
    <link rel="stylesheet" type="text/css" href="/css/caballeros.formal.css">
    <link rel="stylesheet" type="text/css" href="/css/inicio.pie.pagina.css">
</head>

  
    

<!-- ====================================================================================== -->

<!-- Cuerpo -->

<body>
    <!-- Encabezado -->
    <header>

        <div class="titulo_superior">

            <div class="titulo_logo">
                <img src="/img/inicio/logo.png" alt="">
            </div>

            <div class="busqueda">
                <input type="search" placeholder="¿Qué deseas buscar?">
            </div>

        </div>

    <!-- Menu y Submenu -->
        <div class="contenedor_menu">

            <div class="menu">

                <input type="checkbox" id="check_menu">

                <label id="#label_check" for="check_menu">
                    <i class="fa-solid fa-bars icono_menu"></i>
                </label>

                <nav>
                    <ul>

                        <li><a href="/inicio.php" id="navegando"></a></li>
                        <li><a href="" class="encabezado1">Servicios</a>
                            <ul>
                                <li><a href="/html/caballeros.php" class="encabezado1">Caballeros</a></li>
                                <li><a href="/html/damas.php" class="encabezado1">Damas</a></li>
                            </ul>
                        </li>
                        <li><a href="/html/nosotros.html" class="encabezado1">Nosotros</a></li>
                        <li><a href="/html/equipo.html" class="encabezado1">Equipo</a></li>
                        <li><a href="/html/contactenos.html" class="encabezado1">Contactenos</a></li>

                    </ul>
                </nav>

            </div>

        </div>

    </header>


<!-- ====================================================================================== -->

<style>


.encabezado1{

font-size: 1.2rem;

}
a{
color: white;
text-decoration: none;
height: 0%;

}

a:hover{
    color: white;
}
</style>

<!-- ====================================================================================== -->

<?php 
error_reporting(0);

$carrito_mio=$_SESSION['carrito'];
$_SESSION['carrito']=$carrito_mio;

// contamos nuestro carrito
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
    if($carrito_mio[$i]!=NULL){ 
    $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    $totalcantidad += $total_cantidad;
    }}}
?>
 
<!-- Encabezado Carro -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Carrito de Compras</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- FIN Encabezado Carro  -->

<style>

.modal-title{
    background: #14A98C;
    font-size: 2.3rem;
    color: white;
    padding: 2rem;
    border-radius: 1.2rem;
}

.my-0{
    font-size: 1rem;
    font-style:oblique;
    line-height: 4rem;
}

.precios{
    text-align: center; 
    color: red;
    font-size: 1.2rem;
   
}
.menu{
    height: 0%;
}

</style>





<!-- CARRITO DE COMPRAS -->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CARRITO DE COMPRAS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   
   
     
			<div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){
						
            ?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span  class="precios"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> soles</span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
							}
							}
							?>
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: blue; font-size: 1.2rem;">Total (soles)</span>
							<strong  style="text-align: left; color: #000000; "><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){ 
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}}}
							echo $total; ?> soles</strong>
							</li>
						</ul>
					</div>
				</div>
			</div>
			


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" href="/borrarcarro.php">Vaciar carrito</a>
        <a type="button" class="btn btn-secondary" href="/html/comprar.php">Procesar compra</a>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CARRITO -->

<!-- ====================================================================================== -->

<!-- Ropa Formal - Titulo -->

<div class="contenedor_formal">

    <div class="titulo_formal">
        <h1>Formal:Caballero</h1>
    </div>

    <!-- Saco de vestir -->

    <div class="contenedor_datos">

        <div class="ropa_formal">

            <div class="ropa_titulo">
                <h2>Saco de Vestir</h2>
            </div>
    
            <div class="ropa_img">
                <img src="/img/caballeros_formal/saco.png" alt="">
            </div>
    
        </div>
    
        <div class="contenido_formal">
    
            <div class="tallas_formal">

                <div class="tallas_titulo">
                    <h2>Tallas</h2>
                </div>

                <div class="tallas_tipo">
                    <ul>
                        <li>S</li>
                        <li>M</li>
                        <li>L</li>
                        <li>XL</li>
                    </ul>
                </div>

            </div>
    
            <div class="descripcion_formal">

                <div class="descripcion_titulo">
                    <h2>Descripción del producto</h2>
                </div>

                <div class="texto_formal">

                    <p><span>Género:</span> Hombre</p>
                    <p><span>Fit:</span> Básico</p>
                    <p><span>Material Principal:</span> Poliester</p>
                    <p><span>Composición:</span> 70% Poliester - 30% Viscosa</p>
                    <p><span>Estilo:</span> Vestir</p>
                    <p><span>Temporada:</span> Toda la temporada</p>
                    <p><span>Precio:</span> S/.150.00</p>

                </div>

            </div>
            
            
        </div>     
    
    </div> 
        </div>

    </div>

</div>
<center>
<div class="card m-4" style="width: 10rem; ">

        <form id="formulario" name="formulario" method="post" action="/cart.php">
        <input name="precio" type="hidden" id="precio" value="150" />
        <input name="titulo" type="hidden" id="titulo" value="Saco de vestir" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                <div class="card-body">
                  
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
        
</div>
<hr>

<!-- ====================================================================================== -->

    <!-- Pantalon de vestir -->

<div class="contenedor_formal">

    <div class="contenedor_datos">

        <div class="ropa_formal">

            <div class="ropa_titulo">
                <h2>Pantalon de Vestir</h2>
            </div>
    
            <div class="ropa_img">
                <img src="/img/caballeros_formal/pantalon.png" alt="">
            </div>
    
        </div>
    
        <div class="contenido_formal">
    
            <div class="tallas_formal">

                <div class="tallas_titulo">
                    <h2>Tallas</h2>
                </div>

                <div class="tallas_tipo">
                    <ul>
                        <li>S</li>
                        <li>M</li>
                        <li>L</li>
                        <li>XL</li>
                    </ul>
                </div>

            </div>
    
            <div class="descripcion_formal">

                <div class="descripcion_titulo">
                    <h2>Descripción del producto</h2>
                </div>

                <div class="texto_formal">

                    <p><span>Género:</span> Hombre</p>
                    <p><span>Modelo:</span> Executivo</p>
                    <p><span>Bolsillos:</span> 2</p>
                    <p><span>Material Principal:</span> Poliester</p>
                    <p><span>Composición:</span> 70% Poliester - 30% Viscosa</p>
                    <p><span>Estilo:</span> Vestir</p>
                    <p><span>Temporada:</span> Toda la temporada</p>
                    <p><span>Precio:</span> S/.150.00</p>

                </div>

            </div>

        </div>    
    </div> 
        </div>

    </div>

</div>
<center>
<div class="card m-4" style="width: 10rem; ">

        <form id="formulario" name="formulario" method="post" action="/cart.php">
        <input name="precio" type="hidden" id="precio" value="150" />
        <input name="titulo" type="hidden" id="titulo" value="Pantalon de vestir" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                <div class="card-body">
                  
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
        
</div>
<hr>

<!-- ====================================================================================== -->

    <!-- Zapato de vestir -->

    <div class="contenedor_formal">

        <div class="contenedor_datos">
    
            <div class="ropa_formal">
    
                <div class="ropa_titulo">
                    <h2>Zapato de Vestir</h2>
                </div>
        
                <div class="ropa_img">
                    <img src="/img/caballeros_formal/zapato.png" alt="">
                </div>
        
            </div>
        
            <div class="contenido_formal">
        
                <div class="tallas_formal">
    
                    <div class="tallas_titulo">
                        <h2>Tallas</h2>
                    </div>
    
                    <div class="tallas_tipo">
                        <ul>
                            <li>38 - 40</li>
                            <li>41 - 42</li>
                            <li>43 - 44</li>
                        </ul>
                    </div>
    
                </div>
        
                <div class="descripcion_formal">
    
                    <div class="descripcion_titulo">
                        <h2>Descripción del producto</h2>
                    </div>
    
                    <div class="texto_formal">
    
                        <p><span>Género:</span> Hombre</p>
                        <p><span>Modelo:</span> VDN013 Negro</p>
                        <p><span>Material de suela:</span> Caucho</p>
                        <p><span>Material Principal:</span> Cuero</p>
                        <p><span>Material del interior:</span> Cuero</p>
                        <p><span>Horma:</span> Normal</p>
                        <p><span>Temporada:</span> Toda la temporada</p>
                        <p><span>Precio:</span> S/.150.00</p>
    
                    </div>

                </div>
                
               
            </div>
    
        </div>
    
    </div>
    <center>
<div class="card m-4" style="width: 10rem; ">

        <form id="formulario" name="formulario" method="post" action="/cart.php">
        <input name="precio" type="hidden" id="precio" value="150" />
        <input name="titulo" type="hidden" id="titulo" value="Zapato de vestir" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                <div class="card-body">
                  
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
        
</div>

    
    <!-- ====================================================================================== -->

    <!-- Pie de Página -->

    <footer class="pie_pagina">
        
        <div class="grupo_1">

            <div class="box">   
                <figure>
                    <a href="">
                        <img src="/img/inicio/logo.png" alt="logo de Pagina">
                    </a>
                </figure>
            </div>

            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Es una empresa con una base sólida. Nuestra idea comercial “Moda y calidad al mejor precio” es tan clara como nuestros valores, basados en el respeto fundamental por la persona e incluye una firme creencia en su capacidad.</p>
                <p>En la actualidad, somos una empresa global con miles de compañeros "Fashion" atendiendo a millones de clientes.</p>
            </div>

            <div class="box">

                <h2>SIGUENOS</h2>

                <div class="red_social">
                    <a href="https://www.facebook.com/Fashion-100269262747061" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/fashion_network_peru/" target="_blank" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/Fashion_N_Peru" target="_blank" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/channel/UC3QVVrT_7-al9oBAcrbYxAQ" target="_blank" class="fa fa-youtube"></a>
                </div>

            </div>

        </div>

        <div class="grupo_2">
            <small>
                &copy; 2021 <b>Fashion</b> - Todos los Derechos Reservados por Grupo6.&#169;
            </small>
        </div>

    </footer>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</html>
