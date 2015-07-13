<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
        ////URL del WS  
        $url = "http://localhost/ceta/cerebro/service.php?wsdl";                
        ///Inicializamos el cliente SOAP
        $client = new SoapClient($url);                
        ///Lista las funciones disponibles
        ///$fcs = $client->__getFunctions();                
        ////Creación del HASH es un md5 de la contatenación de client_id+|+client_email     
        $test  = json_decode ($client->testconection("Mensaje de prueba"));    
        $test2  = json_decode ($client->listaproyectores());    
        $test3  = json_decode ($client->infoproyector("1"));    
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Cerebro - UFM</title>            
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">       

        <link rel="stylesheet" href="js/style/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="js/style/ihover.css">
        <link rel="stylesheet" href="js/style/bootstrap/css/bootstrap-theme.min.css">
        

        <script src="js/js/jquery.min.js"></script>
        <script src="js/js/jquery-ui/jquery-ui.js"></script>
        <script src="js/style/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>        
        <div class="panel panel-default">
          <div class="panel-heading">Prueba de SW</div>
          <div class="panel-body">
              <pre>
                <?php print_r($test);?>
              </pre>
              <pre>
                <?php print_r($test2);?>
              </pre>
              <pre>
                <?php print_r($test3);?>
              </pre>              
          </div>
        </div>     
    </body>
</html>
