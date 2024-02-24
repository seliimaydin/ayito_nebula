<?php require 'Panel/netting/connection.php';
include"function.php";

session_start();
ob_start();

$ayar = $baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek = $ayar->fetch(PDO::FETCH_ASSOC);


if (isset($_SESSION['userogrenci_mail'])) {

  $ogrencisor=$baglanti->prepare("SELECT * FROM ogrencihesap where ogrenci_mail=:mail");
  $ogrencisor->execute(array(
     'mail' => $_SESSION['userogrenci_mail']
 ));
  $ogrencisay=$ogrencisor->rowCount();
  $ogrencicek=$ogrencisor->fetch(PDO::FETCH_ASSOC);

  if (!isset($_SESSION['userogrenci_id'])) {
     $_SESSION['userogrenci_id']=$ogrencicek['ogrenci_id'];
 }

}
if (isset($_SESSION['userihtiyac_mail'])) {

  $ihtiyacsor=$baglanti->prepare("SELECT * FROM ihtiyachesap where ihtiyac_mail=:mail");
  $ihtiyacsor->execute(array(
     'mail' => $_SESSION['userihtiyac_mail']
 ));
  $ihtiyacsay=$ihtiyacsor->rowCount();
  $ihtiyaccek=$ihtiyacsor->fetch(PDO::FETCH_ASSOC);

  if (!isset($_SESSION['userihtiyac_id'])) {
     $_SESSION['userihtiyac_id']=$ihtiyaccek['ihtiyac_id'];
 }

}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
<meta name='keywords' content='<?php echo $ayarcek['keyword']?>'>
<meta name='description' content=''>
<meta name='subject' content=''>
<meta name='copyright' content='Colorlib'>
<meta name='language' content='TR'>
<meta name='topic' content='<?php echo $ayarcek['baslik']?>'>
<meta name='author' content='Selim Aydın, selimaydinresmi@gmail.com'>
<meta name='designer' content='Selim Aydın'>
<meta name='reply-to' content='selimaydinresmi@gmail.com'>
<meta name='owner' content='Nebula Technology'>
<meta name='category' content=''>
<meta name='HandheldFriendly' content='True'>
<meta name='MobileOptimized' content='280'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="Panel/images/urun/<?php echo $ayarcek['fav'] ?>" />
    <title><?php echo $ayarcek['baslik'] ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S9GSZ6BEGZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S9GSZ6BEGZ');
</script>
</head>

<body>
    <!-- Page Preloder -->

    
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index"><img src="img/logo1.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
        <?php 
                                if (isset($_SESSION['userogrenci_mail'])) { ?>
                                        <a href="ogrenci" class="primary-btn">Yemek Seç</a>
                                    
                                    <?php } ?>
                                    
                                    <?php 
                              if (isset($_SESSION['userihtiyac_mail'])) { ?>
                                  <a href="ihtiyacsahibi" class="primary-btn">Yemek Seç</a>
    
                          <?php } ?>
                          <?php if(!((!isset($_SESSION['userogrenci_mail'])) AND (!isset($_SESSION['userihtiyac_mail'])))){ ?>
                            
                            <?php } else {?>
                                   <a href="loginhome" class="primary-btn">Giriş Yap</a>
    
                           <?php }?>
        </div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i><?php echo $ayarcek['telefon'] ?></li>
            <li><i class="fas fa-map-marker"></i><?php echo $ayarcek['adres'] ?></li>
            <li><i class="fa fa-envelope"></i><?php echo $ayarcek['email'] ?></li>
        </ul>
        <div class="offcanvas__social">
            <a href="https://www.geleceginisiklari.com" target="_blank"><i class="fas fa-home"></i></a>
            <a href="<?php echo $ayarcek['linkedin'] ?>"target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="<?php echo $ayarcek['instagram'] ?>"target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="<?php echo $ayarcek['youtube'] ?>"target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="<?php echo $ayarcek['facebook'] ?>"target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="<?php echo $ayarcek['twitter'] ?>"target="_blank"><i class="fab fa-twitter"></i></a>
            
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i><?php echo $ayarcek['telefon'] ?></li>
                            <li><i class="fa fa-map-marker"></i><?php echo $ayarcek['adres'] ?></li>
                            <li><i class="fa fa-envelope"></i><?php echo $ayarcek['email'] ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="index" target="_blank"><i class="fas fa-home"></i></a>
                            <a href="<?php echo $ayarcek['linkedin'] ?>"target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="<?php echo $ayarcek['instagram'] ?>"target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?php echo $ayarcek['youtube'] ?>"target="_blank"><i class="fab fa-youtube"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index"><img style="max-height:40px" src="img/logo1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__menu__option">
                            <nav class="header__menu">
                                <ul>
                                    <style>
                                    .fw-5 {
                                        font-size: 15px;
                                        color: #000;
                                    }
                                </style>
                                
                                <li><a href="./index">Anasayfa</a></li>
                                <li><a href="./about">Hakkımızda</a></li>
                                <li><a href="contact">İletişim</a></li>

                                <?php 
                                if (isset($_SESSION['userogrenci_mail'])) { ?>
                                    <li><a href="hesabim"><i class="fas fa-user"></i></a></li>
                                    <li><a href="logout"><i class="fas fa-sign-out-alt"></i></a></li>
                                    <div class="header__btn">
                                        <a href="ogrenci" class="primary-btn">Yemek Seç</a>
                                    </div>
                                    
                                    <?php } ?>
                                    
                                    <?php 
                              if (isset($_SESSION['userihtiyac_mail'])) { ?>
                                <li><a href="ihtiyachesabim"><i class="fas fa-user"></i></a></li>
                                <li><a href="logout"><i class="fas fa-sign-out-alt"></i></a></li>
                                <div class="header__btn">
                                  <a href="ihtiyacsahibi" class="primary-btn">Yemek Seç</a>
                              </div>

                          <?php } ?>

                          <?php if(!((!isset($_SESSION['userogrenci_mail'])) AND (!isset($_SESSION['userihtiyac_mail'])))){ ?>
                            
                         <?php } else {?>
                            <li><a href="registerhome">Kayıt Ol</a></li>
                            <div class="header__btn">
                                <a href="loginhome" class="primary-btn">Giriş Yap</a>
                            </div>

                        <?php }?>






                    </ul>
                </nav>

            </div>
        </div>
    </div>
    <div class="canvas__open">
        <i class="fa fa-bars"></i>
    </div>
</div>
</div>
</header>