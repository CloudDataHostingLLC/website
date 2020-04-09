<!-- Exertus Website Designed and Built by Drew Gifford -->
<!-- Copyright (C) Exertus Hosting, 2017 -->
<html>

<head>
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/styles.php" ?>
</head>

<body>

  <?php include "../navbar.php" ?>

  <div class="billboard billboard-half">
    <div id="particle-canvas"></div>

    <div class="billboard-content">
      <h1>Domains</h1>
      <p>Search for your new domain with us!</p><br>
      <form>
      <input class="main-input" type="text" name="domain" placeholder="Pick your new domain">
      <input type="submit" class="main-input submit" value="Go"></form>


    </div>



  </div>
  <div class="section full marginless banner">
    <center><p>Join our Discord for lightning fast support! <button onclick="window.open('https://discord.gg/cf4pUXr')" class="button white banner-btn">JOIN</button></center>
  </div>

  <div class="section">
    <center><h1>High Quality Management</h1>

    </center>
    <div class="row">
    <div class="col-md-3 feature">
      <i class="fas fa-columns"></i>
      <h2>Easy to Use Panel</h2>
      <p>Easily add new DNS records with ease with our Domain Panel.</p>

    </div>
    <div class="col-md-3 feature">
      <i class="fas fa-columns"></i>
      <h2>Enhanced Panel</h2>
      <p>We custom design our panels to bring the most modern and pleasing look to your everyday management.</p>

    </div>
    <div class="col-md-3 feature">
      <i class="fas fa-tachometer-alt"></i>
      <h2>99.9% Uptime</h2>
      <p>With Exertus, you can be sure your servers are online all the time, as we ensure a 99.9% uptime on all servers.</p>

    </div>
    <div class="col-md-3 feature">
      <i class="fas fa-users"></i>
      <h2>Great Support</h2>
      <p>Our support team is quick to respond and easy to talk to. There is no need for hesitation before contacting them!</p>

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
  </script>

</body>




</html>
