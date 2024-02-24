<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php';?>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
      <style>
        body{
          background: #fff;
        }
      </style>
    </div>
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>
      <?php           
$yemek=$baglanti->prepare("SELECT * from yemek  where id=?");

$yemek->execute(array(2));

$yemekcek=$yemek->fetch(PDO::FETCH_ASSOC);
?>
      <section class="section">
          <div class="table-responsive">
              <div class="card-body">
                  <table class="table" id="table1">
                      <thead>
                          <tr>
                              
                              <th class="text-dark">1.gün</th>
                              <th><?php echo $yemekcek['yemek_bir_bir']?></th>
                              <th><?php echo $yemekcek['yemek_bir_iki']?></th>
                              <th><?php echo $yemekcek['yemek_bir_uc']?></th>
                              <th><?php echo $yemekcek['yemek_bir_dort']?></th>
                              <th class="text-dark">2.gün</th>
                              <th><?php echo $yemekcek['yemek_iki_bir']?></th>
                              <th><?php echo $yemekcek['yemek_iki_iki']?></th>
                              <th><?php echo $yemekcek['yemek_iki_uc']?></th>
                              <th><?php echo $yemekcek['yemek_iki_dort']?></th>
                              <th class="text-dark">3.gün</th>
                              <th><?php echo $yemekcek['yemek_uc_bir']?></th>
                              <th><?php echo $yemekcek['yemek_uc_iki']?></th>
                              <th><?php echo $yemekcek['yemek_uc_uc']?></th>
                              <th><?php echo $yemekcek['yemek_uc_dort']?></th>
                              <th class="text-dark">4.gün</th>
                              <th><?php echo $yemekcek['yemek_dort_bir']?></th>
                              <th><?php echo $yemekcek['yemek_dort_iki']?></th>
                              <th><?php echo $yemekcek['yemek_dort_uc']?></th>
                              <th><?php echo $yemekcek['yemek_dort_dort']?></th>
                              <th class="text-dark">5.gün</th>
                              <th><?php echo $yemekcek['yemek_bes_bir']?></th>
                              <th><?php echo $yemekcek['yemek_bes_iki']?></th>
                              <th><?php echo $yemekcek['yemek_bes_uc']?></th>
                              <th><?php echo $yemekcek['yemek_bes_dort']?></th>
                              <th class="text-dark">6.gün</th>
                              <th><?php echo $yemekcek['yemek_alti_bir']?></th>
                              <th><?php echo $yemekcek['yemek_alti_iki']?></th>
                              <th><?php echo $yemekcek['yemek_alti_uc']?></th>
                              <th><?php echo $yemekcek['yemek_alti_dort']?></th>
                              <th class="text-dark">7.gün</th>
                              <th><?php echo $yemekcek['yemek_yedi_bir']?></th>
                              <th><?php echo $yemekcek['yemek_yedi_iki']?></th>
                              <th><?php echo $yemekcek['yemek_yedi_uc']?></th>
                              <th><?php echo $yemekcek['yemek_yedi_dort']?></th>


                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $cevap=$baglanti->prepare("SELECT * from cevap order by id DESC ");

                        $cevap->execute();

                        while ($cevapcek=$cevap->fetch(PDO::FETCH_ASSOC)) {



                        ?>
                          <tr>
                          <th></th>
                          <th><?php echo $cevapcek['cevap_bir_bir']?></th>
                          <th><?php echo $cevapcek['cevap_bir_iki']?></th>
                          <th><?php echo $cevapcek['cevap_bir_uc']?></th>
                          <th><?php echo $cevapcek['cevap_bir_dort']?></th>
                          <th></th>
                          <th><?php echo $cevapcek['cevap_iki_bir']?></th>
                          <th><?php echo $cevapcek['cevap_iki_iki']?></th>
                          <th><?php echo $cevapcek['cevap_iki_uc']?></th>
                          <th><?php echo $cevapcek['cevap_iki_dort']?></th>
                          <th></th>
                          <th><?php echo $cevapcek['cevap_uc_bir']?></th>
                          <th><?php echo $cevapcek['cevap_uc_iki']?></th>
                          <th><?php echo $cevapcek['cevap_uc_uc']?></th>
                          <th><?php echo $cevapcek['cevap_uc_dort']?></th>
                          <th></th>
                          <th><?php echo $cevapcek['cevap_dort_bir']?></th>
                          <th><?php echo $cevapcek['cevap_dort_iki']?></th>
                          <th><?php echo $cevapcek['cevap_dort_uc']?></th>
                          <th><?php echo $cevapcek['cevap_dort_dort']?></th>
                          <th></th>
                          <th><?php echo $cevapcek['cevap_bes_bir']?></th>
                          <th><?php echo $cevapcek['cevap_bes_iki']?></th>
                          <th><?php echo $cevapcek['cevap_bes_uc']?></th>
                          <th><?php echo $cevapcek['cevap_bes_dort']?></th>
                          <th></th>
                          <th><?php echo $cevapcek['cevap_alti_bir']?></th>
                          <th><?php echo $cevapcek['cevap_alti_iki']?></th>
                          <th><?php echo $cevapcek['cevap_alti_uc']?></th>
                          <th><?php echo $cevapcek['cevap_alti_dort']?></th>
                          <th></th>
                          <th><?php echo $cevapcek['cevap_yedi_bir']?></th>
                          <th><?php echo $cevapcek['cevap_yedi_iki']?></th>
                          <th><?php echo $cevapcek['cevap_yedi_uc']?></th>
                          <th><?php echo $cevapcek['cevap_yedi_dort']?></th>

                            <td style="float:right">

                              <form action="netting/processing.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $cevapcek['id'] ?>">

                              <button name="cevapsil" class="btn btn-outline-danger">Sil</button>
                                                            </form>

                          </tr>
<?php } ?>
                      </tbody>
                  </table>

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
