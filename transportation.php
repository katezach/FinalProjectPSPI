<html>

<head>
  <!--Title and favicon-->
  <title>Transportation | Goal City</title>
  <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS/Javascript/Jquery files-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="transportation.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Social Media Icons-->
  <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
</head>

<body onload="myMove()">

  <?php include('navbar.php')?>

  <div class="container-fluid">
    <div class="row no-gutters">
      <div class="image-text col-sm-3 col-lg-4">
        <div id="move">
          <h1>Transportation</h1>
          <h2>“Transportation systems don’t just move people around—they can also be catalysts for moving cities forward”</h2>
        </div>
      </div>
      <div class="image-border col-sm-9 col-lg-8">
        <img src="media/architecture-1837176_1920.jpg" alt="Roads"></img>
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
        <h1>Traffic</h1>
        <hr>
        <p>As more and more people move into cities, more cars are also hitting the streets.
          Today, more than 50 percent of the world’s population lives in urban environments and by 2050,
          70 percent of people are expected to live in cities with the number of cars
          expected to be nearly 2 billion worldwide. <br><br>
          According to the Global Status Report on Road Safety 2018 published by the World Health Organization states
          that more than 1.35 million people die each year on the world’s roads.
          <br><br>When cities grow horizontally, commuting distances lengthen, subsequently increasing traffic
          fatalities.
          In addition to large distances, there is inadequate separation of pedestrians from vehicles / separation of
          non‐motorized slow moving to motorized fast moving vehicles. For instance, there are not enough available
          footpaths, few safe crossing points or long distances between safe crossing points, no bicycle lanes etc.<br>
        </p>
        <br>
        <h2>What are some possible changes?</h2>
      </div>
      <div class="lanes-image col-md-4">
        <img src="media/photo-1519994007676-baabab4bf574.jpg" alt="Τraffic on the road " width="400px"></img>
      </div>
      <br>
    </div>
  </div>

  <div class="container">
    <ol>
      <div class="li1">
        <li> The first step in the right direction would be is the <u>road capacity enlargement</u>, aimed at expanding
          road infrastructure to
          accommodate demand by increasing physical capacity. This idea can be implemented by investing in the building
          of
          new lanes, new
          accesses, and roads.<br><br> In actual fact, capacity enlargement reduces the cost of transportation for
          private
          mobility, inducing new demand, so that travel speeds on an expanded highway revert to their previous levels.
        </li>
      </div>
      <br><br>
      <div class="row">
        <div class="bus col-md-6">
          <img src="media/3tres-consultoria-e-criacao-eIbQ3PzokDQ-unsplash.jpg" alt="Bus"></img>
        </div><br>
        <div class="li2 col-md-6">
          <li> Secondly, the <u>improvement of public transportation</u> is of the utmost importance.<br><br>
            Particularly, what has to be done is to improve public transport infrastructure including formal, properly
            designed and located terminals, intermodal facilities, designated and well-located bus stops, bus priority
            measures
            lanes, and depot and workshop facilities.<br><br>In addition, ensure use of appropriately specified vehicles
            that should make more
            frequent routes and most importantly
            accessible to people with all kinds of disabilities.<br><br>Furthermore, let's not forget the implementation
            a financially sustainable fare structure. This measure
            aims to affect drivers’ behavior by increasing the generalized cost of private transportation in such a way
            that it approaches optimal traffic management.<br><br>
            Last but not least, riders want comfortable buses that can seat as many people as possible.However, comfort
            also extends beyond the buses’ seating arrangements. A smooth riding, quiet bus plays a significant role in
            reducing the overall stress of a public transit experience. Among the consistent feedback from riders of
            fuel cell electric buses is a surprised delight about how quiet the buses are when in motion.
          </li>
        </div><br><br>
      </div>
      <div class="row">
        <div class="li3 col-md-6">
          <li>What would also be vital is providing travel information in real-time. Particularly, instant data made
            available in real-time on the radio or through a GPS navigational system can provide immediate alternative
            routes to circumvent accidents or breakdowns.<br><br> Accessibility to roadway information is an easy
            solution for reducing traffic congestion, especially during the rush hour. Road engineers began installing
            matrix
            signs over many roadways that are positioned above the street.<br><br> These signs provide up-to-date
            information
            on in inclement weather and traffic conditions so motorists can make responsible choices based on the
            existing
            road conditions in the miles up ahead.</li>
        </div>
        <div class="sign col-md-6">
          <img src="media/road_sign.jpg" alt="Road sign" height="400px" width="400px"></img>
        </div>
      </div>
    </ol><br>
  </div>

  <?php include('footer.php') ?>
  
</body>

</html>