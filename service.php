<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
require 'functions.php';
require 'lib/nusoap.php';

$server = new soap_server();
$server->configureWSDL("demo","urn:demo");
$server->register(
            "gettema", //////name of function
            array(),
            array("return"=>'xsd:string')        
        );
$server->register(
            "getimagen", //////name of function
            array("id"=>'xsd:string'),
            array("return"=>'xsd:string')        
        );
$server->register(
            "testconection", //////name of function
            array("name"=>'xsd:string'),
            array("return"=>'xsd:string')        
        );
$server->register(
            "listaproyectores", //////name of function
            array(),
            array("return"=>'xsd:string')        
        );
$server->register(
            "infoproyector", //////name of function
            array("id"=>'xsd:string'),
            array("return"=>'xsd:string')        
        );
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)? $HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);