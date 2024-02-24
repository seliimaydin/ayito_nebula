<?php require_once 'header.php';
$sponsor=$baglanti->prepare("SELECT * from sponsor where id=:id ");

$sponsor->execute(array(
  'id'=>$_GET['id']
));

$sponsorcek=$sponsor->fetch(PDO::FETCH_ASSOC) 

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
                                        <form action="netting/processing.php" method="POST" enctype="multipart/form-data" role="form">
                  <h4 class="card-title">Galeri</h4>
              </div>

              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">

                        <div class="mb-3">

                            <label for="helperText">Resim</label>
                            <input name="resim" class="form-control" type="file" id="formFile">
                              <form action="netting/processing.php" method="POST">
                        </div>
                          <input  type="hidden" name="id" value='<?php echo $sponsorcek['id'] ?>'>
                          
                          <div class="form-group">
                              <label for="helperText">Başlık</label>
                              <input name="baslik" type="text" id="helperText" class="form-control" value="<?php echo $sponsorcek['baslik'] ?>" placeholder="Başlık Ekleyin">

                              </p>
                          </div>
                          <div class="form-group">
                              <label for="helperText">Açıklama</label>
                              <input name="aciklama" type="text" id="helperText" class="form-control" value="<?php echo $sponsorcek['aciklama'] ?>" placeholder="Açıklama Ekleyin">

                              </p>
                          </div>
                          <div class="form-group">
                              <label for="helperText">Sıra</label>
                              <input name="sira" type="number" id="helperText" class="form-control" value="<?php echo $sponsorcek['sira'] ?>" placeholder="Sıra Ekleyin">

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
           <button name="sponsorduzenle" type="submit" class="btn btn-outline-primary">Değiştir</button>
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
