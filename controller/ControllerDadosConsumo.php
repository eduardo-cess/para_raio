<?php

class ControllerDadosConsumo {
    
    const DIA = 1;
    const SEMANA = 2;
    const MES = 3;

    public function getConsumoDia($idProduto){
        try {
            include_once '../library/Date.php';
            include_once '../model/DadosConsumoDao.php';
            $dadosConsumoDao = new DadosConsumoDao();
 
            $inicioDia = date('Y-m-d 00:00:00');
            $finalDia = date('Y-m-d 23:59:59');
            $data = array ('inicio'=>"$inicioDia",'final'=>"$finalDia");
            
            $dados = $dadosConsumoDao->selectDadoConsumoByPeriodo($idProduto, $data);
          
            //$consumoTotal = 0;
            $this->agrupaDadosPorHora($dados);
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
        public function agrupaDadosPorHora($dados) {
            $dadosPorHora = array();
            for($i=0;$i<=23;$i++){
                $dadosPorHora[$i] = 0;
                foreach ($dados as $dado) {
                    $hora = Date::getHora($dado->getData());
                    if($hora >= $i && $hora < ($i+1) )
                        $dadosPorHora[$i] += $dado->getValor();
                }
                echo "$dadosPorHora[$i]<br>";
            }
        }

}

