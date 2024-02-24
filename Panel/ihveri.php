<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>
<link rel="stylesheet" href="../css/Bootstrap.css">
<link rel="stylesheet" href="../css/nice-select.css">

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
                  <h4 class="card-title">İhtiyaç Sahibi Veriler Tablosu Değişimi</h4>
              </div>

              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                        <select class="form-select mb-4">
                          <option disabled selected >Seçin</option>
                          <option disabled >Ocak</option>
                          <option value="veriihtiyac1">Ocak 1.Hafta</option>
                          <option value="veriihtiyac2">Ocak 2.Hafta</option>
                          <option value="veriihtiyac3">Ocak 3.Hafta</option>
                          <option value="veriihtiyac4">Ocak 4.Hafta</option>
                          <option disabled >Şubat</option>
                          <option value="veriihtiyac5">Şubat 1.Hafta</option>
                          <option value="veriihtiyac6">Şubat 2.Hafta</option>
                          <option value="veriihtiyac7">Şubat 3.Hafta</option>
                          <option value="veriihtiyac8">Şubat 4.Hafta</option>
                          <option disabled >Mart</option>
                          <option value="veriihtiyac9">Mart 1.Hafta</option>
                          <option value="veriihtiyac10">Mart 3.Hafta</option>
                          <option value="veriihtiyac11">Mart 3.Hafta</option>
                          <option value="veriihtiyac12">Mart 4.Hafta</option>
                          <option disabled >Nisan</option>
                          <option value="veriihtiyac13">Nisan 1.Hafta</option>
                          <option value="veriihtiyac14">Nisan 2.Hafta</option>
                          <option value="veriihtiyac15">Nisan 3.Hafta</option>
                          <option value="veriihtiyac16">Nisan 4.Hafta</option>
                          <option disabled >Mayıs</option>
                          <option value="veriihtiyac17">Mayıs 1.Hafta</option>
                          <option value="veriihtiyac18">Mayıs 2.Hafta</option>
                          <option value="veriihtiyac19">Mayıs 3.Hafta</option>
                          <option value="veriihtiyac20">Mayıs 4.Hafta</option>
                          <option disabled >Haziran</option>
                          <option value="veriihtiyac21">Haziran 1.Hafta</option>
                          <option value="veriihtiyac22">Haziran 2.Hafta</option>
                          <option value="veriihtiyac23">Haziran 3.Hafta</option>
                          <option value="veriihtiyac24">Haziran 4.Hafta</option>
                          <option disabled >Temmuz</option>
                          <option value="veriihtiyac25">Temmuz 1.Hafta</option>
                          <option value="veriihtiyac26">Temmuz 2.Hafta</option>
                          <option value="veriihtiyac27">Temmuz 3.Hafta</option>
                          <option value="veriihtiyac28">Temmuz 4.Hafta</option>
                          <option disabled >Ağustos</option>
                          <option value="veriihtiyac29">Ağustos 1.Hafta</option>
                          <option value="veriihtiyac30">Ağustos 2.Hafta</option>
                          <option value="veriihtiyac31">Ağustos 3.Hafta</option>
                          <option value="veriihtiyac32">Ağustos 4.Hafta</option>
                          <option disabled >Eylül</option>
                          <option value="veriihtiyac33">Eylül 1.Hafta</option>
                          <option value="veriihtiyac34">Eylül 2.Hafta</option>
                          <option value="veriihtiyac35">Eylül 3.Hafta</option>
                          <option value="veriihtiyac36">Eylül 4.Hafta</option>
                          <option disabled >Ekim</option>
                          <option value="veriihtiyac37">Ekim 1.Hafta</option>
                          <option value="veriihtiyac38">Ekim 2.Hafta</option>
                          <option value="veriihtiyac39">Ekim 3.Hafta</option>
                          <option value="veriihtiyac40">Ekim 4.Hafta</option>
                          <option disabled >Kasım</option>
                          <option value="veriihtiyac41">Kasım 1.Hafta</option>
                          <option value="veriihtiyac42">Kasım 2.Hafta</option>
                          <option value="veriihtiyac43">Kasım 3.Hafta</option>
                          <option value="veriihtiyac44">Kasım 4.Hafta</option>
                          <option disabled >Aralık</option>
                          <option value="veriihtiyac45">Aralık 5.Hafta</option>
                          <option value="veriihtiyac46">Aralık 5.Hafta</option>
                          <option value="veriihtiyac47">Aralık 5.Hafta</option>
                          <option value="veriihtiyac48">Aralık 5.Hafta</option>
                        </select>
                      </div>
                      <style media="screen">
                        .buttons a
                        {
                        width: 75px;
                        }
                      </style>
                      <div class="buttons">
<button name="veriihtiyac" type="submit" class="btn btn-outline-primary">Değiştir</button>
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
