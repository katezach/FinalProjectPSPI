<!DOCTYPE html>
<html>

  <head>
    <!--Title and favicon-->
    <title>Login | Goal City</title>
    <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!--CSS files-->
    <link rel="stylesheet" href="login.css">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>
    <div class="bg-img">
      <section id="login">
        <a href="index.php">
            <img src="media/logo.png" alt="Logo" height="80px" width="80px" style="float: left; padding: 14px 16px; text-decoration: none; background-color: white;">
        </a>
        <div class="login-wrapper">
          <form action="certify.php" class="form-horizontal" role="form" method="post" >
            <h2>Log in</h2>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" id="log" name="log">Log in</button>

            <h6>If you don't have an account, <a href="signup.php">Sign up</a></h6> 
          </form>
        </div>
      </section>
    </div>
  </body>
  
</html>