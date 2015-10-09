<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'inicio';

?>
<div id="divTeste"></div>
<button onclick="teste()">teste</button>


<script src="../js/jquery.js"></script>

<script>

function teste(){
    $("#divTeste").load("_page.php");
}

</script>