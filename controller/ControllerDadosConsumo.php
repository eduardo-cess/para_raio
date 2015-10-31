<?php

//

class ControllerDadosConsumo {

    public function getConsumoDia($idProduto){
        try {
            include_once '../model/DadosConsumoDao.php';
            $dadosConsumoDao = new DadosConsumoDao();
 
            $inicioDia = date('Y-m-d 00:00:00');
            $finalDia = date('Y-m-d 23:59:59');
            $data = array ('inicio'=>"$inicioDia",'final'=>"$finalDia");
            
            $dados = $dadosConsumoDao->selectDadoConsumoByPeriodo($idProduto, $data);
            $consumoTotal = 0;
            
            foreach ($dados as $dado){
                echo "Consumo na data ".$dado->getData()." foi ".$dado->getValor();
                echo '<br>';
                $consumoTotal += $dado->getValor();
            }
            echo "Consumo total = $consumoTotal";
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

}

