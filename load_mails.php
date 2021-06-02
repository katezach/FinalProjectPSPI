<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="profile.css"> 
</head>
<?php

    include "SQL_connection.php";
    $idmail="";
    $mail="";
    $username="";
    $subject="";

    $query = "SELECT * FROM mailbox";
    $result = mysqli_query($link,$query);
    $num= mysqli_num_rows($result);

   
    if ($num>0) {
        while($row = mysqli_fetch_array($result)){
            $idmail=$row['idmailbox'];
            $message=$row['MainMessage'];
            $email=$row['Email'];
            $subject=$row['MesSubject'];
        }
    }
    else{
        return "done";
    }
?>

<body>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        <tr>
           <td> <label><?php echo $idmail; ?></label></td>
           <td> <label><?php echo $email ?></label></td>
           <td> <label><?php echo $subject; ?></label></td>
           <td> <label><?php echo $message; ?></label></td>
        </tr>
    </tbody>
</table>
</body>
</html>