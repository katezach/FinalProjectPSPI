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
        <div class="login-wrapper">
          <form action="insidepage.php" class="form-horizontal" role="form">
            <h2>Log in</h2>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit">Log in</button>
          </form>
        </div>
      </section>
    </div>
  </body>
  
</html>