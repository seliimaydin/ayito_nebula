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
      <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
      </a>
    </header>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Galeri
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Açıklama</th>
                            <th>Sıra</th>
                            <th></th>
                            <th></th>

  <th style="float:right"><a href="addgallery"><button style="width: 150px" class="btn btn-outline-primary">Resim Ekle</button></th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sponsor=$baglanti->prepare("SELECT * from sponsor order by id DESC ");

                      $sponsor->execute();

                      while ($sponsorcek=$sponsor->fetch(PDO::FETCH_ASSOC)) {



                      ?>
                        <tr>
                            <td><img style="width: 300px; height: 175px;" src="images/gallery/<?php echo $sponsorcek['resim'] ?>"></td>
                          <td><?php echo $sponsorcek['baslik'] ?></td>
                          <td><?php echo $sponsorcek['aciklama'] ?></td>
                          <td><?php echo $sponsorcek['sira'] ?></td>
                          <td></td>
                          <td></td>


                          <td style="float:right">

                            <form action="netting/processing.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $sponsorcek['id'] ?>">

                            <button name="sponsorsil" class="btn btn-outline-danger">Sil</button>
                                                          </form>
                                                          <td style="float:right"><a href="editgallery?id=<?php echo $sponsorcek['id'] ?>"><button class="btn btn-outline-success">Düzenle</button></a></td>

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
