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
                  <h4 class="card-title">Hesap</h4>
              </div>

              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">

                          <div class="form-group">
                              <label for="basicInput">İsim</label>
                              <input name="adsoyad" type="text" class="form-control" id="basicInput"
                                  placeholder="Enter name">
                          </div>

                          <label for="helperText">Kullanıcı Adı</label>
                          <div class="form-group">

                              <input name="kad" type="text" id="helperText" class="form-control" placeholder="Enter nickname">

                              </p>
                          </div>
                          <div class="form-group">
                              <label for="helperText">Şifre</label>
                              <input name="sifre" type="text" id="helperText" class="form-control" placeholder="Enter Password">

                              </p>
                          </div>
                          
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
              <div class="form-group">
                <label class="control-label" >Yetki</label>
                <select class="form-select" name="yetki">
                  <option value="2"> Admin </option>
                  <option value="1"> Öğrenci </option>
                  <option value="0"> İhtiyac Sahibi </option>
                </select>
              </div>
            </div>
                      </div>
                      <style media="screen">
                        .buttons a
                        {
                        width: 75px;
                        }
                      </style>
                      <div class="buttons">
 <button name="kullanicikaydet" type="submit" class="btn btn-outline-primary">Add</button>
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
