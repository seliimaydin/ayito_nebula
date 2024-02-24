<?php require_once"header.php";?>
<!-- Header Section End -->


<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about__video set-bg" data-setbg="img/nebulajpeg.jpg">
                    <a href="https://www.youtube.com/watch?v=_8eHk3O92cE" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                </div>
            </div>
            <style>
            .degisim{
                border: 2px solid #13a2b7 !important;
                background-color: transparent !important;
                color: #0c0c0c !important;
                transition: 300ms !important;
            }
            .degisim:hover{
                background-color: #13a2b7 !important;
                color: #fff !important;
                transition: 300ms !important;
            }
        </style>
        <div class="col-lg-6 col-md-6">
            <div class="about__text">
                <div class="section-title">
                    <h2>Projemiz Hakkında</h2>
                </div>
                <p><strong>AYİTO</strong><?php echo $ayarcek['aciklama']; ?></p>
                <ul>
                    <li><i class="fa fa-check-circle"></i> Verileri doğru kullanma</li>
                    <li><i class="fa fa-check-circle"></i> Etkili ve sorunsuz sistemler</li>
                    <li><i class="fa fa-check-circle"></i> Maddi ve manevi kayıpları önleme</li>
                </ul>
                <a href="contact" class="primary-btn degisim  normal-btn">İletişime Geçin</a>
            </div>
        </div>
    </div>
</div>
</section>
<!-- About Section End -->

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

<!-- Testimonials Section Begin -->
<section class="testimonials spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Projemize Gelen</span>
                    <h2>Yorumlar</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Teknofest 2022 Detay Raporu</h5>
                                <span>Juri Üyeleri</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Dosyanın özet bölümündeki sınır aşımı harici tüm bölümleri istenilen düzeyde, geliştirilen projeyi detaylı olarak açıklayacak biçimde hazırlandığı için dosya her yönüyle güçlüdür. </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Teknofest 2022 Detay Raporu</h5>
                                <span>Juri Üyeleri</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Sosyal yönü kuvvetli ,teknolojik altyapı ve araştırma mevcut. </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Teknofest 2021 Detay Raporu</h5>
                                <span>Juri Üyeleri</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Genel itibariyle iyi bir proje çalışmasıdır, proje şablonunda istenilen içeriklere göre geliştirilebilir, başarılar dilerim. </p>
                    </div>
                </div>
                  
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Teknofest 2023</h5>
                                <span>Juri Üyeleri</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Emekleriniz için teşekkür eder, çalışmalarınızda başarılar dilerim </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Teknofest 2020 Gaziantep</h5>
                                <span>Uzman Akademisyenler</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Göndermiş olduğunuz Proje Detay Raporu detaylı bir şekilde objektif kriterler üzerinden, alanında uzman akademisyenler ve ekiplerce incelenmiştir. Değerlendirmeler sonucunda takımınızın Proje Detay Raporu aşamasını geçerek finale kalma hak kazandığınız bildirmekteyiz. Tebrik ederiz! </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>TakeOff Uluslararası Girişim Zirvesi</h5>
                                <span>Değerlendirme Kurulu</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Seçici Kurul, Take Off İstanbul Uluslararası Girişim Zirvesi 2021'e başvurduğunuz için teşekkür eder!
                        Başvuru sürecinde gösterdiğiniz ilgi ve desteğiniz için teşekkür ederiz. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Tübitak 2204-A</h5>
                                <span>Juri Üyeleri</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p># numaralı proje başvurusu ilgili jüri tarafından değerlendirilmiş ve Bölge Sergisine davet edilmenize karar verilmiştir. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Teknofest 2021 Ön D. Raporu</h5>
                                <span>Juri Üyeleri</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Başarılarınızın devamını dilerim.</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Teknofest 2020 Bitimi</h5>
                                <span>Finalist Memnuniyet Anketi için</span>
                            </div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Heyecan dolu TEKNOFEST 2020 sürecini tamamlamış bulunmaktayız! “Milli Teknoloji Hamlesi” ile yola çıktığımız bu süreçte katılım ve desteklerinizden ötürü teşekkürlerimizi sunar, aylarca süren mücadelenin ardından tüm yarışmacılarımızı tebrik ederiz. </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Testimonials Section End -->

<!-- Team Section Begin --><!--
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Takımımız</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="img/huseyin.jpg" alt="">
                    <h5>Hüseyin Rahmi Yıldırım</h5>
                    <span>Kurucu Takım Danışmanı</span>
                    <div class="team__item__social">
                        <a href="https://www.geleceginisiklari.com/kisiler/huseyin.php"><i class="fas fa-home"></i></a>
                        <a href="https://twitter.com/hrahmiyldrm"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/huseyin_rahmi_yldrm/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="img/aydin.jpg" alt="">
                    <h5>Selim Aydın</h5>
                    <span>Kurucu Takım Kaptanı/Robotik Geliştirici</span>
                    <div class="team__item__social">
                        <a href="https://www.geleceginisiklari.com/kisiler/selim.php"><i class="fas fa-home"></i></a>
                        <a href="https://www.linkedin.com/in/selimaydın/"><i class="fab fa-facebook"></i></a>
                        <a href="https://github.com/selimaydinn"><i class="fab fa-github"></i></a>
                        <a href="https://www.instagram.com/selimaydinresmi/"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:selimaydinresmi@gmail.com?subject=feedback"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
</section>-->
<!-- Team Section End -->

<!-- Footer Section Begin -->
<?php require_once"footer.php";?>