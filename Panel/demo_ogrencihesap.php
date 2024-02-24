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

      <?php }  elseif (@$_GET['durum']=="mukerrerkayit") {?>

        <div class="alert alert-danger">
          <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
        </div>

      <?php } elseif (@$_GET['durum']=="basarisiz") {?>

        <div class="alert alert-danger">
          <strong>Hata!</strong> Kayıt Yapılamadı Lütfen Destek Ekibine Ulaşın.
        </div>

      <?php }
      elseif (@$_GET['durum']=="kayıtok") {?>

        <div class="alert alert-success">
          <strong>Başarılı!</strong> Kayıt Başarılı. Kişi Giriş Yapabilir.
        </div>

      <?php }
      ?>
      
               <strong>Onaylanmayan Öğrenci Hesapları</strong>
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
                        $demo_ogrencisor=$baglanti->prepare("SELECT * from demo_ogrencihesap where kullanici_yetki=:yetki");

                        $demo_ogrencisor->execute(array(
                          'yetki' => 0
                        ));

                        while ($demo_ogrencicek=$demo_ogrencisor->fetch(PDO::FETCH_ASSOC)) {



                        ?>
                          <tr>

                            <td><?php echo $demo_ogrencicek['kullanici_ad'] ?></td>
                            <td><?php echo $demo_ogrencicek['kullanici_soyad'] ?></td>
                            <td><?php echo $demo_ogrencicek['kullanici_mail'] ?></td>
                            <td><?php echo $demo_ogrencicek['kullanici_yetki'] ?></td>
                            <td><?php echo $demo_ogrencicek['kullanici_zaman'] ?></td>

                            <td style="float:right">

                          <!--<form action="netting/user.php" method="POST">-->
                         
                           <a href="demo_ogrenciduzenle?id=<?php echo $demo_ogrencicek["kullanici_id"] ?>"> <button class="btn btn-outline-success">Onay Durumu Güncelle</button></a>
                         

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
