<?php
    include('SQL_connection.php'); 
    
    if (isset($_POST['submit'])){
        $username = $_POST['username'];   
        $subject = $_POST['subject']; 
        $message = $_POST['message']; 
      
        $query = "INSERT INTO mailbox (Mail , Username , MesSubject ) VALUES ('$message', '$username', '$subject')";
        mysqli_query($link,$query);
        mysqli_close($link);

    }

    echo '<script>alert("Your email has been sent successfully!")</script>';

    include('contact.php'); //in order to stay in contact.php
?>