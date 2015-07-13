<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function try_login($user, $pass){
    include_once 'backend/backend.php';
    $backend = new backend();
    $the_user = $backend->trylogin($user, $pass);  
    if($the_user[0]){
        session_start();
        $_SESSION[get_variable("prfx")."_name"] = $user;
        $_SESSION[get_variable("prfx")."_userid"] = $the_user[1][0];
        $_SESSION[get_variable("prfx")."_fname"] = $the_user[1][1];
        return true;
    }
    return false;
}

function get_userdata($data){    
    if(isset($_SESSION[get_variable("prfx")."_".$data])){return $_SESSION[get_variable("prfx")."_".$data];}
    return "No user";
}