<!DOCTYPE html>
<html>
<?php session_start(); ?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--Social Media Icons-->
        <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
        
</head>

<body>
    
    <?php include('navbar.php');?>
    <div class="container" style="min-height:400px; width:90%; margin-top:150px; margin-bottom:150px; background-color:rgb(238, 214, 214)">
        <div class="row" style="float:right;">
            <div class="col-md-12" >
            <!--Shows to user the no. of current question/ total-->
                <div id="current_que" style="float:left; font-size:24px;">0</div>
                <div style="float:left; font-size:24px;">&nbsp;out of&nbsp;</div>
                <div id="total_que" style="float:left; font-size:24px;"> 0</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="load_questions"></div>
        </div>
        <div class="row" style="margin-top:50px; float:right;">
            <div class="col-md-12" style="min-height:50px; padding:15px;">
                <div class="col-lg-12" text-center>
                    <input type="button" class="btn btn-warning" value="Previous" onclick="load_previous();">&nbsp;
                    <input type="button" class="btn btn-success" value="Next" onclick="load_next();">&nbsp;
                    <input type="button" class="btn submit" value="Submit" onclick="submit();">&nbsp;
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php');?>

    <script type="text/javascript">
        function load_total()
        {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("total_que").innerHTML=xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET","load_total.php",true);
            xmlhttp.send(null);
        }
        var questionno="1";
        load_questions(questionno);

        function load_questions(questionno){
            document.getElementById("current_que").innerHTML=questionno;
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                    load_total();
                }
            };
            xmlhttp.open("GET","load_questions.php?questionno="+questionno,true);
            xmlhttp.send(null);
        }
        
        function radioclick(radioValue,questionno)
        {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                   
                }
            };
            xmlhttp.open("GET","save_answer.php?questionno="+questionno+"&value1="+radioValue,true);
            xmlhttp.send(null);
        }
        function load_previous(){
            if(questionno=="1"){
                load_questions(questionno);
            }
            else{
                questionno=eval(questionno)-1;
                load_questions(questionno);
            }
        }
        function load_next(){
            if(questionno!=document.getElementById("total_que").innerHTML){
                questionno=eval(questionno)+1;
                load_questions(questionno);
            }else
                submit();
            
        }
        function submit(){
            //Calculates score, if pressed before the end, the questions left take 0 points.
            //Transfer to score.php
            window.location="score.php";
        }

    </script>
</body>
</html>

