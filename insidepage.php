<!DOCTYPE html>
<html>

<head>
  <!--Title and favicon-->
  <title>Home | Goal City</title>
  <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--CSS files-->
  <link rel="stylesheet" href="insidepage.css">

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!--Social Media Icons-->
  <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--Navigation Bar-->
  <div class="topnav">
    <a href="insidepage.html">
      <img src="media/logo.png" alt="Logo" height="110px" width="100px">
    </a>
    <div class="topnav-right">
      <button class="button" onclick="opennew()">Sign Out</button>
    </div>
  </div>

  <script>
    function opennew(){
      window.open("index.php", "_self");
    }
  </script>

  <div class="background-container">
    <!--Timeline-->
    <div class="timeline">
      <div class="paragraphscontainer left">
        <div class="boxescontent">
          <h2><a href="housing.php">HOUSING</a></h2>
          <p>The resilient of buildings and living conditions determine the pace of sustainable development of a city.
          </p>
        </div>
      </div>
      <div class="paragraphscontainer right">
        <div class="boxescontent">
          <h3><a href="transportation.php">TRANSPORTATION</a></h3>
          <p>The viability of a city is not defined if everything does not move in the right direction at the right
            pace.</p>
        </div>
      </div>
      <div class="paragraphscontainer left">
        <div class="boxescontent">
          <h2><a href="accessibility.php">ACCESIBILITY</a></h2>
          <p>If the city itself excludes her citizens from her development it will never become sustainable.</p>
        </div>
      </div>
      <div class="paragraphscontainer right">
        <div class="boxescontent">
          <h3><a href="heritage.php">HERITAGE</a></h3>
          <p>A city will never be able to promote sustainability without first highlighting its heritage.</p>
        </div>
      </div>
      <div class="paragraphscontainer left">
        <div class="boxescontent">
          <h2><a href="environment.php">ENVIRONMENT</a></h2>
          <p>No sustainability matters unless we first ensure a healthy lifestyle in cities.</p>
        </div>
      </div>
      <div class="paragraphscontainer right">
        <div class="boxescontent">
          <h3><a href="cooperation.php">COOPERATION</a></h3>
          <p>In life no one has succeeded alone.</p>
        </div>
      </div>
    </div>
  </div>
  
  <?php include('footer.php') ?>

</body>

</html>