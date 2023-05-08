<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Tale-AI website</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/templatemo-tale-seo-agency.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+261 34 555 23</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>Tale.AIcompany@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>Madagascar 54th Antananarivo</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                    <h1><img src="<?php echo site_url(); ?>assets/images/logo.png" alt="" style="max-width: 112px;"><span style="color:black;">-AI</span></h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    <li class="scroll-to-section"><a href="<?php echo site_url(); ?>Contenu_controller/indexIA" class="active">Home</a></li>
                    <li class="scroll-to-section"><a href="<?php echo site_url(); ?>Welcome/loginAdmin">Administrator</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <!-- <h6>Tale-AI AGENCY</h6> -->
            <div class="line-dec"></div>
            <h4>Dive <em>Into The FUTUR</em> World <span>With Tale-AI</span></h4>
            <p>Artificial Intelligence - The art and science of making computers do interesting things that are not in their nature. 
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>We Provide <em>Different Services</em> &amp;
                  <span>Features</span> For Your Agency</h2>
                  <div class="line-dec"></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
              </div>
            </div>

            <?php for ($i = 0; $i < count($resultat); $i++) { ?>

            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo site_url(); ?>assets/images/services-0<?php echo ($i+1) ?>.jpg" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4><a href="<?php echo site_url(); ?>Contenu_controller/contenus/<?php echo $resultat[$i]['slug'] ?>-<?php echo $resultat[$i]['id'] ?>"><?php echo $resultat[$i]['type'] ?></a> </h4>
              </div>
            </div>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>



  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 <a href="#">Tale SEO Agency</a>. All rights reserved. 
        
        <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo site_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo site_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="<?php echo site_url(); ?>assets/js/isotope.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/owl-carousel.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/tabs.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/popup.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/custom.js"></script>


  </body>

</html>
