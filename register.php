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
            if($psw == $psw1){
                $query2 = "INSERT INTO accounts (Email , Mypassword , Username ) VALUES ('$email', '$psw', '$username')";
                mysqli_query($link,$query2);
                include('login.php');

            }else{
                echo '<script>alert("Passwords did not match. Please try again !")</script>';
                include('signup.php');
            }
        }else{
            echo '<script>alert("This username allready exists, please use an other.")</script>';
            include('signup.php');
        }
      
        mysqli_close($link);
    }
?>