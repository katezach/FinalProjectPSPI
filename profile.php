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
  </head>

  <body>
    <!--Navbar and welcome-->
    <div class="topnav">
      <a href="insidepage.php">
        <img src="media/logo.png" alt="Logo" height="110px" width="100px">
      </a>

      <div class="topnav-right">
        <div class="dropdown-username">
          <button onclick="myFunction()" class="btn-primary"><?php echo $_SESSION['user']; ?></button>
          <div id="myDropdown" class="dropdown-content">
            <a id="profile">My Profile</a>
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

    <h1>Welcome <?php echo $_SESSION['user']; ?> ! </h1>
    <br>
    <hr>

    <!--First Collapsed list-->
    <button class="collapsible" style="margin-top:180px;"><i>Edit your account</i></button>
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
    <button class="collapsible"><i>Show webpage's mailbox</i></button>
    <div class="content">
      <div class="mailbox-wrapper">
        <div class="row">
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
    <button class="collapsible"><i>Delete an account</i></button>
    <div class="content">
      
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
  </body>
</html>