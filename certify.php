<?php 
    
    include('SQL_connection.php'); 

    if (isset($_POST['log'])){
    
        $username = $_POST['username'];  
        $psw = $_POST['psw']; 
             
    
        $query = "SELECT * from accounts where Username='$username' and Mypassword='$psw' ";
        $result = mysqli_query($link,$query);
    
        $num = mysqli_num_rows($result);
    
        if($num == 0){
            echo '<script>alert("Login failed! Invalid username or password. Please try again !")</script>';
            include('login.php');
        }else{
            include('insidepage.php');
        }

        mysqli_close($link);
    }
?>