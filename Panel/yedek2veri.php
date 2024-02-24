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
                        <tr></tr>
                      </thead>
                      <tbody>
                      <?php
                        $ihtiyac=$baglanti->prepare("SELECT * from ihtiyac order by id DESC ");

                        $ihtiyac->execute();

                        while ($ihtiyaccek=$ihtiyac->fetch(PDO::FETCH_ASSOC)) {

                       $ihtiyac111 = $_POST['ihtiyac_bir_bir']; 
                       $ihtiyac121 = $_POST['ihtiyac_bir_iki']; 
                       $ihtiyac131 = $_POST['ihtiyac_bir_uc']; 
                       $ihtiyac141 = $_POST['ihtiyac_bir_dort']; 
                       $ihtiyac211 = $_POST['ihtiyac_iki_bir']; 
                       $ihtiyac221 = $_POST['ihtiyac_iki_iki']; 
                       $ihtiyac231 = $_POST['ihtiyac_iki_uc']; 
                       $ihtiyac241 = $_POST['ihtiyac_iki_dort']; 
                       $ihtiyac311 = $_POST['ihtiyac_uc_bir']; 
                       $ihtiyac321 = $_POST['ihtiyac_uc_iki']; 
                       $ihtiyac331 = $_POST['ihtiyac_uc_uc']; 
                       $ihtiyac341 = $_POST['ihtiyac_uc_dort']; 
                       $ihtiyac411 = $_POST['ihtiyac_dort_bir']; 
                       $ihtiyac421 = $_POST['ihtiyac_dort_iki']; 
                       $ihtiyac431 = $_POST['ihtiyac_dort_uc']; 
                       $ihtiyac441 = $_POST['ihtiyac_dort_dort']; 
                       $ihtiyac511 = $_POST['ihtiyac_bes_bir']; 
                       $ihtiyac521 = $_POST['ihtiyac_bes_iki']; 
                       $ihtiyac531 = $_POST['ihtiyac_bes_uc']; 
                       $ihtiyac541 = $_POST['ihtiyac_bes_dort']; 
                       $ihtiyac611 = $_POST['ihtiyac_alti_bir']; 
                       $ihtiyac621 = $_POST['ihtiyac_alti_iki']; 
                       $ihtiyac631 = $_POST['ihtiyac_alti_uc']; 
                       $ihtiyac641 = $_POST['ihtiyac_alti_dort']; 
                       $ihtiyac711 = $_POST['ihtiyac_yedi_bir']; 
                       $ihtiyac721 = $_POST['ihtiyac_yedi_iki']; 
                       $ihtiyac731 = $_POST['ihtiyac_yedi_uc']; 
                       $ihtiyac741 = $_POST['ihtiyac_yedi_dort']; 

$ihtiyac_bir1 = 
$ihtiyac111+
$ihtiyac211+
$ihtiyac311+
$ihtiyac411+
$ihtiyac511+
$ihtiyac611+
$ihtiyac711;
$ihtiyac_iki1 = 
$ihtiyac121+
$ihtiyac221+
$ihtiyac321+
$ihtiyac421+
$ihtiyac521+
$ihtiyac621+
$ihtiyac721;
$ihtiyac_uc1 = 
$ihtiyac131+
$ihtiyac231+
$ihtiyac331+
$ihtiyac431+
$ihtiyac531+
$ihtiyac631+
$ihtiyac731;
$ihtiyac_dort1 = 
$ihtiyac141+
$ihtiyac241+
$ihtiyac341+
$ihtiyac441+
$ihtiyac541+
$ihtiyac641+
$ihtiyac741;

$ihtiyac_bir =  
$ihtiyac_bir1 - 7; 
$ihtiyac_iki =  
$ihtiyac_iki1 - 7; 
$ihtiyac_uc =  
$ihtiyac_uc1 - 7; 
$ihtiyac_dort =  
$ihtiyac_dort1 - 7; 


                        ?>
                            
                          <tr>
                          <th><?php echo abs($ihtiyac_bir);?></th>
                          <th><?php echo abs($ihtiyac_iki);?></th>
                          <th><?php echo abs($ihtiyac_uc);?></th>
                          <th><?php echo abs($ihtiyac_dort);?></th>


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
