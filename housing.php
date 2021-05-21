<!DOCTYPE html>
<html>

<head>
  <!--Title and favicon-->
  <title>Housing | Goal City</title>
  <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS/Javascript/Jquery files-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="housing.css">
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Social Media Icons-->
  <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
</head>

<body onload="myMove()">

  <?php include('navbar.php') ?>

  <div class="container-fluid">
    <div class="row">
      <div class="image-text col-md-4">
        <div id="move">
          <h1>Housing</h1>
          <h2>Without stable shelter, all falls apart.</h2>
        </div>
      </div>
      <div class="image-border col-md-8">
          <img src="media/housing-side.jpg" alt="Builded town"></img>
      </div>
    </div>
  </div>

  <script>
    var id = null;
    function myMove() {
        var elem = document.getElementById("move");
        var pos = 0;

        clearInterval(id);
        id = setInterval(frame, 20);
        function frame() {
            if (pos == 100) {
            clearInterval(id);
            } else {
            pos++;
            elem.style.top = pos + 'px';
            elem.style.left = pos + 'px';

            }
        }
    }
  </script>

  <div class="container">
    <div class="row">
      <div class="first-text-border col-md-8">
        <h1><i>Definition</i></h1>
        <p>Housing is defined as the fundamental right of people to live under a roof with decent living conditions. In
          fact, it is a right which
          the European Parliament has an obligation to guarantee to the citizens of its Member States, thus emphasizing
          its
          importance.
          Every person's home is his personal space, in which the first stages of his socialization take place and a
          large
          part of
          his character and mental virtues are cultivated. At the same time, it is an area that contributes to securing
          two
          more primary rights:
          nutrition and health. Living conditions are therefore especially important as unclean spaces,
          lack of sewerage systems and inadequate facilities make it difficult to secure the above rights.
          <br><br>
        </p>
      </div>
      <div class="img1 col-md-4"><img src="media/first_paragraph.jpeg" alt="Colorfull houses" ></img></div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="img2 col-md-4"><img src="media/second_paragraph.jpg" alt="Slum"></img></div>
      <div class="second-text-border col-md-8">
        <h1>Slums</h1>
        <hr>
        <p>According to a survey by 100people.org, 23% of the world's population is homeless.
          Also, according to the UN Human Settlements Program, 33% of the urban population live in slums.
          A slum is defined as a densely populated urban area consisting mainly of aging housing units,
          deteriorating or incomplete infrastructure. The slum is a part of the city where the standard
          of living is low, there is a lack of a reliable sewerage system, water supply, reliable electricity,
          law enforcement and other basic services. It seems inconceivable in the era of the 21st century where
          the whole world revolves around technology and its development, some people are still struggling to
          secure their basic rights regarding their living conditions!
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="third-text-border col-md-8">
        <h1>Progress</h1>
        <hr>
        <p>According to the European Parliament, social housing is a precondition for social justice
          and cohesion, which means ensuring high levels of employment and job mobility in the direction
          of jobs. In addition, the existence of housing for every citizen enhances
          his mental and physical health and helps him to develop, evolve and offer work to society.</p>
      </div>
      <div class="img3 col-md-4"><img src="media/third_paragraph.jpg" alt="town"></img></div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="img4 col-md-4"><img src="media/fourth_paragraph.jpg" alt="Burned house"></img></div>
      <div class="fourth-text-border col-md-8">
        <h1>Resilient</h1>
        <hr>
        <p>Speaking of infrastructure quality, it is a consequence to aim at building durable buildings.
          This resilience will protect and withstand adverse weather conditions such as heavy rainfall,
          floods, earthquakes and fires. After all, such resilience of buildings is necessary as climate
          change reserves new natural disasters that will occur throughout the planet. At first, the durability of the
          buildings ensures the health and protection of the people and at the same time the sustainability of the whole
          society.</p>
      </div>
    </div>
  </div>

  <?php include('footer.php') ?>
  
</body>

</html>