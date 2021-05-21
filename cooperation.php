<!DOCTYPE html>
<html>

<head>
  <!--Title and favicon-->
  <title>Cooperation | Goal City</title>
  <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS/Javascript/Jquery files-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="cooperation.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Social Media Icons-->
  <script src="https://kit.fontawesome.com/9832cc157c.js" crossorigin="anonymous"></script>
</head>

<body onload="myMove()">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid cfirst">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
        </button>
        <div class="logo">
          <a href="insidepage.html"><img src="media/logo.png" height="70px" width="60px"></a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="housing.html">Housing</a></li>
          <li><a href="transportation.html">Transportation</a></li>
          <li><a href="accessibility.html">Accessibility</a></li>
          <li><a href="heritage.html">Heritage</a></li>
          <script>
            $(document).ready(function(){
              // Add smooth scrolling to all links
              $("a").on('click', function(event) {           
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();
                  // Store hash
                  var hash = this.hash;
                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                  scrollTop: $(hash).offset().top
                  }, 800, function(){
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });
          </script>
          <li><a href="environment.html">Environment</a></li>
          <li class="dropdown">
            <a href="cooperation.html">Cooperation</a>
            <div class="dropdown-content">
              <a href="#rural_urban">Rural and Urban </a>
              <a href="#developed_developing">Developed and Developing countries</a>
            </div>
          </li>       
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="signin">
            <button class="button" onclick="opennew()">Sign Out</button>
          </li>
        </ul>

        <script>
          function opennew(){
            window.open("index.html", "_self");
          }
        </script>

      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row no-gutters">
      <div class="image-text col-sm-3 col-lg-4">
        <div id="move">
          <h1>Cooperation</h1>
          <h2>“The only thing that will redeem mankind.”</h2>
        </div>
      </div>
      <div class="image-border col-sm-9 col-lg-8">
        <img src="media/unitednations.jpg"></img>
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
            if (pos == 65) {
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
      <div class="first-text-border col-md-8" id="rural_urban">
        <h1>Rural and Urban</h1>
        <hr>
        <p>Nowadays, there is a wide gap between urban and rural areas. The reason for the above phenomenon is
           the fact that, usually the people in charge of the development of the areas but also all the
           citizens, separate an area in its urban and rural part, as a result of which they deal with these
           two parts independently. Obviously, this distinction creates many economic, environmental and social
           problems both in the city and in the countryside. But in the context of the sustainable development
           of a city, this gap must be bridged urgently and all the meaning lies in how the urban sector can
           enhance the development of the rural. Some of the main ways in which this goal can be achieved are :
          <ul>
            <li>The social institutions of the city must highlight the agricultural heritage and the rural
                landscape. In many countries around the world, rural areas and the countryside are ideal tourist
                destinations. With a proper development of the wealth of these areas, the countryside will be
                able to directly develop its economy.</li>
            <li>A proper utilization of the role of rural settlements by cities can lead to rapid economic
                growth in both. The countryside is famous for its agricultural production and the quality of the
                goods it cultivates. The city, by exporting these products to the market can make the whole
                region a powerful economic power in the international and global economic space.</li>
            <li>Implementing infrastructure and improving local transport networks are transforming the
                countryside into an equally developed area in need of new jobs and additional manpower. It also
                makes it an attractive place of residence for the population.</li>
          </ul>
        </p>
        <br>
      </div>
      <div class="three-images1 col-md-4">
        <div class="img1"><img src="media/bench.jpg"></img></div>
        <div class="img2"><img src="media/alt_second_dot.jpg"></img></div>
        <div class="img3"><img src="media/cities_third_dot.jpg"></img></div>
      </div>
      <br>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="second-text-border col-md-8" id="developed_developing">
        <h1>Developed and developing countries</h1><hr>
        <p>In recent years, another distinction has been made, that between developed and developing countries. This spectrum arises from the inability of the latter to follow the rapid growth of the tertiary and quaternary sectors of the economy of the former. This makes a big difference in the economy, even in neighboring countries, such as Yemen and Saudi Arabia where the former has an HDI = 0.470 which ranks it in developing countries and the latter has an HDI = 0.854 which ranks it in developed countries. Resolving these economic inequalities is imperative in order to improve the sustainability and sustainable development of less developed areas. Developed countries can primarily contribute to this goal as follows:
          <ul>
            <li>The economic performance of developing countries is often hampered by inadequate infrastructure and services and inadequate transport networks. Therefore, some financial support from developed countries would be useful in order to be able to achieve the first stages of development of the developing country.
            <li>Ineffective development policy, bad governance, corruption, fraud and lack of protection of human rights are some of the political characteristics of developing countries that hinder their development. Therefore, political support and cooperation with some developed countries is an important help. This cooperation will offer better conditions for trade and investment in developing countries and will ensure an equal distribution of benefits.</li>
            <li>The sending of specialized workforce and the specialization of the already existing in low-tech industries, such as textiles, coffee production, etc. will increase production and contribute to the eradication of poverty and the upgrading of the business environment, thus promoting the sustainable development of the least developed countries.</li>
          </ul>
          <br><br>
        </p>
      </div>
      <div class="three-images2 col-md-4">
        <div class="img4"><img src="media/countries_first_dot.jpg"></img></div>
        <div class="img5"><img src="media/countries_second_dot.jpg"></img></div>
        <div class="img6"><img src="media/countries_third_dot.jpg"></img></div>
      </div>
    </div>
  </div>

  <?php include('footer.php') ?>
  
</body>

</html>