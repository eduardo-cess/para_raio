    <!DOCTYPE html>
    
    <?php 
    include_once '../controller/ControllerDadosConsumo.php';
    $controllerDadosConsumo = new ControllerDadosConsumo();
    $dadosDiario = $controllerDadosConsumo->getConsumoDia($idProduto);
   
    
    //$timestamp = mktime(20, 03, 58, 10, 31, 2015); // Gera o timestamp da data 09/02/1993 as 20:03:59
//echo date('D/M ~ H:i', $timestamp);
//$dia = date('d');
//echo '<br>';
//echo $dia+1;
    ?>
<!--    <html>
        <head>
            <script src="../library/RGraph/libraries/RGraph.common.core.js" ></script>
            <script src="../library/RGraph/libraries/RGraph.common.annotate.js" ></script>
            <script src="../library/RGraph/libraries/RGraph.common.context.js" ></script>
            <script src="../library/RGraph/libraries/RGraph.common.tooltips.js" ></script>
            <script src="../library/RGraph/libraries/RGraph.common.resizing.js" ></script>
            <script src="../library/RGraph/libraries/RGraph.bar.js" ></script>
        </head>
        <body>
        </body>
    </html>-->