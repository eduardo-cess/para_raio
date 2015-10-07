<!DOCTYPE html>

<?php

include_once '../controller/ControllerUsuario.php';

$controllerUsuario = new ControllerUsuario();
$controllerUsuario->cadastrarUsuario();

$usuario = $controllerUsuario->getUsuario(1);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="testeCadastroUsuario.php" method="POST">
            
            <p>Perfil: <input type="text" name="idPerfil" required value="<?php echo $usuario->getIdPerfil();?>"></p>
            <p>Nome: <input type="text" name="nome" required value="<?php echo $usuario->getNome();?>"></p>
            <p>Email: <input type="email" name="email" required value="<?php echo $usuario->getEmail();?>"></p>
            <p>Login: <input type="text" name="login" required value="<?php echo $usuario->getLogin();?>"></p>
            <p>Senha: <input type="password" name="senha" required value="<?php echo $usuario->getSenha();?>"></p>
            <br>
            <input type="submit" name="cadastrar" value="Cadastrar">
            
        </form>

    </body>
</html>
