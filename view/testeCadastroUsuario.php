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
<!--        <form action="testeCadastroUsuario.php" method="POST" id="formCadastro" >-->
            
            <p>Perfil: <input id="idPerfil" type="text" name="idPerfil" required value="<?php echo $usuario->getIdPerfil();?>"></p>
            <p>Nome:  <input id="nome" type="text" name="nome" required value="<?php echo $usuario->getNome();?>"></p>
            <p>Email: <input id="email" type="email" name="email" required value="<?php echo $usuario->getEmail();?>"></p>
            <p>Login: <input id="login" type="text" name="login" required value="<?php echo $usuario->getLogin();?>"></p>
            <p>Senha: <input id="senha" type="password" name="senha" required value="<?php echo $usuario->getSenha();?>"></p>
            <br>
            <input type="submit" name="cadastrar" value="Cadastrar" id="cadastrar">
            
<!--        </form>-->
        
        
        <script src="js/jquery.js" type="text/javascript" ></script>
        <script>
        
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
        
        </script>
        
        
    </body>
</html>
