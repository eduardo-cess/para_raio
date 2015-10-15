
<?php
include_once '../controller/ControllerUsuario.php';

include_once '_header.php';
include_once '_menuGeral.php';
try {
    $controllerUsuario = new ControllerUsuario();
   // $d = new UsuarioDao();
   // var_dump($d);die;
    $controllerUsuario->login();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}


?>
<div id="corpo" class="jumbotron">        
    <div class="container" >
        <div>
            <h1 style="font-size: 25pt">Controle seus gastos!</h1>
            <p>Com o projeto da Pará Raio, você economiza seu dinheiro acompanhando seu consumo de energia em tempo real.</p>
            <p><a href="#" class="btn btn-primary btn-large">Veja Mais &raquo;</a></p>
        </div>
        <div >
            <form  action="geral_inicio.php" method="POST" style="margin-bottom: 10px">
                <p><input type="text" placeholder="Login" required name="login"></p>
                <p><input  type="password" placeholder="Senha" required name="senha"></p><br>

                <button type="submit" class="btn btn-primary" name="entrarLogin">Entrar</button>
            </form>
            <a href="geral_cadastroUsuario.php" ><button class="btn btn-primary" name="cadastrar">Não Possui Cadastro?</button></a>

        </div>

    </div>
</div>

<?php
include_once './_footer.php';