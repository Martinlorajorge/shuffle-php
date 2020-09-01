<?php 
    
    // $imagenes= array(
    //     "1" =>"<img src='imagenes/1.png '>",
    //     "2" =>"<img src='imagenes/2.jpg '>",
    //     "3" =>"<img src='imagenes/3.png '>",
    //     "4" =>"<img src='imagenes/4.jpg '>"
    // );

    // shuffle($imagenes);

    // while (list($key, $image)= each($imagenes)) {

            //  echo  $image;
        
    // }
    

    $imagenes=array('1.png','2.jpg','3.png','4.jpg');

    shuffle($imagenes);




    ?>


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
    <h2>Noticias</h2>
    
    </section>

    <section id="contenedor">
        <header id="botonera_principal">
        <ul>
        <?php 
        
        for ($i=0; $i < 4; $i++) { 
            echo "<li id='conimg' style='display:inline;'><img src='imagenes/$imagenes[$i]' width='230px' height='230px';></li>";
        }
        
        ?>
        </ul>
        </header>
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>