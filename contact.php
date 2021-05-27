<!DOCTYPE html>
<html lang="en">
    <head>
      <!--Title and favicon-->
      <title>Contact us | Goal City</title>
      <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!--CSS files-->
      <link href="contact.css" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <!--Social Icons-->
      <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="bg-img"> <!--In order to set photo-->
        <section id="contact"><!--Take the place-->
            <h1 class="section-header">CONTACT US</h1><!--Header-->
            <div class="contact-wrapper"> <!--Content-->
            <!--Email form-->
            <form action="insert_database.php" id="contact-form" class="form-horizontal" method="post">
                <!--USERNAME-->
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="username" placeholder="USERNAME" name="username" value="" required>
                    </div>
                </div>
                <!--SUBJECT-->
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="subject" placeholder="SUBJECT" name="subject" value="" required>
                    </div>
                </div>
                <!--MESSAGE-->
                <textarea class="form-control" rows="10" id="message" placeholder="MESSAGE" name="message" required></textarea>

                <!--SEND BUTTON -->
                <button type="submit" class="btn btn-primary send-button" id="submit" name="submit" value="SEND">
                    <div class="button">
                        <i class="fa fa-paper-plane"></i>
                        <span class="send-text">SEND</span>
                    </div>
                </button>
        
            </form>
            
            <!--Social and copyright--> 
            <div class="right-side">
                <!--Location-->
                <ul class="contact-list">
                <li class="list-i8tem"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Aristotle U,GR</span></i></li> 
                </ul>
                <hr>
                <!--Social-->
                <ul class="social-media-list">
                <li><a href="https://www.facebook.com/goalcityPSPI" target="_blank" class="contact-icon">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                </li>
                <li><a href="https://www.instagram.com/our.goalcity/" target="_blank" class="contact-icon">
                    <i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                </ul>
                <hr>
                <!--Copyright-->
                <div class="copyright">&#169 2021. PSPI.</div>

                <!--Return home-->
                <?php 
                $uri = $_SERVER['HTTP_REFERER'];
                $cur = basename(parse_url($uri, PHP_URL_PATH));
                ?>
                <?php 
                    if ($cur == 'index.php')
                    echo '<div class="home"><a href="index.php">PRESS HERE TO RETURN TO THE HOME PAGE</a></div>' ;
                    else
                    echo '<div class="home"><a href="insidepage.php">PRESS HERE TO RETURN TO THE HOME PAGE</a></div>' ;
                ?>
                
            </div>
            </div>
        </section> 
        </div>  
  </body>
</html>