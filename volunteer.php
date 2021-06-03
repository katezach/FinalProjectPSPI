<!DOCTYPE html>
<html>

<head>
  <!--Title and favicon-->
  <title>Volunteering | Goal City</title>
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

  <style>
    .card {margin-left: 100px; margin-top: 100px; width:240px;height:410px;  border: 1.5px solid black; border-radius: 5%; box-shadow: 10px 10px 18px #888888;}
    .card-img-top{margin-top:10px;margin-left:2%;width: 200px;height: 200px;}
    .card-body{margin-left:10px;}
    .btn-success{margin-left:10px;margin-right:20px;width:80%;}
    h5   {color: black; font-size: 25px;}
    p    {color: black;}
    
    @media (max-width:280px){
        .row{
            margin-left: -100px;
        }
    }
    @media (min-width:450px) and (max-width:800px){
        .row{
            margin-left: 70px;
        }
    }
    @media (min-width:993px) and (max-width:1020px){
        .row{
            margin-left: 70px;
        }
    }
    @media (min-width:1230px) and (max-width:1500px){
        .row{
            margin-left: 120px;
        }
    }
    @media (min-width:300px) and (max-width:640px){
        .card{
            margin-left: 15%; margin-top: 30px; 
        }
    }
    @media (min-width:640px) and (max-width:992px){
        .card{
            margin-left: 20%; margin-top: 70px; 
        }
    }
    @media (min-width:1500px){
        .card{
            margin-left: 13%; width:440px;height:610px;
        }
        .card-img-top{
            margin-top:10px;margin-left:12%;width: 300px;height: 300px;
        }
        .card-body{
            margin-top:10%;margin-left: 10%;
        }
        h5{font-size: 30px;}
        p{font-size: 20px;}
        .btn-success{margin-top:10%;margin-left:0px;width: 90%;font-size: 24px;}
    }

</style>

</head>
<?php 
    $imageurls=array("volunteer_access.png","volunteer_housing.png","volunteer_heritage.png","volunteer_environment.png","volunteer_cooperation.png","volunteer_transportation.png");
    $titles=array("Cities for all","Sheltering", "UNESCO'S WHC","EDF","United Nations","Bikes");
    $texts=array("This page fosters peer-to-peer learning through the development of accessible online learning material and storytelling.",
                "Volunteers provide man power that allows the building of homes or the making of renovations at considerably lower costs.",
                "Contributions to W.H.C. are used for projects implemented by experts to protect World Heritage sites around the world.",
                "Protecting people from fossil fuel pollution and toxic chemicals, and make communities, oceans and ecosystems more resilient.",
                "Do you want to help countries in crisis? You can do that by donating to the United Nations or its agencies.<br><br>",
                "Improving access to affordable transportation and promote sustainable development abroad by donating bicycles or bicycle parts");
    $links=array("https://cities4all.org/","https://www.habitat.org/emea","https://whc.unesco.org/en/donation/",
    "https://membership.onlineaction.org/site/Donation2?df_id=19421&19421.donation=form1&addl_info=nav-button",
    "https://www.un.org/en/about-us/how-to-donate-to-the-un-system","https://org.salsalabs.com/o/411/donate_page/bikesfortheworld");
?>
<body>
  
  <?php include('navbar.php') ?>
  <?php 
  echo "<div class='container-fluid'><div class='row'>";
    for($i=0;$i<6;$i++){
        cardDesign($imageurls[$i],$titles[$i],$texts[$i],$links[$i]);
    }
    echo "</div></div>";
    function cardDesign($imageurl,$title,$text,$link){
    echo "<div class='col-sm-2 col-md-2 col-lg-8 card'>"."<img class='card-img-top' src='media/$imageurl' alt='Card image cap'>".
    "<div class='card-body'>"."<h5 class='card-title'>$title</h5>"."<p class='card-text'>$text</p>".
    "<a href='$link' target='_blank' class='btn btn-success'>Volunteer here</a>".
    "</div></div>";
    }
  ?>
  </div>


</body>
<?php include('footer.php') ?>
</html>