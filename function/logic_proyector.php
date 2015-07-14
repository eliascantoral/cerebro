<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_proyector($id){
    include_once 'backend/backend.php';
    $backend = new backend();
    $proyector= $backend->get_proyector($id);
    if(sizeof($proyector)>0)
        return $proyector[0];    
        return false;    
}