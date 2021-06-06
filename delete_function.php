<?php 
    session_start();
    include('SQL_connection.php');

    $usr = $_SESSION['user']; //button
    $username=$_GET['username'] ; //line

    $sql = "DELETE FROM accounts WHERE Username = '$username'";
    mysqli_query($link,$sql);

    if($usr == $username){
        echo '<script>alert("Your profile has been deleted successfully!")</script>';
        echo "<script> location.href='index.php'; </script>"; 
    }else{
        echo '<script>alert("The profile has been deleted successfully!")</script>';
        echo "<script> location.href='profile.php'; </script>";   
    }

    mysqli_close($link);
?>