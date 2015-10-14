<?php

include_once '../controller/ControllerUsuario.php';


try {
    $controllerUsuario = new ControllerUsuario();
    $controllerUsuario->login();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

