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
                        
        <?php           
$yemek=$baglanti->prepare("SELECT * from yemek  where id=?");

$yemek->execute(array(2));

$yemekcek=$yemek->fetch(PDO::FETCH_ASSOC);
?>
<?php

if ($_GET['status']=="successful") { ?>
    <div class="alert alert-success text-center mx-auto justify-content-end  w-75">Yemek Listesi Güncellemesi Başarılı.</div>

  <?php
}
elseif($_GET['status']=="unsuccessful"){?>
  <div class="alert alert-danger text-center mx-auto justify-content-end  w-75">Yemek Listesi Güncellemesi Başarısız.</div>
<?php
}
?>
    <section class="section">
        <div class="card">

            <div class="card-header">
                <form action="netting/processing.php" method="POST" enctype="multipart/form-data" role="form">
                    <h4 class="card-title">Yemek Listesi</h4>
            </div>

            <div class="card-body ">
                <div class="row ">
                    
                            <p class="display-5 fs-3 text-dark text-start">1.Gün</p>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Çorba</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_bir_bir" value="<?php echo $yemekcek['yemek_bir_bir'] ?>">
                        </div>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Ana Yemek</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_bir_iki" value="<?php echo $yemekcek['yemek_bir_iki'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Makarna-Pilav</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_bir_uc" value="<?php echo $yemekcek['yemek_bir_uc'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Tatlı-Salata</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_bir_dort" value="<?php echo $yemekcek['yemek_bir_dort'] ?>">
                        </div>
                            <p class="display-5 fs-3 text-dark text-start">2.Gün</p>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Çorba</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_iki_bir" value="<?php echo $yemekcek['yemek_iki_bir'] ?>">
                        </div>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Ana Yemek</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_iki_iki" value="<?php echo $yemekcek['yemek_iki_iki'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Makarna-Pilav</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_iki_uc" value="<?php echo $yemekcek['yemek_iki_uc'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Tatlı-Salata</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_iki_dort" value="<?php echo $yemekcek['yemek_iki_dort'] ?>">
                        </div>
                            <p class="display-5 fs-3 text-dark text-start">3.Gün</p>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Çorba</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_uc_bir" value="<?php echo $yemekcek['yemek_uc_bir'] ?>">
                        </div>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Ana Yemek</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_uc_iki" value="<?php echo $yemekcek['yemek_uc_iki'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Makarna-Pilav</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_uc_uc" value="<?php echo $yemekcek['yemek_uc_uc'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Tatlı-Salata</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_uc_dort" value="<?php echo $yemekcek['yemek_uc_dort'] ?>">
                        </div>
                            <p class="display-5 fs-3 text-dark text-start">4.Gün</p>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Çorba</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_dort_bir" value="<?php echo $yemekcek['yemek_dort_bir'] ?>">
                        </div>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Ana Yemek</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_dort_iki" value="<?php echo $yemekcek['yemek_dort_iki'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Makarna-Pilav</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_dort_uc" value="<?php echo $yemekcek['yemek_dort_uc'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Tatlı-Salata</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_dort_dort" value="<?php echo $yemekcek['yemek_dort_dort'] ?>">
                        </div>
                            <p class="display-5 fs-3 text-dark text-start">5.Gün</p>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Çorba</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_bes_bir" value="<?php echo $yemekcek['yemek_bes_bir'] ?>">
                        </div>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Ana Yemek</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_bes_iki" value="<?php echo $yemekcek['yemek_bes_iki'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Makarna-Pilav</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_bes_uc" value="<?php echo $yemekcek['yemek_bes_uc'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Tatlı-Salata</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_bes_dort" value="<?php echo $yemekcek['yemek_bes_dort'] ?>">
                        </div>
                            <p class="display-5 fs-3 text-dark text-start">6.Gün</p>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Çorba</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_alti_bir" value="<?php echo $yemekcek['yemek_alti_bir'] ?>">
                        </div>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Ana Yemek</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_alti_iki" value="<?php echo $yemekcek['yemek_alti_iki'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Makarna-Pilav</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_alti_uc" value="<?php echo $yemekcek['yemek_alti_uc'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Tatlı-Salata</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_alti_dort" value="<?php echo $yemekcek['yemek_alti_dort'] ?>">
                        </div>
                            <p class="display-5 fs-3 text-dark text-start">7.Gün</p>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Çorba</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_yedi_bir" value="<?php echo $yemekcek['yemek_yedi_bir'] ?>">
                        </div>
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Ana Yemek</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_yedi_iki" value="<?php echo $yemekcek['yemek_yedi_iki'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Makarna-Pilav</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_yedi_uc" value="<?php echo $yemekcek['yemek_yedi_uc'] ?>">
                        </div>
                        
                        <div class="col-md-3 mb-4 form-group">
                            <label for="basicInput">Tatlı-Salata</label>
                            <input type="text" class="form-control" id="basicInput" name="yemek_yedi_dort" value="<?php echo $yemekcek['yemek_yedi_dort'] ?>">
                        </div>
                        
                    </div>
                    <style media="screen">
                        .buttons a {
                            width: 75px;
                        }
                    </style>
                    <div class="buttons">
                        <button name="yemekkaydet" type="submit" class="btn btn-outline-primary">Değiştir</button>
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