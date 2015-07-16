<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
        ////URL del WS  
        //$url = "http://beta.akademeia.ufm.edu/cerebro/service.php?wsdl"; 
        $url = "http://localhost/ceta/cerebro/service.php?wsdl";
        ///Inicializamos el cliente SOAP
        $client = new SoapClient($url);                
        ///Lista las funciones disponibles
        $fcs = $client->__getFunctions();  
		echo "<pre>";
		print_r($fcs);
		echo "</pre>";
        ////Creación del HASH es un md5 de la contatenación de client_id+|+client_email   
		$test_ = $client->testconection("Mensaje de prueba");
		$test2_ = $client->listaproyectores();
		$test3_ = $client->infoproyector("2");
		$test4_ = $client->infoproyector("10");
		$test5_ = $client->getimagen("proyector1");
        $test  = json_decode ($test_);    
        $test2  = json_decode ($test2_);    
        $test3  = json_decode ($test3_);  
		$test5  = json_decode ($test5_);  
    
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
				<h3><?php echo 'testconection("Mensaje de prueba")';?></h3>
				<p><?php echo $test_;?></p>
              <pre>
                <?php print_r($test);?>
              </pre>
			  
			  
				<h3><?php echo 'listaproyectores()';?></h3>
				<p><?php echo $test2_;?></p>
              <pre>
                <?php print_r($test2);?>
              </pre>
			  
			  
				<h3><?php echo 'infoproyector("ID")';?></h3>
				<p><?php echo $test3_;?></p>
              <pre>
                <?php print_r($test3);?>
              </pre>  
			  <h3><?php echo 'infoproyector("20")';?></h3>
				<p><?php echo $test4_;?></p>
              <pre>
                <?php print_r($test4_);?>
              </pre>  
			  <h3><?php echo 'imagen("proyector1|luces1|mas1")';?></h3>
				<p><?php echo $test5_;?></p>
              <pre>
                <?php print_r($test5_);?>
              </pre>  			  
          </div>
        </div>     
    </body>
</html>
