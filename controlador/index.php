<?php
require_once("modelo/index.php");

class modeloController{
    private $model;

    public function __construct(){
        $this->model = new Modelo();
    }

    //mostrar
    static function index(){
        require_once("vista/index.php");
    }

    //pagina menu
    static function paginaMenu(){
        require_once("vista/paginaMenu.php");
    }

    //pagina N1
    static function paginaN1(){
        require_once("vista/paginaN1.php");
    }
    //pagina N1
    static function pagina2N1(){
        require_once("vista/pagina2N1.php");
    }

    //pagina N2
    static function paginaN2(){
        require_once("vista/paginaN2.php");
    }

    //pagina N3
    static function paginaN3(){
        require_once("vista/paginaN3.php");
    }

    //pagina N4
    static function paginaN4(){
        require_once("vista/paginaN4.php");
    }

    //pagina N5
    static function paginaN5(){
        require_once("vista/paginaN5.php");
    }

    //pagina historia
    static function paginaHistoria(){
        require_once("vista/paginaHistoria.php");
    }

    //pagina historia ejercicios
    static function paginaHistoriaEjer(){
        require_once("vista/paginaHistoriaEjer.php");
    }

    //pagina perfil profesor
    static function paginaGEAdmin(){

        session_start();
        
        //$datos = "nombre = '".$nombre."' and apellido = '".$apellido."' and password = '".$clave."'";
        $datos = "nombre = '".$_SESSION["nombre"]."'";
        $user = new Modelo();
        $datoUser = $user->mostrar("maestro",$datos);

        foreach ($datoUser as $key => $value) {
            foreach($value as $v):
               $_SESSION["id"] = $v['idMaestro'];
            endforeach;
            }
        $datosIdGrupo = "idMaestro = '". $_SESSION["id"]."'";
        $datoIdGrupo = $user->mostrar("grupo",$datosIdGrupo);
        foreach ($datoIdGrupo as $key => $value) {
            foreach($value as $v):
              if ($v['idMaestro']= $_SESSION["id"]) {
                $idGrupo = $v['idMaestro'];
              } 
            endforeach;
            }
            

            $nombreProf = new Modelo();
            $datoNomP = $nombreProf->mostrar("maestro","idMaestro = "."'".$_SESSION["id"]."'");
            
            $nombreEst = new Modelo();
            //$datoNomEst = $nombreEst->mostrar("estudiante","idgrupo = 1");
            $datoNomEst = $nombreEst->mostrar("estudiante","idGrupo = "."'".$_SESSION["id"]."'");
            
            $nombreGrup = new Modelo();
            $datoNomG = $nombreGrup->mostrar("grupo","idMaestro = "."'".$_SESSION["id"]."'");
            
            $nombreGrupTitulo = new Modelo();
            $datoNomGT = $nombreGrupTitulo->mostrar("grupo","idMaestro = "."'".$_SESSION["id"]."'"." and idGrupo = '".$idGrupo."'");
            
            require_once("vista/paginaGEAdmin.php");
        
    }

    // --------------------------- FUNCIONES FORMULARIOS

     //guardar grupo
    static function guardar(){
        session_start();
        $codigo = 4545;
        $idM = $_SESSION["id"];
        $nombre= $_REQUEST['nombreG'];
        $datos = "'".$nombre."','".$codigo."','".$idM."'";
        //$datos = $nombre.", ".$codigo.", ".$idM;
        $grupo = new Modelo();
        $datoGrupo = $grupo->agregar("grupo",$datos);
        //header("location:".urlsite);
        //require_once("vista/paginaGEAdmin.php");
        header("location:".paginaGEAdmin);
    }
    static function login(){
        $nombre= $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $clave= $_REQUEST['passwordMa'];
        $codigo= $_REQUEST['codigoGr'];

        //$datos = "nombre = '".$nombre."' and apellido = '".$apellido."' and password = '".$clave."'";
        $datos = "nombre = '".$nombre."'";
        $user = new Modelo();
        //$datoUser = $user->mostrar2("maestro",$datos);
        if ($datoUser = $user->mostrar("maestro",$datos)) {
            session_start();
            //$_SESSION["id"] = $datoUser->idMaestro;
            $_SESSION["nombre"] = $nombre;
            $_SESSION["apellido"] = $apellido;
            $_SESSION["clave"] = $clave;
            header("location:".paginaGEAdmin);
        } else {
            require_once("vista/paginaMenu.php");
        }
        

        //header("location:".urlsite);
    }
}