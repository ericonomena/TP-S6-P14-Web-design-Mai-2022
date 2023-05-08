<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Tale SEO Agency - FAQ Page</title>

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
  <div class="pre-header" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+000 1234 5678</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>infocompany@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>St. London 54th Bull</a></li>
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
                    <li class="scroll-to-section"><a href="<?php echo site_url(); ?>Contenu_controller/indexIA">Log out</a></li>
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

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <!--  -->

        <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Insertion Contenu</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form method="post" action="<?php echo site_url();?>Contenu_controller/insertContenu" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="username"><strong>titre</strong></label><input class="form-control" type="text" id="username"  name="titre"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                              <div class="mb-3"><label class="form-label" for="last_name"><strong>image</strong></label>
                                              <input class="form-control" type="file" id="file" name="file">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                            <label class="form-label" for="first_name"><strong>explication</strong></label>
                                            <textarea class="form-control"  id="email"  name="explication" rows="4" cols="40"></textarea>
                                          </div>
                                        </div>
                                        <div class="col">
                                        <label class="form-label" for="email"><strong>introduction</strong></label>
                                              <textarea class="form-control"  id="email"  name="introduction" rows="4" cols="40"></textarea>
                                            </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="username"><strong>Type</strong></label>
                                                <select class="form-control" name="idtype">
                                                <?php foreach ($listetype as $key) { ?>
                                                  <option value="<?php echo $key['id'] ?>" ><?php echo $key['type'] ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="email"><strong>Conclusion</strong></label>
                                            <textarea class="form-control"  name="conclusion">...</textarea>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                            <label class="form-label" for="last_name"><strong>Article</strong></label>
                                            <textarea class="form-control ckeditor"  name="article">It was a dark and stormy night...</textarea>
                                            <!-- <textarea class="form-control"  name="article">It was a dark and stormy night...</textarea> -->
                                       
                                    </div>
                                    
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
<!--  -->
    </div>

  </div>

  <div class="happy-steps">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Our 4 Steps To Success &amp; Happy Clients</h2>
        </div>
        <div class="col-lg-12">
          <div class="steps">
            <div class="row">
              <div class="col-lg-3">
                <div class="item">
                  <img src="<?php echo site_url(); ?>assets/images/services-01.jpg" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>Project Introduction</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item">
                  <img src="<?php echo site_url(); ?>assets/images/services-02.jpg" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>Work Development</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item">
                  <img src="<?php echo site_url(); ?>assets/images/services-03.jpg" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>Data Analysis</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item last-item">
                  <img src="<?php echo site_url(); ?>assets/images/services-04.jpg" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>Project Finishing</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="most-asked section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Most <em>Frequently</em> Asked <span>Questions</span> ?</h2>
            <div class="line-dec"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                  <span>Sartorial Butcher Humblebrag</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>Tale is the best SEO agency website template using Bootstrap v5.2.2 CSS for your company. It is a free download provided by TemplateMo. There are 3 HTML pages, <a href="index.html">Home</a>, <a href="about.html">About</a>, and <a href="faqs.html">FAQ</a>.</p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Jean Shorts Microdosing</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>You are free to use this template for any purpose. You are not allowed to redistribute the downloadable ZIP file of Tale SEO Template on any other template website. Please contact us. Thank you.
                    <br><br>
                    Semiotics blog cray letterpress lo-fi vexillologist before they sold out swag YOLO schlitz. Coloring book roof party gentrify brunch.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Waistcoat Aesthetic Polaroid</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>Semiotics blog cray letterpress lo-fi vexillologist before they sold out swag YOLO schlitz. Coloring book roof party gentrify brunch.<br><br>
                    Fingerstache cronut taxidermy, echo park quinoa tumblr activated charcoal before they sold out.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Dolores Accordion HTML5</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                  <p>Pickled succulents bitters  belly direct trade, shaman iceland raw denim kombucha cray offal. Food truck swag hell of tumblr poutine tilde live-edge shorts microdosing fixie succulents, viral everyday carry tattooed.</p>
                </div>
            </div>
          </article>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="get-free-quote">
          <form id="free-quote" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h2>Get a <em>Free Quote</em> Now</h2>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="website" name="website" id="website" placeholder="Website URL" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="phone-number" name="phone-number" id="phone-number" placeholder="Phone Number" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="full-name" name="full-name" id="full-name" placeholder="Full Name" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Get Your Free Quote</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="cta section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h4>Are You Ready To Work &amp; Develop With Us ?<br>Don't Hesitate &amp; Contact Us !</h4>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="#">Contact Us Now!</a>
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
  <script src="<?php echo site_url();?>assets/ckeditor/ckeditor.js"></script>
  <script src="<?php echo site_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo site_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="<?php echo site_url(); ?>assets/js/isotope.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/owl-carousel.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/tabs.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/popup.js"></script>
  <script src="<?php echo site_url(); ?>assets/js/custom.js"></script>
  

  </body>
</html>