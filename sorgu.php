<?php



 if ($Sorgu) {
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
};


?>

