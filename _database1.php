<?php
 

$server = "localhost";
$name = "root";
$password = "";
$database = "php_login";
//$table = "employee_login";

$conn = mysqli_connect($server , $name , $password , $database  /* , $table*/);

if($conn)
{
    echo "sucess";
}
else 
{
    die("Error".mysqli_connect_error());
}


?>