<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>PA | Dashboard</title>

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
<?php
    $tab_user = verification_status_client();
?>

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
                        <li class="scroll-to-section"><a href="index.php#top" class="active">Accueil</a></li>
                        <li class="scroll-to-section"><a href="index.php#services">Services</a></li>
                        <li class="scroll-to-section"><a href="index.php#about">A propos</a></li>
                        <li class="scroll-to-section"><a href="index.php#portfolio">Dernière sortie</a></li>
                        <li class="scroll-to-section"><div class="main-red-button-hover"><a href="deconnexion.php">Se déconnecter</a></div></li>
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
                        <label for="email"></label><input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
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
</body>
</html>