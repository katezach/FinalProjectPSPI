<!DOCTYPE html>
<html>

<head>
  <!--Title and favicon-->
  <title>Accessibility | Goal City</title>
  <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS/Javascript/Jquery files-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="accessibility.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Social Media Icons-->
  <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
</head>

<body onload="myMove()">
  
  <?php include('navbar.php') ?>

  <div class="container-fluid">
    <div class="row no-gutters">
      <div class="image-text col-sm-3 col-lg-4">
        <div id="move">
          <h1>Accesibility</h1>
          <h2>As cities grow in size we need to think about how they are built and who they are for.</h2>
        </div>
      </div>
      <div class="image-border col-sm-9 col-lg-8">
        <img src="media/photo-1417551471850-924c48abad50.jpg"></img>
      </div>
    </div>
  </div>

  <script>
    var id = null;
    function myMove() {
        var elem = document.getElementById("move");
        var pos = 0;

        clearInterval(id);
        id = setInterval(frame, 15);
        function frame() {
            if (pos == 200) {
            clearInterval(id);
            } else {
            pos++;
            elem.style.top = pos + 'px';
            }
        }
    }
  </script>

  <div class="container">
    <div class="row">
      <div class="first-text-border col-md-8">
        <h1>Disabilities</h1>
        <hr>
        <p>For too long, cities have been built
          without thinking about how physical and social barriers affect people with disabilities.
          The World Health Organisation says that 15% of the world’s population lives with an impairment or disability.
          It is therefore especially important to create a society that respects and is accessible to these people as
          well. <br><br>
          <b>If cities are built with accessibility in mind people with disabilities will feel included socially.</b>
        </p>
        <h1>Equality</h1>
        <hr>
        <p>Building cities for diversity, inclusion and equality is becoming more important.
          By that, it means that people are included socially and have equal access to any service they want.
          Designing cities in this way shows that planners are thinking about all of the population’s needs.
        </p>
        <h2> Accessibility is the key to inclusive cities.</h2>
      </div>
      <div class="image1 col-md-4">
        <img src="media/de-an-sun-4CK1awW58eY-unsplash.jpg" width="400px"></img>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row no-gutters">
      <div class="slideshow-container col-md-4">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="media/slideshow1.jpg" width="400px">
        </div>

        <div class="mySlides fade">
          <img src="media/slideshow2.jpg" width="400px">
        </div>

        <div class="mySlides fade">
          <img src="media/slideshow3.jpg" width="400px">
        </div>
      </div>
      <div class="second-text-border col-md-8">
        <h1>Ways to solve this.</h1>
        <p>A generalized global goal according to the UN is to create accessible and sustainable cities. This is not
          possible if the accessibility of the infrastructure is not ensured first. In this context, various actions can
          be taken such as:
        <ul>
          <li>It must be ensured that parking spaces for the disabled are accessible.
            That parking lots and departure points remain clear to people who need them. </li>
          <li>Avoid putting steps within a floor in a building, where possible.
            Where steps are necessary, provide a ramp or platform lift as appropriate.
            Provide accessible lifts in all new buildings that have more than one floor.
            Check the lifts’ operation regularly. Keep the lifts clear.</li>
          <li>Ensure the surface and lighting around the building and the paths that customers
            use to reach the building. At least one entrance must be accessible if the main entrance is not.
            Doors must kept open where possible, those that are closed must be easy for customers to open,
            and must be wide enough for all customers.</li>
          <li>All the infrastructures must have signs to let your customers understand where they need to go.
            The signs should be designed according to best practice guidelines, have Braille,
            or raised lettering wherever possible, have writing that is large enough for your customers to read, use
            appropriate symbols.</li>
          <li>Provide toilets that customers with disabilities can use.
            Provide an alarm system in your accessible toilets and test it regularly to make sure
            that a member of staff will help somebody in an emergency. Provide sanitary bins in accessible
            toilets and put them where they will not obstruct wheelchair users.</li>
        </ul>
        </p>
        <br><br>
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