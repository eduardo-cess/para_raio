<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '_header.php';

?>

    <div id="divTeste"></div>
    <button onclick="teste()">teste</button>
    <div class="jumbotron" style="width: 95%;margin: 10px auto 10px auto;">
    <div class="container">

<!--    <p>Gráfico 1</p>
    <img src='_testeGrafico3.php' class="container"/>
    </div>-->
</div>

<script>

function teste(){
    $("#divTeste").load("_testeGrafico.php");
}

</script>


<?php
include_once './_footer.php';