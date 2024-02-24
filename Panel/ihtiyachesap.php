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

        if (@$_GET['durum']=="hata") {?>

          <div class="alert alert-danger">
            <strong>Hata!</strong> Güncelleme İşlemi Başarısız Lütfen Destek Ekibine Ulaşın.
          </div>

        <?php } elseif (@$_GET['durum']=="ok") {?>

          <div class="alert alert-success">
            <strong>Başarılı!</strong> Güncelleme Başarılı.
          </div>

        <?php } elseif (@$_GET['sil']=="ok") {?>

          <div class="alert alert-success">
            <strong>Başarılı!</strong> Silme İşlemi Başarılı.
          </div>

        <?php } elseif (@$_GET['sil']=="no") {?>

          <div class="alert alert-danger">
            <strong>Hata!</strong> Silme İşlemi Başarısız Lütfen Destek Ekibine Ulaşın.
          </div>

        <?php }
        ?>
        <strong> Onaylanmış İhtiyaç Sahibi Hesapları</strong>
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
            $ihtiyacsor=$baglanti->prepare("SELECT * from ihtiyachesap");

            $ihtiyacsor->execute();

            while ($ihtiyaccek=$ihtiyacsor->fetch(PDO::FETCH_ASSOC)) {



              ?>
              <tr>

                <td><?php echo $ihtiyaccek['ihtiyac_ad'] ?></td>
                <td><?php echo $ihtiyaccek['ihtiyac_soyad'] ?></td>
                <td><?php echo $ihtiyaccek['ihtiyac_mail'] ?></td>
                <td><?php echo $ihtiyaccek['ihtiyac_yetki'] ?></td>
                <td><?php echo $ihtiyaccek['ihtiyac_zaman'] ?></td>

                <td style="float:right">

                  <!--<form action="netting/user.php" method="POST">-->
                    
                   <a href="ihtiyacduzenle"> <button class="btn btn-outline-success">Düzenle</button></a>
                    <a href="netting/user.php?ihtiyac_id=<?php echo $ihtiyaccek['ihtiyac_id'] ?>&ihtiyacsil=ok"><button class="btn btn-outline-danger">Sil</button></a>


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
