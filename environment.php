<!DOCTYPE html>
<html>

<head>
  <!--Title and favicon-->
  <title>Environment | Goal City</title>
  <link rel="icon" type="image/png" sizes="32x32" href="media/withoutString.png">
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS/Javascript/Jquery files-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="environment.css">
  <link rel="stylesheet" href="main.css">
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
          <h1>Environment</h1>
          <h2>“What’s the use of a fine house if you haven’t got a tolerable planet to put it on.”</h2>
        </div>
      </div>
      <div class="image-border col-sm-9 col-lg-8">
        <img src="media/macau-photo-agency-1UJMEmi3-qw-unsplash.jpg"></img>
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
      <div class="natural_effects col-md-8">
        <h1>Natural Effects</h1>
        <hr>
        <p>The world faces enormous environmental challenges in terms of climate change, resource use and protection of
          the natural environment. The ecological footprints of cities go far beyond their urban boundaries to forests,
          agriculture and water. By ecological footprints what is meant is the total amount of productive land needed to
          maintain current activities and the removal of waste.<br><br>
          Specifically, the urban population of developed countries has led to inadequate water supply, wastewater,
          solid waste, energy, loss of green and natural spaces, urban sprawl, pollution of soil, air etc. Furthermore,
          cities consume increasing amounts of natural resources, produce more and more waste and emissions, and all
          this have an impact on the regional and planetary environment.<br><br>
          According to a report of the World Health Organization (WHO) in October 2018 that 93 per cent of the world’s
          children breathe toxic air every day. According to the report, 1.8 billion children breathe air that is so
          polluted it puts their health and development at serious risk. <br><br>
          WHO recommends and supports the implementation of policies to reduce air pollution, including better waste
          management, the use of clean technologies and fuels for household cooking, heating and lighting to improve the
          quality of air in homes.
        </p>
      </div>
      <div class="green col-md-4">
        <img src="media/env.jpg" width="100%"></img>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="air col-md-12" id="air_pollution">
        <h1>Air Pollution</h1>
      </div>
    </div>
  </div>
  
  <div class="air_fog"></div>
    
  <div class="container">
    <div class="row">
      <div class="air_fog_text col-md-12">
        One of the main environmental problems in most cities is air pollution . The underlying cause of air pollution
        is mainly production and consumption of energy for industrial activities. In other words, the processes that are
        related with fossil fuels. As a result , the quality of air for humans is downgraded which leads to various
        health problems.<br><br>
        In addition to the above, some other reasons are multiple and context-specific. The major outdoor pollution
        sources include residential energy for cooking and heating, vehicles, power generation, agriculture/waste
        incineration, and industry. Policies and investments supporting integrated policies that support sustainable
        land use, cleaner household energy and transport, energy-efficient housing, power generation, industry, and
        better municipal waste management can effectively reduce key sources of ambient air pollution.<br><br>
        Air quality is closely linked to the earth’s climate and ecosystems globally. Many of the drivers of air
        pollution (i.e. combustion of fossil fuels) are also sources of greenhouse gas emissions. Policies to reduce air
        pollution, therefore, offer a “win-win” strategy for both climate and health, lowering the burden of disease
        attributable to air pollution, as well as contributing to the near- and long-term mitigation of climate change.
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="park1 col-md-4"><img src="media/park1.jpg" height="300px" width="300px"></img></div>
      <div class="park2 col-md-4"><img src="media/park2.jpg" height="300px" width="300px"></img></div>
      <div class="park3 col-md-4"><img src="media/park3.jpg" height="300px" width="300px"></img></div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="water col-md-12" id="water_pollution">
        <h1>Water Pollution</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="water_text col-md-8">Developed cities nowadays are confronted with deterioration in the quality of
        ground and river water on account of water consumption by industries. In particular, when water falls over the
        land it either evaporates or returning to the atmosphere or seeps into the ground and finally the remainder
        becomes surface water. Now, with the amount of factories and industries in general, that are constructed, the
        routes that water takes have altered. The consequences? Reduction in the quality of surface water for humans ,
        fish and wild life.<br><br>
        • <u>Groundwater</u> <br><br> When rain falls and seeps deep into the earth, filling the cracks, crevices, and
        porous spaces of an aquifer (basically an underground storehouse of water), it becomes groundwater—one of our
        least visible but most important natural resources. Groundwater gets polluted when contaminants—from pesticides
        and fertilizers to waste leached from landfills and septic systems—make their way into an aquifer, rendering it
        unsafe for human use. Ridding groundwater of contaminants can be difficult to impossible, as well as costly.
        Once polluted, an aquifer may be unusable for decades, or even thousands of years. Groundwater can also spread
        contamination far from the original polluting source as it seeps into streams, lakes, and oceans.<br><br>
        • <u>Surface water</u> <br><br>Covering about 70 percent of the earth, surface water is what fills our oceans,
        lakes, rivers, and all those other blue bits on the world map. It has been discovered that nearly half of our
        rivers and streams and more than one-third of our lakes are polluted and unfit for swimming, fishing, and
        drinking. Nutrient pollution, which includes nitrates and phosphates, is the leading type of contamination in
        these freshwater sources. While plants and animals need these nutrients to grow, they have become a major
        pollutant due to farm waste and fertilizer runoff. Municipal and industrial waste discharges contribute their
        fair share of toxins as well. There’s also all the random junk that industry and individuals dump directly into
        waterways.
      </div>
      <div class="water_pics col-md-4">
        <div class="water_img"><img src="media/water.jpg" height="400px" width="500px"></img></div>
        <div class="water_img1"><img src="media/water1.jpg" height="400px" width="500px"></img></div>
      </div>
    </div>
  </div>

  <?php include('footer.php') ?>
  
</body>

</html>