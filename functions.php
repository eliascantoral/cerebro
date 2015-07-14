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
    $result = array(PROYECTORES=>array(
					array(ID=>"1",Name=>"Optoma"),
					array(ID=>"2",Name=>"Nec"),
					array(ID=>"4",Name=>"ViewSonic"),
					array(ID=>"5",Name=>"Sony")
			));
    return json_encode($result);
}

function infoproyector($id){
    $result = array(false);
    switch($id){
        case "1":{$result = array(
                                array(
                                        BaudRate => 9600, 
                                        DataBits=> 8, 
                                        Parity=> 0, 
                                        StopBits=> 1), 
                                array(
                                        PROY_ON => '7E, 30, 30, 30, 30, 20, 31, 0D',
                                        PROY_Off => '7E, 30, 30, 30, 30, 20, 30, 0D',
                                        PROY_HDMI1 => '7E, 30, 30, 31, 32, 20, 31, 0D',
                                        PROY_HDMI2 => '7E, 30, 30, 31, 32, 20, 31, 35, 0D',
                                        PROY_VGA1 => '7E, 30, 30, 31, 32, 20, 35, 0D',
                                        PROY_VGA2 => '7E, 30, 30, 31, 32, 20, 36, 0D',
                                        PROY_VOL_UP => '7E, 30, 30, 31, 34, 30, 20, 31, 38, 0D',
                                        PROY_VOL_DOWN => '7E, 30, 30, 31, 34, 30, 20, 31, 37, 0D',
                                        PROY_VOL_MUTE => '7E, 30, 30, 38, 34, 30, 20, 32, 0D'                                    
                                ));
        break;}
		case "2":{$result = array(
				array(                                        
					BaudRate => 38400, 
                                        DataBits=> 8, 
                                        Parity=> 0, 
                                        StopBits=> 1),
				array(
                                        PROY_ON => '02, 00, 00, 00, 00, 02',
                                        PROY_Off => '02, 01, 00, 00, 00, 03',
                                        PROY_HDMI1 => '02, 03, 00, 00, 02, 01, 1A, 12',
                                        PROY_HDMI2 => 'false',
                                        PROY_VGA1 => '02, 03, 00, 00, 02, 01, 01, 09',
                                        PROY_VGA2 => '02, 03, 00, 00, 02, 01, 01,0A',
                                        PROY_VOL_UP => '02, 0F, 00, 00, 02, 84, 00, 17',
                                        PROY_VOL_DOWN => '02, 0F, 00, 00, 02, 85, 00, 18',
                                        PROY_VOL_MUTE => '02, 0F, 00, 00, 02, 12, 00, 15'));			
		break;}
    }
    return json_encode(array(DATA=>$result));
}

function getimagen($id){
	$result = array(false);
	switch($id){
		case "proyector1":{$result = array(img => 'http://beta.akademeia.ufm.edu/cerebro/upload/proyector1.jpg');break;}
		case "luces1":{$result = array(img => 'http://beta.akademeia.ufm.edu/cerebro/upload/luces1.jpg');break;}
		case "mas1":{$result = array(img => 'http://beta.akademeia.ufm.edu/cerebro/upload/mas1.jpg');break;}
	}
	return json_encode($result);
}

function countname(){
    
}