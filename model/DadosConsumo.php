<?php

/**
 * Description of DadosConsumo
 *
 * @author carlos
 */
class DadosConsumo extends Dao{
    
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
            $this->sql = "SELECT valor FROM dadosConsumo
                      WHERE idProduto = ? AND data = ?";


            $this->prepare();


            $this->getStmt()->setParam($idProduto);
            $this->getStmt()->setParam($data);


            return $this->fetchStmtObj('DadosConsumo');
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
            
}
