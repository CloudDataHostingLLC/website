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
      <h1>Web Hosting</h1>
      <p>Get the highest quality servers for the lowest price.</p><br>


    </div>



  </div>
  <div class="section full marginless banner">
    <center><p>Join our Discord for lightning fast support! <a href='https://discord.gg/cf4pUXr' class="button white banner-btn">JOIN</a></center>
  </div>

  <div class="section">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="pricing-container">
          <i class="fas fa-sitemap fa-3x red"></i>
          <h2>Managed Hosting</h2>
          <h3>From 5GB HDD</h3>
          <div class="bar"></div>
          <table>
            <tr><td>We offer high speed, low cost managed webservers that you can deploy your next application on with ease.</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$2.99/month*</h2><br>
          <a href="/web/managed" class="button red large">VIEW PLANS</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="pricing-container">
          <i class="fas fa-server fa-3x red"></i>
          <h2>VPS</h2>
          <h3>From 10GB HDD</h3>
          <div class="bar"></div>
          <table>
            <tr><td>Perform all needed tasks with no trouble with our VPSs. One-click install CentOS or any supported Linux distros.</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$19.99/month</h2><br>
          <a href="/web/vps" class="button red large">VIEW PLANS</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="pricing-container">
          <i class="fab fa-wordpress fa-3x red"></i>
          <h2>WordPress</h2>
          <h3>From 5GB HDD</h3>
          <div class="bar"></div>
          <table>
            <tr><td>Build up your brand using WordPress, the most advanced and most widely used tool to create amazing websites.</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$9.99/month</h2><br>
          <a href="/web/wordpress" class="button red large">VIEW PLANS</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="pricing-container">
          <i class="fas fa-hdd fa-3x red"></i>
          <h2>Cloud Storage</h2>
          <h3>From 50GB HDD</h3>
          <div class="bar"></div>
          <table>
            <tr><td>Easily store all of your data securely and access it with our Cloud Storage servers along with our panel.</td></tr>
          </table>
          <div class="bar"></div>
          <h3>Starting at</h3>
          <h2>$12.99/month</h2><br>
          <a href="/web/storage" class="button red large">VIEW PLANS</a>
        </div>
      </div>
    </div>

  </div>

  <div class="section full background-section">
    <div class="section row">
      <div class="col-md-4 col-md-offset-2">
        <center><h1>On the Cloud</h1></center>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;CDH is a perfect place to run a website off of for your next business or project. With our industry-standard servers and our great support staff, you can be sure that your website will always be up and running no matter the condition.</p>
        <center>  <a href="/web/managed" class="button large white">LEARN MORE</a></center>
      </div>

      <div class="col-md-4 hide-md">
        <img class="float" src="/assets/img/cdh-icon-white.png" width=100%>
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
