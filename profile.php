<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
    <!--Title and favicon-->
    <title>Profile | Goal City</title>
    <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS files-->
    <link rel="stylesheet" href="profile.css"> 

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--Social Media Icons-->
    <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
</head>

<body>
      
    <!--Navbar and welcome-->
    <div class="topnav">
        <a href="insidepage.php">
            <img src="media/logo.png" alt="Logo" height="90px" width="80px">
        </a>

        <div class="topnav-right">
            <div class="dropdown-username">
            <button onclick="myFunction()" class="btn-primary"><?php echo $_SESSION['user'] , '<i class="fas fa-caret-down" style="float:right;margin-left:110px;margin-top:-20px"></i>' ; ?></button>
            <div id="myDropdown" class="dropdown-content">
                <a id="profile">My Profile</a>
                <a id="quiz">Take a quiz<i class="fas fa-caret-down" style="float:right;margin-left:10px;margin-top:5%"></i></a>
                <div class="dropdown-forextra">
                <ul>
                  <li><a href="quiz.php?choice=<?php echo "first";?>">Quiz 1</a></li>
                  <li><a href="quiz.php?choice=<?php echo "second";?>">Quiz 2</a></li>
                  <li><a href="quiz.php?choice=<?php echo "third";?>">Quiz 3</a></li>
                </ul>
                </div>

                <a id="volun" href="volunteer.php">Volunteer</a>
                <a id ="logout" href="index.php">Log out</a>
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

    <hr>
    <h1>Welcome <?php echo $_SESSION['user'];?> ! </h1>
    <br>

    <!--First Collapsed list-->
    <button class="collapsible" style="margin-top:20px;"><i>Edit your account</i></button>
    <div class="content">
      <div class="edit-wrapper">
        <form action="edit.php" method="post">
          <div class="row">
            <div class="col">
              <label><b>Username</b></label>
              <input type="text" class="form-control" name="username" placeholder="Change username">
            </div>
            <div class="col">
              <label ><b>Email</b></label>
              <input type="text" class="form-control" name="email" placeholder="Change email">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label ><b>Password</b></label>
              <input type="text" class="form-control" name="psw" placeholder="Change password">
            </div>
            <div class="col">
              <label ><b>Verify password</b></label>
              <input type="text" class="form-control" name="againpsw" placeholder="Verify password">
            </div>
          </div>

          <h6><i>Clicking the button will take you to the log-in form to re-enter our site.</i></h5>

          <button type="submit" id="update" name="update">Update</button>

        </form>
      </div>
    </div>

    <!--Second Collapsed list-->
    <?php 
        include('isadmin.php');
        if($printadmins){
            echo '<button class="collapsible"><i>Show website\'s mailbox</i></button>';
        }else{
            echo '<button class="collapsible"><i>Show your mailbox</i></button>';
        }
    ?>
    <div class="content">
      <div class="mailbox-wrapper ">
        <div class="row" >
          <div class="col-md-12" id="load_mails"></div>
        </div>
      </div>

      <script type="text/javascript">
        function load_mailbox()
        {
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
              document.getElementById("load_mails").innerHTML=xmlhttp.responseText;
            }
          };
          xmlhttp.open("GET","load_mails.php",true);
          xmlhttp.send(null);
        }
        load_mailbox();
      </script>
    </div>

    <!--Third Collapsed list-->
    <button class="collapsible"><i>Show website's scoreboard</i></button>
    <div class="content">
      <div class="mailbox-wrapper ">
        <div class="row" >
          <div class="col-md-12" id="load_scores"></div>
        </div>
      </div>

      <script type="text/javascript">
        function load_scoreboard()
        {
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
              document.getElementById("load_scores").innerHTML=xmlhttp.responseText;
            }
          };
          xmlhttp.open("GET","load_scoreboard.php",true);
          xmlhttp.send(null);
        }
        load_scoreboard();
      </script>
    </div>

    <!--Fourth Collapsed list-->
    <?php 
        include('isadmin.php');
        if($printadmins){
            echo '<button class="collapsible"><i>Delete an account</i></button>';
        }else{
            echo '<button class="collapsible"><i>Delete your account</i></button>';
        }
    ?>
    <div class="content">
      <div class="delete-wrapper">
          <div class="row">
            <div class="col-md-12" id="delete_mails"></div>
          </div>
        </div>

        <script type="text/javascript">
        function delete_mails()
        {
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
              document.getElementById("delete_mails").innerHTML=xmlhttp.responseText;
            }
          };
          xmlhttp.open("GET","delete_account.php",true);
          xmlhttp.send(null);
        }
        delete_mails();
      </script>
    </div>

    <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                content.style.maxHeight = null;
                } else {
                content.style.maxHeight = content.scrollHeight + "px";
                } 
            });
        }
    </script>

    <!--Footer-->
    <section id="footer">
      <footer class="footer">
        <div class="container bottom_border">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
              <h4>Inspiration</h4>
              <h1>We were inspired by the eleventh goal of the UN. You can read more at this
                <a href="https://unric.org/en/sdg-11/#top" target="_blank"><u><b>link</b></u></a> .
              </h1>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <h4><a href="contact.php">Contact Us</a></h4>
              <ul class="list-unstyled quick-links">
                <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fas fa-envelope"></i>Email: ourgoalcity@gmail.com</a></li>
                <li><a href="https://www.csd.auth.gr/en/" target="_blank"><i class="fas fa-map-marker-alt"></i>Address: Aristotle U,GR</a></li>
                <li><a href="index.php"><i class="fab fa-google"></i>Website</a></li>
              </ul>
            </div>
            <div class=" col-xs-12 col-sm-4 col-md-4">
              <h4>About Us</h4>
              <h1>We are a volunteer team from Greece. Our goal is to make a better world which will
                provide inclusive cities safe and sustainable for each of her citizen.
              </h1>
            </div>
          </div>
        </div>
        <div class="container">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="https://www.facebook.com/goalcityPSPI" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/our.goalcity/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
          </hr>
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
              <h6>&copy 2021 PSPI.<h6>
          </div>
          </hr>
        </div>
      </footer>
    </section>

</body>
</html>
    