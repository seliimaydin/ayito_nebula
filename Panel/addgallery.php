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
                  <form action="netting/processing.php" method="POST" enctype="multipart/form-data" role="form">
                  <h4 class="card-title">Galeri</h4>
              </div>

                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1" value="">
                  </div>
              

                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık</label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Başlık Ekle">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Açıklama Ekle">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sıra</label>
                    <input name="sira" type="number" class="form-control" id="exampleInputEmail1" value="" placeholder="Sıra Ekle">
                  </div>
                      <style media="screen">
                        .buttons a
                        {
                        width: 75px;
                        }
                      </style>
                      <div class="buttons">
  <button name="sponsorkaydet" type="submit" class="btn btn-outline-primary">Ekle</button>
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
