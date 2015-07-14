<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'header.php';
$tema = isset($_GET["tema"])?$_GET["tema"]:"1";
?>
<div align="center">
    <div id="pantalla-mainwindow" class="row" style="background-image: url('http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/fondo/pantalla1.png'); background-size: 100% 100%;">
        <div class="col-md-4">
            <a href="pantalla2.php?p=1&w=1"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/home/proyeccionp1.png" height="200px"></a>
        </div>
        <div class="col-md-4">
            <a href="pantalla2.php?l=1"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/home/lucesp1.png" height="200px"></a>
        </div>
        <div class="col-md-4">
            <a href="pantalla2.php"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/home/masopcionesp1.png" height="200px"></a>            
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>

<style>
    #pantalla-mainwindow{
        height: 569px;
        width: 900px;
        padding-top: 15%;      
    }
</style>