<?php

try {
    include_once '../controller/ControllerDadosConsumo.php';
    $controllerDadosConsumo = new ControllerDadosConsumo();
    $dadosDiario = $controllerDadosConsumo->getConsumoDiaTotal(1);

} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
