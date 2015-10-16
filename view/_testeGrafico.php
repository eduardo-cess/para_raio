<!--<!DOCTYPE html>



        <meta charset="UTF-8">
        <link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="styles/css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="styles/js/jquery.js" type="text/javascript"></script>
        <script src="styles/bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
-->        <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
        <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

 
 



	
        <div class="container" style="background-color: whitesmoke;"><div class="ct-chart ct-square" style="height: 40%"></div></div>


	
<script>
    window.onload = function() {
  var data = {
   labels: ['segunda', 'terça', 'quarta', 'quinta', 'sexta','sabado','domingo'],
   series: [
    [10, 24, 51, 3, 12,34,42]
   ]
  };
  new Chartist.Bar('.ct-chart', data);
};
</script>

