<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>PA | Connexion</title>

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
                        <li class="scroll-to-section"><div class="main-red-button-hover"><a href="connexion.php">Se connecter</a></div></li>
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
<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <form id="connexion" action="" method="post" class="connexion">
                    <div class="row">
                        <fieldset>
                            <input type="email" name="email_sign_in" id="email_sign_in" placeholder="Your Email" required>
                        </fieldset>
                        <fieldset>
                            <input type="password" name="password_sign_in" id="password_sign_in" placeholder="Your Password" required>
                        </fieldset>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" name="submit_sign_in" id="submit_sign_in" class="main-button">Se connecter</button>
                            </fieldset>
                        </div>
                        <?php
                        if(isset($_POST['submit_sign_in'])){
                            if(connexion_client()){
                                $_SESSION['USER_ON'] = true;
                                echo '<script>document.location.replace("dashboard.php");</script>';
                            }
                            else{
                                echo "<p class='forget_pass'>Mot de passe ou email incorrecte</p>";
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 align-self-center">
                <form id="inscription" action="" method="post" class="connexion">
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="pseudo_sign_up" id="pseudo_sign_up" placeholder="Your Pseudo" required>
                            </fieldset>
                            <fieldset>
                                <input type="email" name="email_sign_up" id="email_sign_up" placeholder="Your Email" required>
                            </fieldset>
                            <fieldset>
                                <input type="password" name="password_sign_up" id="password_sign_up" placeholder="Your Password" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" name="submit_sign_up" id="submit_sign_up" class="main-button">S'inscrire</button>
                            </fieldset>
                        </div>
                        <?php
                        if(isset($_POST['submit_sign_up'])){
                            if(inscription_client()){
                                $_SESSION['USER_ON'] = true;
                                echo '<script>document.location.replace("dashboard.php");</script>';
                            }
                            else{
                                echo "<p class='forget_pass'>Une erreur est survenue !</p>";
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="contact-dec">
        <img src="assets/images/contact-dec.png" alt="">
    </div>
    <div class="contact-left-dec">
        <img src="assets/images/contact-left-dec.png" alt="">
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
    // Acc
    $(document).on("click", ".naccs .menu div", function() {
        var numberIndex = $(this).index();

        if (!$(this).is("active")) {
            $(".naccs .menu div").removeClass("active");
            $(".naccs ul li").removeClass("active");

            $(this).addClass("active");
            $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

            var listItemHeight = $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            $(".naccs ul").height(listItemHeight + "px");
        }
    });
</script>
</body>
</html>