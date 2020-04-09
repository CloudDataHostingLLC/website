<!-- Exertus Website Designed and Built by Drew Gifford -->
<!-- Copyright (C) Exertus Hosting, 2017 -->
<html>

<head>
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/styles.php" ?>
</head>

<body>

  <?php include "navbar.php" ?>

  <div class="billboard">
    <div id="particle-canvas"></div>

    <div class="billboard-content">
      <h1>Affordable Server Hosting</h1>
      <p>CDH offers low cost, high-speed options for your project or business.<br><b>Webservers starting at $2 per month*</b></p>
      <a href="/web" class="button red filled large">LEARN MORE</a><br>

      <img class="feature-image" src="/assets/img/dellservers.png">
    </div>



  </div>
  <div class="section full marginless banner">
    <center><p>Join our Discord for lightning fast support! <button onclick="window.open('https://discord.gg/cf4pUXr')" class="button white banner-btn">JOIN</button></center>
  </div>

  <div class="section">
    <center><h1>What We Offer</h1>

    </center>
    <div class="row">
    <div class="col-md-3 feature">
      <i class="fas fa-bolt"></i>
      <h2>Lightning Fast Speeds</h2>
      <p>Our server's proprietary Intel Xeon E3 and E5 chips make sure your server is going at lightning speed all the time.</p>

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

  <div class="section full parallax background-section">
    <div class="section marginless row">

      <center><h1>Why CDH?</h1>
      <div class="col-md-6 col-md-offset-3"><p>At Cloud Data Hosting, you can be sure that you are getting the highest quality servers for a low price.</p></div></center>
      <div class="col-md-8 col-md-offset-2">
        <div class="row">
          <div class="col-md-6 feature white padded">
            <i class="fas fa-tachometer-alt fa-3x"></i>
            <h2>Some Feature</h2>
            <hr>
            <p>Our support team is quick to respond and easy to talk to. There is no need for hesitation before contacting them!</p>
          </div>
          <div class="col-md-6 feature white padded">
            <i class="fas fa-globe fa-3x"></i>
            <h2>Some Feature</h2>
            <hr>
            <p>Our support team is quick to respond and easy to talk to. There is no need for hesitation before contacting them!</p>
          </div>

      </div>
      <div class="row">
        <div class="col-md-6 feature white padded">
          <i class="fas fa-bolt fa-3x"></i>
          <h2>Some Feature</h2>
          <hr>
          <p>Our support team is quick to respond and easy to talk to. There is no need for hesitation before contacting them!</p>
        </div>
        <div class="col-md-6 feature white padded">
          <i class="fas fa-server fa-3x"></i>
          <h2>Some Feature</h2>
          <hr>
          <p>Our support team is quick to respond and easy to talk to. There is no need for hesitation before contacting them!</p>
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
  </script>

</body>




</html>
