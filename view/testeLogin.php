<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../controller/ControllerUsuario.php';


try {
    $controllerUsuario = new ControllerUsuario();
    $controllerUsuario->login();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}


?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="view/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="view/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="view/bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="view/css/estilo.css" rel="stylesheet" type="text/css"/>
        <title>Medição Residêncial</title>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container" style="width: 90%">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Medição Residêncial</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">Sobre</a></li>
                            <li><a href="#contact">Contato</a></li>                            
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 4%; width: 90%">
            <div class="hero-unit">
                <h1 style="font-size: 25pt">Controle seus gastos, mundo sustentável e Economia do Seu dinheiro!</h1>
                <p>Com o projeto da Pará Raio, você economiza seu dinheiro podendo acompanhar sua conta de energia diariamente</p>
                <p><a href="#" class="btn btn-primary btn-large">Veja Mais &raquo;</a></p>
            </div>
            <div class="span9">
                <form class="navbar-form pull-right" action="testeLogin.php" method="POST">
                    <input class="span2" type="text" placeholder="Login" required name="login" ><br>
                    <p><input class="span2" type="password" placeholder="Password" required name="senha"></p><br>
                    <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
                </form>
            </div>
        </div>

    </body>
</html>


