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
    $result = array(false);
    include_once '/function/logic.php';
    $proyector = get_allproyector();
    $lista = array();
    for($i=0;$i<sizeof($proyector);$i++){
        array_push($lista, array(ID=>$proyector[$i]['id'],Name=>$proyector[$i]['name']));
    }
    $result = array(PROYECTORES=>$lista);
    return json_encode($result);
}

function infoproyector($id){
    $result = array(false);
    include_once '/function/logic.php';
    $proyector = get_proyector($id);
    if($proyector){
        $result = array(
                    array(
                            BaudRate => $proyector['bauderate'], 
                            DataBits=> $proyector['databits'], 
                            Parity=> $proyector['parity'], 
                            StopBits=> $proyector['stopbits']), 
                    array(
                            PROY_ON => $proyector['on'],
                            PROY_Off => $proyector['off'],
                            PROY_HDMI1 => $proyector['hdmi1'],
                            PROY_HDMI2 => $proyector['hdmi2'],
                            PROY_VGA1 => $proyector['vga1'],
                            PROY_VGA2 => $proyector['vga2'],
                            PROY_VOL_UP => $proyector['volup'],
                            PROY_VOL_DOWN => $proyector['voldown'],
                            PROY_VOL_MUTE => $proyector['volmute']                                    
            ));        
    }
    return json_encode(array(DATA=>$result));
}

function getimagen($id){
	$result = array(false);
	$result = array(tema => 'http://beta.akademeia.ufm.edu/cerebro/upload/tema1/');
	return json_encode($result);
}

function gettema(){
	$result = array(false);
	$result = array(tema => 'http://beta.akademeia.ufm.edu/cerebro/upload/tema1/');
	return json_encode($result);	
}
function countname(){
    
}