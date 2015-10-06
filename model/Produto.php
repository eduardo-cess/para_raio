<?php
/**
 * Description of Produto
 *
 * @author carlos
 */
class Produto {
    
    private $id;
    private $idUsuario;

    public function getId() {
        return $this->id;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }


}
