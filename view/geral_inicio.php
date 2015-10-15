
<?php
include_once '../controller/ControllerUsuario.php';

include_once '_header.php';

try {
    $controllerUsuario = new ControllerUsuario();
   // $d = new UsuarioDao();
   // var_dump($d);die;
    $controllerUsuario->login();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}


?>
        
<nav id="navMain"class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



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