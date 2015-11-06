<!DOCTYPE html>

<?php
//
include_once '../controller/ControllerUsuario.php';
include '_header.php';

$controllerUsuario = new ControllerUsuario();
$controllerUsuario->cadastrarUsuario();

//$usuario = $controllerUsuario->getUsuario(1);
//
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <nav id="navMain" class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="glyphicon glyphicon-align-justify" aria-hidden="true" style="color: white;"></span>

                    </button>
                    <a  class="navbar-brand" href="#"><p>Home</p></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li ><a href="#"><p>Contato</p><span class="sr-only">(current)</span></a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p>Informações<span class="caret"></span></p></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><p>Informações Técnicas</p></a></li>
                                <li><a href="#"><p>Sobre a Empresa</p></a></li>
                                <li><a href="#"><p>Informações adicionais</p></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row" style="background-color: whitesmoke">
                <div style="background-color: whitesmoke; padding: 3%" class="col-xs-6">
                    <form class="form-group" action="geral_cadastroUsuario.php" method="POST" id="formCadastro" >
                        <p>Perfil: <input class="form-control" id="idPerfil" type="text" name="idPerfil" required ></p>
                        <p>Nome:  <input class="form-control" id="nome" type="text" name="nome" required ></p>
                        <p>Email: <input class="form-control" id="email" type="email" name="email" required ></p>
                        <p>Login: <input class="form-control" id="login" type="text" name="login" required ></p>
                        <p>Senha: <input class="form-control" id="senha" type="password" name="senha" required ></p>
                        <input  class="btn bg-primary" type="submit" name="cadastrar" value="Cadastrar" id="cadastrar">
                    </form>                    
                </div>
                <div style="padding: 5%" class="col-xs-6">
                    <img src="styles/images/imagem_para_raio.png" style="height:40pt"class="img-responsive"/>
                    <p>
                        Colocar um texto que leve o usuário a conhecer mais a empresa
                    </p>
                </div>
                <div>
                    
                </div>
            </div>


        </div>

    </body>
</html>      




<!--        <script>
       
       jQuery(document).ready(function(){
           jQuery('#cadastrar').click(function(){
               //var dados = jQuery( this ).serialize();

//                jQuery.ajax({
//                        type: "POST",
//                        url: "testeCadastroUsuario.php",
//                        data: dados,
//                        success: function( data )
//                        {
//                                alert( 'deu certo!!' );
//                        }
//                });
//
//                return false;
               var idPerfil = $("#idPerfil").val();
               var nome = $("#nome").val();
               var email = $("#email").val();
               var login = $("#login").val();
               var senha = $("#senha").val();
               
               $.post("testeCadastroUsuario.php", {idPerfil:idPerfil, nome:nome,
                                                    email:email, login:login,
                                                    senha:senha, cadastrar:'cadastrar'  }
               return false;
           });
       });
       
       </script>-->



