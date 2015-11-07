    

<?php

try {
    include_once '../controller/ControllerDadosConsumo.php';
    $controllerDadosConsumo = new ControllerDadosConsumo();
    $dadosDiario = $controllerDadosConsumo->getConsumoDia(1);
    echo $dadosDiario;
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

//$timestamp = mktime(20, 03, 58, 10, 31, 2015); // Gera o timestamp da data 09/02/1993 as 20:03:59
//echo date('D/M ~ H:i', $timestamp);
//$dia = date('d');
//echo '<br>';
//echo $dia+1;
?>

