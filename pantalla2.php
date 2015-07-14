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
    <div id="pantalla-mainwindow" style="background-image: url('http://beta.akademeia.ufm.edu/cerebro/upload/tema1/fondo/pantalla2.png'); background-size: 100% 100%;">
        <div class="row" >
            <div class="col-md-8">
                <table class="tablepanel">
                    <tr>
                        <td width="200px" align="right"><a href="pantalla2.php<?php 
                                if(isset($_GET["p"])){
                                    echo "";}else{
                                    echo "?p=1&w=1";
                                }
                        ?>"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/proyector<?php echo isset($_GET["p"])?"v":"";?>.png" height="135px"></a></td>
                        <td width="280px" align="right">
                                <?php if(isset($_GET["p"])){?>
                                    <a href="?p=1&w=1"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/wp<?php echo isset($_GET["w"])?"v":"";?>.png" height="135px"></a>
                                    <?php }?>
                                
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <?php if(isset($_GET["p"])){?>
                                <a href="?p=1&h=1"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/HDMI<?php echo isset($_GET["h"])?"v":"";?>.png" height="135px"></a>
                            <?php }?>
                        </td>
                        <td align="right">
                            <?php if(isset($_GET["p"])){?>
                                <a href="?p=1&pl=1"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/pclocal<?php echo isset($_GET["pl"])?"v":"";?>.png" height="135px"></a>    
                            <?php }?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4" align="left">
                <table class="tablepanel" width="220px">
                    <tr align="center"><td><a href="pantalla2.php"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/mas.png" height="85px"></a></td></tr>
                    <tr align="center"><td><a href="pantalla2.php"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/mute.png" height="85px"></a></td></tr>
                    <tr align="center"><td><a href="pantalla2.php"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/menos.png" height="85px"></a></td></tr>
                </table>
            </div>
        </div>
        <br>
        <div class="row">		
            <div class="col-md-12">
                <table class="tablepanel2" width="800px">
                    <tr align="center">
                        <td><a href="?l=1"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/luces<?php echo isset($_GET["l"])?"v":"";?>.png" height="120px"></a></td>
                        <td><a href="pantalla2.php"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/cortinas<?php echo isset($_GET["c"])?"v":"";?>.png" height="120px"></a></td>
                        <td><a href="pantalla2.php"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/aire<?php echo isset($_GET["a"])?"v":"";?>.png" height="120px"></a></td>
                        <td><a href="pantallahome.php"><img src="http://beta.akademeia.ufm.edu/cerebro/upload/tema<?php echo $tema;?>/boton/regresar.png" height="120px"></a></td>
                    </tr>
                </table>  
            </div>
        </div>    
    </div>
</div>
<?php
include_once 'footer.php';
?>

<style>
    #pantalla-mainwindow{
        height: 632px;
        width: 1000px;
        padding-top: 40px;      
    }
	.tablepanel tr td{
		padding-top: 10px;
	}
	.tablepanel2 tr td{
		padding-top: 20px;
	}        
</style>