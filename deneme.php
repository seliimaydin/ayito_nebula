<?php 
require_once "header.php";

$baglantis = $baglanti->query("SELECT * FROM cevap");

$cevapcek=$baglanti->prepare("SELECT * FROM cevap");
$cevapcek->execute();

$Sorgu = $baglantis;
$SorguIki = $baglantis;
$SorguUc = $baglantis;
$SorguDort = $baglantis;

$SorguBirBir = $baglantis;
$SorguIkiBir = $baglantis;
$SorguUcBir = $baglantis;
$SorguDortBir = $baglantis;

$SorguBirIki = $baglantis;
$SorguIkiIki = $baglantis;
$SorguUcIki = $baglantis;
$SorguDortIki = $baglantis;

$SorguBirUc = $baglantis;
$SorguIkiUc = $baglantis;
$SorguUcUc = $baglantis;
$SorguDortUc = $baglantis;

$SorguBirDort = $baglantis;
$SorguIkiDort = $baglantis;
$SorguUcDort = $baglantis;
$SorguDortDort = $baglantis;

$SorguBirBes = $baglantis;
$SorguIkiBes = $baglantis;
$SorguUcBes = $baglantis;
$SorguDortBes = $baglantis;

$SorguBirAlti = $baglantis;
$SorguIkiAlti = $baglantis;
$SorguUcAlti = $baglantis;
$SorguDortAlti = $baglantis;

?>



<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h2> Yemek Sayıları <small>

            </small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <?php 

            $say =1;

            $yemek = 1;

            ?>
           
            <!-- 1. Gün Başlangıç --> <br>
            <h3 align="center"><?php echo $say++ ?>. Gün</h3><br>
         
            <div class="row">
             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
               <p>1. Öğün</p>

               <?php if ($Sorgu){
                $ToplamBirDegeri = 0;
                $ToplamSifirDegeri = 0;

                foreach ($Sorgu as $Kayit) {

                  $Deger = $Kayit["cevap_bir_bir"];

                  if ($Deger == 1) {

                    $ToplamBirDegeri++;

                  } else {

                    $ToplamSifirDegeri++;

                  }
                }


                echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeri . "<br>";

                echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeri . "<br>";


              } else {


                echo "Sorgu Hatası";

              }

              ?>

            </div>