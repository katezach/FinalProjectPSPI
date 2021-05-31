
<?php
session_start();
include "SQL_connection.php";
$total_que=0;
$query = "SELECT * FROM  quiz"; 
$result=mysqli_query($link,$query);
$total_que=mysqli_num_rows($result); 

if($total_que>10)
    echo 10;
else
    echo $total_que;

?>