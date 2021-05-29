<!DOCTYPE html>
<html>

    <head>
        <!--Title and favicon-->
        <title>Sign up | Goal City</title>
        <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!--CSS files-->
        <link rel="stylesheet" href="signup.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>

    <body>
        <div class="bg-img">

            <section id="signup">
                <div class="signup-wrapper">
                    <form action="register.php" id='register' class="form-horizontal" method="post">
                        <h2><b>Sign Up</b></h2>
        
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>
        
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
        
                        <label for="psw"><b>Verify Password</b></label>
                        <input type="password" placeholder="Re-enter your password" name="psw1" required>
                
                        <button type="submit" id="reg" name="reg">Sign Up</button>

                        <h6>Already have an account? <a href="login.php">Log in</a></h6>
                    </form>
                </div>
            </section>    
        </div>
    </body>
</html>