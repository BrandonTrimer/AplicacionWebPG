<?php
require_once("modelo/index.php");

class modeloController{
    private $model;

    public function __construct(){
        $this->model = new Modelo();
    }

    //mostrar
    static function index(){
        $producto = new Modelo();
        $dato = $producto->mostrar("productos","1");

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
}