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
        $nombreProf = new Modelo();
        $datoNomP = $nombreProf->mostrar("maestro","idMaestro = 1");

        $nombreEst = new Modelo();
        $datoNomEst = $nombreEst->mostrar("estudiante","idgrupo = 1");

        $nombreGrup = new Modelo();
        $datoNomG = $nombreGrup->mostrar("grupo","idMaestro = 1");

        $nombreGrupTitulo = new Modelo();
        $datoNomGT = $nombreGrupTitulo->mostrar("grupo","idMaestro = 1 and idGrupo = 1");
        require_once("vista/paginaGEAdmin.php");
    }

    // --------------------------- FUNCIONES GET FORMULARIOS

     //guardar grupo
    static function guardar(){
        $codigo = 2345;
        $idM = 1;
        /*$nombre= $_REQUEST['nombreG'];
        $datos = "'".$nombre."',".$codigo.",".$idM;
        $grupo = new Modelo();
        $datoGrupo = $grupo->agregar("grupo",$datos);
        header("location:".urlsite);*/
        require_once("vista/paginaGEAdmin.php");
    }
}