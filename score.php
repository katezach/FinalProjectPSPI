<!DOCTYPE html>
<html>
<?php 
include "SQL_connection.php"; ?>
<head>
        <!--Title and favicon-->
        <title>Quiz | Goal City</title>
        <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS/Javascript/Jquery files-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <style>
            .btn{ font-size: 20px;}
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--Social Media Icons-->
        <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
        
</head>
<body>
<?php include('navbar.php');?>
<?php 
    $correct=0;
    $total_que=10; 

    if(isset($_SESSION["answer"])){
        for($i=1;$i<=sizeof($_SESSION["answer"]);$i++)
        {
            $answer="";
            $result=mysqli_query($link,"SELECT idquiz,CorrectAnswer FROM quiz WHERE idquiz=$i");
            while($row=mysqli_fetch_array($result))
                $answer=$row["CorrectAnswer"];
            if (isset($_SESSION["answer"][$i])){
                if($answer==$_SESSION["answer"][$i])
                    $correct++;
            }
        }
    }
?>
    <div class="container" style="min-height:400px; width:90%; margin-top:150px; margin-bottom:150px; background-color:rgb(238, 214, 214)">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="justify-content:center; text-align:center;margin-top:80px;">You are done!</h1><br>
                <h1 style='justify-content:center; text-align:center;margin-top:30px;'>You've reached <?php echo $correct ?> / <?php echo $total_que ." ." ?></h1>
                <?php 
                    if(($correct/$total_que)*100>=50)
                        echo "<h1 style='justify-content:center; text-align:center;'>Great job!</h1><br>";
                    else
                    echo "<h1 style='justify-content:center; text-align:center;'>Maybe you should try again!</h1><br>";?>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-12" style="min-height:50px; padding:15px;justify-content:center; text-align:center;">
                <div class="col-lg-12" text-center>
                    <input type="button" class="btn btn-success" value="Try again with a new quiz" onclick="load_total();">&nbsp;
                    <input type="button" class="btn submit" value="Done" onclick="submit();">&nbsp;
                </div>
            </div>
        </div>
    </div>
    <?php 
        mysqli_query($link,"INSERT INTO scores (Username,Score,accounts_idaccounts) VALUES ('------','$correct / $total_que ','1')");
    ?>
    <?php include('footer.php');?>
    <script type="text/javascript">
        //should erase the given answers
        function load_total()
        {
            window.location="quiz.php";
        }  
        function submit(){
            //Transfer to profile.php
            window.location="quiz.php";
        }
    </script>
</body>