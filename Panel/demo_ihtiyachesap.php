<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>

        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
    </div>
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>
      
      <section class="section">
          <div class="card">

              <div class="card-header">
               <?php 

      if (@$_GET['durum']=="farklisifre") {?>

        <div class="alert alert-danger">
          <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
        </div>

      <?php } elseif (@$_GET['durum']=="eksiksifre") {?>

        <div class="alert alert-danger">
          <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
        </div>

      <?php } elseif (@$_GET['durum']=="mukerrerkayit") {?>

        <div class="alert alert-danger">
          <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
        </div>

      <?php } elseif (@$_GET['durum']=="basarisiz") {?>

        <div class="alert alert-danger">
          <strong>Hata!</strong> Kayıt Yapılamadı İletişim bölümünden bize ulaşın.
        </div>

      <?php }
      elseif (@$_GET['durum']=="kayıtok") {?>

        <div class="alert alert-success">
          <strong>Başarılı!</strong> Kayıt Başarılı. Kişi Giriş Yapabilir.
        </div>

      <?php }
      ?>
                 <strong> Onaylanmayan İhtiyaç Sahibi Hesapları</strong> 
              </div>
              <div class="card-body">
                  <table class="table" id="table1">
                      <thead>
                          <tr>
                             <th>İsim</th>
                              <th>Soyisim</th>
                              <th>Mail</th>
                              <th>Onay Durumu</th>
                              <th>Kayıt Tarihi</th>

                          </tr>
                      </thead>
                      <tbody>
                        <?php
                        $demokullanicisor=$baglanti->prepare("SELECT * from demo_ihtiyachesap where demokullanici_yetki=:yetki");

                        $demokullanicisor->execute(array(
                          'yetki' => 1
                        ));

                        while ($demo_ihtiyaccek=$demokullanicisor->fetch(PDO::FETCH_ASSOC)) {



                        ?>
                          <tr>

                            <td><?php echo $demo_ihtiyaccek['demokullanici_ad'] ?></td>
                            <td><?php echo $demo_ihtiyaccek['demokullanici_soyad'] ?></td>
                            <td><?php echo $demo_ihtiyaccek['demokullanici_mail'] ?></td>
                            <td><?php echo $demo_ihtiyaccek['demokullanici_yetki'] ?></td>
                            <td><?php echo $demo_ihtiyaccek['demokullanici_zaman'] ?></td>

                            <td style="float:right">

                          <!--<form action="netting/user.php" method="POST">-->
                          
                           <a href="demo_ihtiyacduzenle?id=<?php echo $demo_ihtiyaccek["demokullanici_id"] ?>"> <button class="btn btn-outline-success">Onay Durumu Güncelle</button></a>

                          </tr>

<?php } ?>
                      </tbody>
                  </table>

              </div>
          </div>

      </section>

      <footer>

      </footer>
    </div>
  </div>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendors/apexcharts/apexcharts.js"></script>
  <script src="assets/js/pages/dashboard.js"></script>

  <script src="assets/js/main.js"></script>
</body>

</html>
