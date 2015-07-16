<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    //print_r($_POST);
    if(isset($_POST["action"])){
        switch ($_POST["action"]){
            case "0":{//Login
                if(isset($_POST["user"]) && isset($_POST["pass"])){
                    include_once('logic.php');
                    $result = try_login($_POST["user"], $_POST["pass"]);
                    if($result){
                        echo json_encode(array('r'=>1,'d'=>$result));
                    }else{
                        echo json_encode(array('r'=>0,'d'=>"Usuario o contraseña incorrectos."));
                        
                    }
                }
                break;}
            case "101":{///Update proyector
                if(isset($_POST['id']) &&
                        isset($_POST['name']) &&
                        isset($_POST['on']) &&
                        isset($_POST['off']) &&
                        isset($_POST['hdmi1']) &&
                        isset($_POST['hdmi2']) &&
                        isset($_POST['vga1']) &&
                        isset($_POST['vga2']) &&
                        isset($_POST['volup']) &&
                        isset($_POST['voldown']) &&
                        isset($_POST['volmute']) &&
                        isset($_POST['bauderate']) &&
                        isset($_POST['databits']) &&
                        isset($_POST['parity']) &&
                        isset($_POST['stopbits']) ){
                    include_once 'logic.php';
                    $result = proyect_update($_POST['id'],$_POST['name'],$_POST['on'],$_POST['off'],$_POST['hdmi1'],$_POST['hdmi2'],$_POST['vga1'],$_POST['vga2'],$_POST['volup'],$_POST['voldown'],$_POST['volmute'],$_POST['bauderate'],$_POST['databits'],$_POST['parity'],$_POST['stopbits']);
                        if($result){
                            echo json_encode(array('r'=>1,'d'=>"Actualizado correctamente"));
                        }else{
                            echo json_encode(array('r'=>0,'d'=>"Error desconocido, por favor intente de nuevo."));
                        }
                }
                break;}
            case "201":{break;}
        }
        
    }

    
?>