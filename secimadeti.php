<?php
ob_start();
session_start();

include 'Panel/netting/connection.php';


$cevapsor = $baglanti->prepare("SELECT * FROM cevap");
$cevapsor->execute();
while (  $cevapcek = $cevapsor->fetch(PDO::FETCH_ASSOC)); {
  



?>
<?php



$cevapsor = $baglanti->prepare("SELECT * FROM cevap");
$cevapsor->execute();

$Sorgu = $baglanti->prepare("SELECT * FROM cevap");
$Sorguİki = $baglanti->prepare("SELECT * FROM cevap");
$SorguUc = $baglanti->prepare("SELECT * FROM cevap");
$SorguDort = $baglanti->prepare("SELECT * FROM cevap");

$SorguBirBir = $baglanti->prepare("SELECT * FROM cevap");
$SorguİkiBir = $baglanti->prepare("SELECT * FROM cevap");
$SorguUcBir = $baglanti->prepare("SELECT * FROM cevap");
$SorguDortBir = $baglanti->prepare("SELECT * FROM cevap");

$SorguBirİki = $baglanti->prepare("SELECT * FROM cevap");
$Sorguİkiİki = $baglanti->prepare("SELECT * FROM cevap");
$SorguUcİki = $baglanti->prepare("SELECT * FROM cevap");
$SorguDortİki = $baglanti->prepare("SELECT * FROM cevap");

$SorguBirUc = $baglanti->prepare("SELECT * FROM cevap");
$SorguİkiUc = $baglanti->prepare("SELECT * FROM cevap");
$SorguUcUc = $baglanti->prepare("SELECT * FROM cevap");
$SorguDortUc = $baglanti->prepare("SELECT * FROM cevap");

$SorguBirDort = $baglanti->prepare("SELECT * FROM cevap");
$SorguİkiDort = $baglanti->prepare("SELECT * FROM cevap");
$SorguUcDort = $baglanti->prepare("SELECT * FROM cevap");
$SorguDortDort = $baglanti->prepare("SELECT * FROM cevap");

$SorguBirBes = $baglanti->prepare("SELECT * FROM cevap");
$SorguİkiBes = $baglanti->prepare("SELECT * FROM cevap");
$SorguUcBes = $baglanti->prepare("SELECT * FROM cevap");
$SorguDortBes = $baglanti->prepare("SELECT * FROM cevap");

$SorguBirAlti = $baglanti->prepare("SELECT * FROM cevap");
$SorguİkiAlti = $baglanti->prepare("SELECT * FROM cevap");
$SorguUcAlti = $baglanti->prepare("SELECT * FROM cevap");
$SorguDortAlti = $baglanti->prepare("SELECT * FROM cevap");

?>




<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">


            <?php

            $say = 1;

            $yemek = 1;

            ?>

            <!-- 1. Gün Başlangıç --> <br>
            <h3 align="center"><?php echo $say++ ?>. Gün</h3><br>

            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>1. Öğün</p>

                <?php if ($Sorgu) {
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
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>2. Öğün</p>

                <?php if ($Sorguİki) {
                  $ToplamBirDegeriİki = 0;
                  $ToplamSifirDegeriİki = 0;

                  foreach ($Sorguİki as $Kayitİki) {

                    $Degerİki = $Kayitİki["cevap_bir_iki"];

                    if ($Degerİki == 1) {

                      $ToplamBirDegeriİki++;
                    } else {

                      $ToplamSifirDegeriİki++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİki . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİki . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>3. Öğün</p>

                <?php if ($SorguUc) {
                  $ToplamBirDegeriUc = 0;
                  $ToplamSifirDegeriUc = 0;

                  foreach ($SorguUc as $KayitUc) {

                    $DegerUc = $KayitUc["cevap_bir_uc"];

                    if ($DegerUc == 1) {

                      $ToplamBirDegeriUc++;
                    } else {

                      $ToplamSifirDegeriUc++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUc . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUc . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>4. Öğün</p>

                <?php if ($SorguDort) {
                  $ToplamBirDegeriDort = 0;
                  $ToplamSifirDegeriDort = 0;

                  foreach ($SorguDort as $KayitDort) {

                    $DegerDort = $KayitDort["cevap_bir_dort"];

                    if ($DegerDort == 1) {

                      $ToplamBirDegeriDort++;
                    } else {

                      $ToplamSifirDegeriDort++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDort . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDort . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
            </div>
            <!-- 1. Gün Bitiş -->
            <?php $ToplamSifirDegeriBirinciGun = $ToplamSifirDegeri + $ToplamSifirDegeriİki + $ToplamSifirDegeriUc + $ToplamSifirDegeriDort; ?>



            <h4 align="center">Toplam Yemeyen Sayısı=<?php echo $ToplamSifirDegeriBirinciGun; ?></h4>


            <?php
            $_SESSION['birincigun'] = $ToplamSifirDegeriBirinciGun;


            ?>









            <!-- 2. Gün Başlangıç --> <br>
            <h3 align="center"><?php echo $say++ ?>. Gün</h3><br>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>1. Öğün</p>

                <?php if ($SorguBirBir) {
                  $ToplamBirDegeriBirBir = 0;
                  $ToplamSifirDegeriBirBir = 0;

                  foreach ($SorguBirBir as $KayitBirBir) {

                    $DegerBirBir = $KayitBirBir["cevap_iki_bir"];

                    if ($DegerBirBir == 1) {

                      $ToplamBirDegeriBirBir++;
                    } else {

                      $ToplamSifirDegeriBirBir++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirBir . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirBir . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>2. Öğün</p>

                <?php if ($SorguİkiBir) {
                  $ToplamBirDegeriİkiBir = 0;
                  $ToplamSifirDegeriİkiBir = 0;

                  foreach ($SorguİkiBir as $KayitİkiBir) {

                    $DegerİkiBir = $KayitİkiBir["cevap_iki_iki"];

                    if ($DegerİkiBir == 1) {

                      $ToplamBirDegeriİkiBir++;
                    } else {

                      $ToplamSifirDegeriİkiBir++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiBir . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiBir . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>3. Öğün</p>

                <?php if ($SorguUcBir) {
                  $ToplamBirDegeriUcBir = 0;
                  $ToplamSifirDegeriUcBir = 0;

                  foreach ($SorguUcBir as $KayitUcBir) {

                    $DegerUcBir = $KayitUcBir["cevap_iki_uc"];

                    if ($DegerUcBir == 1) {

                      $ToplamBirDegeriUcBir++;
                    } else {

                      $ToplamSifirDegeriUcBir++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcBir . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcBir . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>4. Öğün</p>

                <?php if ($SorguDortBir) {
                  $ToplamBirDegeriDortBir = 0;
                  $ToplamSifirDegeriDortBir = 0;

                  foreach ($SorguDortBir as $KayitDortBir) {

                    $DegerDortBir = $KayitDortBir["cevap_iki_dort"];

                    if ($DegerDortBir == 1) {

                      $ToplamBirDegeriDortBir++;
                    } else {

                      $ToplamSifirDegeriDortBir++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortBir . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortBir . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
            </div>
            <!-- 2. Gün Bitiş -->





            <h4 align="center">Toplam Yemeyen Sayısı=<?php echo $ToplamSifirDegeriBirBir + $ToplamSifirDegeriİkiBir + $ToplamSifirDegeriUcBir + $ToplamSifirDegeriDortBir; ?></h4>














            <!-- 3. Gün Başlangıç --> <br>
            <h3 align="center"><?php echo $say++ ?>. Gün</h3><br>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>1. Öğün</p>

                <?php if ($SorguBirİki) {
                  $ToplamBirDegeriBirİki = 0;
                  $ToplamSifirDegeriBirİki = 0;

                  foreach ($SorguBirİki as $KayitBirİki) {

                    $DegerBirİki = $KayitBirİki["cevap_uc_bir"];

                    if ($DegerBirİki == 1) {

                      $ToplamBirDegeriBirİki++;
                    } else {

                      $ToplamSifirDegeriBirİki++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirİki . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirİki . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>2. Öğün</p>

                <?php if ($Sorguİkiİki) {
                  $ToplamBirDegeriİkiİki = 0;
                  $ToplamSifirDegeriİkiİki = 0;

                  foreach ($Sorguİkiİki as $Kayitİkiİki) {

                    $Degerİkiİki = $Kayitİkiİki["cevap_uc_iki"];

                    if ($Degerİkiİki == 1) {

                      $ToplamBirDegeriİkiİki++;
                    } else {

                      $ToplamSifirDegeriİkiİki++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiİki . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiİki . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>3. Öğün</p>

                <?php if ($SorguUcİki) {
                  $ToplamBirDegeriUcİki = 0;
                  $ToplamSifirDegeriUcİki = 0;

                  foreach ($SorguUcİki as $KayitUcİki) {

                    $DegerUcİki = $KayitUcİki["cevap_uc_uc"];

                    if ($DegerUcİki == 1) {

                      $ToplamBirDegeriUcİki++;
                    } else {

                      $ToplamSifirDegeriUcİki++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcİki . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcİki . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>4. Öğün</p>

                <?php if ($SorguDortİki) {
                  $ToplamBirDegeriDortİki = 0;
                  $ToplamSifirDegeriDortİki = 0;

                  foreach ($SorguDortİki as $KayitDortİki) {

                    $DegerDortİki = $KayitDortİki["cevap_uc_dort"];

                    if ($DegerDortİki == 1) {

                      $ToplamBirDegeriDortİki++;
                    } else {

                      $ToplamSifirDegeriDortİki++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortİki . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortİki . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
            </div>
            <!-- 3. Gün Bitiş -->








            <h4 align="center">Toplam Yemeyen Sayısı=<?php echo $ToplamSifirDegeriBirİki + $ToplamSifirDegeriİkiİki + $ToplamSifirDegeriUcİki + $ToplamSifirDegeriDortİki; ?></h4>











            <!-- 4. Gün Başlangıç --> <br>
            <h3 align="center"><?php echo $say++ ?>. Gün</h3><br>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>1. Öğün</p>

                <?php if ($SorguBirUc) {
                  $ToplamBirDegeriBirUc = 0;
                  $ToplamSifirDegeriBirUc = 0;

                  foreach ($SorguBirUc as $KayitBirUc) {

                    $DegerBirUc = $KayitBirUc["cevap_bir_uc"];

                    if ($DegerBirUc == 1) {

                      $ToplamBirDegeriBirUc++;
                    } else {

                      $ToplamSifirDegeriBirUc++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirUc . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirUc . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>2. Öğün</p>

                <?php if ($SorguİkiUc) {
                  $ToplamBirDegeriİkiUc = 0;
                  $ToplamSifirDegeriİkiUc = 0;

                  foreach ($SorguİkiUc as $KayitİkiUc) {

                    $DegerİkiUc = $KayitİkiUc["cevap_iki_uc"];

                    if ($DegerİkiUc == 1) {

                      $ToplamBirDegeriİkiUc++;
                    } else {

                      $ToplamSifirDegeriİkiUc++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiUc . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiUc . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>3. Öğün</p>

                <?php if ($SorguUcUc) {
                  $ToplamBirDegeriUcUc = 0;
                  $ToplamSifirDegeriUcUc = 0;

                  foreach ($SorguUcUc as $KayitUcUc) {

                    $DegerUcUc = $KayitUcUc["cevap_uc_uc"];

                    if ($DegerUcUc == 1) {

                      $ToplamBirDegeriUcUc++;
                    } else {

                      $ToplamSifirDegeriUcUc++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcUc . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcUc . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>4. Öğün</p>

                <?php if ($SorguDortUc) {
                  $ToplamBirDegeriDortUc = 0;
                  $ToplamSifirDegeriDortUc = 0;

                  foreach ($SorguDortUc as $KayitDortUc) {

                    $DegerDortUc = $KayitDortUc["cevap_dort_uc"];

                    if ($DegerDortUc == 1) {

                      $ToplamBirDegeriDortUc++;
                    } else {

                      $ToplamSifirDegeriDortUc++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortUc . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortUc . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
            </div>
            <!-- 4. Gün Bitiş -->







            <h4 align="center">Toplam Yemeyen Sayısı=<?php echo $ToplamSifirDegeriBirUc + $ToplamSifirDegeriİkiUc + $ToplamSifirDegeriUcUc + $ToplamSifirDegeriDortUc; ?></h4>















            <!-- 5. Gün Başlangıç --> <br>
            <h3 align="center"><?php echo $say++ ?>. Gün</h3><br>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>1. Öğün</p>

                <?php if ($SorguBirDort) {
                  $ToplamBirDegeriBirDort = 0;
                  $ToplamSifirDegeriBirDort = 0;

                  foreach ($SorguBirDort as $KayitBirDort) {

                    $DegerBirDort = $KayitBirDort["cevap_bir_dort"];

                    if ($DegerBirDort == 1) {

                      $ToplamBirDegeriBirDort++;
                    } else {

                      $ToplamSifirDegeriBirDort++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirDort . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirDort . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>2. Öğün</p>

                <?php if ($SorguİkiDort) {
                  $ToplamBirDegeriİkiDort = 0;
                  $ToplamSifirDegeriİkiDort = 0;

                  foreach ($SorguİkiDort as $KayitİkiDort) {

                    $DegerİkiDort = $KayitİkiDort["cevap_iki_dort"];

                    if ($DegerİkiDort == 1) {

                      $ToplamBirDegeriİkiDort++;
                    } else {

                      $ToplamSifirDegeriİkiDort++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiDort . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiDort . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>3. Öğün</p>

                <?php if ($SorguUcDort) {
                  $ToplamBirDegeriUcDort = 0;
                  $ToplamSifirDegeriUcDort = 0;

                  foreach ($SorguUcDort as $KayitUcDort) {

                    $DegerUcDort = $KayitUcDort["cevap_uc_dort"];

                    if ($DegerUcDort == 1) {

                      $ToplamBirDegeriUcDort++;
                    } else {

                      $ToplamSifirDegeriUcDort++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcDort . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcDort . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>4. Öğün</p>

                <?php if ($SorguDortDort) {
                  $ToplamBirDegeriDortDort = 0;
                  $ToplamSifirDegeriDortDort = 0;

                  foreach ($SorguDortDort as $KayitDortDort) {

                    $DegerDortDort = $KayitDortDort["cevap_dort_dort"];

                    if ($DegerDortDort == 1) {

                      $ToplamBirDegeriDortDort++;
                    } else {

                      $ToplamSifirDegeriDortDort++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortDort . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortDort . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
            </div>
            <!-- 5. Gün Bitiş -->














            <!-- 6. Gün Başlangıç --> <br>
            <h3 align="center"><?php echo $say++ ?>. Gün</h3><br>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>1. Öğün</p>

                <?php if ($SorguBirBes) {
                  $ToplamBirDegeriBirBes = 0;
                  $ToplamSifirDegeriBirBes = 0;

                  foreach ($SorguBirBes as $KayitBirBes) {

                    $DegerBirBes = $KayitBirBes["cevap_bir_bes"];

                    if ($DegerBirBes == 1) {

                      $ToplamBirDegeriBirBes++;
                    } else {

                      $ToplamSifirDegeriBirBes++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirBes . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirBes . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>2. Öğün</p>

                <?php if ($SorguİkiBes) {
                  $ToplamBirDegeriİkiBes = 0;
                  $ToplamSifirDegeriİkiBes = 0;

                  foreach ($SorguİkiBes as $KayitİkiBes) {

                    $DegerİkiBes = $KayitİkiBes["cevap_iki_bes"];

                    if ($DegerİkiBes == 1) {

                      $ToplamBirDegeriİkiBes++;
                    } else {

                      $ToplamSifirDegeriİkiBes++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiBes . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiBes . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>3. Öğün</p>

                <?php if ($SorguUcBes) {
                  $ToplamBirDegeriUcBes = 0;
                  $ToplamSifirDegeriUcBes = 0;

                  foreach ($SorguUcBes as $KayitUcBes) {

                    $DegerUcBes = $KayitUcBes["cevap_uc_bes"];

                    if ($DegerUcBes == 1) {

                      $ToplamBirDegeriUcBes++;
                    } else {

                      $ToplamSifirDegeriUcBes++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcBes . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcBes . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>4. Öğün</p>

                <?php if ($SorguDortBes) {
                  $ToplamBirDegeriDortBes = 0;
                  $ToplamSifirDegeriDortBes = 0;

                  foreach ($SorguDortBes as $KayitDortBes) {

                    $DegerDortBes = $KayitDortBes["cevap_dort_bes"];

                    if ($DegerDortBes == 1) {

                      $ToplamBirDegeriDortBes++;
                    } else {

                      $ToplamSifirDegeriDortBes++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortBes . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortBes . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
            </div>
            <!-- 6. Gün Bitiş -->






            <h4 align="center">Toplam Yemeyen Sayısı=<?php echo $ToplamSifirDegeriBirDort + $ToplamSifirDegeriİkiDort + $ToplamSifirDegeriUcDort + $ToplamSifirDegeriDortDort; ?></h4>











            <!-- 7. Gün Başlangıç --> <br>
            <h3 align="center"><?php echo $say++ ?>. Gün</h3><br>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>1. Öğün</p>

                <?php if ($SorguBirAlti) {
                  $ToplamBirDegeriBirAlti = 0;
                  $ToplamSifirDegeriBirAlti = 0;

                  foreach ($SorguBirAlti as $KayitBirAlti) {

                    $DegerBirAlti = $KayitBirAlti["cevap_yedi_bir"];

                    if ($DegerBirAlti == 1) {

                      $ToplamBirDegeriBirAlti++;
                    } else {

                      $ToplamSifirDegeriBirAlti++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirAlti . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirAlti . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>2. Öğün</p>

                <?php if ($SorguİkiAlti) {
                  $ToplamBirDegeriİkiAlti = 0;
                  $ToplamSifirDegeriİkiAlti = 0;

                  foreach ($SorguİkiAlti as $KayitİkiAlti) {

                    $DegerİkiAlti = $KayitİkiAlti["cevap_yedi_iki"];

                    if ($DegerİkiAlti == 1) {

                      $ToplamBirDegeriİkiAlti++;
                    } else {

                      $ToplamSifirDegeriİkiAlti++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiAlti . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiAlti . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>3. Öğün</p>

                <?php if ($SorguUcAlti) {
                  $ToplamBirDegeriUcAlti = 0;
                  $ToplamSifirDegeriUcAlti = 0;

                  foreach ($SorguUcAlti as $KayitUcAlti) {

                    $DegerUcAlti = $KayitUcAlti["cevap_yedi_uc"];

                    if ($DegerUcAlti == 1) {

                      $ToplamBirDegeriUcAlti++;
                    } else {

                      $ToplamSifirDegeriUcAlti++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcAlti . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcAlti . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <p>4. Öğün</p>

                <?php if ($SorguDortAlti) {
                  $ToplamBirDegeriDortAlti = 0;
                  $ToplamSifirDegeriDortAlti = 0;

                  foreach ($SorguDortAlti as $KayitDortAlti) {

                    $DegerDortAlti = $KayitDortAlti["cevap_yedi_dort"];

                    if ($DegerDortAlti == 1) {

                      $ToplamBirDegeriDortAlti++;
                    } else {

                      $ToplamSifirDegeriDortAlti++;
                    }
                  }


                  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortAlti . "<br>";

                  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortAlti . "<br>";
                } else {


                  echo "Sorgu Hatası";
                }
                ?>

              </div>
            </div>
            <!-- 7. Gün Bitiş -->

            <h4 align="center">Toplam Yemeyen Sayısı=<?php echo $ToplamSifirDegeriBirAlti + $ToplamSifirDegeriİkiAlti + $ToplamSifirDegeriUcAlti + $ToplamSifirDegeriDortAlti; ?></h4>




          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php }?>