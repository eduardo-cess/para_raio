<?php

/**
 * Description of BandeiraTarifaria
 *
 * @author carlos
 */
class BandeiraTarifaria extends Dao{
    
    private $id;
    private $nome;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

//SELECTS
}
