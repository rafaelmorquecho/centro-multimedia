<?php

require_once("../modelos/modelo_cartel.php");
$prueba = array('nombre'=>'pepe', 'apellido'=>'juan');
$id = $_POST['id'];
print_r($_POST); 
$titulo=new modelo_cartel();
$datos=$titulo->get_titulo($id);
echo json_encode ($datos);

?>