<?php require_once 'header.php'; ?>
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
                  Mesajlar
              </div>
              <div class="card-body">
                  <table class="table" id="table1">
                      <thead>
                          <tr>
                              <th>İsim Soyisim</th>
                              <th>Email</th>
                              <th>Konu</th>
                              <th>Mesaj</th>


                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $mesajlar=$baglanti->prepare("SELECT * from mesajlar order by id DESC ");

                        $mesajlar->execute();

                        while ($mesajlarcek=$mesajlar->fetch(PDO::FETCH_ASSOC)) {



                        ?>
                          <tr>
                            <td><?php echo $mesajlarcek['baslik'] ?></td>
                            <td><?php echo $mesajlarcek['email'] ?></td>
                            <td><?php echo $mesajlarcek['konu'] ?></td>
                            <td><?php echo $mesajlarcek['mesaj'] ?></td>

                            <td style="float:right">

                              <form action="netting/processing.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $mesajlarcek['id'] ?>">

                              <button name="mesajlarsil" class="btn btn-outline-danger">Sil</button>
                                                            </form>

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
