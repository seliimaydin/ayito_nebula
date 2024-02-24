<?php require_once 'header.php';


?>
<?php require_once 'sidebar.php';?>

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
         <strong><h4 class="card-title">Demo İhtiyaç Sahibi Hesabı Onaylama</h4></strong>
       </div>

       <div class="card-body">
        <div class="row">
          <div class="col-md-12">

            <?php
            $demokullanicisor=$baglanti->prepare("SELECT * from demo_ihtiyachesap");

            $demokullanicisor->execute();

            $demo_ihtiyaccek=$demokullanicisor->fetch(PDO::FETCH_ASSOC);
            ?>

            


            <div class="form-group">
              <label for="helperText">Mail</label>
              <input name="ihtiyac_mail" type="text" id="helperText" class="form-control" value="<?php echo $demo_ihtiyaccek['demokullanici_mail']; ?>" placeholder="">

            </p>
          </div>
          <div class="form-group">
            <label for="helperText">Onay Durumu</label>
            <input name="ihtiyac_yetki" type="text" id="helperText" class="form-control" value="<?php echo $demo_ihtiyaccek['demokullanici_yetki']; ?>" placeholder="">

          </p>
        </div>
        <div class="form-group">
          <label for="helperText">Kayıt Tarihi</label>
          <input name="" disabled="" type="text" id="helperText" class="form-control" value="<?php echo $demo_ihtiyaccek['demokullanici_zaman']; ?>" placeholder="">

        </p>
      </div>
      <div class="form-group">
        <label for="helperText">Şifre</label>
        <input name="ihtiyac_password" type="text" id="helperText" class="form-control" value="<?php echo $demo_ihtiyaccek['demokullanici_password']; ?>" placeholder="">

      </p>
    </div>

    <div class="form-group">
      <label for="helperText">Ad</label>
      <input name="ihtiyac_ad" type="text" id="helperText" class="form-control" value="<?php echo $demo_ihtiyaccek['demokullanici_ad']; ?>" placeholder="">

    </p>
  </div>
  <div class="form-group">
    <label for="helperText">Soyad</label>
    <input name="ihtiyac_soyad" type="text" id="helperText" class="form-control" value="<?php echo $demo_ihtiyaccek['demokullanici_soyad']; ?>" placeholder="">

  </p>
</div>
<div class="form-group">
  <label for="helperText">GSM</label>
  <input name="ihtiyac_gsm" type="text" id="helperText" class="form-control" value="<?php echo $demo_ihtiyaccek['demokullanici_gsm']; ?>" placeholder="">

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
 <button name="ihtiyaconayla" type="submit" class="btn btn-outline-success">Başvuruyu Onayla</button>
 <a class="btn btn-outline-danger" style="width: 160px;" href="netting/user.php?demokullanici_id=<?php echo $demo_ihtiyaccek['demokullanici_id'] ?>&demo_ihtiyacsil=ok">Başvuruyu İptal Et</a>
</div>
</div>
</div>
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