<!DOCTYPE html>
<html>
<head>
    <style>
    input[type='radio'] { transform: scale(1.5);}
    label{
        font-weight:normal;
        margin-left:10px;
        font-size:24px;
    }
    .btn{font-size: 20px;}
    </style>
</head>
<?php
    session_start();
    include "SQL_connection.php";
    $question_no="";
    $question="";
    $ans1=""; $ans2=""; $ans3=""; $ans4="";
    $counter=0;
    $ans="";
    
    
    /* Gives ans the chosen value */
    if(isset($_SESSION["answer"][$_GET["qid"]])){
        $ans=$_SESSION["answer"][$_GET["qid"]];
    }

    $query = "SELECT * FROM quiz1 WHERE idquiz='$_GET[qid]'"; 
    $result=mysqli_query($link,$query);
    $counter=mysqli_num_rows($result); 

    /* Until all rows of db are read, counter will be !=0 */
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
    
    <div style="font-size:30px;padding-left:65px;padding-top:60px;" >
    <?php echo "<i>Question ".$question_no.".</i><br><br>".$question?></div>
    <hr style='border-top: 0.2px solid whitesmoke;'>
    
    <table>
        <tr><td style="padding-right:65px;padding-left:65px;padding-top:35px;">
        <!--Takes the value of radio button clicked (different for each answer) and
        returns "checked" from selectedAns. -->
            <input type="radio" name="rl" id="rl" value="<?php echo $ans1;?>" 
            onclick="radioclick(this.value,<?php echo $question_no?>)"
            <?php selectedAns($ans,$ans1) ?>><label><?php echo $ans1; ?></label><br>

            <input type="radio" name="rl" id="rl" value="<?php echo $ans2;?>" 
            onclick="radioclick(this.value,<?php echo $question_no?>)"
            <?php selectedAns($ans,$ans2) ?>><label><?php echo $ans2; ?></label><br>

            <input type="radio" name="rl" id="rl" value="<?php echo $ans3;?>" 
            onclick="radioclick(this.value,<?php echo $question_no?>)"
            <?php selectedAns($ans,$ans3) ?>><label><?php echo $ans3; ?></label><br>

            <input type="radio" name="rl" id="rl" value="<?php echo $ans4;?>" 
            onclick="radioclick(this.value,<?php echo $question_no?>)"
            <?php selectedAns($ans,$ans4) ?>><label><?php echo $ans4; ?></label><br>
        </td></tr>
    </table> 
</body>
</html>
<?php
/* Keep radio button enabled. */
    function selectedAns($ans,$given_ans){
    if($ans==$given_ans)
        echo "checked";
}
?>
