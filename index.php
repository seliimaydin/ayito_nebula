    <?php require_once "header.php"; ?>
    <!-- Header Section End -->

    <!-- SLİDER START Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/slider0.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero__text">
                        <span>AYİTO ile</span>
                        <h2>Yemek İsrafını Önle!</h2>
                        <a href="https://play.google.com/store/apps/details?id=com.NebulaTechnology.Ayito" class="primary-btn normal-btn" target="_blank">İndir!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SLİDER FİNİSH Hero Section End -->

<head><link rel="stylesheet" type="text/css" href="css/popup.css"></head>
<main id="main">
    
<!-- Pop-Up Başlangıç -->
<div id="popup"> 
    <div id="dialog" class="window mt-4"><img id="close--popup" class="close agree my-1 mr-2" width="20px" height="20px" src="img/cancel4.png"> 
    <div class="web">Yeni Youtube Videomuz Yayında!</div> 
      <div id="popup_icerik"> 
        <img class="px-2" style="border-radius: 20px" width="100%" height="auto" src="img/Nebula Logo, Beyaz BG, jpeg.jpg" /> 
      </div> 
      <div class="pop__btn"> <button type="button" class="btn btn-success btn-sm"><a href="https://youtu.be/6fRloRrv--8" class="text-white" target="_blank">    HEMEN İZLEYİN!    </a></button></div> 
    </div> 
    <div id="mask"></div> 
  </div>
