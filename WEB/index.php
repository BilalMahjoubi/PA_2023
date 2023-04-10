<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>PA | Accueil</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <?php include_once('fonctions.php'); ?>
  </head>
<body>

<!--  &lt;!&ndash; ***** Preloader Start ***** &ndash;&gt;-->
<!--  <div id="js-preloader" class="js-preloader">-->
<!--    <div class="preloader-inner">-->
<!--      <span class="dot"></span>-->
<!--      <div class="dots">-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  &lt;!&ndash; ***** Preloader End ***** &ndash;&gt;-->
<?php
    $tab_user = null;
    if(isset($_SESSION['USER_ON']) && $_SESSION['USER_ON']){
        $tab_user = get_info_client();
    }
?>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Accueil</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">A propos</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Dernière sortie</a></li>
              <li class="scroll-to-section"><div class="main-red-button-hover"><?php if($tab_user == null): ?><a href="connexion.php">Se connecter</a><?php else: ?><a href="dashboard.php"><?php echo $tab_user["PSEUDO"]; ?></a><?php endif; ?></div></li>
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
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  <h6>Bienvenue sur Projet Annuel</h6>
                  <h2>Retrouve tes <em>scans préférés</em> traduits en <span>instantané</span></h2>
                  <p>Ce site te permet de consulter tes mangas préférer traduit par une IA à la minute ou le scan original est sortie.</p>
                    <?php if($tab_user == null): ?>
                      <div class="down-buttons">
                        <div class="main-blue-button-hover">
                          <a href="connexion.php">Se connecter</a>
                        </div>
                      </div>
                    <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="services-right-dec">
      <img src="assets/images/services-right-dec2.png" alt="">
    </div>
    <div class="container">
      <div class="services-left-dec">
        <img src="assets/images/services-left-dec.png" alt="">
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Nous <em>fournissons</em> le meilleur service de <span>Traduction</span> de scans</h2>
            <span>Nos Services</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-services">
            <div class="item">
              <h4>Conception et développement UI/UX</h4>
              <div class="icon"><img src="assets/images/service-icon-03.png" alt=""></div>
              <p>l'interface est conviviale et facile à utiliser, avec des fonctions de recherche et
                de navigation claires.</p>
            </div>
            <div class="item">
              <h4>Traduction de qualité professionnelle</h4>
              <div class="icon"><img src="assets/images/service-icon-04.png" alt=""></div>
              <p> Nous proposons des traductions de haute qualité pour les mangas, afin que vous
                puissiez profiter de l'histoire sans être distraits par des erreurs de traduction.</p>
            </div>
            <div class="item">
              <h4>Large sélection de mangas</h4>
              <div class="icon"><img src="assets/images/service-icon-01.png" alt=""></div>
              <p>Notre site offre une large sélection de mangas pour les fans, y compris les titres populaires et les nouveaux titres.</p>
            </div>
            <div class="item">
              <h4>Notifications de nouveaux chapitres</h4>
              <div class="icon"><img src="assets/images/service-icon-02.png" alt=""></div>
              <p>Abonner-vous à vos titres préférés pour recevoir des notifications lors de la sortie de nouveaux chapitres</p>
            </div>
            <div class="item">
              <h4>Accès hors ligne</h4>
              <div class="icon"><img src="assets/images/service-icon-03.png" alt=""></div>
              <p>Fonctionnalité pratique pour ceux qui souhaitent lire lorsqu'ils n'ont pas accès à Internet.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="assets/images/about-left-image.png" alt="Two Girls working together">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Grow your website with our <em>SEO Tools</em> &amp; <span>Project</span> Management</h2>
            <p>You can browse free HTML templates on Too CSS website. Visit the website and explore latest website templates for your projects.</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-01.png" alt="">
                    </div>
                    <div class="count-digit">320</div>
                    <div class="count-title">SEO Projects</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-02.png" alt="">
                    </div>
                    <div class="count-digit">640</div>
                    <div class="count-title">Websites</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-03.png" alt="">
                    </div>
                    <div class="count-digit">120</div>
                    <div class="count-title">Satisfied Clients</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Dernière <em>sortie</em></h2>
            <span>Vos Mangas</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">
              <?php foreach(get_derniere_sortie() as $oeuvre): ?>
                  <div class="item">
                      <a href="liste_scan.php?m=<?php echo $oeuvre["ID"]?>">
                          <div class="thumb">
                              <img src="<?php echo $oeuvre["IMAGE_COUVERTURE"] ?>" alt="">
                              <div class="hover-effect">
                                  <div class="inner-content">
                                      <a rel="sponsored" href="#" target="_parent"><h4><?php echo $oeuvre["TITRE"] ?></h4></a>
                                      <span><?php echo $oeuvre["AUTEUR"] ?></span>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="tables-left-dec">
      <img src="assets/images/tables-left-dec.png" alt="">
    </div>
    <div class="tables-right-dec">
      <img src="assets/images/tables-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Select a suitable <em>plan</em> for your next <span>projects</span></h2>
            <span>Our Plans</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="item first-item">
            <h4>Starter Plan</h4>
            <em>$160/mo</em>
            <span>$140</span>
            <ul>
              <li>10 Projects</li>
              <li>100 GB space</li>
              <li>20 SEO checkups</li>
              <li>Basic Support</li>
            </ul>
            <div class="main-blue-button-hover">
              <a href="#">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <h4>Standard Plan</h4>
            <em>$240/mo</em>
            <span>$200</span>
            <ul>
              <li>20 Projects</li>
              <li>200 GB space</li>
              <li>50 SEO checkups</li>
              <li>Pro Support</li>
            </ul>
            <div class="main-blue-button-hover">
              <a href="#">Get it Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item third-item">
            <h4>Advanced Plan</h4>
            <em>$360/mo</em>
            <span>$280</span>
            <ul>
              <li>30 Projects</li>
              <li>300 GB space</li>
              <li>100 SEO checkups</li>
              <li>Best Support</li>
            </ul>
            <div class="main-blue-button-hover">
              <a href="#">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="subscribe" class="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <h2>Know Your Website SEO Score by Email</h2>
                <form id="subscribe" action="" method="get">
                    <label for="website"></label><input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                    <label for="email"></label><input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    <button type="submit" id="form-submit" class="main-button ">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--  <div id="video" class="our-videos section">-->
