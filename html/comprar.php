<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>

    <!-- Links Externos --> 
    <script async>(function(w, d) { var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://app.bluecaribu.com/conversion/integration/e83aa46c55fe89d3ce61e2c75e28edb6"); h.appendChild(s); })(window, document);</script>
    
    <script src="https://kit.fontawesome.com/053d7504a2.js" crossorigin="anonymous"></script>

    <!-- Links Internos -->

    <link rel="stylesheet" type="text/css" href="/css/inicio.encabezado.css">
    <link rel="icon" type="image/jpg" href="/img/inicio/Icono.png">
    <link rel="stylesheet" type="text/css" href="/css/compra.css">
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

                        <li><a href="/inicio.php"></a></li>
                        <li><a href="">Servicios</a>
                            <ul>
                                <li><a href="/html/caballeros.php">Caballeros</a></li>
                                <li><a href="/html/damas.php">Damas</a></li>
                            </ul>
                        </li>
                        <li><a href="/html/nosotros.html">Nosotros</a></li>
                        <li><a href="/html/equipo.html">Equipo</a></li>
                        <li><a href="/html/contactenos.html" >Contactenos</a></li>

                    </ul>
                </nav>

            </div>

        </div>

    </header>

<!-- ====================================================================================== -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<style>

.metodo{
    font-size: 1.2rem;
}
</style>



<form action="/php/contactenos.enviar.php" method="post">
    <h2>PROCESO DE COMPRA</h2>

    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="correo" placeholder="Correo" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
    <label for="" class="metodo">Método de Pago</label>
            <select name="" id="" class="metodo">
                <option value="">Visa</option>
                <option value="">Mastercard</option>
                <option value="">Discover</option>
            </select> <br><br>
    <label for="" class="metodo">Numero de Tarjeta:</label> <br> <br>
    <input type="text" name="nombre" placeholder=" " required>
    <label for="" class="metodo">Fecha de vencimiento:</label> <br> <br>
    <input type="date" name="" id=""> <br> 
    <label for="" class="metodo">Numero de verificación: </label>
            <input type="password" name="" id="" maxlength="8"><br><br>
   
    <input type="submit" value="ENVIAR" id="boton">

</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
                    <a href="https://www.facebook.com/Fashion-100269262747061" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/fashion_network_peru/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/Fashion_N_Peru" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/channel/UC3QVVrT_7-al9oBAcrbYxAQ" class="fa fa-youtube"></a>
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
</html>