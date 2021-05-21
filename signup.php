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
            <script>
                // Function to check Whether both passwords
                // is same or not.
                function checkPassword(form) {
                    p = form.psw.value;
                    p1 = form.psw1.value;
                    // If password not entered
                    if (p == '')
                        alert ("Please enter Password");   
                    // If confirm password not entered
                    else if (p1 == '')
                        alert ("Please enter confirm password");   
                    // If Not same return False.    
                    else if (p != p1) {
                        alert ("\nPassword did not match: Please try again...")
                        return false;
                    }
                    // If same return True.
                    else{
                        window.open('login.php', '_self');
                    }
                }
            </script>
            <section id="signup">
                <div class="signup-wrapper">
                    <form action='javascript:void(0)' id='register' class="form-horizontal" role="form">
                        <h2><b>Sign Up</b></h2>
        
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>
        
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
        
                        <label for="psw"><b>Verify Password</b></label>
                        <input type="password" placeholder="Re-enter your password" name="psw1" required>
                    
                        <!--<input type="submit" onclick='checkPassword(form)' class="btn" value='Sign Up' >-->
                        <button type="reset" onclick="checkPassword(form)">Sign Up</button>

                        <h6>Already have an account? <a href="login.php">Log in</a></h6>
                    </form>
                </div>
            </section>    
        </div>
    </body>
</html>