<?php
class Modelo{
    private $Modelo;
    private $db;
    private $datos;
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=juegamate','root','');
    }
/* ------------------------- Funcion SELECCIONAR */
    public function mostrar($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
            $resu=$this->db->query($consul);
            while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
            }
            return $this->datos;
        }

/* ------------------------- Funcion INSERTAR*/
    public function agregar($tabla,$datos){
        $consul="insert into ".$tabla." values(null,".$datos.";";
            $resu=$this->db->query($consul);
            if ($resu) {
                return true;
            } else {
                return false;
            }
        }
}