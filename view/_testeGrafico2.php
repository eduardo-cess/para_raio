    
    
    <?php 
     //echo date('Y-m-d H:i:s');
     try {
        include_once '../controller/ControllerDadosConsumo.php';
         $controllerDadosConsumo = new ControllerDadosConsumo();
         $dadosDiario = $controllerDadosConsumo->getConsumoDia(1);

         $hoje = date('w');
         switch ($hoje) {
             case 0:

                 
                 break;

             default:
                 break;
         }
//         echo '<br>'.date('Y-m-d H:i:s');
//
//        echo '<br>'.date('w');
//        echo '<br>'.date('t');
} catch (Exception $exc) {
         echo $exc->getTraceAsString();
     }



//$timestamp = mktime(20, 03, 58, 10, 31, 2015); // Gera o timestamp da data 09/02/1993 as 20:03:59
//echo date('D/M ~ H:i', $timestamp);
//$dia = date('d');
//echo '<br>';
//echo $dia+1;
   
    ?>
<!--<input type="hidden" id="h" value="5">

<script>
var h = document.getElementById("h").value;
alert(h);

</script>-->
