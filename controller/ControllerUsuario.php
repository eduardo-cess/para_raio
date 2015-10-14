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
//            if($result)
//                echo '<script>alert("cadastrado com sucesso!");</script>';
//            else
//                echo '<script>alert("falha no cadastro.");</script>';
    }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }

    }
    
    public function getUsuario($id) {
        
        try {
            $usuario = new UsuarioDao();
            return $usuario->selectUsuario($id);
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }
    
    public function login(){
        
    try {
        
        if(isset($_POST['entrarLogin'])){
            //include_once '../model/UsuarioDao.php';
            extract($_POST);
            //var_dump($login);die;
            $usuario = new UsuarioDao();
                
            $result = $usuario->selectUsuarioByLogin($login);

            //var_dump($result);die;
            if($result){
                if($result->getSenha() == $senha){
                    if($result->getIdPerfil() == 2)
                        header ("Location: cliente/inicio.php");
                    
                }
                else {
                    echo '<script>alert("Senha incorreta.");</script>';
                }
            }
            else {
                echo '<script>alert("Login incorreto.");</script>';
            }
                
    }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }

    }
    
    public function testando($param) {
        echo $param;
    }
}
