<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="quiz.css"> 
</head>
<?php
    session_start();
    include "SQL_connection.php";
    $question_no="";
    $question="";
    $ans1="";
    $ans2="";
    $ans3="";
    $ans4="";
    $answer="";
    $counter=0;
    $ans="";
    $points=0;

    $queno=$_GET["questionno"];

    if(isset($_SESSION["answer"][$queno])){
        $ans=$_SESSION["answer"][$queno];
    }

    $query = "SELECT * FROM quiz WHERE idquiz=$_GET[questionno]"; 
    $result=mysqli_query($link,$query);
    $counter=mysqli_num_rows($result); 
    

    if($counter==0){
        return "done";
    }
    else{
        while($row=mysqli_fetch_array($result)){
            $question_no=$row['idquiz'];
            $question=$row['Question'];
            $ans1=$row['Answer1'];
            $ans2=$row['Answer2'];
            $ans3=$row['Answer3'];
            $ans4=$row['Answer4'];
        }
    }
?>
<body>

    <div style="font-size:30px;padding-left:65px;padding-top:60px;" colspan="2">
    <?php echo "<i>Question ".$question_no.".</i> <br><br> ".$question?></div>

    <table>
        <tr><td style="padding-right:65px;padding-left:65px;padding-top:35px;">
        <!--Takes the value of radio button clicked (different for each answer) and
        returns "checked" from selectedAns. -->
            <input type="radio" name="rl" id="rl" value="<?php echo $ans1;?>" 
            onclick="radioclick(this.value,<?php echo $question_no?>)"
            <?php selectedAns($ans,$ans1) ?> ><label><?php echo $ans1; ?></label><br>

            <input type="radio" name="rl" id="rl" value="<?php echo $ans2;?>" 
            onclick="radioclick(this.value,<?php echo $question_no?>)"
            <?php selectedAns($ans,$ans2) ?> ><label><?php echo $ans2; ?></label><br>

            <input type="radio" name="rl" id="rl" value="<?php echo $ans3;?>" 
            onclick="radioclick(this.value,<?php echo $question_no?>)"
            <?php selectedAns($ans,$ans3) ?> ><label><?php echo $ans3; ?></label><br>

            <input type="radio" name="rl" id="rl" value="<?php echo $ans4;?>" 
            onclick="radioclick(this.value,<?php echo $question_no?>)"
            <?php selectedAns($ans,$ans4) ?> ><label><?php echo $ans4; ?></label><br>

        </td></tr>
    </table>
</body>
</html>
<?php
    function selectedAns($ans,$given_ans){
    if($ans==$given_ans)
        echo "checked";
}
?>
