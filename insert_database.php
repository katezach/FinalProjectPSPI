<?php
    include('SQL_connection.php'); 
    
    if (isset($_POST['submit'])){
        $email = $_POST['email'];   
        $subject = $_POST['subject']; 
        $message = $_POST['message']; 

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo '<script>alert("Invalid email format. Please try again !")</script>';
            echo "<script> location.href='contact.php'; </script>";
            exit;
        }else{
            $query = "INSERT INTO mailbox (Email , MesSubject , MainMessage ) VALUES ('$email', '$subject', '$message')";
            mysqli_query($link,$query);
            mysqli_close($link);
        }
    }

    echo '<script>alert("Your email has been sent successfully!")</script>';

    echo "<script> location.href='contact.php'; </script>";
    exit;
?>