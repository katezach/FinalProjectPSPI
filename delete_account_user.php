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
            $admin="";
            $counter=1;

            $usr=$_SESSION['user'];

            $query = "SELECT * FROM accounts WHERE Username='$usr'";
            $result = mysqli_query($link,$query);
            $num= mysqli_num_rows($result);

           if ($num>0) {

                echo '<thead>
                <tr>
                    <th style = "font-size:16px;" scope="col">No.</th>
                    <th style = "font-size:16px;" scope="col">Email</th>
                    <th style = "font-size:16px;" scope="col">Username</th>
                    <th style = "font-size:16px;" scope="col">Admin</th>
                    <th style = "font-size:16px;" scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>' ;



                while($row = mysqli_fetch_array($result)){
                    $mail=$row['Email'];
                    $username=$row['Username'];
                    $admin=$row['isadmin'];
                    echo '<tr>
                    <td> <label style = "font-size:14px;">'; echo $counter; echo '</label></td>';
                    echo '<td> <label style = "font-size:14px;">'; echo $mail; echo '</label></td>';
                    echo '<td> <label style = "font-size:14px;">'; echo $username; echo '</label></td>';
                    echo '<td> <label style = "font-size:14px;">'; echo $admin; echo '</label></td>';
                    echo '<td> <a href="delete_function.php?username=';  echo $username; echo '">Delete</a></td>
                    </tr>' ;
                    $counter= $counter +1;
                }
                echo '</tbody>' ;
            }
            else{
                echo 'Nobody has created an account yet !';
            }
        ?>
   

</table>

</body>
</html>