<?php
class pelicula{
    private $db;
    private $pelicula;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->pelicula=array();
    }
    public function get_pelicula(){
        $consulta=$this->db->query("SELECT * FROM `pelicula`;");
        $consulta->execute();
        $this->pelicula = $consulta->fetchAll();        
        return $this->pelicula;
    }

    public function get_titulo($id){
        $consulta=$this->db->query("SELECT `Titúlo` FROM `titúlos` WHERE `id` =" . $id .  ";");
        $consulta->execute();
        $this->pelicula = $consulta->fetchAll();        
        return $this->pelicula;
    }



}
?>