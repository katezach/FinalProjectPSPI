<?php
    session_start();
    include('SQL_connection.php'); 

    $username = $_SESSION['user'];

    $query = "SELECT isadmin FROM accounts WHERE Username = '$username' ";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);

    if($row['isadmin'] == 1){
        echo "<script> location.href='profile_admin.php'; </script>";
    }else{
        echo "<script> location.href='profile_user.php'; </script>";
    }

    mysqli_close($link);
?>