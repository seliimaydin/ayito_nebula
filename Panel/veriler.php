<?php require_once 'header.php';



$verisor = $baglanti->prepare("SELECT * FROM veri");
$verisor->execute();

$Sorgu = $baglanti->query("SELECT * FROM veri");
$Sorguİki = $baglanti->query("SELECT * FROM veri");
$SorguUc = $baglanti->query("SELECT * FROM veri");
$SorguDort = $baglanti->query("SELECT * FROM veri");

$SorguBirBir = $baglanti->query("SELECT * FROM veri");
$SorguİkiBir = $baglanti->query("SELECT * FROM veri");
$SorguUcBir = $baglanti->query("SELECT * FROM veri");
$SorguDortBir = $baglanti->query("SELECT * FROM veri");

$SorguBirİki = $baglanti->query("SELECT * FROM veri");
$Sorguİkiİki = $baglanti->query("SELECT * FROM veri");
$SorguUcİki = $baglanti->query("SELECT * FROM veri");
$SorguDortİki = $baglanti->query("SELECT * FROM veri");

$SorguBirUc = $baglanti->query("SELECT * FROM veri");
$SorguİkiUc = $baglanti->query("SELECT * FROM veri");
$SorguUcUc = $baglanti->query("SELECT * FROM veri");
$SorguDortUc = $baglanti->query("SELECT * FROM veri");

$SorguBirDort = $baglanti->query("SELECT * FROM veri");
$SorguİkiDort = $baglanti->query("SELECT * FROM veri");
$SorguUcDort = $baglanti->query("SELECT * FROM veri");
$SorguDortDort = $baglanti->query("SELECT * FROM veri");

$SorguBirBes = $baglanti->query("SELECT * FROM veri");
$SorguİkiBes = $baglanti->query("SELECT * FROM veri");
$SorguUcBes = $baglanti->query("SELECT * FROM veri");
$SorguDortBes = $baglanti->query("SELECT * FROM veri");

$SorguBirAlti = $baglanti->query("SELECT * FROM veri");
$SorguİkiAlti = $baglanti->query("SELECT * FROM veri");
$SorguUcAlti = $baglanti->query("SELECT * FROM veri");
$SorguDortAlti = $baglanti->query("SELECT * FROM veri");


?>
<style>
  tbody > th{
    font-size: 1px;
  }
