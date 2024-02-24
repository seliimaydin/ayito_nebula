<?php include"header.php"; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AYİTO | Öğrenci Kayıt Ol</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    
    <link rel="stylesheet" href="css/logincss.css">
</head>
<body>
<!-- Sign up form -->
    <div class="main">
        <section class="signup">
            <div class="container" id="containerlogin">
                <br>
                 <?php 

      if (@$_GET['durum']=="farklisifre") {?>

        <div class="alert alert-danger text-center">
          <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
        </div>

      <?php } elseif (@$_GET['durum']=="eksiksifre") {?>

        <div class="alert alert-danger text-center">
          <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
        </div>

      <?php } elseif (@$_GET['durum']=="mukerrerkayit") {?>

        <div class="alert alert-danger text-center">
          <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
        </div>

      <?php } elseif (@$_GET['durum']=="basarisiz") {?>

        <div class="alert alert-danger text-center">
          <strong>Hata!</strong> Kayıt Yapılamadı İletişim bölümünden bize ulaşın.
        </div>

      <?php } elseif (@$_GET['durum']=="kayıtok") {?>

        <div class="alert alert-success text-center">
          <strong>Başarılı!</strong> Kaydın oluşturuldu. Yönetici onayından sonra hesabına giriş yapabileceksin!
        </div>
      <?php  }?>
      
      <h2 class="form-title text-center">Öğrenci Hesabı İçin Kayıt Ol</h2>
                <div class="signup-content">

                    <div class="signup-form">
                       
                        
                        <form action="Panel/netting/user.php" method="POST"  class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" required="" name="kullanici_ad" id="name" placeholder="İsminizi Giriniz..."/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" required="" name="kullanici_soyad" id="name" placeholder="Soyisminizi Giriniz..."/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" required="" name="kullanici_mail" id="email" placeholder="Mailinizi Giriniz...(Kullanıcı Adı)"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" required="" name="kullanici_passwordone" id="pass" placeholder="Şifrenizi Giriniz..."/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" required="" name="kullanici_passwordtwo" id="re_pass" placeholder="Şifrenizi Tekrar Giriniz..."/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" required="" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span><a href="hizmet" class="term-service">Hizmet Şartları'ndaki</a> tüm beyanları kabul ediyorum  </label>
                            </div>

                            <div class="form-group form-button">
                               <button type="submit" name="demo_ogrencikaydet" class="site-btn">KAYIT OL</button>
                               <!-- <input type="submit" name="demo_ogrencikaydet" id="signup" class="form-submit" value="KAYIT OL"/> -->
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Ben zaten üyeyim.</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/loginjs.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php include"footer.php"; ?>