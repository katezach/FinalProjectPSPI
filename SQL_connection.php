<?php
    $link = @mysqli_connect("localhost:3307","root","");

    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if(!$link){
        echo '<p>Error connecting to the database <br>Try again.</p>';
        exit();
    }

    $result=@mysqli_select_db($link,'pspi');

    if(!$result){
        echo '<p>Error selecting the database table you requested.<br>Try again.</p>';
        exit();
    }
?>