<!--    <div class="videos-left-dec">-->
<!--      <img src="assets/images/videos-left-dec.png" alt="">-->
<!--    </div>-->
<!--    <div class="videos-right-dec">-->
<!--      <img src="assets/images/videos-right-dec.png" alt="">-->
<!--    </div>-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--          <div class="naccs">-->
<!--            <div class="grid">-->
<!--              <div class="row">-->
<!--                <div class="col-lg-8">-->
<!--                  <ul class="nacc">-->
<!--                    <li class="active">-->
<!--                      <div>-->
<!--                        <div class="thumb">-->
<!--                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/JynGuQx4a1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                          <div class="overlay-effect">-->
<!--                            <a href="#"><h4>Project One</h4></a>-->
<!--                            <span>SEO &amp; Marketing</span>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                      <div>-->
<!--                        <div class="thumb">-->
<!--                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/RdJBSFpcO4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                          <div class="overlay-effect">-->
<!--                            <a href="#"><h4>Second Project</h4></a>-->
<!--                            <span>Advertising &amp; Marketing</span>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                      <div>-->
<!--                        <div class="thumb">-->
<!--                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZlfAjbQiL78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                          <div class="overlay-effect">-->
<!--                            <a href="#"><h4>Project Three</h4></a>-->
<!--                            <span>Digital &amp; Marketing</span>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                      <div>-->
<!--                        <div class="thumb">-->
<!--                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/mx1WseE7-0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                          <div class="overlay-effect">-->
<!--                            <a href="#"><h4>Fourth Project</h4></a>-->
<!--                            <span>SEO &amp; Advertising</span>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </li>-->
<!--                  </ul>-->
<!--                </div>-->
<!--                <div class="col-lg-4">-->
<!--                  <div class="menu">-->
<!--                    <div class="active">-->
<!--                      <div class="thumb">-->
<!--                        <img src="assets/images/video-thumb-01.png" alt="">-->
<!--                        <div class="inner-content">-->
<!--                          <h4>Project One</h4>-->
<!--                          <span>SEO &amp; Marketing</span>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="thumb">-->
<!--                        <img src="assets/images/video-thumb-02.png" alt="">-->
<!--                        <div class="inner-content">-->
<!--                          <h4>Second Project</h4>-->
<!--                          <span>Advertising &amp; Marketing</span>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="thumb">-->
<!--                        <img src="assets/images/video-thumb-03.png" alt="Marketing">-->
<!--                        <div class="inner-content">-->
<!--                          <h4>Project Three</h4>-->
<!--                          <span>Digital &amp; Marketing</span>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="thumb">-->
<!--                        <img src="assets/images/video-thumb-04.png" alt="SEO Work">-->
<!--                        <div class="inner-content">-->
<!--                          <h4>Fourth Project</h4>-->
<!--                          <span>SEO &amp; Advertising</span>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>             -->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->

