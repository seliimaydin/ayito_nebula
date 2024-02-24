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

      <section class="section">
          <div class="table-responsive">
              <div class="card-body">
                  <table class="table" id="table1">
                      <thead>
                          <tr>
                              
                              <th>Çorba</th>
                              <th>Ana Yemek</th>
                              <th>Makarna Pilav</th>
                              <th>Tatlı Salata</th>


                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $cevap=$baglanti->prepare("SELECT * from cevap order by id DESC ");

                        $cevap->execute();

                        while ($cevapcek=$cevap->fetch(PDO::FETCH_ASSOC)) {

                          $cevap111 = $cevapcek['cevap_bir_bir']; 
                          $cevap121 = $cevapcek['cevap_bir_iki']; 
                          $cevap131 = $cevapcek['cevap_bir_uc']; 
                          $cevap141 = $cevapcek['cevap_bir_dort']; 
                          $cevap211 = $cevapcek['cevap_iki_bir']; 
                          $cevap221 = $cevapcek['cevap_iki_iki']; 
                          $cevap231 = $cevapcek['cevap_iki_uc']; 
                          $cevap241 = $cevapcek['cevap_iki_dort']; 
                          $cevap311 = $cevapcek['cevap_uc_bir']; 
                          $cevap321 = $cevapcek['cevap_uc_iki']; 
                          $cevap331 = $cevapcek['cevap_uc_uc']; 
                          $cevap341 = $cevapcek['cevap_uc_dort']; 
                          $cevap411 = $cevapcek['cevap_dort_bir']; 
                          $cevap421 = $cevapcek['cevap_dort_iki']; 
                          $cevap431 = $cevapcek['cevap_dort_uc']; 
                          $cevap441 = $cevapcek['cevap_dort_dort']; 
                          $cevap511 = $cevapcek['cevap_bes_bir']; 
                          $cevap521 = $cevapcek['cevap_bes_iki']; 
                          $cevap531 = $cevapcek['cevap_bes_uc']; 
                          $cevap541 = $cevapcek['cevap_bes_dort']; 
                          $cevap611 = $cevapcek['cevap_alti_bir']; 
                          $cevap621 = $cevapcek['cevap_alti_iki']; 
                          $cevap631 = $cevapcek['cevap_alti_uc']; 
                          $cevap641 = $cevapcek['cevap_alti_dort']; 
                          $cevap711 = $cevapcek['cevap_yedi_bir']; 
                          $cevap721 = $cevapcek['cevap_yedi_iki']; 
                          $cevap731 = $cevapcek['cevap_yedi_uc']; 
                          $cevap741 = $cevapcek['cevap_yedi_dort']; 
   
   $cevap_bir1 = 
   $cevap111+
   $cevap211+
   $cevap311+
   $cevap411+
   $cevap511+
   $cevap611+
   $cevap711;
   $cevap_iki1 = 
   $cevap121+
   $cevap221+
   $cevap321+
   $cevap421+
   $cevap521+
   $cevap621+
   $cevap721;
   $cevap_uc1 = 
   $cevap131+
   $cevap231+
   $cevap331+
   $cevap431+
   $cevap531+
   $cevap631+
   $cevap731;
   $cevap_dort1 = 
   $cevap141+
   $cevap241+
   $cevap341+
   $cevap441+
   $cevap541+
   $cevap641+
   $cevap741;
   
   $cevap_bir =  
   $cevap_bir1 - 7; 
   $cevap_iki =  
   $cevap_iki1 - 7; 
   $cevap_uc =  
   $cevap_uc1 - 7; 
   $cevap_dort =  
   $cevap_dort1 - 7;
                        ?>
                             
                          <tr>
                          <th><?php echo abs($cevap_bir);?></th>
                          <th><?php echo abs($cevap_iki);?></th>
                          <th><?php echo abs($cevap_uc);?></th>
                          <th><?php echo abs($cevap_dort);?></th>

                            <td style="float:right">

                              <form action="netting/processing.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $cevapcek['id'] ?>">

                              <button name="cevapsil" class="btn btn-outline-danger">Sil</button>
                                                            </form>

                          </tr>
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
