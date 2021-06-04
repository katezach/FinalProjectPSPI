<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="profile.css"> 
</head>

<body>
<table class="table">

    <?php
        session_start();
        include "SQL_connection.php";
        $idmail="";
        $mail="";
        $username="";
        $subject="";
        $counter=1;

        $usr=$_SESSION['user'];

        $query = "SELECT * FROM mailbox";
        $result = mysqli_query($link,$query);
        $num = mysqli_num_rows($result);


        if ($num>0) {

            echo '<thead>
            <tr>
                <th style = "font-size:16px;" scope="col">No.</th>
                <th style = "font-size:16px;" scope="col">Email</th>
                <th style = "font-size:16px;" scope="col">Subject</th>
                <th style = "font-size:16px;" scope="col">Message</th>
            </tr>
            </thead>
            <tbody>' ;

            $query1 = "SELECT Email FROM accounts WHERE Username='$usr'";
            $result1 = mysqli_query($link,$query1);
            if($result1==false){
                echo 'FALSE';
            }
            $row1 = mysqli_fetch_array($result1);

            while($row = mysqli_fetch_array($result)){

                $idmail=$row['idmailbox'];
                $message=$row['MainMessage'];
                $email=$row['Email'];
                $subject=$row['MesSubject'];

               
                if($row1['Email']==$email){

                    echo '<tr>
                    <td> <label style = "font-size:14px;">'; echo $counter; echo '</label></td>';
                    echo '<td> <label style = "font-size:14px;">'; echo $email ; echo'</label></td>';
                    echo '<td> <label style = "font-size:14px;">'; echo $subject ; echo'</label></td>';
                    echo '<td> <label style = "font-size:14px;">'; echo $message ; echo'</label></td>
                    </tr>';
                    $counter = $counter + 1 ;
                }
            }

            echo '</tbody>' ;
        }
        else{
            echo 'There are no emails yet !';
        }
        ?>
    
</table>
</body>
</html>