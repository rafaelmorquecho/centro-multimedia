<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Peliculas</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="vistas/carteles.css">
    </head>
    <body>
        
        <header>
            <h1 class="title" id ="titulo"></h1>
	<nav>
		<ul>
			<li><a href="#">Peliculas</a></li>
			<li><a href="#">Musica</a></li>
			<li><a href="#">Series</a></li>	
		</ul>
	</nav>
            
</header>
        <section>
        <div id="peliculas">
            <div >
                <?php
                foreach ($datos as $dato) {

                    echo "<img class='cartel' id=" . "'" . $dato['id_pelicula'] . "'" . " titulo = " . "'" . $dato['titulo'] . "'" . " src= " . "'" . $dato['cartel'] . "' " . " alt='Caratula' > ";
                }
                ?>
            </div>
        </div>
        <div id="musica">

        </div >
        </section>
        <script>
            $(document).ready(function () {
                $(".cartel").mouseover(function () {
                    var id = $(this).attr("titulo");
                    console.log("Handler for .click() called." + id);
                    $('#titulo').text(id);
                });
            });


        </script>
    </body>

</html>