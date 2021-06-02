<!DOCTYPE html>
<html>

<head>
  <!--Title and favicon-->
  <title>Heritage | Goal City</title>
  <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS/Javascript/Jquery files-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="heritage.css">
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Social Media Icons-->
  <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
</head>

<body>
  
  <?php include('navbar.php') ?>

  <div class="container-fluid">
    <div class="row">
      <div class="image-border1 col-md-6">
        <img src="media/erin-doering-oLBg62NxirI-unsplash.jpg" alt="Fontana di Trevi" width="105%"></img>
        <h1 style="margin-top: -50px;margin-left: 15px;">Cultural Heritage</h1>
      </div>
      <div class="image-border2 col-md-6">
        <img src="media/frank-mckenna-4V8JxijgZ_c-unsplash.jpg" alt="Sunset" width="100%"></img>
        <h1 style="margin-top: -50px;margin-left: 62%;color:white">Natural Heritage</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="first-text-border col-md-6">
        <h1>Definition</h1>
        <p>According to UNESCO, the term heritage refers to buildings, places and objects that are
          considered valuable in order to be preserved over time and is divided into two categories:
          natural and cultural. More specifically, cultural heritage includes monuments, works of art
          and other everyday objects created by man and are timeless. Natural heritage includes the
          countryside, biodiversity and geodiversity and is the gift of nature. Obviously, these two
          aspects of heritage are closely linked as social heritage includes natural features with cultural
          features.
        </p>
        <br>
        <h1>Unesco</h1>
        <hr>
        <p>When a place is of great natural importance to the common heritage of mankind,
          in addition to attracting countless tourists and boosting the local economy, it can be inscribed on the
          UNESCO
          World Heritage List.
          The sites in this list are considered "natural heritage" for the following reasons:
          <ol>
            <li>Natural features and environments of these areas have exceptional global value from an aesthetic or
              scientific
              point of view. 
            </li>
            <li>Geological and physiographic formations are the habitat of endangered species of animals and plants
              that
              have
              an excellent global conservation.</li>
          </ol>
        </p>
        <br><br>
      </div>
      <div class="img1 col-md-6"> <img src="media/ciocan-ciprian-tFu9EMyR87E-unsplash.jpg" alt="Statue of Liberty" style="width:100%"></img></div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="third-text-border col-md-6">
        <h1>Protection and its benefits</h1>
        <hr>
        <p>The fact that UNESCO protects the heritage of many parts of the world shows its importance in a society.
          For
          this
          reason, all competent authorities and citizens must not neglect its protection, which is achieved in the
          following
          ways:
          <ul>
            <li>Chemical maintenance, ie the preventive work regarding the measurement of chemicals, helps to reduce
              the rate of decomposition and wear of exposed materials.
            </li>
            <li>Structural conservation, ie preventive work on ways to improve and stabilize structures while
              maintaining
              their pristine appearance, provides structures with additional strength and reinforcement to repair
              damage
              caused by natural disasters.
            </li>
            <li>Cooperation with UNESCO, either professionally as a company or voluntarily, provides information and
              awareness
              regarding the value of heritage. This results in avoiding phenomena that do not protect it, such as
              scribbling
              on the walls and pollution of coastal shores, parks and forests.</li>
          </ul>
        </p>
        <br><br>
      </div>
      <div class="slideshow-container col-md-6">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="media/polluted.jpg" alt="Empty bottles" width="550px">
        </div>
        <div class="mySlides fade">
          <img src="media/tengyart-xCK8nsGUZ8k-unsplash.jpg" alt="Graffiti" width="550px">
        </div>
        <div class="mySlides fade">
          <img src="media/tower.jpg" alt="Old tower" width="550px">
        </div>
      </div>
    </div>
  </div>

  <script>
    var slideIndex = 0;
    showSlides();
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
      }
  </script>
      
  <?php include('footer.php') ?>
  
</body>

</html>