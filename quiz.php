<!DOCTYPE html>
<html>
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
        <div class="container" style="min-height:400px; width:90%; margin-top:150px; margin-bottom:150px; background-color:rgb(238, 214, 214)">
            <div class="row" style="float:right;margin-top:25px">
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
                        <input type="button" class="btn submit" value="Submit" onclick="load_score();">&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php');?>

        <script type="text/javascript">
            function load_total(){
                document.getElementById("total_que").innerHTML=9;
            }
            var qid="1";
            load_questions(qid);

            function load_questions(qid){
                document.getElementById("current_que").innerHTML=qid;
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                        load_total();
                    }
                };
                xmlhttp.open("GET","load_questions.php?qid="+qid,true);
                xmlhttp.send(null);
            }
            //onClick method to save radio button value.
            function radioclick(radioValue,qid) 
            {
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","save_answer.php?qid="+qid+"&first="+radioValue,true);
                xmlhttp.send(null);
            }
            function load_previous(){
                //If it's the first question, previous button cannot be pressed. If not, load previous.
                if(qid=="1"){
                    load_questions(qid);
                }
                else{
                    qid=eval(qid)-1;
                    load_questions(qid);
                }
            }
            function load_next(){
                //Checks if it is the last question, if not loads next question.
                if(qid!=document.getElementById("total_que").innerHTML){
                    qid=eval(qid)+1;
                    load_questions(qid);
                }else
                    load_score();
            }
            function load_score()
            {
                window.location="score.php";
            }
        </script>
    </body>
</html>

