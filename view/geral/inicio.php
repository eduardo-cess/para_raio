<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../styles/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../styles/css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../styles/js/jquery.js" type="text/javascript"></script>
        <script src="../styles/bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Medição Residêncial</title>
    </head>
    <body>
<!--        <div class="navbar navbar-inverse">
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
        </div>-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a  class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Contato<span class="sr-only">(current)</span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informações<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Informações Técnicas</a></li>
            <li><a href="#">Sobre a Empresa</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Informações adicionais</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
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
                <form  action="index.php" method="POST">
                    <p><input type="text" placeholder="Login" required name="login"></p>
                    <p><input  type="password" placeholder="Senha" required name="senha"></p><br>
                   
                    <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
                </form>
            </div>
            </div>
        </div>

    </body>
</html>
