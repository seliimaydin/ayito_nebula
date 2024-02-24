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
                  Menüler
              </div>
              <div class="card-body">
                  <table class="table" id="table1">
                      <thead>
                          <tr>
                              <th>Menü adı</th>
                              <th>Menü detayı</th>
                              <th>Menü urlsi</th>
                              <th>Menü sirasi</th>
                              <th>Menü durum</th>
                              <th>Menü yetki</th>

                        <th style="float:right"><a href="addmenu"><button style="width: 150px" class="btn btn-outline-primary">Add Account</button></th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                        $kullanici=$baglanti->prepare("SELECT * from kullanici ");

                        $kullanici->execute();

                        while ($kullanicicek=$kullanici->fetch(PDO::FETCH_ASSOC)) {



                        ?>
                          <tr>

                            <td><?php echo $kullanicicek['adsoyad'] ?></td>
                            <td><?php echo $kullanicicek['adsoyad'] ?></td>
                            <td><?php echo $kullanicicek['adsoyad'] ?></td>
                         

                            <td style="float:right">

                          <form action="netting/processing.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $kullanicicek['id'] ?>">
                          <button name="kullanicisil" class="btn btn-outline-danger">Delete</button>

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
