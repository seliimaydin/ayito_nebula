<?php require_once"header.php";?>
<!-- Header Section End -->
<?php 

if (@$_GET['status']=="unsuccessful") {?>

    <div class="alert alert-danger text-center">
      <strong>Hata!</strong> Mesajınız bize ulaşırken hataya saptandı
  </div>

<?php } elseif (@$_GET['status']=="successful") {?>

    <div class="alert alert-success text-center">
        <strong>Başarılı!</strong> Mesajınız bize ulaştı.
    </div>
<?php  }?>

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Adres</h5>
                        <p><?php echo $ayarcek['adres']?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>Telefon</h5>
                        <p><?php echo $ayarcek['telefon']?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact__widget">
                    <div class="contact__widget__icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact__widget__text">
                        <h5>E-Posta</h5>
                        <p><?php echo $ayarcek['email']?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__content">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__pic">
                        <img src="img/contact.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <h3>İletişime Geçin</h3>
                        <form action="Panel/netting/processing.php" method="POST">
                            <input required="" type="text" name="baslik" placeholder="İsim">
                            <input required="" type="email" name="email" placeholder="E-Posta">
                            <input required="" type="text" name="konu" placeholder="Konu">
                            <textarea required="" name="mesaj" placeholder="Mesaj"></textarea>
                            <button type="submit" name="mesajkaydet" class="site-btn">Mesaj Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Contact Section End -->

<!-- Footer Section Begin -->
<?php require_once"footer.php";?>