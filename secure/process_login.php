<?php


include 'db_connect.php';

$sql = "SELECT email,password FROM members WHERE 
    email = '$email' AND password = '$password'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    header("Location: '..\..\..\?error=1");
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
     header("Location: '..\..\..\logged_success.php");
}

sqlsrv_free_stmt( $stmt);




  //if(isset($_POST['email'])){

       // $email = $_POST['email'];
        //$password = md5($_POST['password']);
        //$password = $_POST['password'];

       
    //$consultar = sqlsrv_query($conn,"SELECT email,password FROM members WHERE email = '$email' AND password = '$password' ");

        //if(!$consultar){
     //header("Location: '..\..\..\logged_success.php");
    //    }else{
    // header("Location: '..\..\..\?error=1");

    //} 

//}


?>