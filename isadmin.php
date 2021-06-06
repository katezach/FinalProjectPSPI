<?php
    include('SQL_connection.php'); 

    $username = $_SESSION['user'];

    $query = "SELECT isadmin FROM accounts WHERE Username = '$username' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);

    if($row['isadmin'] == 1){
        $printadmins = 1;
    }else{
        $printadmins = 0; 
    }

?>