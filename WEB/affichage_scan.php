<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>PA | Affichage scan</title>

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

    $scan = get_scan_by_id_fecth($_GET["s"]);
    $page = get_page_by_id($_GET["s"], $_GET["p"]);
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
                        <img src="assets/images/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="index.php#top" class="active">Accueil</a></li>
                        <li class="scroll-to-section"><a href="index.php#services">Services</a></li>
                        <li class="scroll-to-section"><a href="index.php#about">A propos</a></li>
                        <li class="scroll-to-section"><a href="index.php#portfolio">Dernière sortie</a></li>
                        <li class="scroll-to-section"><div class="main-red-button-hover"><a href="dashboard.php"><? echo $tab_user["PSEUDO"]; ?></a></div></li>
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
                <div class="section-heading" style="margin-bottom: 20px;">
                    <h2>Chapitre <em><?php echo $scan["NUMERO"] ?></em></h2>
                    <span><?php echo $_GET["p"]."/".$scan["TOTAL_PAGE"] ?></span>
                </div>
            </div>
        </div>

    </div>
</div>
<div style="padding-top: 0px;margin-bottom: 50px;" id="contact" class="contact-us section">
    <div class="container">
        <div class="row" style="width: 55%;justify-content: space-between;flex-wrap: nowrap;">

            <div style="width: 100%;margin-left: 40%;" class="col-lg-6 align-self-center">
                <div id="touch" class="touch-controls" style="width: 37%;height: 80%;position: fixed;z-index: 9;display: flex;box-sizing: border-box;justify-content: center;">
                    <div onclick="scan_left()" class="cursor-pointer" style="height: 100%;width: 50%;"></div>
                    <div onclick="scan_right()" class="cursor-pointer" style="height: 100%;width: 50%;"></div>
                </div>
                <a <?php if($_GET["p"] < $scan["TOTAL_PAGE"]):?>href="affichage_scan.php?s=<?php echo $_GET["s"].'&p='.$_GET["p"]+1; endif; ?>"><img style="width: 100%;" src="<?php echo $page["LIEN_IMAGE"] ?>" alt=""></a>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="connexion" style="height: 1000px;padding: 40px 20px 20px;background-image: none;overflow:auto">
                    <?php for ($i = 1; $i <= 15; $i++): ?>
                        <span>Bulle N°<?php echo $i ?></span>
                        <input type="text" name="email_sign_in" id="email_sign_in" placeholder="Bulle N°<?php echo $i ?>">
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    function scan_left(){
        const page_actuel = <?php echo ($_GET["p"]); ?>;
        const scan_actuel = <?php echo ($_GET["s"]); ?>;
        if(page_actuel > 1){
            document.location.replace("affichage_scan.php?s="+scan_actuel+"&p="+(page_actuel-1));
        }
    }

    function scan_right(){
        const page_actuel = <?php echo ($_GET["p"]); ?>;
        const TOTAL_PAGE = <?php echo ($scan["TOTAL_PAGE"]); ?>;
        const scan_actuel = <?php echo ($_GET["s"]); ?>;
        if(page_actuel < TOTAL_PAGE){
            document.location.replace("affichage_scan.php?s="+scan_actuel+"&p="+(page_actuel+1));
        }
    }
</script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>