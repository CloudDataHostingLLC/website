<!-- Exertus Website Designed and Built by Drew Gifford -->
<!-- Copyright (C) Exertus Hosting, 2017 -->
<html>

<head>
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/styles.php" ?>
</head>

<body>

  <?php include $_SERVER["DOCUMENT_ROOT"] . "/navbar.php" ?>

  <div class="billboard billboard-half">
    <div id="particle-canvas"></div>

    <div class="billboard-content">
      <h1>Managed Hosting</h1>
      <p>Host your next big thing with our web services!</p><br>


    </div>



  </div>
  <div class="section full marginless banner">
    <center><p>Join our Discord for lightning fast support! <a href='https://discord.gg/cf4pUXr' class="button white banner-btn">JOIN</a></center>
  </div>

  <div class="section">
    <div class="row">
      <center><h1>Select a Plan</h1>

      <h2><b class="slider-label">Pico</b></h2>
      </center>
      <div class="col-md-6 col-md-offset-3">
        <div id="slider">
          <div id="custom-handle" class="ui-slider-handle"></div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="slider-resultcontent pico col-md-6 col-md-offset-3" style="display: block">
        <div class="pricing-container">
          <table class="large-text">
            <tr><td>5GB HDD Space</td></tr>
            <tr><td>50GB Monthly Bandwidth</td></tr>
            <tr><td>5 Addon Domains</td></tr>
            <tr><td>1 Website</td></tr>
            <tr><td>10 MySQL Databases</td></tr>
          </table>
          <div class="bar"></div>
          <h1>$2.99/month</h1><br>
          <a href="/web/wordpress" class="button red large">PURCHASE</a>
        </div>
      </div>
      <div class="slider-resultcontent nano col-md-6 col-md-offset-3" style="display: block">
        <div class="pricing-container">
          <table class="large-text">
            <tr><td>10GB HDD Space</td></tr>
            <tr><td>60GB Monthly Bandwidth</td></tr>
            <tr><td>10 Addon Domains</td></tr>
            <tr><td>2 Websites</td></tr>
            <tr><td>15 MySQL Databases</td></tr>
          </table>
          <div class="bar"></div>
          <h1>$4.99/month</h1><br>
          <a href="/web/wordpress" class="button red large">PURCHASE</a>
        </div>
      </div>
      <div class="slider-resultcontent mega col-md-6 col-md-offset-3" style="display: block">
        <div class="pricing-container">
          <table class="large-text">
            <tr><td>30GB HDD Space</td></tr>
            <tr><td>Unmetered Monthly Bandwidth</td></tr>
            <tr><td>10 Addon Domains</td></tr>
            <tr><td>3 Websites</td></tr>
            <tr><td>15 MySQL Databases</td></tr>
          </table>
          <div class="bar"></div>
          <h1>$9.99/month</h1><br>
          <a href="/web/wordpress" class="button red large">PURCHASE</a>
        </div>
      </div>
      <div class="slider-resultcontent giga col-md-6 col-md-offset-3" style="display: block">
        <div class="pricing-container">
          <table class="large-text">
            <tr><td>50GB HDD Space</td></tr>
            <tr><td>Unmetered Monthly Bandwidth</td></tr>
            <tr><td>Unlimited Addon Domains</td></tr>
            <tr><td>5 Websites</td></tr>
            <tr><td>30 MySQL Databases</td></tr>
          </table>
          <div class="bar"></div>
          <h1>$15.99/month</h1><br>
          <a href="/web/wordpress" class="button red large">PURCHASE</a>
        </div>
      </div>
      <div class="slider-resultcontent omega col-md-6 col-md-offset-3" style="display: block">
        <div class="pricing-container">
          <table class="large-text">
            <tr><td>Unmetered HDD Space</td></tr>
            <tr><td>Unlimited Monthly Bandwidth</td></tr>
            <tr><td>5 Addon Domains</td></tr>
            <tr><td>15 Websites</td></tr>
            <tr><td>10 MySQL Databases</td></tr>
          </table>
          <div class="bar"></div>
          <h1>$27.99/month</h1><br>
          <a href="/web/wordpress" class="button red large">PURCHASE</a>
        </div>
      </div>
    </div>

  </div>



  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/testimonials.php" ?>

  <?php include $_SERVER["DOCUMENT_ROOT"] . "/footer.php" ?>







  <!--Scripts -->
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/scripts.php" ?>
  <script>
    /*Use constellation background*/
    var canvasDiv = document.getElementById('particle-canvas');
    var options = {
    particleColor: '#93dbff',
    interactive: false,
    speed: 'slow',
    density: 'medium'
    };
    var particleCanvas = new ParticleNetwork(canvasDiv, options);

      $(".parallax").parallax();


      $( function() {
        var handle = $( "#custom-handle" );
        $( "#slider" ).slider({
          min: 1,
          max: 5,
          value: 1,
          create: function() {
            var x = $(this).slider("value");
            var text="Pico";
            $(".slider-resultcontent").css("display","none");
            $(".pico").css("display","block");
            $(".slider-label").html(text);
          },
          slide: function( event, ui ) {
            var x = ui.value;
            var text = "";
            if(x == 1){
              text="Pico";
            } else if (x == 2){
              text="Nano";
            } else if (x ==3){
              text="Mega";
            } else if (x == 4){
              text="Giga";
            } else if (x == 5){
              text="Omega";
            }
            $(".slider-label").html(text);
            $(".slider-resultcontent").css("display","none");
            $("."+text.toLowerCase()).css("display","block");
          }
        });
      } );
  </script>

</body>




</html>
