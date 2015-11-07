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
            $dadosPorHora =  $this->agrupaDadosPorHora($dados);
            //var_dump($dadosPorHora);die;
            $jsonStr = json_encode($dadosPorHora);
            echo $jsonStr;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
        
        public function agrupaDadosPorHora($dados) {
           
            $dadosPorHora = array();
            for($i=0;$i<=23;$i++){
                $dadosPorHora['hora'."$i"] = 0;
                foreach ($dados as $dado) {
                    $hora = Date::getHora($dado->getData());
                    if($hora >= $i && $hora < ($i+1) )
                        $dadosPorHora['hora'."$i"] += $dado->getValor();
                }
                //  echo "<input type='hidden' id='hora$i' value='$dadosPorHora[$i]'><br>";
                

            }
            return $dadosPorHora;
        }
        
        public function getConsumoSemana($idProduto){
            try {
                include_once '../library/Date.php';
                include_once '../model/DadosConsumoDao.php';
                $dadosConsumoDao = new DadosConsumoDao();
                
                $hoje = date('w');//retorna o dia da semana numérico (0 - domingo a 6 - sábado)
                
                

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

}

