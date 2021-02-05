<?php

/*Datos de conexion a la base de datos SQL otras consultas*/
//$serverName = "answer.database.windows.net"; //serverName\instanceName
//$connectionInfo = array( "Database"=>"sarlaft", "UID"=>"wdiaz", "PWD"=>"Answer934@");
$serverName = "LAPTOP-C19VUK67"; //serverName\instanceName
$connectionInfo = array( "Database"=>"sarlaft", "UID"=>"sa", "PWD"=>"Answer934@");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
 }

?>