<?php
class Modelo{
    private $Modelo;
    private $db;
    private $datos;
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=juegamate','root','');
    }

    public function mostrar($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
            $resu=$this->db->query($consul);
            while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
            }
            return $this->datos;
        } 

        public function mostrarU($tabla,$condicion){
        $consul="select unidad from ".$tabla." where ".$condicion.";";
        $resu=$this->db->query($consul);
        $uni = $resu->FETCHALL(PDO::FETCH_ASSOC);

        return $resu;
        } 
}