<?php

/**
 * Description of DadosConsumo
 *
 * @author carlos
 */
class DadosConsumo {
    
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


}
