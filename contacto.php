<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos</h2>
    <form action="#" method="post"></form>
    <ul>
    <li><input type="text" name="nombre" id="" placeholder="Nombre" required></li>
    <li><input type="text" name="apellido" id="" placeholder="Apellido" required></li>
    <li><input type="email" name="" id="" placeholder="Email" required></li>
    <li><input type="number" name="edad" id="" min="16" max="110" placeholder="Edad"></li>
    <li><input type="date" name="fecha_nacimiento" id="" placeholder="Fecha de Nacimiento"></li>
    <li><textarea name="consulta" id="" cols="30" rows="10" placeholder="Consulta..."></textarea></li>
    </ul>   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>