<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="profile.css"> 
</head>

<body>
<table class="table">

    <?php

        include "SQL_connection.php";
        
        $username="";
        $score="";
        $noofquiz="";
        $counter=1;

        $query = "SELECT * FROM scores ORDER BY Score DESC";
        $result = mysqli_query($link,$query);
        $num = mysqli_num_rows($result);

        if ($num>0) {

            echo '<thead>
            <tr>
                <th style = "font-size:16px;" scope="col">No.</th>
                <th style = "font-size:16px;" scope="col">Username</th>
                <th style = "font-size:16px;" scope="col">Score</th>
                <th style = "font-size:16px;" scope="col">Quiz</th>
            </tr>
            </thead>
            <tbody>' ;

            while($row = mysqli_fetch_array($result)){
                $username=$row['Username'];
                $score=$row['Score'];
                $noofquiz=$row['no_of_quiz'];

                echo '<tr>
                <td> <label style = "font-size:14px;">'; echo $counter; echo '</label></td>';
                echo '<td> <label style = "font-size:14px;">'; echo $username ; echo'</label></td>';
                echo '<td> <label style = "font-size:14px;">'; echo $score ; echo'</label></td>';
                echo '<td> <label style = "font-size:14px;">'; echo $noofquiz ; echo'</label></td>
                </tr>';
                $counter = $counter + 1 ;
            }

            echo '</tbody>' ;
        }
        else{
            echo 'No one has played a quiz yet !';
        }
       
        mysqli_close($link);

    ?>
    
</table>
</body>
</html>