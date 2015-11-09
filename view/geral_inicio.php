
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
<div id="corpo" class="jumbotron" style="margin-top: 60px">        
    <div class="container"class="">
        <div>
            <h1 style="font-size: 25pt">Controle seus gastos!</h1>
            <p>Com o projeto da Pará Raio, você economiza seu dinheiro acompanhando seu consumo de energia em tempo real.</p>
        </div>
        <div >
            <form  action="geral_inicio.php" method="POST" style="margin-bottom: 10px">               
                <input  id="inputEmail" class="form-control" placeholder="Email"  style="margin-bottom: 10px; width: 20%" name="login">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha"  style="width:20%" name="senha"><br>
                <button type="submit" class="btn btn-primary" name="entrarLogin">Entrar</button>
            </form>
            <p><a href="#" class="btn btn-primary btn-large">Saiba Mais &raquo;</a></p>
            <a href="geral_cadastroUsuario.php" ><button class="btn btn-primary" name="cadastrar">Não Possui Cadastro?</button></a>
        </div>
    </div>
</div>

<script>    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $('.dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
</script>

<?php
include_once './_footer.php';