<!-- Pop-Up Bitiş -->

    <!-- Consultation Section Begin -->
    <section class="consultation">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="consultation__form">
                        <div class="section-title">
                            <span>Size Ulaşalım</span>
                            <h2>Bilgi için</h2>
                        </div>
                        <form action="Panel/netting/processing.php" method="POST">
                            <input name="baslik" required type="text" placeholder="İsim Soyisim">
                            <input name="email" required type="text" placeholder="Email">

                            <select name="konu" id="konu" required>
                                <option value="">Mesaj Tipi Seçiniz(Tıklayın)</option>
                                <option value="AYİTO Bilgi">Bilgi</option>
                                <option value="Sponsorluk">Sponsorluk</option>
                                <option value="Diğer">Diğer</option>
                            </select>
                            <input name="mesaj" required type="text" placeholder="Mesajınız">
                            <button type="submit" name="mesajkaydet2" class="site-btn">Gönder</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="consultation__text">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__text__item">
                                    <?php

                                    if (@$_GET['status'] == "mesajunsuccessful") { ?>

                                        <div class="alert alert-danger text-center">
                                            <strong>Hata!</strong> Mesajınız bize ulaşırken hataya saptandı
                                        </div>

                                    <?php } elseif (@$_GET['status'] == "mesajsuccessful") { ?>

                                        <div class="alert alert-success text-center">
                                            <strong>Başarılı!</strong> Mesajınız bize ulaştı.
                                        </div>
                                    <?php  } ?>

                                    <div class="section-title">
                                        <span>Yemek İsrafını Sıfıra İndiren Proje</span>
                                        <h2><b>AYİTO</b> Nedir?</h2>
                                    </div>
                                    <p><strong>AYİTO</strong><?php echo $ayarcek['aciklama']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__video set-bg" data-setbg="img/nebulajpeg.jpg">
                                    <a href="https://www.youtube.com/watch?v=_8eHk3O92cE" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation Section End -->


    <!-- Chooseus Section Begin -->
       <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Neden AYİTO?</span>
                        <h2>Size Özel İmkanlar</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/globe.png" alt="">
                        <h5>Yemek Seçim Web Sitesi</h5>
                        <p>Web sitemiz sayesinde öğrenciler yemek seçimlerini yapabilecek. Projemiz için kilit bir noktada bulunuyor.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/tray.png" alt="">
                        <h5>Yemek Dağıtım Sistemi</h5>
                        <p>Akıllı Yemek Dağıtım Sistemimiz ile birlikte öğrenciler ve ihtiyaç sahipleri yemeklerini sorunsuz şekilde alabilecekler.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/dashboard.png" alt="">
                        <h5>Verilerin Gücü</h5>
                        <p>Verilerin gücünün farkındayız. Web sitemiz ve Akıllı Yemek Dağıtım Sistemimiz sizin verilerinizi en iyi şekilde depolayacaktır. Bizler onların analizini doğru şekilde yapacağız.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/hand.png" alt="">
                        <h5>Maddi Manevi Kazançlar</h5>
                        <p>Öğrencilerde sorumluluk bilincinin oluşması gibi değerleri kazandırıyoruz. Maddi olarak ise çok ciddi fayda sağlıyoruz. 240 kişilik bir yemekhanede yılda <strong>350 bin türk lirası</strong> kazanç sağlıyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->


    <!-- Services Section Begin -->
    <section class="services spad set-bg" data-setbg="img/call-to-action-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span style="color: #fff;">Nebula Technology</span>
                        <h2>AYİTO Başarıları</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__btn">
                        <a href="contact" class="primary-btn">Bize Ulaşın</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="services__item feature_box">
                        <div class="services__item__icon">
                            <img class="default-block" src="img/icons/rocket.png" alt="#">
                        </div>
                        <div class="services__item__text">
                            <h5>TEKNOFEST 2020 x 2021 x 2022 x 2023</h5>
                            <p>
                            2020 -> Çevre ve Enerji Y. 1468 proje <strong>21.</strong> <br>
                            2021 -> İnsanlık Yararına Teknoloji 16432 proje <strong>14.</strong> <br>
                            2022 -> İnsanlık Yararına Teknoloji 30240 proje <strong>11.</strong> <br>
                            2023 -> İnsanlık Yararına Teknoloji 48627 proje <strong>18.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img class="default-block" src="img/icons/atom.png" alt="#">
                        </div>
                        <div class="services__item__text">
                            <h5>TÜBİTAK Yarışmaları</h5>
                            <p> Araştırma Projeleri Y. Değerler Eğitimi <strong>Bölge Finali</strong> <br>
                                Celal Bayar Üni. MBŞ - STEAM Yarışması <strong>Final</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img class="default-block" src="img/icons/basari.png" alt="#">
                        </div>
                        <div class="services__item__text">
                            <h5>MEB Başarılı Örnekler Sergisi</h5>
                            <p>Milli Eğitim Bakanlığı DÖGM Başarılı Örnekler Sergisi <strong>Teşvik Ödülü</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img class="default-block" src="img/icons/robot.png" alt="#">
                        </div>
                        <div class="services__item__text">
                            <h5>TEKNOFEST "En İyi Sunum" Ödülü</h5>
                            <p>TEKNOFEST 2022 Karadeniz / Rize ve Samsun yarışlarında <strong>"En İyi Sunum"</strong> ödülü
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Begin -->
    <!-- <div class="gallery">
        <div class="gallery__container" style="position: relative;height: 716px;">
            <div class="grid-sizer"></div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item gc__item__large set-bg" data-setbg="img/gallery/gallery-4.jpg" style="position: absolute;left: 710.4px;top: 0px;">
                <a href="img/gallery/gallery-4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" style="    position: absolute;
    left: 0px;
    top: 358px;" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" style="position: absolute;
    left: 236.8px;
    top: 358px;" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div style="    position: absolute;
    left: 473.6px;
    top: 358px;" class="gc__item set-bg" data-setbg="img/gallery/gallery-7.jpg">
                <a href="img/gallery/gallery-7.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div> -->
    <!-- Gallery End -->

    <!-- Gallery Begin -->


    <!-- Team Section Begin -->
    <section class="testimonials spad">


        <section class="ftco-section ftco-project" id="projects-section">
            <div class="container-fluid px-md-4">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-12  heading-section text-center ftco-animate">
                        <h2 class="mb-4">Görseller</h2>
                    </div>
                </div>
                <div class="row">
                   
                        <div class="col-md-4">
                            <div class=" project img shadow ftco-animate d-flex justify-content-center align-items-center" style=" background-image: url(Panel/images/gallery/nebulabeyaz.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3 style=" color: #fff;"></h3>
                                    <p style="color:#fff;"></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class=" project img shadow ftco-animate d-flex justify-content-center align-items-center" style=" background-image: url(Panel/images/gallery/nebulasiyah.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3 style=" color: #fff;"></h3>
                                    <p style="color:#fff;"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class=" project img shadow ftco-animate d-flex justify-content-center align-items-center" style=" background-image: url(Panel/images/gallery/gdsc-bracket-renkli.png);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3 style=" color: #fff;"></h3>
                                    <p style="color:#fff;"></p>
                                </div>
                            </div>
                        </div>
                 
                </div>
            </div>
        </section>
    </section>
    <link rel="stylesheet" href="css/gallery.css">


<script src="js/popup.js"></script> 
    <?php require_once "footer.php"; ?>