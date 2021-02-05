<?php
include 'secure/db_connect.php';

    $human=$_POST['human'];
    $ip = $_SERVER['REMOTE_ADDR'];
	$password = $_POST["password"];
	$email = $_POST["email"];
    if($email==NULL){echo 'Campo email vacio';} else if($password==NULL){echo 'Campo password vacio';}else if($human==NULL){echo 'Seleccione no soy un robot';}else{
$sql = "SELECT email, password FROM members WHERE email = '$email' AND password = '$password'";
$stmt = sqlsrv_query( $conn, $sql );

if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	        echo'<SCRIPT LANGUAGE="javascript">
location.href = "logged_success.php";
</SCRIPT>';
}

sqlsrv_free_stmt( $stmt);





}
?>
<!--fin acceso plataforma-->
