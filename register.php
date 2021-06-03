<?php 

    include('SQL_connection.php'); 

    if (isset($_POST['reg'])){

        $username = $_POST['username'];  
        $email = $_POST['email']; 
        $psw = $_POST['psw']; 
        $psw1 = $_POST['psw1']; 

        $query1 = "SELECT * from accounts where Username='$username'";
        $resultusername = mysqli_query($link,$query1);

        $numusername = mysqli_num_rows($resultusername);

        if($numusername == 0){

            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo '<script>alert("Invalid email format. Please try again !")</script>';
                echo "<script> location.href='signup.php'; </script>";
                exit;
            }else{

                $query2 = "SELECT * from accounts where Email='$email'";
                $resultemail = mysqli_query($link,$query2);
                $numemail = mysqli_num_rows($resultemail);

                if($numemail == 0){
                    if($psw == $psw1){
                        $query3 = "INSERT INTO accounts (Email , Mypassword , Username ) VALUES ('$email', '$psw', '$username')";
                        mysqli_query($link,$query3);
        
                        echo "<script> location.href='login.php'; </script>";
        
                    }else{
                        echo '<script>alert("Passwords did not match. Please try again !")</script>';
                        echo "<script> location.href='signup.php'; </script>";
                        exit;
                    }
                }else{
                    echo '<script>alert("This email allready exists, please use an other.")</script>';
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