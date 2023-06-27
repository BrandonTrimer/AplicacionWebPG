<?php
require_once("config.php");
require_once("controlador/index.php");



if(isset($_GET['ruta'])):
    if(method_exists("modeloController", $_GET['ruta'])):
        modeloController::{$_GET['ruta']}();
    endif;
else:
    modeloController::index();
endif;
