<?php

/**
 * Description of Usuario
 *
 * @author carlos
 */
include_once 'Dao.php';

class UsuarioDao extends Dao{
    
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
    public function insertUsuario(UsuarioDao $usuario){
        try {
           // var_dump($usuario->getEmail());die;

            $this->sql = "INSERT INTO usuario (idPerfil,login,senha,nome,email) 
                          VALUES(?,?,AES_ENCRYPT(?,'%@_-coyote-_@%'),?,?)";
            
           $this->prepare();
            
            
            $this->getStmt()->bindParam(1, $usuario->getIdPerfil());
            $this->getStmt()->bindParam(2, $usuario->getLogin());
            $this->getStmt()->bindParam(3, $usuario->getSenha());
            $this->getStmt()->bindParam(4, $usuario->getNome()); 
            $this->getStmt()->bindParam(5, $usuario->getEmail());
            
            return $this->executeStmt();

           // echo $this->stmt->rowCount(); 
          } catch(PDOException $e) {
            echo 'Error: ' . $e;
          }


    }

    public function selectUsuario($id) {
        try {
            $this->sql = "SELECT idPerfil,nome,email,login, AES_DECRYPT(senha,'%@_-coyote-_@%') as senha FROM usuario WHERE id=?";

            $this->prepare();
            
            $this->getStmt()->bindParam(1, $id);

            return $this->fetchStmtObj('UsuarioDao');
            
        } catch (Exception $exc) {
            echo $exc;
        }
        }

}
