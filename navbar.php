<?php session_start(); ?>

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
            echo '<li><a style = "color: grey;">Housing</a></li>';
          else
            echo '<li><a href="housing.php">Housing</a></li>';
        ?>

        <?php 
          if($cur == 'FinalProjectPSPI/transportation.php')
            echo '<li><a style = "color: grey;">Transportation</a></li>';
          else
            echo '<li><a href="transportation.php">Transportation</a></li>';
        ?>
        
        <?php 
          if($cur == 'FinalProjectPSPI/accessibility.php')
            echo '<li><a style = "color: grey;">Accessibility</a></li>';
          else
            echo '<li><a href="accessibility.php">Accessibility</a></li>';
        ?>
        
        <?php 
          if($cur == 'FinalProjectPSPI/heritage.php')
            echo '<li><a style = "color: grey;">Heritage</a></li>';
          else
            echo '<li><a href="heritage.php">Heritage</a></li>';
        ?>
        
        <?php 
          if($cur == 'FinalProjectPSPI/environment.php'){
          include('fun.php');
          echo '<li class="dropdown"><a style = "color: grey;">Environment</a>
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
          echo '<li class="dropdown"><a style = "color: grey;">Cooperation</a>
                <div class="dropdown-content">
                  <a href="#rural_urban">Rural and Urban </a>
                  <a href="#developed_developing">Developed and Developing countries</a>
                </div>
                </li>' ;
          }else
            echo '<li><a href="cooperation.php">Cooperation</a></li>';
        ?>

        <?php 
          if($cur == 'FinalProjectPSPI/quiz.php' || $cur == 'FinalProjectPSPI/volunteer.php' ){
          echo '<li class="dropdown"><a style = "color: grey;">Extra Activities</a>
            <div class="dropdown-content">
              <a>Take a quiz<i class="fas fa-caret-down" style="float:right;margin-left:10px;margin-top:5%"></i></a>
              <div class="dropdown-forextra">
              <ul>
                <li><a href="quiz.php">Quiz 1</a></li>
                <li><a href="#">Quiz 2</a></li>
                <li><a href="#">Quiz 3</a></li>
              </ul>
              </div>
              <a href="volunteer.php">Volunteering</a>
            </div>
            </li>' ;
          }else{
            echo '<li class="dropdown"><a>Extra Activities</a>
            <div class="dropdown-content">
              <a>Take a quiz<i class="fas fa-caret-down" style="float:right;margin-left:10px;margin-top:5%"></i></a>
              <div class="dropdown-forextra">
              <ul>
                <li><a href="quiz.php">Quiz 1</a></li>
                <li><a href="#">Quiz 2</a></li>
                <li><a href="#">Quiz 3</a></li>
              </ul>
              </div>
              <a href="volunteer.php">Volunteering</a>
            </div>
            </li>' ;
          }
        ?>
        
      </ul>

      <div class="dropdown-username">
        <button onclick="myFunction()" class="btn-primary"><?php echo $_SESSION['user'] , '<i class="fas fa-caret-down" style="float:right;margin-left:10px;margin-top:5px"></i>' ;  ?></button>
        <div id="myDropdown" class="dropdown-content">
          <a href="general_profile.php">My Profile</a>
          <a href="index.php">Log out</a>
        </div>
      </div>

      <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content-username");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
      </script>   
    </div>
  </div>
</nav>
