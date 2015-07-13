<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<input type="hidden" id="form_answer">
<div id="login_canvas" class="container-fluid">   
    <div id="login_block" class="row">
        <div class="login_part login-mail col-md-12">
             <h3>Bienvenido</h3>
             <form id="login_form" class="form-horizontal">
              <div class="form-group">               
                  <input type="text" class="form-control" id="login_user" placeholder="Usuario" required="true">                
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" id="login_password" placeholder="Contraseña" required="true">            
              </div>
              <div class="form-group" align="center">
                  <button type="submit" class="btn btn-primary"><span class="glyphicon" aria-hidden="true"><img src="image/user.png" width="35px"></span> Ingresar</button>                
              </div>
                 <div class="alert alert-danger message" id="login_form_message" role="alert">...</div>
            </form>                
        </div>
    </div>
</div>

<script>
    $("#login_form").submit(function(e){
        e.preventDefault();
        var user = $("#login_user").val();
        var pass = $("#login_password").val();
        ajax_("0","&user="+user+"&pass="+pass,false,'form_answer');
        var answer = document.getElementById("form_answer").value;
        json = jQuery.parseJSON( answer );
        if(json.r==1){
             location.reload();
        }else{
             show_message("login_form_message",json.d);
        }        
    });
</script>
