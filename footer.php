<footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer__logo">
                            <a href="#"><img style="max-height:70px" src="img/selimaydintop.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__social">
                            <a href="index" target="_blank"><i class="fas fa-home"></i></a>
                            <a href="<?php echo $ayarcek['linkedin'] ?>"target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="<?php echo $ayarcek['instagram'] ?>"target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?php echo $ayarcek['youtube'] ?>"target="_blank"><i class="fab fa-youtube"></i></a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Hızlıca Ulaş</h5>
                        <ul>
                            <li><a href="index">Anasayfa</a></li>
                            <?php if(!((!isset($_SESSION['userogrenci_mail'])) AND (!isset($_SESSION['userihtiyac_mail'])))){ ?>
                            
                            <?php } else {?>
                                <li><a href="loginhome">Giriş Yap</a></li>
    
                           <?php }?>
                            <li><a href="about">Hakkımızda</a></li>
                  
                            <li><a href="contact">İletişim</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Ziyaret Et</h5>
                        <ul>
                            <li><a href="https://www.instagram.com/gdscsubu">GDSC SUBU</a></li>
                            <li><a href="https://www.instagram.com/nebula.technology/">Nebula</a></li>
                            
                        </ul>
                    </div>
                </div>
                <style>
                    .normal{
                        color: #c4c4c4;
                    }
                </style>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h5>İletişime Geç</h5>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i><?php echo $ayarcek['adres']?></li>
                            <li><i class="fas fa-phone-alt"></i><a class="normal" href="tel:<?php echo $ayarcek['telefon'] ?>"><?php echo $ayarcek['telefon'] ?></a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $ayarcek['email']?>" class="normal"><?php echo $ayarcek['email']?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-6">
                    <div class="footer__map">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96722.7653559909!2d30.299892554280788!3d40.74912520118544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccb2fad58e639f%3A0xb84f12f8c14f1221!2sSakarya!5e0!3m2!1str!2str!4v1708545354964!5m2!1str!2str"
                            height="190" style="border:0" allowfullscreen=""></iframe>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> <a href="#">Nebula Technology.</a> Tüm hakları gizlidir. Sitedeki hiçbir materyali izinsiz başka yerde kullanılamaz.</p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-3">
                        <ul>
                            <li><a style="color: #13a2b7;" href="ayito-gizlilik-politikasi">Uygulama Gizlilik Politikası</a></li>
                            <li><a style="color: #13a2b7;" href="hizmet">Hizmet Şartları</a></li>
                            <li><a style="color: #13a2b7;" href="credits">Credits</a></li>
                        </ul>
                    </div>
                            
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <script src="./js/masonry.pkgd.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>
    <script src="./js/jquery.nice-select.min.js"></script>
    <script src="./js/jquery.slicknav.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>