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
                  <h4 class="card-title">Sosyal Medya</h4>
              </div>

              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="basicInput">Facebook</label>
                            <input type="text" class="form-control" id="basicInput" name="facebook" value="<?php echo $ayarcek['facebook'] ?>">
                        </div>
                          <div class="form-group">
                              <label for="basicInput">Instagram</label>
                              <input type="text" class="form-control" id="basicInput"name="instagram" value="<?php echo $ayarcek['instagram'] ?>">
                          </div>

                          <label for="helperText">Twitter</label>
                          <div class="form-group">

                              <input name="twitter" type="text" id="helperText" class="form-control" value="<?php echo $ayarcek['twitter'] ?>">

                              </p>
                          </div>
                          <div class="form-group">
                              <label for="helperText">Youtube</label>
                              <input name="youtube" type="text" id="helperText" class="form-control" value="<?php echo $ayarcek['youtube'] ?>">

                              </p>
                          </div>
                          <div class="form-group">
                              <label for="helperText">Linkedin</label>
                              <input name="linkedin" type="text" id="helperText" class="form-control" value="<?php echo $ayarcek['linkedin'] ?>">

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
<button name="sosyalkaydet" type="submit" class="btn btn-outline-primary">Değiştir</button>
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
<?php require_once 'header.php'; ?>
