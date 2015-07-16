<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<br><br>
    <?php 
if(!isset($_GET['id'])){
    $proyector = get_allproyector();
    //print_array($proyector);
    ?>
    <a href="#" class="btn btn-primary" role="button">Agregar</a>
    <table class="table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Nombre</td>
                <td>On</td>
                <td>Off</td>
                <td>HDMI1</td>
                <td>HDMI2</td>
                <td>VGA1</td>
                <td>VGA2</td>
                <td>Vol+</td>
                <td>Vol-</td>
                <td>VolMute</td>
                <td>Baud</td>
                <td>databits</td>
                <td>Paridad</td>
                <td>Stopbit</td>                        
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<sizeof($proyector);$i++){?>
                    <tr>
                        <td><?php echo $i+1;?></td>
                        <td><a href="?opt=pro&id=<?php echo $proyector[$i]['id']?>"><?php out($proyector[$i]['name']);?></a></td>
                        <td><?php out($proyector[$i]['on']);?></td>
                        <td><?php out($proyector[$i]['off']);?></td>
                        <td><?php out($proyector[$i]['hdmi1']);?></td>
                        <td><?php out($proyector[$i]['hdmi2']);?></td>
                        <td><?php out($proyector[$i]['vga1']);?></td>
                        <td><?php out($proyector[$i]['vga2']);?></td>
                        <td><?php out($proyector[$i]['volup']);?></td>
                        <td><?php out($proyector[$i]['voldown']);?></td>
                        <td><?php out($proyector[$i]['volmute']);?></td>
                        <td><?php out($proyector[$i]['bauderate']);?></td>
                        <td><?php out($proyector[$i]['databits']);?></td>
                        <td><?php out($proyector[$i]['parity']);?></td>
                        <td><?php out($proyector[$i]['stopbits']);?></td>
                    </tr>            
            <?php }?>
        </tbody>
    </table>
<?php
}else{
    $id = $_GET["id"];
    $proyector = get_proyector($id);
    //print_array($proyector);
    if($proyector){?>
    <input type="hidden" id="form_answer" value="">
    <form id="proyect_form" class="form-horizontal">
            <input type="hidden" id="id" value="<?php echo $proyector['id'];?>">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" placeholder="Nombre" required="required" value="<?php echo $proyector['name']?>">
              </div>
            </div>
            <div class="form-group">
              <label for="on" class="col-sm-2 control-label">On</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="on" placeholder="On" required="required" value="<?php echo $proyector['on']?>">
              </div>
            </div>            
            <div class="form-group">
              <label for="off" class="col-sm-2 control-label">Off</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="off" placeholder="Off" required="required" value="<?php echo $proyector['off']?>">
              </div>
            </div>
            <div class="form-group">
              <label for="hdmi1" class="col-sm-2 control-label">HDMI 1</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="hdmi1" placeholder="HDMI 1" value="<?php echo $proyector['hdmi1']?>">
              </div>
            </div>
            <div class="form-group">
              <label for="hdmi2" class="col-sm-2 control-label">HDMI 2</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="hdmi2" placeholder="HDMI 2" value="<?php echo $proyector['hdmi2']?>">
              </div>
            </div>   
            <div class="form-group">
              <label for="vga1" class="col-sm-2 control-label">VGA 1</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="vga1" placeholder="VGA 1" value="<?php echo $proyector['vga1']?>">
              </div>
            </div>
            <div class="form-group">
              <label for="vga2" class="col-sm-2 control-label">VGA 2</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="vga2" placeholder="VGA 2" value="<?php echo $proyector['vga2']?>">
              </div>
            </div>  
            <div class="form-group">
              <label for="volup" class="col-sm-2 control-label">Volumen +</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="volup" placeholder="Volumen +" value="<?php echo $proyector['volup']?>">
              </div>
            </div>
            <div class="form-group">
              <label for="voldown" class="col-sm-2 control-label">Volumen -</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="voldown" placeholder="Volumen -" value="<?php echo $proyector['voldown']?>">
              </div>
            </div>  
            <div class="form-group">
              <label for="volmute" class="col-sm-2 control-label">Volumen Mute</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="volmute" placeholder="Volumen Mute" value="<?php echo $proyector['volmute']?>">
              </div>
            </div> 
            <div class="form-group">
              <label for="bauderate" class="col-sm-2 control-label">Baudios Rate</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="bauderate" placeholder="Baudios Rate" required="required" value="<?php echo $proyector['bauderate']?>">
              </div>
            </div> 
            <div class="form-group">
              <label for="databits" class="col-sm-2 control-label">Data Bits</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="databits" placeholder="Data Bits" required="required" value="<?php echo $proyector['databits']?>">
              </div>
            </div>  
            <div class="form-group">
              <label for="parity" class="col-sm-2 control-label">Parity</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="parity" placeholder="Parity" required="required" value="<?php echo $proyector['parity']?>">
              </div>
            </div> 
            <div class="form-group">
              <label for="stopbits" class="col-sm-2 control-label">Stop Bits</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="stopbits" placeholder="Stop Bits" required="required" value="<?php echo $proyector['stopbits']?>">
              </div>
            </div>             
            <div class="form-group">
                <div class="alert alert-success message" id="form_message_ok" role="alert">...</div>
                <div class="alert alert-danger message" id="form_message_nok" role="alert">...</div>
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Actualizar</button>
                <a href="?opt=pro" class="btn btn-success" role="button">Regresar</a>
              </div>
            </div>
        </form>
    <?php     }
}
?>

<script>
    $("#proyect_form").submit(function(e){
        e.preventDefault();
        var id = $("#id").val();
        var name = $("#name").val();
        var on = $("#on").val();
        var off = $("#off").val();
        var hdmi1 = $("#hdmi1").val();
        var hdmi2 = $("#hdmi2").val();
        var vga1 = $("#vga1").val();
        var vga2 = $("#vga2").val();
        var volup = $("#volup").val();
        var voldown = $("#voldown").val();
        var volmute = $("#volmute").val();
        var bauderate = $("#bauderate").val();
        var databits = $("#databits").val();
        var parity = $("#parity").val();
        var stopbits = $("#stopbits").val();
                
        ajax_("101","&id="+id+"&name="+name+"&on="+on+"&off="+off+"&hdmi1="+hdmi1+"&hdmi2="+hdmi2+"&vga1="+vga1+"&vga2="+vga2+"&volup="+volup+"&voldown="+voldown+"&volmute="+volmute+"&bauderate="+bauderate+"&databits="+databits+"&parity="+parity+"&stopbits="+stopbits,false,'form_answer');
        var answer = document.getElementById("form_answer").value;
        json = jQuery.parseJSON( answer );
        if(json.r==1){
             show_message("form_message_ok",json.d);
        }else{
             show_message("form_message_nok",json.d);
        }
    });
</script>
