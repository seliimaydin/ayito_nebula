<?php require_once 'header.php';

      require_once 'sidebar.php';?>

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

        <form action="netting/user.php" method="POST" enctype="multipart/form-data" role="form">
          <h4 class="card-title">Onaylı Öğrenci Hesabı Bilgi Düzenleme</h4>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-md-12">

              <?php
              $ogrencisor=$baglanti->prepare("SELECT * from ogrencihesap");

              $ogrencisor->execute(array(

              ));
              $ogrencicek=$ogrencisor->fetch(PDO::FETCH_ASSOC);
              ?>
              <div class="form-group">
                <label for="helperText">Mail[Değiştirmeyiniz!]</label>
                <input name="ogrenci_mail" type="text" id="helperText" class="form-control" value="<?php echo $ogrencicek['ogrenci_mail']; ?>" placeholder="">

              </p>
            </div>
            
          <div class="form-group">
            <label for="helperText">Kayıt Tarihi</label>
            <input name="ogrenci_zaman" disabled="" type="text" id="helperText" class="form-control" value="<?php echo $ogrencicek['ogrenci_zaman']; ?>" placeholder="">

          </p>
        </div>
        <div class="form-group">
            <label for="helperText">Şifre[Değiştirmeyiniz!]</label>
            <input name="ogrenci_password"  type="text" id="helperText" class="form-control" value="<?php echo $ogrencicek['ogrenci_password']; ?>" placeholder="">

          </p>
        </div>

        <div class="form-group">
          <label for="helperText">Ad</label>
          <input name="ogrenci_ad" type="text" id="helperText" class="form-control" value="<?php echo $ogrencicek['ogrenci_ad']; ?>" placeholder="">

        </p>
      </div>
      <div class="form-group">
        <label for="helperText">Soyad</label>
        <input name="ogrenci_soyad" type="text" id="helperText" class="form-control" value="<?php echo $ogrencicek['ogrenci_soyad']; ?>" placeholder="">

      </p>
    </div>
    <div class="form-group">
      <label for="helperText">GSM</label>
      <input name="ogrenci_gsm" type="text" id="helperText" class="form-control" value="<?php echo $ogrencicek['ogrenci_gsm']; ?>" placeholder="">

    </p>
  </div>



</div>
<style media="screen">
.buttons a
{
  width: 75px;
}
</style>
<div class="buttons">
 <button name="ogrenciduzenle" type="submit" class="btn btn-outline-success">Gönder</button>
 
</div>
</div>
</div>
</div>
</div>
</form>
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