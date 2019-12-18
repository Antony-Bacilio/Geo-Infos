<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Geo-Infos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<?php

        include("models/GeoInfoModel.php");
?>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

    <section class="hero">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
            <a class="hero-brand" href="index.html" title="Home"><img alt="Bell Logo" src="img/logo.png"></a>
          </div>
        </div>

        <div class="col-md-12">
          <h1>Connaissez vous bien les différents pays du globe ?</h1>
          <p class="tagline">
            Des infos, des images, un lieu à trouver en un minimum de temps et en utilisant le moins d'indice possibles
          </p>
          <a class="btn btn-full" href="#about">Commençons !</a>
        </div>
      </div>
    </section>

  <!-- /Hero -->

  
  <!-- Header -->

    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left">
          <a href="index.html"><img src="img/logo-nav.png" alt="" title="" /></img></a>
          <!-- Uncomment below if you prefer to use a text image -->
          <!--<h1><a href="#hero">Geo-Infos</a></h1>-->
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="#about">Nous</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Equipe</a></li>
            <li class="menu-has-children"><a href="">Drop Down</a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="menu-has-children"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->

        <nav class="nav social-nav pull-right d-none d-lg-inline">
          <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
        </nav>
      </div>
    </header>

  <!-- #header -->


  <!-- About -->

    <section class="about" id="about">
      <div class="container text-center">
        <h2>
            Comment jouer ?
          </h2>

        <p>
          Vous n'avez qu'à appuyer sur l'image jouer en dessous et c'est parti !
        </p>

        <div class="row stats-row">

            <div class="stats-col text-center col-md-4 col-sm-6">
              <div class="circle">
                <span class="stats-no" data-toggle="counter-up">10</span> Points à faire
              </div>
            </div>

            <div class="stats-col text-center col-md-4 col-sm-6">
              <div class="circle">
                <span class="stats-no" data-toggle="counter-up">5</span> Maximum d'erreurs
              </div>
            </div>

            <div class="stats-col text-center col-md-4 col-sm-6">
              <div class="circle">
                <span class="stats-no" data-toggle="counter-up">4</span>Niveux
              </div>
            </div>


        </div>
      </div>
    </section>

  <!-- /About -->


  <!-- Parallax -->

    <div class="block bg-primary block-pd-lg block-bg-overlay text-center" data-bg-img="img/parallax-bg.jpg" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg">
      <h2>
          A V A N T &nbsp;&nbsp; D E    &nbsp;&nbsp;   C O M M E N C E R &nbsp;. . .
      </h2>
      <br>
      <br>
      <br>

      <!-- FORMULAIRE INSCRIPTION-->
      <?php

        //include("models/GeoInfoModel.php");
        include("views/GeoInfoView.php");
      ?>
      
      <!--<img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="img/gadgets.png">-->
    </div>

  <!-- /Parallax -->


  <!-- Features -->

   <!-- <section class="features" id="features">
      <div class="container">
        <h2 class="text-center">
            Features
          </h2>

        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-rocket"></span>
                </div>
              </div>

              <div>
                <h3>
                    Custom Design
                  </h3>

                <p>
                  Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-envelope"></span>
                </div>
              </div>

              <div>
                <h3>
                    Responsive Layout
                  </h3>

                <p>
                  Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-bell"></span>
                </div>
              </div>

              <div>
                <h3>
                    Innovative Ideas
                  </h3>

                <p>
                  Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-database"></span>
                </div>
              </div>

              <div>
                <h3>
                    Good Documentation
                  </h3>

                <p>
                  Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-cutlery"></span>
                </div>
              </div>

              <div>
                <h3>
                    Excellent Features
                  </h3>

                <p>
                  Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-dashboard"></span>
                </div>
              </div>

              <div>
                <h3>
                    Retina Ready
                  </h3>

                <p>
                  Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

  <!-- /Features -->


  <!-- Portfolio -->

    <section class="portfolio" id="portfolio">
      <div class="container text-center">
        <h2>
            Envie de jouer ? :
          </h2>

        <p>
          Règles du jeu : Cliquez sur l'image en dessous pour lancer le jeu. Il vous est donné plusieurs informations telles que la surperficie, la monnaie, ext... L'objectif est de trouver le pays correspondant
        </p>
      </div>

      <div class="portfolio-grid">
        <div class="row">

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block specific">
              <a href="views/game.php"><img alt="" src="img/test2.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      C'est parti !
                    </h3>

                    <p class="card-text">
                      Bonne chance
                    </p>
					
                  </div>
                </div></a>
            </div>
          </div>

         <!-- <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="views/limaView.php"><img alt="" src="img/lima_log.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      Amerique du Sud
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="views/madridView.php"><img alt="" src="img/madrid_log.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      Europe Est
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="views/moscuView.php"><img alt="" src="img/moscu_log.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      Europe Ouest
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="views/newyorkView.php"><img alt="" src="img/new_york_log.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      Amerique du Norte
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="views/parisView.php"><img alt="" src="img/paris_log.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      Europe Est
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div></a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="views/sydneyView.php"><img alt="" src="img/sydney_log.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      Océanie
                    </h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                    </p>
                  </div>
                </div></a>
            </div>
          </div>

        </div>
      </div>-->
    </section> 
	<section class="portfolio" id="portfolio">
	  </section>

  <!-- /Portfolio -->


  <!-- Team -->

    <!--<section class="team" id="team">
      <div class="container">

        <h2 class="text-center">Notre équipe</h2>

        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="img/team-1.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">AAAAAAAAA</span> <span class="card-text">Art Director</span>
                </div>

                <div class="team-over">
                  <h4 class="hidden-md-down">
                    Connect with me
                  </h4>

                  <nav class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
              </nav>

              <p>
                Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
              </p>
            </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="card card-block">
            <a href="#"><img alt="" class="team-img" src="img/team-2.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">AAAAAAAAA</span> <span class="card-text">Art Director</span>
                </div>

                <div class="team-over">
                  <h4 class="hidden-md-down">
                    Connect with me
                  </h4>

                  <nav class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
            </nav>

            <p>
              Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
            </p>
          </div>
          </a>
        </div>
      </div>

      <div class="col-sm-3 col-xs-6">
        <div class="card card-block">
          <a href="#"><img alt="" class="team-img" src="img/team-3.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">AAAAAAAAA</span> <span class="card-text">Art Director</span>
                </div>

                <div class="team-over">
                  <h4 class="hidden-md-down">
                    Connect with me
                  </h4>

                  <nav class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
          </nav>

          <p>
            Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
          </p>
        </div>
        </a>
      </div>
      </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="img/team-4.jpg">
                    <div class="card-title-wrap">
                      <span class="card-title">AAAAAAAAA</span> <span class="card-text">Art Director</span>
                    </div>

                    <div class="team-over">
                      <h4 class="hidden-md-down">
                        Connect with me
                      </h4>

                      <nav class="social-nav">
                        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
              </nav>

              <p>
                Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
              </p>
            </div>
            </a>
            </div>
          </div>
        </div>

      </div>
    </section>-->

  <!-- /Team -->


  <!-- @component: footer -->

  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © GEO-INFOS
            </p>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Accueil</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">Nous</a>
              </li>

              <li class="list-inline-item">
                <a href="#features">Features</a>
              </li>

              <li class="list-inline-item">
                <a href="#portfolio">Portfolio</a>
              </li>

              <li class="list-inline-item">
                <a href="#team">Equipe</a>
              </li>

            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer>

  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>
  

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <!-- MASQUER
    <script src="contactform/contactform.js"></script>-->

</body>
</html>

