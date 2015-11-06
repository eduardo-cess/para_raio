<?php

/**
 * Description of DadosConsumo
 *
 * @author carlos
 */
include_once 'Dao.php';

class DadosConsumoDao extends Dao{
    
    private $idProduto;
    private $valor;
    private $data;
    
    public function getIdProduto() {
        return $this->idProduto;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getData() {
        return $this->data;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setData($data) {
        $this->data = $data;
    }
////////////////////////////////////////////////////////
    
    public function selectDadoConsumoByPeriodo($idProduto,$data){
        try {
 
            $this->sql = "SELECT valor,data FROM dadosConsumo
                          WHERE idProduto = ? 
                          AND data > ?
                          AND data < ? ";

            $this->prepare();


            $this->getStmt()->bindParam(1,$idProduto);
            $this->getStmt()->bindParam(2,$data["inicio"]);
            $this->getStmt()->bindParam(3,$data["final"]);

            return $this->fetchAllStmtObj('DadosConsumoDao');
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
}
