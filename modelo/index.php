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
/* ------------------------- Funcion SELECCIONAR Grupo Estudiante*/
    public function mostrarGE($tabla1,$tabla2,$condicion){
        $consul="select e.idEstudiante,e.nombre,e.apellido,g.codigo,g.idGrupo 
                from ".$tabla1." inner join ".$tabla2." 
                on ".$condicion.";";
            $resu=$this->db->query($consul);
            while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
            }
            return $this->datos;
        }
/* ------------------------- Funcion INSERTAR*/
    public function agregar($tabla,$colm,$datos){
        $consul="insert into ".$tabla." (".$colm.") values (null,".$datos.");";
        //$consul="insert into ".$tabla." (idGrupo, nombre, codigo, idMaestro) values (null,".$datos.");";
        echo $consul;
            $resu=$this->db->query($consul);
            if ($resu) {
                return true;
            } else {
                return false;
            }
        }
/* ------------------------- Funcion ACTUALIZAR*/
    public function actualizar($tabla, $data, $condicion){       
        $consulta="update ".$tabla." set ".$data." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }
/* ------------------------- Funcion ELIMINAR*/
    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }
/*
    public function mostrar2($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
            $resu=$this->db->query($consul);
            $this->datos=$resu->fetch_object();
            return $this->datos;
        }*/
}