<!--  <div id="contact" class="contact-us section">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-lg-7">-->
<!--          <div class="section-heading">-->
<!--            <h2>Feel free to <em>Contact</em> us via the <span>HTML form</span></h2>-->
<!--            <div id="map">-->
<!--              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>-->
<!--            </div>-->
<!--            <div class="info">-->
<!--              <span><i class="fa fa-phone"></i> <a href="#">010-020-0340<br>090-080-0760</a></span>-->
<!--              <span><i class="fa fa-envelope"></i> <a href="#">info@company.com<br>mail@company.com</a></span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-lg-5 align-self-center">-->
<!--          <form id="contact_0" action="" method="get" class="connexion">-->
<!--            <div class="row">-->
<!--              <div class="col-lg-12">-->
<!--                <fieldset>-->
<!--                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>-->
<!--                </fieldset>-->
<!--              </div>-->
<!--              <div class="col-lg-12">-->
<!--                <fieldset>-->
<!--                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>-->
<!--                </fieldset>-->
<!--              </div>-->
<!--              <div class="col-lg-12">-->
<!--                <fieldset>-->
<!--                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">-->
<!--                </fieldset>-->
<!--              </div>-->
<!--              <div class="col-lg-12">-->
<!--                <fieldset>-->
<!--                  <input type="text" name="website" id="website" placeholder="Your Website URL" required="">-->
<!--                </fieldset>-->
<!--              </div>-->
<!--              <div class="col-lg-12">-->
<!--                <fieldset>-->
<!--                  <button type="submit" id="form-submit" class="main-button">Submit Request</button>-->
<!--                </fieldset>-->
<!--              </div>-->
<!--            </div>-->
<!--          </form>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="contact-dec">-->
<!--      <img src="assets/images/contact-dec.png" alt="">-->
<!--    </div>-->
<!--    <div class="contact-left-dec">-->
<!--      <img src="assets/images/contact-left-dec.png" alt="">-->
<!--    </div>-->
<!--  </div>-->

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="about footer-item">
            <div class="logo">
              <a href="#"><img src="assets/images/logo.png" alt="Onix Digital TemplateMo"></a>
            </div>
            <a href="#">info@company.com</a>
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="services footer-item">
            <h4>Services</h4>
            <ul>
              <li><a href="#">SEO Development</a></li>
              <li><a href="#">Business Growth</a></li>
              <li><a href="#">Social Media Managment</a></li>
              <li><a href="#">Website Optimization</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="community footer-item">
            <h4>Community</h4>
            <ul>
              <li><a href="#">Digital Marketing</a></li>
              <li><a href="#">Business Ideas</a></li>
              <li><a href="#">Website Checkup</a></li>
              <li><a href="#">Page Speed Test</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="subscribe-newsletters footer-item">
            <h4>Subscribe Newsletters</h4>
            <p>Get our latest news and ideas to your inbox</p>
            <form action="#" method="get">
              <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane-o"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
            <div class="copyright">
                <p>Designed by <a rel="nofollow" href="">Moi <3</a></p>
            </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(document).on("click", ".naccs .menu div", function() {
        const numberIndex = $(this).index();

        if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

            const listItemHeight = $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>