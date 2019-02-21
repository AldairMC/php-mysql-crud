<?php
//starting seccion
session_start();



//Connection with Database 
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'

);
/*
if(isset($conn)): 
    echo " DB CONNECT "; 
endif
*/
?>