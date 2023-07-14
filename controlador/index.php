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
    //pagina historia ejercicios
    static function seleccionarGrupo(){
        session_start();
        $_SESSION['idGS'] = $_POST['idGrupoSelect'];
        header("location:".paginaGEAdmin);
    }

    //pagina perfil profesor
    static function paginaGEAdmin(){

        session_start();
        
        $user = new Modelo();
        
        $datosIdGrupo = "idMaestro = '". $_SESSION["idM"]."'";
        $datoIdGrupo = $user->mostrar("grupo",$datosIdGrupo);
        foreach ($datoIdGrupo as $key => $value) {
            foreach($value as $v):
              if ($v['idMaestro']= $_SESSION["idM"]) {
                $idGrupo = $v['idGrupo'];
              } 
            endforeach;
            }
            
        // nombre profesor en perfil
        $nombreProf = new Modelo();
        $datoNomP = $nombreProf->mostrar("maestro","idMaestro = "."'".$_SESSION["idM"]."'");
        // nombre de los grupos en perfil
        $nombreGrup = new Modelo();
        $datoNomG = $nombreGrup->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'");
        $idGrupoSelect = $_SESSION['idGS'];
        if (isset($_POST['selectG'])) {
            $idGrupoSelect = $_POST['idGrupoSelect'];
            // lista de nombres de los estudiantes en inicio
            $nombreEst = new Modelo();
            //$datoNomEst = $nombreEst->mostrar("estudiante","idgrupo = 1");
            $datoNomEst = $nombreEst->mostrar("estudiante","idGrupo = "."'".$idGrupoSelect."'");
            // nombre del grupo en inicio
            $nombreGrupTitulo = new Modelo();
            $datoNomGT = $nombreGrupTitulo->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'"." and idGrupo = '".$idGrupoSelect."'");
            
        } else {

            $nombreEst = new Modelo();
            //$datoNomEst = $nombreEst->mostrar("estudiante","idgrupo = 1");
            $datoNomEst = $nombreEst->mostrar("estudiante","idGrupo = "."'".$idGrupo."'");
            $nombreGrupTitulo = new Modelo();
            $datoNomGT = $nombreGrupTitulo->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'"." and idGrupo = '".$idGrupo."'");
        }
        
        
        
        require_once("vista/paginaGEAdmin.php");
        
    }

    // --------------------------- FUNCIONES FORMULARIOS

     //guardar grupo
    static function guardarG(){
        session_start();
        $codigo = 4545;
        $idM = $_SESSION["idM"];
        $nombre= $_REQUEST['nombreG'];
        $datos = "'".$nombre."','".$codigo."','".$idM."'";
        //$datos = $nombre.", ".$codigo.", ".$idM;
        $grupo = new Modelo();
        $datoGrupo = $grupo->agregar("grupo",$datos);
        //header("location:".urlsite);
        //require_once("vista/paginaGEAdmin.php");
        header("location:".paginaGEAdmin);
    }
    //guardar estudiantes
    static function guardarE(){
        session_start();
        $codigo = 4545;
        $idM = $_SESSION["id"];
        $nombre= $_REQUEST['nombreE'];
        $apellido= $_REQUEST['apellidoE'];
        $datos = "'".$nombre."','".$apellido."','".$idM."'";
        //$datos = $nombre.", ".$codigo.", ".$idM;
        $grupo = new Modelo();
        $datoGrupo = $grupo->agregar("estudiante",$datos);
        //header("location:".urlsite);
        //require_once("vista/paginaGEAdmin.php");
        header("location:".paginaGEAdmin);
    }
    // ------------------- Iniciar Session 
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

            foreach ($datoUser as $key => $value) {
                foreach($value as $v):
                   $_SESSION["idM"] = $v['idMaestro'];
                endforeach;
                }
            //$_SESSION["id"] = $datoUser->idMaestro;
            $_SESSION["nombreM"] = $nombre;
            $_SESSION["apellidoM"] = $apellido;
            $_SESSION["clave"] = $clave;
            header("location:".paginaGEAdmin);
        } else {
            require_once("vista/paginaMenu.php");
        }
        

        //header("location:".urlsite);
    }
}