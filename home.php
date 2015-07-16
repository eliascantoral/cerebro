<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $opt = isset($_GET["opt"])?$_GET["opt"]:"pro";
?>

     
            <ul class="nav nav-pills nav-justified">
               <li role="presentation" ><a href="?opt=pro" class="list-group-item <?php echo $opt=="pro"?"active":"";?>">Proyectores</a></li>             
               <li role="presentation" ><a href="?opt=tv" class="list-group-item <?php echo $opt=="tv"?"active":"";?>">Televisores</a></li>
               <li role="presentation" ><a href="?opt=cor" class="list-group-item <?php echo $opt=="cor"?"active":"";?>">Cortinas</a></li>
               <li role="presentation" ><a href="?opt=ac" class="list-group-item <?php echo $opt=="ac"?"active":"";?>">A/C</a></li>
            </ul>          
        <?php switch($opt){
            case "pro":{                    
                    include_once 'blocks/proyector.php';
                break;}
        }?>       
    
</div>