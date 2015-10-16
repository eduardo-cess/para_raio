<?php

include_once '../model/DadosConsumoDao.php';

class ControllerDadosConsumo {

    public function getConsumoDia($idProduto){
        try {
            $dadosConsumoDao = new DadosConsumoDao();
            $horaInicial = '00:00:00';
            $horaFinal = '23:59:59';
            $data = 
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

}

