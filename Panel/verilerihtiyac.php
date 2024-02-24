<?php require_once 'header.php';



$veriihtiyacsor = $baglanti->prepare("SELECT * FROM veriihtiyac");
$veriihtiyacsor->execute();

$Sorgu1 = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1İki = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1Uc = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1Dort = $baglanti->query("SELECT * FROM veriihtiyac");

$Sorgu1BirBir = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1İkiBir = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1UcBir = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1DortBir = $baglanti->query("SELECT * FROM veriihtiyac");

$Sorgu1Birİki = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1İkiİki = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1Ucİki = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1Dortİki = $baglanti->query("SELECT * FROM veriihtiyac");

$Sorgu1BirUc = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1İkiUc = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1UcUc = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1DortUc = $baglanti->query("SELECT * FROM veriihtiyac");

$Sorgu1BirDort = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1İkiDort = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1UcDort = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1DortDort = $baglanti->query("SELECT * FROM veriihtiyac");

$Sorgu1BirBes = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1İkiBes = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1UcBes = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1DortBes = $baglanti->query("SELECT * FROM veriihtiyac");

$Sorgu1BirAlti = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1İkiAlti = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1UcAlti = $baglanti->query("SELECT * FROM veriihtiyac");
$Sorgu1DortAlti = $baglanti->query("SELECT * FROM veriihtiyac");


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
                  <?php if ($Sorgu1) {
                    $ToplamBirDegeri = 0;
                    $ToplamSifirDegeri = 0;

                    foreach ($Sorgu1 as $Kayit) {

                      $Deger = $Kayit["ihtiyac_bir_bir"];

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

                  <?php if ($Sorgu1İki) {
                    $ToplamBirDegeriİki = 0;
                    $ToplamSifirDegeriİki = 0;

                    foreach ($Sorgu1İki as $Kayitİki) {

                      $Degerİki = $Kayitİki["ihtiyac_bir_iki"];

                      if ($Degerİki == 1) {

                        $ToplamBirDegeriİki++;
                      } else {

                        $ToplamSifirDegeriİki++;
                      }
                    }


                    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİki . "<br>";

                    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİki . "<br>";
                  } else {


                    echo "Sorgu1 Hatası";
                  }
                  ?>
                </th>
                <th>
                  <?php if ($Sorgu1Uc) {
                    $ToplamBirDegeriUc = 0;
                    $ToplamSifirDegeriUc = 0;

                    foreach ($Sorgu1Uc as $KayitUc) {

                      $DegerUc = $KayitUc["ihtiyac_bir_uc"];

                      if ($DegerUc == 1) {

                        $ToplamBirDegeriUc++;
                      } else {

                        $ToplamSifirDegeriUc++;
                      }
                    }


                    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUc . "<br>";

                    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUc . "<br>";
                  } else {


                    echo "Sorgu1 Hatası";
                  }
                  ?>

                </th>
                <th>
                  <?php if ($Sorgu1Dort) {
                    $ToplamBirDegeriDort = 0;
                    $ToplamSifirDegeriDort = 0;

                    foreach ($Sorgu1Dort as $KayitDort) {

                      $DegerDort = $KayitDort["ihtiyac_bir_dort"];

                      if ($DegerDort == 1) {

                        $ToplamBirDegeriDort++;
                      } else {

                        $ToplamSifirDegeriDort++;
                      }
                    }


                    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDort . "<br>";

                    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDort . "<br>";
                  } else {


                    echo "Sorgu1 Hatası";
                  }
                  ?>
                </th>

                </th>
                <th>
                  
                </th>
                <th>
                <?php if ($Sorgu1BirBir){
        $ToplamBirDegeriBirBir = 0;
        $ToplamSifirDegeriBirBir = 0;

        foreach ($Sorgu1BirBir as $KayitBirBir) {

          $DegerBirBir = $KayitBirBir["ihtiyac_iki_bir"];

          if ($DegerBirBir == 1) {

            $ToplamBirDegeriBirBir++;

          } else {

            $ToplamSifirDegeriBirBir++;

          }
        }


        echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirBir . "<br>";

        echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirBir . "<br>";


      } else {


        echo "Sorgu1 Hatası";

      }
      ?>
                </th>
                <th>
                <?php if ($Sorgu1İkiBir){
      $ToplamBirDegeriİkiBir = 0;
      $ToplamSifirDegeriİkiBir = 0;

      foreach ($Sorgu1İkiBir as $KayitİkiBir) {

        $DegerİkiBir = $KayitİkiBir["ihtiyac_iki_iki"];

        if ($DegerİkiBir == 1) {

          $ToplamBirDegeriİkiBir++;

        } else {

          $ToplamSifirDegeriİkiBir++;

        }
      }


      echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiBir . "<br>";

      echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiBir . "<br>";


    } else {


      echo "Sorgu1 Hatası";

    }
    ?>
                </th>
                <th>
                <?php if ($Sorgu1UcBir){
    $ToplamBirDegeriUcBir = 0;
    $ToplamSifirDegeriUcBir = 0;

    foreach ($Sorgu1UcBir as $KayitUcBir) {

      $DegerUcBir = $KayitUcBir["ihtiyac_iki_uc"];

      if ($DegerUcBir == 1) {

        $ToplamBirDegeriUcBir++;

      } else {

        $ToplamSifirDegeriUcBir++;

      }
    }


    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcBir . "<br>";

    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcBir . "<br>";


  } else {


    echo "Sorgu1 Hatası";

  }
  ?>
                </th>
                <th>
                  
 <?php if ($Sorgu1DortBir){
  $ToplamBirDegeriDortBir = 0;
  $ToplamSifirDegeriDortBir = 0;

  foreach ($Sorgu1DortBir as $KayitDortBir) {

    $DegerDortBir = $KayitDortBir["ihtiyac_iki_dort"];

    if ($DegerDortBir == 1) {

      $ToplamBirDegeriDortBir++;

    } else {

      $ToplamSifirDegeriDortBir++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortBir . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortBir . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th></th>
                <th>
                <?php if ($Sorgu1Birİki){
    $ToplamBirDegeriBirİki = 0;
    $ToplamSifirDegeriBirİki = 0;

    foreach ($Sorgu1Birİki as $KayitBirİki) {

      $DegerBirİki = $KayitBirİki["ihtiyac_uc_bir"];

      if ($DegerBirİki == 1) {

        $ToplamBirDegeriBirİki++;

      } else {

        $ToplamSifirDegeriBirİki++;

      }
    }


    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirİki . "<br>";

    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirİki . "<br>";


  } else {


    echo "Sorgu1 Hatası";

  }
  ?>
                </th>
                <th>
                <?php if ($Sorgu1İkiİki){
  $ToplamBirDegeriİkiİki = 0;
  $ToplamSifirDegeriİkiİki = 0;

  foreach ($Sorgu1İkiİki as $Kayitİkiİki) {

    $Degerİkiİki = $Kayitİkiİki["ihtiyac_uc_iki"];

    if ($Degerİkiİki == 1) {

      $ToplamBirDegeriİkiİki++;

    } else {

      $ToplamSifirDegeriİkiİki++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiİki . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiİki . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th>

                <?php if ($Sorgu1Ucİki){
  $ToplamBirDegeriUcİki = 0;
  $ToplamSifirDegeriUcİki = 0;

  foreach ($Sorgu1Ucİki as $KayitUcİki) {

    $DegerUcİki = $KayitUcİki["ihtiyac_uc_uc"];

    if ($DegerUcİki == 1) {

      $ToplamBirDegeriUcİki++;

    } else {

      $ToplamSifirDegeriUcİki++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcİki . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcİki . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th>
                <?php if ($Sorgu1Dortİki){
  $ToplamBirDegeriDortİki = 0;
  $ToplamSifirDegeriDortİki = 0;

  foreach ($Sorgu1Dortİki as $KayitDortİki) {

    $DegerDortİki = $KayitDortİki["ihtiyac_uc_dort"];

    if ($DegerDortİki == 1) {

      $ToplamBirDegeriDortİki++;

    } else {

      $ToplamSifirDegeriDortİki++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortİki . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortİki . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th></th>
                <th>
                  
   <?php if ($Sorgu1BirUc){
    $ToplamBirDegeriBirUc = 0;
    $ToplamSifirDegeriBirUc = 0;

    foreach ($Sorgu1BirUc as $KayitBirUc) {

      $DegerBirUc = $KayitBirUc["ihtiyac_dort_bir"];

      if ($DegerBirUc == 1) {

        $ToplamBirDegeriBirUc++;

      } else {

        $ToplamSifirDegeriBirUc++;

      }
    }


    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirUc . "<br>";

    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirUc . "<br>";


  } else {


    echo "Sorgu1 Hatası";

  }
  ?>
                </th>
                <th>

                <?php if ($Sorgu1İkiUc){
  $ToplamBirDegeriİkiUc = 0;
  $ToplamSifirDegeriİkiUc = 0;

  foreach ($Sorgu1İkiUc as $KayitİkiUc) {

    $DegerİkiUc = $KayitİkiUc["ihtiyac_dort_iki"];

    if ($DegerİkiUc == 1) {

      $ToplamBirDegeriİkiUc++;

    } else {

      $ToplamSifirDegeriİkiUc++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiUc . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiUc . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th>

                <?php if ($Sorgu1UcUc){
  $ToplamBirDegeriUcUc = 0;
  $ToplamSifirDegeriUcUc = 0;

  foreach ($Sorgu1UcUc as $KayitUcUc) {

    $DegerUcUc = $KayitUcUc["ihtiyac_dort_uc"];

    if ($DegerUcUc == 1) {

      $ToplamBirDegeriUcUc++;

    } else {

      $ToplamSifirDegeriUcUc++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcUc . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcUc . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>

                </th>
                <th>

                <?php if ($Sorgu1DortUc){
  $ToplamBirDegeriDortUc = 0;
  $ToplamSifirDegeriDortUc = 0;

  foreach ($Sorgu1DortUc as $KayitDortUc) {

    $DegerDortUc = $KayitDortUc["ihtiyac_dort_dort"];

    if ($DegerDortUc == 1) {

      $ToplamBirDegeriDortUc++;

    } else {

      $ToplamSifirDegeriDortUc++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortUc . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortUc . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th></th>
                <th>
                <?php if ($Sorgu1BirDort){
    $ToplamBirDegeriBirDort = 0;
    $ToplamSifirDegeriBirDort = 0;

    foreach ($Sorgu1BirDort as $KayitBirDort) {

      $DegerBirDort = $KayitBirDort["ihtiyac_bes_bir"];

      if ($DegerBirDort == 1) {

        $ToplamBirDegeriBirDort++;

      } else {

        $ToplamSifirDegeriBirDort++;

      }
    }


    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirDort . "<br>";

    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirDort . "<br>";


  } else {


    echo "Sorgu1 Hatası";

  }
  ?>
                </th>
                <th>

                <?php if ($Sorgu1İkiDort){
  $ToplamBirDegeriİkiDort = 0;
  $ToplamSifirDegeriİkiDort = 0;

  foreach ($Sorgu1İkiDort as $KayitİkiDort) {

    $DegerİkiDort = $KayitİkiDort["ihtiyac_bes_iki"];

    if ($DegerİkiDort == 1) {

      $ToplamBirDegeriİkiDort++;

    } else {

      $ToplamSifirDegeriİkiDort++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiDort . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiDort . "<br>";


} else {


  echo "Sorgu1 Hatası";

} ?>
                </th>
                <th>

                <?php if ($Sorgu1UcDort){
  $ToplamBirDegeriUcDort = 0;
  $ToplamSifirDegeriUcDort = 0;

  foreach ($Sorgu1UcDort as $KayitUcDort) {

    $DegerUcDort = $KayitUcDort["ihtiyac_bes_uc"];

    if ($DegerUcDort == 1) {

      $ToplamBirDegeriUcDort++;

    } else {

      $ToplamSifirDegeriUcDort++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcDort . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcDort . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th>
               <?php if ($Sorgu1DortDort){
  $ToplamBirDegeriDortDort = 0;
  $ToplamSifirDegeriDortDort = 0;

  foreach ($Sorgu1DortDort as $KayitDortDort) {

    $DegerDortDort = $KayitDortDort["ihtiyac_bes_dort"];

    if ($DegerDortDort == 1) {

      $ToplamBirDegeriDortDort++;

    } else {

      $ToplamSifirDegeriDortDort++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortDort . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortDort . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th></th>
                <th>
                <?php if ($Sorgu1BirBes){
    $ToplamBirDegeriBirBes = 0;
    $ToplamSifirDegeriBirBes = 0;

    foreach ($Sorgu1BirBes as $KayitBirBes) {

      $DegerBirBes = $KayitBirBes["ihtiyac_alti_bir"];

      if ($DegerBirBes == 1) {

        $ToplamBirDegeriBirBes++;

      } else {

        $ToplamSifirDegeriBirBes++;

      }
    }


    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirBes . "<br>";

    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirBes . "<br>";


  } else {


    echo "Sorgu1 Hatası";

  }
  ?>
                </th>
                <th>

                <?php if ($Sorgu1İkiBes){
  $ToplamBirDegeriİkiBes = 0;
  $ToplamSifirDegeriİkiBes = 0;

  foreach ($Sorgu1İkiBes as $KayitİkiBes) {

    $DegerİkiBes = $KayitİkiBes["ihtiyac_alti_iki"];

    if ($DegerİkiBes == 1) {

      $ToplamBirDegeriİkiBes++;

    } else {

      $ToplamSifirDegeriİkiBes++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiBes . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiBes . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th>

                <?php if ($Sorgu1UcBes){
  $ToplamBirDegeriUcBes = 0;
  $ToplamSifirDegeriUcBes = 0;

  foreach ($Sorgu1UcBes as $KayitUcBes) {

    $DegerUcBes = $KayitUcBes["ihtiyac_alti_uc"];

    if ($DegerUcBes == 1) {

      $ToplamBirDegeriUcBes++;

    } else {

      $ToplamSifirDegeriUcBes++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcBes . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcBes . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th>

                <?php if ($Sorgu1DortBes){
  $ToplamBirDegeriDortBes = 0;
  $ToplamSifirDegeriDortBes = 0;

  foreach ($Sorgu1DortBes as $KayitDortBes) {

    $DegerDortBes = $KayitDortBes["ihtiyac_alti_dort"];

    if ($DegerDortBes == 1) {

      $ToplamBirDegeriDortBes++;

    } else {

      $ToplamSifirDegeriDortBes++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortBes . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortBes . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                
                <th></th>
               
                <th>

                <?php if ($Sorgu1BirAlti){
    $ToplamBirDegeriBirAlti = 0;
    $ToplamSifirDegeriBirAlti = 0;

    foreach ($Sorgu1BirAlti as $KayitBirAlti) {

      $DegerBirAlti = $KayitBirAlti["ihtiyac_yedi_bir"];

      if ($DegerBirAlti == 1) {

        $ToplamBirDegeriBirAlti++;

      } else {

        $ToplamSifirDegeriBirAlti++;

      }
    }


    echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriBirAlti . "<br>";

    echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriBirAlti . "<br>";


  } else {


    echo "Sorgu1 Hatası";

  }
  ?>
                </th>
                <th>

                <?php if ($Sorgu1İkiAlti){
  $ToplamBirDegeriİkiAlti = 0;
  $ToplamSifirDegeriİkiAlti = 0;

  foreach ($Sorgu1İkiAlti as $KayitİkiAlti) {

    $DegerİkiAlti = $KayitİkiAlti["ihtiyac_yedi_iki"];

    if ($DegerİkiAlti == 1) {

      $ToplamBirDegeriİkiAlti++;

    } else {

      $ToplamSifirDegeriİkiAlti++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriİkiAlti . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriİkiAlti . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th>

                <?php if ($Sorgu1UcAlti){
  $ToplamBirDegeriUcAlti = 0;
  $ToplamSifirDegeriUcAlti = 0;

  foreach ($Sorgu1UcAlti as $KayitUcAlti) {

    $DegerUcAlti = $KayitUcAlti["ihtiyac_yedi_uc"];

    if ($DegerUcAlti == 1) {

      $ToplamBirDegeriUcAlti++;

    } else {

      $ToplamSifirDegeriUcAlti++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriUcAlti . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriUcAlti . "<br>";


} else {


  echo "Sorgu1 Hatası";

}
?>
                </th>
                <th>
                <?php if ($Sorgu1DortAlti){
  $ToplamBirDegeriDortAlti = 0;
  $ToplamSifirDegeriDortAlti = 0;

  foreach ($Sorgu1DortAlti as $KayitDortAlti) {

    $DegerDortAlti = $KayitDortAlti["ihtiyac_yedi_dort"];

    if ($DegerDortAlti == 1) {

      $ToplamBirDegeriDortAlti++;

    } else {

      $ToplamSifirDegeriDortAlti++;

    }
  }


  echo "Toplam Yiyen Sayısı:" . $ToplamBirDegeriDortAlti . "<br>";

  echo "Toplam Yemeyen Sayısı:" . $ToplamSifirDegeriDortAlti . "<br>";


} else {


  echo "Sorgu1 Hatası";

}?>
                </th>
                

                <td style="float:right">

                  <form action="netting/processing.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $veriihtiyaccek['id'] ?>">

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