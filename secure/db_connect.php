<?php 

$serverName = "LAPTOP-C19VUK67"; //serverName\instanceName
$connectionInfo = array( "Database"=>"secure_login", "UID"=>"sa", "PWD"=>"Answer934@");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
?>