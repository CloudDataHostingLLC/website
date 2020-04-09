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
      <h1>Plans</h1>
      <p>Get the highest quality server for the lowest price.</p><br>


    </div>



  </div>
  <div class="section full marginless banner">
    <center><p>Join our Discord for lightning fast support! <button onclick="window.open('https://discord.gg/cf4pUXr')" class="button white banner-btn">JOIN</button></center>
  </div>

  <div class="section full parallax background-section">
    <div class="section marginless row">
      <div class="col-md-4">
        <div class="pricing-container">
          <i class="fas fa-gamepad fa-3x red"></i>
          <h2>Minecraft</h2>
          <h3>From 1GB</h3>
          <div class="bar"></div>
          <table>
            <tr><td>Intel Xeon E5540 @ 2.53 GHz</td></tr>
            <tr><td>Unmetered HDD Space</td></tr>
            <tr><td>DDoS Protection</td></tr>
            <tr><td>Modpack Installations</td></tr>
            <tr><td>Server Setups</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$1/month</h2><br>
          <button class="button red large">VIEW PLANS</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pricing-container">
          <i class="fas fa-server fa-3x red"></i>
          <h2>Dedicated Servers</h2>
          <h3>From 16GB</h3>
          <div class="bar"></div>
          <table>
            <tr><td>Feature 1</td></tr>
            <tr><td>Feature 2</td></tr>
            <tr><td>Feature 3</td></tr>
            <tr><td>Feature 4</td></tr>
            <tr><td>Feature 5</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$30/month</h2><br>
          <button class="button red large">VIEW PLANS</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pricing-container">
          <i class="fas fa-sitemap fa-3x red"></i>
          <h2>Web Hosting</h2>
          <h3>From 50GB SSD</h3>
          <div class="bar"></div>
          <table>
            <tr><td>Feature 1</td></tr>
            <tr><td>Feature 2</td></tr>
            <tr><td>Feature 3</td></tr>
            <tr><td>Feature 4</td></tr>
            <tr><td>Feature 5</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$2/month</h2><br>
          <button class="button red large">VIEW PLANS</button>
        </div>
      </div>
    </div>

  </div>

  <div class="section">

    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <div class="pricing-container shadowed">
          <i class="fas fa-sitemap fa-3x red"></i>
          <h2>Web Hosting</h2>
          <h3>From 50GB SSD</h3>
          <div class="bar"></div>
          <table>
            <tr><td>Feature 1</td></tr>
            <tr><td>Feature 2</td></tr>
            <tr><td>Feature 3</td></tr>
            <tr><td>Feature 4</td></tr>
            <tr><td>Feature 5</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$2/month</h2><br>
          <button class="button red large">VIEW PLANS</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pricing-container shadowed">
          <i class="fas fa-sitemap fa-3x red"></i>
          <h2>Web Hosting</h2>
          <h3>From 50GB SSD</h3>
          <div class="bar"></div>
          <table>
            <tr><td>Feature 1</td></tr>
            <tr><td>Feature 2</td></tr>
            <tr><td>Feature 3</td></tr>
            <tr><td>Feature 4</td></tr>
            <tr><td>Feature 5</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$2/month</h2><br>
          <button class="button red large">VIEW PLANS</button>
        </div>
      </div>

    </div>


  </div>




  </div>
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/testimonials.php" ?>

  <?php include $_SERVER["DOCUMENT_ROOT"] . "/footer.php" ?>







  <!--Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="/assets/js/particle-network.js"></script>
  <script src="/assets/js/modernizr.js"></script>
  <script src="/assets d md m mm m m m m md  ds  lib/parallax/parallax.js"></script>
  <script src="/assets/js/index.js"></script>
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
  </script>

</body>




</html>
