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
    //pagina menu estudiante
    static function paginaMenuEst(){
        session_start();
        require_once("vista/paginaMenuEst.php");
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
        if (!isset($_SESSION['idG'])) {
            if ($datoIdGrupo = $user->mostrar("grupo",$datosIdGrupo)) {
                foreach ($datoIdGrupo as $key => $value) {
                foreach($value as $v):
                  if ($v['idMaestro']= $_SESSION["idM"]) {
                    $idGrupo = $v['idGrupo'];
                    $_SESSION['idG'] = $idGrupo;
                  } 
                endforeach;
                }
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
            $codigoGrupoSelect = $_POST['codGrupoSelect'];
            $_SESSION['idG'] = $idGrupoSelect;
            $_SESSION['codigoG'] = $codigoGrupoSelect;
            // lista de nombres de los estudiantes en inicio
            $nombreEst = new Modelo();
            $datoNomEst = $nombreEst->mostrar("estudiante","idGrupo = "."'".$idGrupoSelect."'");
            // nombre del grupo en inicio
            $nombreGrupTitulo = new Modelo();
            $datoNomGT = $nombreGrupTitulo->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'"." and idGrupo = '".$idGrupoSelect."'");
            // nombre del grupo en inicio
            $codigoGrupo = new Modelo();
            $datoCodG = $codigoGrupo->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'"." and idGrupo = '".$idGrupoSelect."' and codigo = '".$codigoGrupoSelect."'");
            
        } elseif(isset($_SESSION['idG'])) {

            $nombreEst = new Modelo();
            $datoNomEst = $nombreEst->mostrar("estudiante","idGrupo = "."'".$_SESSION['idG']."'");
            $nombreGrupTitulo = new Modelo();
            $datoNomGT = $nombreGrupTitulo->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'"." and idGrupo = '".$_SESSION['idG']."'");
            $codigoGrupo = new Modelo();
            $datoCodG = $codigoGrupo->mostrar("grupo","idMaestro = "."'".$_SESSION["idM"]."'"." and idGrupo = '".$_SESSION['idG']."' and codigo = '".$_SESSION["codigoG"]."'");
            
        }
        require_once("vista/paginaGEAdmin.php");
    }

    // --------------------------- FUNCIONES FORMULARIOS
    // ------------- FUNCIONES GRUPO
     //guardar grupo
    static function guardarG(){
        session_start();
        $codigo = rand(1000,9999);
        $_SESSION['codigoG'] = $codigo;

        $user = new Modelo();
        $condicionCodG = "codigo = '".$codigo."'";
        $datoMostrarIdG = $user->mostrar("grupo",$condicionCodG);
        if (isset($datoMostrarIdG)) {
            $codigo = rand(1000,9999);
            $_SESSION['codigoG'] = $codigo;
        }

        $idM = $_SESSION["idM"];
        $nombre= $_REQUEST['nombreG'];
        $datos = "'".$nombre."','".$_SESSION['codigoG']."','".$idM."'";
        $colm = "idGrupo, nombre, codigo, idMaestro";
        $grupo = new Modelo();
        $datoGrupo = $grupo->agregar("grupo",$colm,$datos);

        //buscar idGrupo
        $user = new Modelo();
        $datosIdGrupo = "nombre = '".$nombre."'";
        $datoIdGrupo = $user->mostrar("grupo",$datosIdGrupo);
        foreach ($datoIdGrupo as $key => $value) {
            foreach($value as $v):
              $idG = $v['idGrupo'];
            endforeach;
        }
        $_SESSION['idG'] = $idG;
        header("location:".paginaGEAdmin);
    }
    //editar grupo
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
        
        $user = new Modelo();
        $datosIdGrupo = "idMaestro = '". $_SESSION["idM"]."'";
        $datoIdGrupo = $user->mostrar("grupo",$datosIdGrupo);
        foreach ($datoIdGrupo as $key => $value) {
        foreach($value as $v):
          if ($v['idMaestro']= $_SESSION["idM"]) {
            $idGrupo = $v['idGrupo'];
            $_SESSION['idG'] = $idGrupo;
            $_SESSION['codigoG'] = $v['codigo'];
          } 
        endforeach;
        }
        header("location:".paginaGEAdmin);
    }

    // ------------- FUNCIONES ESTUDIANTE
    //guardar estudiantes
    static function guardarE(){
        session_start();
        $codigo = $_SESSION['codigoG'];
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

    //eliminar Maestro
    static function eliminarM(){
        session_start();
        $condicion = "maestro.idMaestro = '".$_SESSION['idM']."'";
        $grupo = new Modelo();
        $grupo->eliminar("maestro",$condicion);
        header("location:".urlsite);
    }


    // ------------------- Iniciar Session 
    static function loginM(){
        $nombre= $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $clave= $_REQUEST['password'];

        $datos = "nombre = '".$nombre."' and apellido = '".$apellido."' and password = '".$clave."'";
        //$datos = "nombre = '".$nombre."'";
        $user = new Modelo();
        //$datoUser = $user->mostrar2("maestro",$datos);
        if ($datoUser = $user->mostrar("maestro",$datos)) {
            session_start();

            foreach ($datoUser as $key => $value) {
                foreach($value as $v):
                   $_SESSION["idM"] = $v['idMaestro'];
                endforeach;
                }
            $condicionG = "idMaestro = '".$_SESSION["idM"]."'";
            $user = new Modelo();
            $datoMostrarIdG = $user->mostrar("grupo",$condicionG);
            foreach ($datoMostrarIdG as $key => $value) {
                foreach($value as $v):
                   $_SESSION["codigoG"] = $v['codigo'];
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

//----------- Crear Nuevo Maestro
    static function agregarM(){
        session_start();
        $nombre= $_REQUEST['nombreM'];
        $apellido= $_REQUEST['apellidoM'];
        $nombreG= $_REQUEST['nombreG'];
        $password= $_REQUEST['password'];

        $datosM = "'".$nombre."','".$apellido."','".$password."'";
        $colmM = "idMaestro, nombre, apellido, password";
        $maestro = new Modelo();
        $datoMestro = $maestro->agregar("maestro",$colmM,$datosM);

        $condicionM = "nombre = '".$nombre."' and apellido = '".$apellido."' and password = '".$password."'";
        $user = new Modelo();
        $datoMostrarIdM = $user->mostrar("maestro",$condicionM);
        foreach ($datoMostrarIdM as $key => $value) {
            foreach($value as $v):
               $idM = $v['idMaestro'];
            endforeach;
            }
        
        $codigo = rand(1000,9999);
        $_SESSION['codigoG'] = $codigo;
        $user = new Modelo();
        $condicionCodG = "codigo = '".$codigo."'";
        $datoMostrarIdG = $user->mostrar("grupo",$condicionCodG);
        if (isset($datoMostrarIdG)) {
            $codigo = rand(1000,9999);
            $_SESSION['codigoG'] = $codigo;
        }
        
        $datosG = "'".$nombreG."','".$codigo."','".$idM."'";
        $colmG = "idGrupo, nombre, codigo, idMaestro";
        $grupo = new Modelo();
        $datoGrupo = $grupo->agregar("grupo",$colmG,$datosG);

        $condicionG = "nombre = '".$nombreG."' and codigo = '".$codigo."' and idMaestro = '".$idM."'";
        $user = new Modelo();
        $datoMostrarIdG = $user->mostrar("grupo",$condicionG);
        foreach ($datoMostrarIdG as $key => $value) {
            foreach($value as $v):
               $idG = $v['idGrupo'];
            endforeach;
            }

        $_SESSION['idG'] = $idG;
        $_SESSION['idM'] = $idM;
        header("location:".paginaGEAdmin);
    }
//-----------------------------Login estudiante---------------------------------------------
    static function loginE(){
        $nombre= $_REQUEST['nombre'];
        $apellido= $_REQUEST['apellido'];
        $codigo= $_REQUEST['codigo'];
        

        $condicionE = "nombre = '".$nombre."' and apellido = '".$apellido."'";
        $user = new Modelo();
        if ($datoMostrarIdGE = $user->mostrar("estudiante",$condicionE)) {
            session_start();
            foreach ($datoMostrarIdGE as $key => $value) {
                foreach($value as $v):
                   $idEst = $v['idEstudiante'];
                   $_SESSION["idGru"] = $v['idGrupo'];
                   $_SESSION["nombreEst"] = $v['nombre'];
                   $_SESSION["apellidoEst"] = $v['apellido'];
                   $_SESSION['puntaje'] = $v['puntaje'];
                endforeach;
                }
            $condicionG = "idGrupo = '".$_SESSION["idGru"]."' and codigo = '".$codigo."'";
            $user = new Modelo();
            if ($datoMostrarIdG = $user->mostrar("grupo",$condicionG)) {
                foreach ($datoMostrarIdG as $key => $value) {
                    foreach($value as $v):
                       $_SESSION["nombreGru"] = $v['nombre'];
                       $_SESSION["codigoGru"] = $v['codigo'];
                    endforeach;
                    }
                //$_SESSION["id"] = $datoUser->idMaestro;
                $_SESSION['idEst'] = $idEst;
                header("location:".paginaMenuEst);
            }else {
                header("location:".paginaMenu);
            }
            
        } else {
            header("location:".paginaMenu);
        }
    }

    //aumentar puntaje de estudiante
    static function aumentarPts(){
        session_start();
        $puntaje = $_SESSION['puntaje'];
        $pagina = $_POST['pagina'];
        $dificultad = $_POST['dificultad'];

        switch ($dificultad) {
            case 1:
                $puntaje = $puntaje + 1;
                break;
            case 2:
                $puntaje = $puntaje + 2;
                break;
            case 3:
                $puntaje = $puntaje + 3;
                break;
            case 4:
                $puntaje = $puntaje + 5;
                break;
            default:
                $puntaje = $puntaje + 1;
                break;
        }

        $dato = "puntaje = '".$puntaje."'";
        $condicion = "estudiante.idEstudiante = '".$_SESSION['idEst']."'";
        $grupo = new Modelo();
        $datoGrupo = $grupo->actualizar("estudiante",$dato,$condicion);
        $_SESSION['puntaje'] = $puntaje;
        //require_once("vista/paginaN1.php");
        header("location:".$pagina);
    }


}