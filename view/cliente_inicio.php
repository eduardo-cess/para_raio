<?php
include_once '_header.php';
include_once '_menu_usuario.php';
include_once '_menuGraficos.php';
include_once '../controller/ControllerPerfil.php';

ControllerPerfil::securityPerfil(2);
?>

<h1 id="titulo-grafico">Consumo Diário Total</h1>
<div id="imagem"></div>

<div class="container" style="background-color: whitesmoke" id="divConteiner">

    <div >
        <canvas id="grafico" width="80%" height="37%"></canvas>        
    </div> 

</div>

<script>
    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $('.dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    var ctxLine = document.getElementById("grafico").getContext("2d");

    window.onload = function () {
        carregaG();
        window.setInterval(carregaG, 10000);
        carregaImagem(20);


    }

    function carregaG() {
        $.getJSON(
                "_dadosGraficoDiarioTotal.php",
                function (data) {

                    var dataLine = {
                        labels: ['Em reais', 'Em KW/h'],
                        datasets: [
                            {
                                label: "Gráfico Diario Total",
                                fillColor: "rgba(36,68,174,0.65)",
                                strokeColor: "rgba(228,18,18,0.7)",
                                pointColor: "rgba(220,220,220,1)",
                                pointStrokeColor: "#fff",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(220,220,220,1)",
                                data: data
                            },
                        ]
                    };
                    window.myBar = new Chart(ctxLine).Bar(dataLine, {responsive: true});
                    //setTimeout('location.reload();', 24000);
                }

        );
    }

    function carregaImagem(valorLimite) {
    $.getJSON(
            "_dadosGraficoDiarioTotal.php",
            function (data) {
            if (data["energia"] >= valorLimite) {
            $("#imagem").append('<img id="img" src="styles/images/lampada-acendendo-e-apagando.gif"/><h3 id="advertencia">Limite de Consumo Atingido </h3>');
                   
            }
            }
    );
    }

</script>


<?php
include '_footer.php';
?>
