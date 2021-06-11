<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

  <head>
    <!--Title and favicon-->
    <title>Goal City</title>
    <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS files-->
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--Social Icons-->
    <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <?php

      if($_SESSION['logged']!=1){

      }
       
      else{
       
        $from=$_GET["from"];

        if($from=="out"){
          $_SESSION['logged']=0;
        }


       }
    ?>
    <!--Navigation Bar-->
    <div class="topnav">
      <a href="index.php">
        <img src="media/logo.png" alt="Logo" height="110px" width="100px">
      </a>

      <div class="topnav-middle">
        <button class="button" onclick="openlog()">Log In</button>
      </div>
      
      <div class="topnav-right">
        <button class="button" onclick="opensig()">Sign Up</button>
      </div>
    </div>

    <script>
      function opensig(){
        window.open("signup.php", "_self");
      }

      function openlog(){
        window.open("login.php", "_self");
      }
    </script>

    <!--First main page-->
    <div class="background-container">
      <div class="backtext">
        <p><em>OUR</em></p>
        <p1>INTE<em>G</em>RATED<br></p1>
        <p2>AFF<em>O</em>RDABLE<br></p2>
        <p3>SUST<em>A</em>INABLE<br></p3>
        <p4>RESI<em>L</em>IENT<br></p4>
        <p><em>CITY</em></p>
      </div>
    </div>

    <!--Slideshow implementation-->
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <!--First-->
          <div class="item active">
            <img src="media/integrated.jpeg" alt="Integrated city" style="width:100%;">
            <div class="carousel-caption">
              <h3>INTEGRATED</h3>
              <p>An integrated city is developing as a whole,
                evolving its existing structures and
                upgrading its services as needed
                of its citizens. It concerns quality in health,
                in education, transport and others,
                aiming at the maximum productivity of its citizens.
              </p>
            </div>
          </div>
          <!--Second-->
          <div class="item">
            <img src="media/affordable.jpg" alt="Affordable city" style="width:100%;">
            <div class="carousel-caption">
              <h3>AFFORDABLE</h3>
              <p>An affordable city is anthropocentrically built with purpose
                the balance between sustainability, social justice
                and quality of life. For this reason, the decisions obtained
                combine smart technologies and proper management of the environment.
              </p>
            </div>
          </div>
          <!--Third-->
          <div class="item">
          <img src="media/sustainable.jpg" alt="Sustainable city" style="width:100%;">
            <div class="carousel-caption">
              <h3>SUSTAINABLE</h3>
              <p>Sustainable cities are designed with this in mind
                social, economic and environmental impacts.
                Their goal is to achieve economic and social
                sustainability for all citizens and green sustainability
                fighting the abuse of energy, water, food
                and reducing environmental pollution.
              </p>
            </div>
          </div>
          <!--Fourth-->
          <div class="item">
            <img src="media/resilient.jpg" alt="Resilient city" style="width:100%;">
            <div class="carousel-caption">
              <h3>RESILIENT</h3>
              <p>Resilient cities are cities that have the ability,
                thanks to their infrastructure, to cope in the future
                economic, social and environmental problems.
                This is a consequence of a sustainable development that has
                come about by prudent use of technology, environment
                but also by the equality of all citizens.
              </p>
            </div>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <?php include('footer.php') ?>
    
  </body>
  
</html>