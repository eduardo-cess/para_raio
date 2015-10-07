<?php

/**
 * Description of ControllerUsuario
 *
 * @author carlos
 */
include_once '../model/UsuarioDao.php';

class ControllerUsuario {
    
    public function cadastrarUsuario(){
        
    try {
        
        if(isset($_POST['cadastrar'])){
            extract($_POST);
            $usuario = new UsuarioDao();


            $usuario->setIdPerfil($idPerfil);
            $usuario->setLogin($login);
            $usuario->setNome($nome);
            $usuario->setSenha($senha);
            $usuario->setEmail($email);

            $result = $usuario->insertUsuario($usuario);

            //var_dump($result);die;
            if($result)
                echo '<script>alert("cadastrado com sucesso!");</script>';
            else
                echo '<script>alert("falha no cadastro.");</script>';
    }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }

    }
}
