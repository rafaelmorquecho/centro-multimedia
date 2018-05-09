<?php
//Llamada al modelo
require_once("modelos/modelo_pelicula.php");
$pelicula=new pelicula();
$datos=$pelicula->get_pelicula();
 
//Llamada a la vista
require_once("vistas/carteles_vista.php");
?>