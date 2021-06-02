<?php 

    session_start();
    include('SQL_connection.php'); 

    if (isset($_POST['update'])){

        $username = $_POST['username'];  
        $email = $_POST['email'];
        $psw = $_POST['psw']; 
        $againpsw = $_POST['againpsw'];

        if($username != "" || $email != "" || $psw != "" || $againpsw != ""){
            $query1 = "SELECT * from accounts where Username='$username'";
            $resultusername = mysqli_query($link,$query1);
            $numusername = mysqli_num_rows($resultusername);
    
            if($numusername == "" || $numusername == 0){
    
                if($email == "" || filter_var($email,FILTER_VALIDATE_EMAIL)){
    
                    $query2 = "SELECT * from accounts where Email='$email'";
                    $resultemail = mysqli_query($link,$query2);
                    $numemail = mysqli_num_rows($resultemail);
        
                    if($numemail == 0){
    
                        $y = $_SESSION['user'];
                        $tempquery = "SELECT idaccounts from accounts where Username='$y'";
                        $tempresult = mysqli_query($link,$tempquery);
                        while($row = mysqli_fetch_array($tempresult)){
                            $myid = $row['idaccounts'];
                        }
    
                        if(($psw == "" && $againpsw == "") || $psw == $againpsw){
                            if($email != ""){
                                $qemail = "UPDATE accounts SET Email='$email' WHERE idaccounts= $myid ";
                                mysqli_query($link,$qemail);
                            }
                            if($username != ""){
                                $qusername = "UPDATE accounts SET Username='$username' WHERE idaccounts= $myid";
                                mysqli_query($link,$qusername);
                            }
                            if($psw != ""){
                                $qpsw = "UPDATE accounts SET Mypasssword='$psw' WHERE idaccounts= $myid ";
                                mysqli_query($link,$qpsw);
                            }
    
                            echo '<script>alert("Your profile has been updated successfully!")</script>';
                            echo "<script> location.href='login.php'; </script>";   
                        }else{
                            echo '<script>alert("Passwords did not match. Please try again !")</script>';
                            echo "<script> location.href='profile.php'; </script>";
                            exit;
                        }
                    }else{
    
                        echo '<script>alert("This email allready exists, please use an other.")</script>';
                        echo "<script> location.href='profile.php'; </script>";
                        exit;
                    }
                }else{
                    echo '<script>alert("Invalid email format. Please try again !")</script>';
                    echo "<script> location.href='profile.php'; </script>";
                    exit;
                }    
            }else{
    
                echo '<script>alert("This username allready exists, please use an other.")</script>';
                echo "<script> location.href='profile.php'; </script>";
                exit;
            }
        }else{
            echo '<script>alert("Your profile has nothing to update!")</script>';
            echo "<script> location.href='profile.php'; </script>";
        }
        
        mysqli_close($link);
    }
?>