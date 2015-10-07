<!DOCTYPE html>

<?php

include_once '../controller/ControllerUsuario.php';

$controllerUsuario = new ControllerUsuario();
$controllerUsuario->cadastrarUsuario();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="teste.php" method="POST">
            
            <p>Perfil: <input type="text" name="idPerfil" required ></p>
            <p>Nome: <input type="text" name="nome" required ></p>
            <p>Email: <input type="email" name="email" required ></p>
            <p>Login: <input type="text" name="login" required ></p>
            <p>Senha: <input type="password" name="senha" required></p>
            <br>
            <input type="submit" name="cadastrar" value="Cadastrar">
            
        </form>

    </body>
</html>
