<?php


class Conectar{


    


    public static function conexion(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "centromultimedia";

        try{

        $conexion = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password );
      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
        return $conexion;
    }
}
?>