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
        session_start();
        session_destroy();
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

        if (!isset($_SESSION['idG'])) {
            foreach ($datoIdGrupo as $key => $value) {
            foreach($value as $v):
              if ($v['idMaestro']= $_SESSION["idM"]) {
                $idGrupo = $v['idGrupo'];
                $_SESSION['idG'] = $idGrupo;
              } 
            endforeach;
            }
        } 
        
        
            
        // nombre profesor en perfil
        $nombreProf = new Modelo();
        $datoNomP = $nombreProf->mostrar("maestro","idMaestro = "."'".$_SESSION["idM"]."'");
        // nombre de los grupos en perfil
        $nombreGrup = new Modelo();
        $datoNomG = $nombreGrup->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'");
        
        if (isset($_POST['selectG'])) {
            $idGrupoSelect = $_POST['idGrupoSelect'];
            $_SESSION['idG'] = $idGrupoSelect;
            // lista de nombres de los estudiantes en inicio
            $nombreEst = new Modelo();
            //$datoNomEst = $nombreEst->mostrar("estudiante","idgrupo = 1");
            $datoNomEst = $nombreEst->mostrar("estudiante","idGrupo = "."'".$idGrupoSelect."'");
            // nombre del grupo en inicio
            $nombreGrupTitulo = new Modelo();
            $datoNomGT = $nombreGrupTitulo->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'"." and idGrupo = '".$idGrupoSelect."'");
            
            
        } else {

            $nombreEst = new Modelo();
            $datoNomEst = $nombreEst->mostrar("estudiante","idGrupo = "."'".$_SESSION['idG']."'");
            $nombreGrupTitulo = new Modelo();
            $datoNomGT = $nombreGrupTitulo->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'"." and idGrupo = '".$_SESSION['idG']."'");
            
        }
        
        
        
        require_once("vista/paginaGEAdmin.php");
        
    }

    // --------------------------- FUNCIONES FORMULARIOS
    // ------------- FUNCIONES GRUPO
     //guardar grupo
    static function guardarG(){
        session_start();
        $codigo = 4545;
        $idM = $_SESSION["idM"];
        $nombre= $_REQUEST['nombreG'];
        $datos = "'".$nombre."','".$codigo."','".$idM."'";
        $colm = "idGrupo, nombre, codigo, idMaestro";
        $grupo = new Modelo();
        $datoGrupo = $grupo->agregar("grupo",$colm,$datos);
        //header("location:".urlsite);
        //require_once("vista/paginaGEAdmin.php");
        header("location:".paginaGEAdmin);
    }
    //guardar grupo
    static function editarG(){
        session_start();
        $idG= $_SESSION['idGrupoInic'];
        $nombre= $_REQUEST['nomGEdit'];
        $dato = "nombre = '".$nombre."'";
        $condicion = "grupo.idGrupo = '".$idG."'";
        $grupo = new Modelo();
        $datoGrupo = $grupo->actualizar("grupo",$dato,$condicion);
        header("location:".paginaGEAdmin);
    }
    //eliminar grupo
    static function eliminarG(){
        session_start();
        $idG= $_SESSION['idGrupoInic'];
        $condicion = "grupo.idGrupo = '".$idG."'";
        $grupo = new Modelo();
        $datoGrupo = $grupo->eliminar("grupo",$condicion);
        header("location:".paginaGEAdmin);
    }

    // ------------- FUNCIONES ESTUDIANTE
    //guardar estudiantes
    static function guardarE(){
        session_start();
        $codigo = 4545;
        $idG = $_SESSION["idGrupoInic"];
        $nombre= $_REQUEST['nombreE'];
        $apellido= $_REQUEST['apellidoE'];
        $datos = "'".$nombre."','".$apellido."','".$idG."'";
        $colm = "idEstudiante, nombre, apellido, idGrupo";
        $grupo = new Modelo();
        $datoGrupo = $grupo->agregar("estudiante",$colm,$datos);
        $_SESSION['idG'] = $idG;
        header("location:".paginaGEAdmin);
    }
    //editar estudiantes
    static function editarE(){
        session_start();
        $idE= $_POST['idEEdit'];
        $idG= $_POST['idGEdit'];
        $nombre= $_POST['nomEEdit'];
        $apellido= $_POST['apellEEdit'];
        $dato = "nombre = '".$nombre."', apellido = '".$apellido."'";
        $condicion = "estudiante.idEstudiante = '".$idE."'";
        $grupo = new Modelo();
        $datoGrupo = $grupo->actualizar("estudiante",$dato,$condicion);
        $_SESSION['idG'] = $idG;
        header("location:".paginaGEAdmin);
    }
    //eliminar estudiante
    static function eliminarE(){
        session_start();
        $idE= $_POST['idEElim'];
        $idG= $_POST['idGElim'];
        $condicion = "estudiante.idEstudiante = '".$idE."'";
        $grupo = new Modelo();
        $grupo->eliminar("estudiante",$condicion);
        $_SESSION['idG'] = $idG;
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