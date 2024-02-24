<?php
session_start();
require 'netting/connection.php';

$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kad=:ad ");
$kullanicisor->execute(array(
'ad'=>$_SESSION['ad']
));
$say=$kullanicisor->rowCount();



if ($say==0) {
  header('Location:login?durum=izinsiz');
  die;
}

error_reporting(0);

$ayar=$baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="icon">
    <link href="../panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="apple-touch-icon">
    <title><?php echo $ayarcek['baslik'] ?></title>


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

  <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="../css/nice-select.css">
</head>

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
                  <h4 class="card-title">Veriler Tablosu Değişimi</h4>
              </div>

              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                        <select class="form-select mb-4">
                          <option disabled selected >Seçin</option>
                          <option disabled >Ocak</option>
                          <option value="veri1">Ocak 1.Hafta</option>
                          <option value="veri2">Ocak 2.Hafta</option>
                          <option value="veri3">Ocak 3.Hafta</option>
                          <option value="veri4">Ocak 4.Hafta</option>
                          <option disabled >Şubat</option>
                          <option value="veri5">Şubat 1.Hafta</option>
                          <option value="veri6">Şubat 2.Hafta</option>
                          <option value="veri7">Şubat 3.Hafta</option>
                          <option value="veri8">Şubat 4.Hafta</option>
                          <option disabled >Mart</option>
                          <option value="veri9">Mart 1.Hafta</option>
                          <option value="veri10">Mart 3.Hafta</option>
                          <option value="veri11">Mart 3.Hafta</option>
                          <option value="veri12">Mart 4.Hafta</option>
                          <option disabled >Nisan</option>
                          <option value="veri13">Nisan 1.Hafta</option>
                          <option value="veri14">Nisan 2.Hafta</option>
                          <option value="veri15">Nisan 3.Hafta</option>
                          <option value="veri16">Nisan 4.Hafta</option>
                          <option disabled >Mayıs</option>
                          <option value="veri17">Mayıs 1.Hafta</option>
                          <option value="veri18">Mayıs 2.Hafta</option>
                          <option value="veri19">Mayıs 3.Hafta</option>
                          <option value="veri20">Mayıs 4.Hafta</option>
                          <option disabled >Haziran</option>
                          <option value="veri21">Haziran 1.Hafta</option>
                          <option value="veri22">Haziran 2.Hafta</option>
                          <option value="veri23">Haziran 3.Hafta</option>
                          <option value="veri24">Haziran 4.Hafta</option>
                          <option disabled >Temmuz</option>
                          <option value="veri25">Temmuz 1.Hafta</option>
                          <option value="veri26">Temmuz 2.Hafta</option>
                          <option value="veri27">Temmuz 3.Hafta</option>
                          <option value="veri28">Temmuz 4.Hafta</option>
                          <option disabled >Ağustos</option>
                          <option value="veri29">Ağustos 1.Hafta</option>
                          <option value="veri30">Ağustos 2.Hafta</option>
                          <option value="veri31">Ağustos 3.Hafta</option>
                          <option value="veri32">Ağustos 4.Hafta</option>
                          <option disabled >Eylül</option>
                          <option value="veri33">Eylül 1.Hafta</option>
                          <option value="veri34">Eylül 2.Hafta</option>
                          <option value="veri35">Eylül 3.Hafta</option>
                          <option value="veri36">Eylül 4.Hafta</option>
                          <option disabled >Ekim</option>
                          <option value="veri37">Ekim 1.Hafta</option>
                          <option value="veri38">Ekim 2.Hafta</option>
                          <option value="veri39">Ekim 3.Hafta</option>
                          <option value="veri40">Ekim 4.Hafta</option>
                          <option disabled >Kasım</option>
                          <option value="veri41">Kasım 1.Hafta</option>
                          <option value="veri42">Kasım 2.Hafta</option>
                          <option value="veri43">Kasım 3.Hafta</option>
                          <option value="veri44">Kasım 4.Hafta</option>
                          <option disabled >Aralık</option>
                          <option value="veri45">Aralık 5.Hafta</option>
                          <option value="veri46">Aralık 5.Hafta</option>
                          <option value="veri47">Aralık 5.Hafta</option>
                          <option value="veri48">Aralık 5.Hafta</option>
                        </select>
                      </div>
                      <style media="screen">
                        .buttons a
                        {
                        width: 75px;
                        }
                      </style>
                      <div class="buttons">
<button name="veri" type="submit" class="btn btn-outline-primary">Değiştir</button>
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
