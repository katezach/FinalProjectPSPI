<?php 
  $uri = $_SERVER["REQUEST_URI"];
  $cur = substr($uri,strpos($uri,"/")+1);
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid cfirst">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </button>
        <div class="logo">
          <a href="insidepage.php"><img src="media/logo.png" alt="Logo" height="70px" width="60px"></a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <?php 
            if($cur == 'FinalProjectPSPI/housing.php')
              echo '<li class="active"><a href="housing.php">Housing</a></li>';
            else
              echo '<li><a href="housing.php">Housing</a></li>';
          ?>

          <?php 
            if($cur == 'FinalProjectPSPI/transportation.php')
              echo '<li class="active"><a href="transportation.php">Transportation</a></li>';
            else
              echo '<li><a href="transportation.php">Transportation</a></li>';
          ?>
          
          <?php 
            if($cur == 'FinalProjectPSPI/accessibility.php')
              echo '<li class="active"><a href="accessibility.php">Accessibility</a></li>';
            else
              echo '<li><a href="accessibility.php">Accessibility</a></li>';
          ?>
          
          <?php 
            if($cur == 'FinalProjectPSPI/heritage.php')
              echo '<li class="active"><a href="heritage.php">Heritage</a></li>';
            else
              echo '<li><a href="heritage.php">Heritage</a></li>';
          ?>
          
          <?php 
            if($cur == 'FinalProjectPSPI/environment.php'){
            include('fun.php');
            echo '<li class="dropdown">
                  <a href="environment.php">Environment</a>
                  <div class="dropdown-content">
                    <a href="#air_pollution">Air Pollution</a>
                    <a href="#water_pollution">Water Pollution</a>
                  </div>
                  </li>' ;
            }else
              echo '<li><a href="environment.php">Environment</a></li>';
          ?>

          <?php 
            if($cur == 'FinalProjectPSPI/cooperation.php'){
            include('fun.php');
            echo '<li class="dropdown">
                  <a href="cooperation.php">Cooperation</a>
                  <div class="dropdown-content">
                    <a href="#rural_urban">Rural and Urban </a>
                    <a href="#developed_developing">Developed and Developing countries</a>
                  </div>
                  </li>' ;
            }else
              echo '<li><a href="cooperation.php">Cooperation</a></li>';
          ?>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="signin">
            <button class="button" onclick="opennew()">Sign Out</button>
          </li>
        </ul>

        <script>
          function opennew(){
            window.open("index.php", "_self");
          }
        </script>

      </div>
    </div>
</nav>
