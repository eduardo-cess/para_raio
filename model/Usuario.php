<?php

/**
 * Description of Usuario
 *
 * @author carlos
 */
class Usuario extends Dao{
    
    private $id;
    private $idPerfil;
    private $login;
    private $senha;
    private $nome;
    private $email;
    
    public function getId() {
        return $this->id;
    }

    public function getIdPerfil() {
        return $this->idPerfil;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    
    //////////////////////////////////////////////////
    


}
