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
      <h1>About Us</h1>
      <p>We are dedicated to providing the best customer experience.</p><br>


    </div>



  </div>
  <div class="section full marginless banner">
    <center><p>Join our Discord for lightning fast support! <a href='https://discord.gg/cf4pUXr' class="button white banner-btn">JOIN</a></center>
  </div>

  <div class="section">

    </center>
    <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <center><h1>Our Story</h1></center>
      <p style="text-indent: 50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a eros quis tortor accumsan viverra at vel lectus. In cursus consequat dictum. Quisque varius finibus est, egestas convallis magna posuere ornare. Sed lobortis nisi a lectus euismod vulputate. Integer eleifend augue vel erat tincidunt, a viverra urna pulvinar. Proin dapibus velit non lacus dignissim pretium. Aliquam finibus, arcu quis luctus ullamcorper, diam diam tempus velit, vitae accumsan nulla augue sed metus. Ut tristique, tellus vel finibus rutrum, lorem eros fermentum velit, ac dignissim ex felis sed metus. Vestibulum ac tempor justo, vitae consectetur nisl. Nam laoreet lorem eu scelerisque hendrerit. Donec sagittis maximus libero in pellentesque. Nullam massa tortor, aliquam pretium magna in, vestibulum auctor mi. Nulla facilisi. Praesent dictum elit ut finibus mattis. Donec sit amet interdum enim, non dignissim risus.</p>

    </div>
    <div class="col-md-3">
    </div>
  </div>

  </div>

  <div class="section full parallax background-section">
    <div class="section marginless row">
      <div class="col-md-4">
        <div class="team">
          <img src="/assets/img/user.png">
          <h1>Collin</h1>
          <p><b>CEO</b></p>
          <p class="description">My name is Collin, I am the CEO and Owner of Cloud Data Hosting. I started this company to offer jobs and experiance to everyone. I also wanted to create a great hosting provider that had low prices but yet amazing service.</p>

          <h3 class="social-links">
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
          </h3>

        </div>
      </div>
      <div class="col-md-4">
        <div class="team">
          <img src="/assets/img/drew.jpg">
          <h1>Drew</h1>
          <p><b>CTO</b></p>
          <p class="description">Hello! I'm Drew, Chief Technical Officer of Cloud Data Hosting. I make sure the technology we use is always up to speed and our services are always online. Although I'm young, I have a lot of experience working in a professional setting.</p>

          <h3 class="social-links">
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
          </h3>

        </div>
      </div>
      <div class="col-md-4">
        <div class="team">
          <img src="/assets/img/user.png">
          <h1>Collin</h1>
          <p><b>CTO</b></p>
          <p class="description">My name is Collin, I am Chief Technology Officer. My goal is to make sure all of our services are online 24/7 and during any downtime of the servers we get them back up and working as quickly as possible limiting downtime of services</p>

          <h3 class="social-links">
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
          </h3>

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
