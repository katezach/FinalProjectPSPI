<?php 
    
    session_start();
    include('SQL_connection.php'); 

    if (isset($_POST['log'])){
    
        $username = $_POST['username'];  
        $_SESSION['user'] = $username;

        $psw = $_POST['psw']; 
             
        $query = "SELECT * from accounts where Username='$username' and Mypassword='$psw' ";
        $result = mysqli_query($link,$query);
    
        $num = mysqli_num_rows($result);
    
        if($num == 0){
            echo '<script>alert("Login failed! Invalid username or password. Please try again !")</script>';
            echo "<script> location.href='login.php'; </script>";
            exit;
        }else{
            $_SESSION['logged'] = 1;
            echo "<script> location.href='insidepage.php'; </script>";
        }

        mysqli_close($link);
    }
?>