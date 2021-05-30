<?php 

    include('SQL_connection.php'); 

    if (isset($_POST['reg'])){

        $username = $_POST['username'];  
        $email = $_POST['email']; 
        $psw = $_POST['psw']; 
        $psw1 = $_POST['psw1']; 

        $query = "SELECT * from accounts where Username='$username'";
        $result = mysqli_query($link,$query);

        $num = mysqli_num_rows($result);

        if($num == 0){
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo '<script>alert("Invalid email format. Please try again !")</script>';
                echo "<script> location.href='signup.php'; </script>";
                exit;
            }else{
                if($psw == $psw1){
                    $query2 = "INSERT INTO accounts (Email , Mypassword , Username ) VALUES ('$email', '$psw', '$username')";
                    mysqli_query($link,$query2);
    
                    echo "<script> location.href='login.php'; </script>";
    
                }else{
                    echo '<script>alert("Passwords did not match. Please try again !")</script>';
                    echo "<script> location.href='signup.php'; </script>";
                    exit;
                }
            }
        }else{
            echo '<script>alert("This username allready exists, please use an other.")</script>';
            echo "<script> location.href='signup.php'; </script>";
            exit;
        }
      
        mysqli_close($link);
    }
?>