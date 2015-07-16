<?php 
	include_once("general.php");
	
	class backend{
			private function start_connect(){
						$con=mysqli_connect(DB_HOST2,DB_USER2,DB_PASSWORD2,DB_NAME2);						
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						return $con;				
				}

			private function close_connect($con){
						mysqli_close($con);					
				}
			private function encripter($key){
				return md5($key);
			}
                        private function makequery($query){
                            $status = false;
                            $return = "No se pudo realizar la conexión al server de base de datos.";                            
                            $link = $this->start_connect();
                            if($link){
                                $result = mysqli_query($link, $query);
                                if($result){
                                    $status = true;
                                    $return = $result;                                    
                                }else{
                                    $return = "No se pudor realizar la consulta.";
                                }
                                $this->close_connect($link);
                            }                            
                            return array($status, $return);
                        }
                        private function makelog($user, $action, $description, $ip = "0.0.0.0"){
                            $time = time();
                            $query ="INSERT INTO `log` (`id`, `time`, `user`, `ip`, `action`, `description`) VALUES (NULL, '".$time."', '".$user."', '".$ip."', '".$action."', '".$description."');";                            
                            $result = $this->makequery($query);
                            return $result[0];                            
                        }
/*********************************************************************************************************/
                        function trylogin($user, $pass){
                            $return = array(false, "Error 101");
                            $query = "SELECT `id`,`fname` FROM `user` WHERE `username`='".$user."' AND `password` = '".  $this->encripter($pass)."';";
                            $this->makelog($user, "try login", "Usuario ".$user." intenta ingresar al sistema");
                            $result = $this->makequery($query);
                            if($result[0]){
                                while($row = mysqli_fetch_array($result[1])){
                                    $return = array(true, array($row['id'],$row['fname']));
                                    $this->makelog($user, "login", "Usuario ".$user." ingreso al sistema");
                                }
                            }else{ 
                                $return = $result;
                            }
                            return $return;
                        }
                        function get_proyector($id = null){
                            $proyector = array();
                            $query = "SELECT * FROM `proyector`";
                            if($id!=NULL) $query.= " WHERE `id`='".$id."'";
                            $query.=";";
                            
                            $result = $this->makequery($query);
                            if($result[0]){
                                while($row = mysqli_fetch_array($result[1])){
                                    array_push($proyector, $row);
                                }
                            }
                            return $proyector;
                        }
                        function update_proyect($id, $name, $on, $off, $hdmi1, $hdmi2, $vga1, $vga2, $volup, $voldown, $volmute, $baudios, $databit, $parity, $stopbit){
                            $proyector = array();
                            $query = "UPDATE `proyector` SET 
                                `name`='".$name."',
                                `on`='".$on."',
                                `off`='".$off."',
                                `hdmi1`='".$hdmi1."',
                                `hdmi2`='".$hdmi2."',
                                `vga1`='".$vga1."',
                                `vga2`='".$vga2."',
                                `volup`='".$volup."',
                                `voldown`='".$voldown."',
                                `volmute`='".$volmute."',
                                `bauderate`='".$baudios."',
                                `databits`='".$databit."',
                                `parity`='".$parity."',
                                `stopbits`='".$stopbit."'
                                WHERE `proyector`.`id` = ".$id.";";                            
                            $result = $this->makequery($query);
                            if($result[0]){
                                return true;
                            }
                            return false;
                        }
	}
?>