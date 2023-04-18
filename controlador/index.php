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
        /*$producto = new Modelo();
        $dato = $producto->mostrar("ejerciciosvalornum","idvalornum = 1");*/
        require_once("vista/paginaN1.php");
    }
    //pagina N1
    static function pagina2N1(){
        /*$producto = new Modelo();
        $dato = $producto->mostrar("ejerciciosvalornum","idvalornum = 1");*/
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

    //pagina historia resultados
    static function paginaHistoriaRes(){
        require_once("vista/paginaHistoriaRes.php");
    }
}