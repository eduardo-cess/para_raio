<?php
include '_header.php';
include '_menu_usuario.php';
?>
<ul class="nav nav-tabs">
    <!--<ul nav nav-pills nav-stacked>-->
    <li role="presentation"><a href="#">Gráfico Diário</a></li>
    <li role="presentation"><a href="#">Gráfico Semanal</a></li>
    <li role="presentation"><a href="#">Gráfico Mensal</a></li>
    <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Gráfico Anual<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li role="presentation"><a href="#">Gráfico Semanal</a></li>
            <li role="presentation"><a href="#">Gráfico Mensal</a></li>
        </ul>
    </li>
</ul>

<div class="container" style="background-color: whitesmoke" id="divConteiner">
    <div >
        <canvas id="grafico" width="80%" height="47%"></canvas>
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
                                label: "My First dataset",
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
