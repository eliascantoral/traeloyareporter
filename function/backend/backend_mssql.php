<?php 
	include_once("general_mssql.php");
	
	class mssqlbackend{
			private function start_connect(){
                                        $serverName = DB_HOST_mssql; //serverName\instanceName
                                        $connectionInfo = array( "Database"=>DB_NAME_mssql, "UID"=>DB_USER_mssql, "PWD"=>DB_PASSWORD_mssql);
                                        $conn = sqlsrv_connect( $serverName, $connectionInfo);
                                        return $conn;                              
				}

			private function close_connect($con){
                                    sqlsrv_close ($con);					
				}
                        public function testconn(){
                            $conn = $this->start_connect();
                            if( $conn ) {
                                 echo "Conexión establecida.<br />";
                                 $this->close_connect($conn);
                            }else{
                                 echo "Conexión no se pudo establecer.<br />";
                                 die( print_array( sqlsrv_errors(), true));
                            } 
                        }

                        private function makequery($query){
                            /*$status = false;
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
                            return array($status, $return);*/
                        }
                        
/*********************************************************************************************************/
                        
/*********************************************************************************************************/
	}
?>