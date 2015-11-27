<?php
include_once '_header.php';
include_once '_menu_usuario.php';
include_once '_menuGraficos.php';
?>

<h1 id="titulo-grafico">Consumo Diário (Em KW/h)</h1>
<div class="container" style="background-color: whitesmoke" id="divConteiner">
    <div >
        <canvas id="grafico" width="90%" height="37%"></canvas>
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
    var now = new Date;
    var hora = now.getHours();
    var horas = [];
    for (i = 0; i <= hora; i++)
        horas[i] = i;



    window.onload = function () {
        carregaG();
        window.setInterval(carregaG, 30000);


    }

    function carregaG() {
        $.getJSON(
                "_dadosGraficoDiario.php",
                function (data) {
 
                    var dataLine = {
                        labels: horas,
                        datasets: [
                            {
                                label: "Gráfico Diario",
                                fillColor: "rgba(36,68,174,0.65)",
                                strokeColor: "rgba(228,18,18,0.7)",
                                pointColor: "rgba(220,220,220,1)",
                                pointStrokeColor: "#fff",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(220,220,220,1)",
                                data: data
                            }
                        ]
                    };
                    window.myBar = new Chart(ctxLine).Line(dataLine, {responsive: true});
                    //setTimeout('location.reload();', 24000);
                }

        );
    }

</script>


<?php
include '_footer.php';
?>