</style>
<?php require_once 'sidebar.php'; ?>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
<style>
  body {
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
  $yemek = $baglanti->prepare("SELECT * from yemek  where id=?");

  $yemek->execute(array(2));

  $yemekcek = $yemek->fetch(PDO::FETCH_ASSOC);
  ?>
  <section class="section">
    <div class="table-responsive">
      <div class="card-body">
        <table class="table" id="table1">
          <thead>
            <tr>

              <th class="text-dark">1.gün</th>
              <th>Çorba</th>
              <th>Ana Yemek</th>
              <th>Pilav Makarna</th>
              <th>Tatlı Salata</th>
              <th class="text-dark">2.gün</th>
              <th>Çorba</th>
              <th>Ana Yemek</th>
              <th>Pilav Makarna</th>
              <th>Tatlı Salata</th>
              <th class="text-dark">3.gün</th>
              <th>Çorba</th>
              <th>Ana Yemek</th>
              <th>Pilav Makarna</th>
              <th>Tatlı Salata</th>
              <th class="text-dark">4.gün</th>
              <th>Çorba</th>
              <th>Ana Yemek</th>
              <th>Pilav Makarna</th>
              <th>Tatlı Salata</th>
              <th class="text-dark">5.gün</th>
              <th>Çorba</th>
              <th>Ana Yemek</th>
              <th>Pilav Makarna</th>
              <th>Tatlı Salata</th>
              <th class="text-dark">6.gün</th>
              <th>Çorba</th>
              <th>Ana Yemek</th>
              <th>Pilav Makarna</th>
              <th>Tatlı Salata</th>
              <th class="text-dark">7.gün</th>
              <th>Çorba</th>
              <th>Ana Yemek</th>
              <th>Pilav Makarna</th>
              <th>Tatlı Salata</th>


            </tr>
          </thead>
          <tbody>
           

              <?php

              $say = 1;

              $yemek = 1;

              ?>
              <tr>
                <th></th>
                <th>
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
                  }

                  ?>
                <th>

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
                </th>
                <th>
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

                </th>
                <th>
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
                </th>

                </th>
                <th>
                  
                </th>
                <th>
                <?php if ($SorguBirBir){
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
                </th>
                <th>
                <?php if ($SorguİkiBir){
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
                </th>
                <th>
                <?php if ($SorguUcBir){
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
                </th>
                <th>
                  
 <?php if ($SorguDortBir){
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
                </th>
                <th></th>
                <th>
                <?php if ($SorguBirİki){
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
                </th>
                <th>
                <?php if ($Sorguİkiİki){
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
                </th>
                <th>

                <?php if ($SorguUcİki){
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
                </th>
                <th>
                <?php if ($SorguDortİki){
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
                </th>
                <th></th>
                <th>
                  
   <?php if ($SorguBirUc){
    $ToplamBirDegeriBirUc = 0;
    $ToplamSifirDegeriBirUc = 0;

    foreach ($SorguBirUc as $KayitBirUc) {

      $DegerBirUc = $KayitBirUc["cevap_dort_bir"];

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
                </th>
                <th>

                <?php if ($SorguİkiUc){
  $ToplamBirDegeriİkiUc = 0;
  $ToplamSifirDegeriİkiUc = 0;

  foreach ($SorguİkiUc as $KayitİkiUc) {

    $DegerİkiUc = $KayitİkiUc["cevap_dort_iki"];

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
                </th>
                <th>

                <?php if ($SorguUcUc){
  $ToplamBirDegeriUcUc = 0;
  $ToplamSifirDegeriUcUc = 0;

  foreach ($SorguUcUc as $KayitUcUc) {

    $DegerUcUc = $KayitUcUc["cevap_dort_uc"];

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

                </th>
                <th>

                <?php if ($SorguDortUc){
  $ToplamBirDegeriDortUc = 0;
  $ToplamSifirDegeriDortUc = 0;

  foreach ($SorguDortUc as $KayitDortUc) {

    $DegerDortUc = $KayitDortUc["cevap_dort_dort"];

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
                </th>
                <th></th>
                <th>
                <?php if ($SorguBirDort){
    $ToplamBirDegeriBirDort = 0;
    $ToplamSifirDegeriBirDort = 0;

    foreach ($SorguBirDort as $KayitBirDort) {

      $DegerBirDort = $KayitBirDort["cevap_bes_bir"];

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
                </th>
                <th>

                <?php if ($SorguİkiDort){
  $ToplamBirDegeriİkiDort = 0;
  $ToplamSifirDegeriİkiDort = 0;

  foreach ($SorguİkiDort as $KayitİkiDort) {

    $DegerİkiDort = $KayitİkiDort["cevap_bes_iki"];

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

} ?>
                </th>
                <th>

                <?php if ($SorguUcDort){
  $ToplamBirDegeriUcDort = 0;
  $ToplamSifirDegeriUcDort = 0;

  foreach ($SorguUcDort as $KayitUcDort) {

    $DegerUcDort = $KayitUcDort["cevap_bes_uc"];

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
                </th>
                <th>
               <?php if ($SorguDortDort){
  $ToplamBirDegeriDortDort = 0;
  $ToplamSifirDegeriDortDort = 0;

  foreach ($SorguDortDort as $KayitDortDort) {

    $DegerDortDort = $KayitDortDort["cevap_bes_dort"];

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
                </th>
                <th></th>
                <th>
                <?php if ($SorguBirBes){
    $ToplamBirDegeriBirBes = 0;
    $ToplamSifirDegeriBirBes = 0;

    foreach ($SorguBirBes as $KayitBirBes) {

      $DegerBirBes = $KayitBirBes["cevap_alti_bir"];

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
                </th>
                <th>

                <?php if ($SorguİkiBes){
  $ToplamBirDegeriİkiBes = 0;
  $ToplamSifirDegeriİkiBes = 0;

  foreach ($SorguİkiBes as $KayitİkiBes) {

    $DegerİkiBes = $KayitİkiBes["cevap_alti_iki"];

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
                </th>
                <th>

                <?php if ($SorguUcBes){
  $ToplamBirDegeriUcBes = 0;
  $ToplamSifirDegeriUcBes = 0;

  foreach ($SorguUcBes as $KayitUcBes) {

    $DegerUcBes = $KayitUcBes["cevap_alti_uc"];

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
                </th>
                <th>

                <?php if ($SorguDortBes){
  $ToplamBirDegeriDortBes = 0;
  $ToplamSifirDegeriDortBes = 0;

  foreach ($SorguDortBes as $KayitDortBes) {

    $DegerDortBes = $KayitDortBes["cevap_alti_dort"];

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
                </th>
                
                <th></th>
               
                <th>

                <?php if ($SorguBirAlti){
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
                </th>
                <th>

                <?php if ($SorguİkiAlti){
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
                </th>
                <th>

                <?php if ($SorguUcAlti){
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
                </th>
                <th>
                <?php if ($SorguDortAlti){
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

}?>
                </th>
                

                <td style="float:right">

                  <form action="netting/processing.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $vericek['id'] ?>">

                  </form>

              </tr>
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