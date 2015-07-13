<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of functions
 *
 * @author Augusto
 */


function testconection($name){ 
    $array = array("respuesta"=>"Texto recibido ".$name);
    return json_encode($array);
}
function listaproyectores(){
    $result = array(array("1","Optoma"),array("2","Nec"),array("4","ViewSonic"),array("5","Sony"));
    return json_encode($result);
}

function infoproyector($id){
    $result = array();
    switch($id){
        case "1":{$result = array(
                                array(
                                        BaudRate => 9600, 
                                        DataBits=> 8, 
                                        Parity=> None, 
                                        StopBits=> 1 ,
                                        FlowControl => None), 
                                array(
                                        PROY_ON => '{7E, 30, 30, 30, 30, 20, 31, 0D}',
                                        PROY_Off => '{7E, 30, 30, 30, 30, 20, 30, 0D}',
                                        PROY_HDMI1 => '{7E, 30, 30, 31, 32, 20, 31, 0D}',
                                        PROY_HDMI2 => '{7E, 30, 30, 31, 32, 20, 31, 35, 0D}',
                                        PROY_VGA1 => '{7E, 30, 30, 31, 32, 20, 35, 0D}',
                                        PROY_VGA2 => '{7E, 30, 30, 31, 32, 20, 36, 0D}',
                                        PROY_VOL_UP => '{7E, 30, 30, 31, 34, 30, 20, 31, 38, 0D}',
                                        PROY_VOL_DOWN => '{7E, 30, 30, 31, 34, 30, 20, 31, 37, 0D}',
                                        PROY_VOL_MUTE => '{7E, 30, 30, 38, 34, 30, 20, 32, 0D}'                                    
                                ));
        break;}
    }
    return json_encode($result);
}

function countname(){
    
}
