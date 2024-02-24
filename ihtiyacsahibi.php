<?php
include 'header.php';

$cevapsor = $baglanti->prepare("SELECT * FROM cevap");
$cevapsor->execute();

$Sorgu = $baglanti->query("SELECT * FROM cevap");
$Sorguİki = $baglanti->query("SELECT * FROM cevap");
$SorguUc = $baglanti->query("SELECT * FROM cevap");
$SorguDort = $baglanti->query("SELECT * FROM cevap");

$SorguBirBir = $baglanti->query("SELECT * FROM cevap");
$SorguİkiBir = $baglanti->query("SELECT * FROM cevap");
$SorguUcBir = $baglanti->query("SELECT * FROM cevap");
$SorguDortBir = $baglanti->query("SELECT * FROM cevap");

$SorguBirİki = $baglanti->query("SELECT * FROM cevap");
$Sorguİkiİki = $baglanti->query("SELECT * FROM cevap");
$SorguUcİki = $baglanti->query("SELECT * FROM cevap");
$SorguDortİki = $baglanti->query("SELECT * FROM cevap");

$SorguBirUc = $baglanti->query("SELECT * FROM cevap");
$SorguİkiUc = $baglanti->query("SELECT * FROM cevap");
$SorguUcUc = $baglanti->query("SELECT * FROM cevap");
$SorguDortUc = $baglanti->query("SELECT * FROM cevap");

$SorguBirDort = $baglanti->query("SELECT * FROM cevap");
$SorguİkiDort = $baglanti->query("SELECT * FROM cevap");
$SorguUcDort = $baglanti->query("SELECT * FROM cevap");
$SorguDortDort = $baglanti->query("SELECT * FROM cevap");

$SorguBirBes = $baglanti->query("SELECT * FROM cevap");
$SorguİkiBes = $baglanti->query("SELECT * FROM cevap");
$SorguUcBes = $baglanti->query("SELECT * FROM cevap");
$SorguDortBes = $baglanti->query("SELECT * FROM cevap");

$SorguBirAlti = $baglanti->query("SELECT * FROM cevap");
$SorguİkiAlti = $baglanti->query("SELECT * FROM cevap");
$SorguUcAlti = $baglanti->query("SELECT * FROM cevap");
$SorguDortAlti = $baglanti->query("SELECT * FROM cevap");



if (isset($_SESSION['userihtiyac_mail'])) {

  $ihtiyacsor=$baglanti->prepare("SELECT * FROM ihtiyachesap where ihtiyac_mail=:mail");
  $ihtiyacsor->execute(array(
   'mail' => $_SESSION['userihtiyac_mail']
 ));
  $ihtiyacsay=$ihtiyacsor->rowCount();
  $ihtiyaccek=$ihtiyacsor->fetch(PDO::FETCH_ASSOC);

 }
 $ihtiyacsor=$baglanti->prepare("SELECT * from ihtiyachesap where ihtiyac_mail=:mail ");
$ihtiyacsor->execute(array(
  'mail' => $_SESSION['userihtiyac_mail']
));
$ihtiyacsay=$ihtiyacsor->rowCount();

if ($ihtiyacsay==0) {
  header('Location:login0?durum=izinsiz');
  die;
}

?>


<link rel="stylesheet" href="css/Bootstrap.css">
<style>
  #yemekgun {
    color: #14B4CC !important;
  }
</style>


<!-- end section -->
<!-- section -->
<div class="registration-page-area section about_section layout_padding padding_top_0">
  <div class="container">



    <!-- <h2 class="title-section">Üye Kayıt İşlemleri</h2> -->
    <div class="registration-details-area inner-page-padding">
     <div class="row">

  

                  <!-- yemek_bir_bir
                    _gün_öğün -->  
                     <?php
                      $yemek=$baglanti->prepare("SELECT * from yemek order by id DESC ");

                      $yemek->execute();

                      while ($yemekcek=$yemek->fetch(PDO::FETCH_ASSOC)) {
                      ?>
                        

       
       <div class="col-12">
<h4 class="text-center">İhtiyaç Sahibi Yemek Seçimine Hoşgeldiniz <?php echo $ihtiyaccek["ihtiyac_ad"]." " .$ihtiyaccek["ihtiyac_soyad"]; ?></h4> <br>
<?php 

if (@$_GET['status']=="Usuccessful") {?>

    <div class="alert alert-danger text-center  mt-3">
      <strong>Hata!</strong> Lütfen Yiyeceğiniz Ve Yemiyeceğiniz Yemekleri Seçiniz.
  </div>

<?php } elseif (@$_GET['status']=="successful") {?>

    <div class="alert alert-success text-center mt-3">
        <strong>Başarılı!</strong> Yemek Tercihlerin Bize Ulaştı.
    </div>
<?php  }?>
<?php if (@$_GET['durum']=="yemekbitmis") {?>

<div class="alert alert-danger text-center  mt-3">
  <strong>Hata!</strong> Seçtiğiniz Yemek Tükenmiş.
</div>
<?php }?>
<?php if (@$_GET['durum']=="okey") {?>


  <div class="alert alert-success text-center">
        <strong>Başarılı!</strong> Yemek Tercihlerin Bize Ulaştı.
    </div>
<?php }?>
        <form action="Panel/netting/processing.php" method="POST" name="" id="personal-info-form">
          <!-- 1.Gün  Başlangıç -->
          
          <p class="display-5 fs-2 text-primary" id="yemekgun"><strong>1. Gün</strong></p>
          <?php
                      $cevap=$baglanti->prepare("SELECT * from cevap order by id DESC ");

                      $cevap->execute();

                      $cevapcek=$cevap->fetch(PDO::FETCH_ASSOC)
                      ?>
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
    <div class="form-group">
      <label class="control-label" ><?php  if ($cevapcek['cevap_bir_bir'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_bir_bir']?> <?php if ($Sorgu) {
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


                    echo "" . $ToplamBirDegeri . " Kişilik Kaldı";

                  }
                  }

                  ?></label>
      <select class="form-select" name="ihtiyac_bir_bir">
      <?php
         if ($cevapcek['cevap_bir_bir'] == 0) {
    
               echo"<option disabled   value='sec'>Seçiniz</option>";   
               echo"<option disabled value='1'> İstiyorum </option>";   
               echo"<option selected value='0'> İstemiyorum </option>";   
           

        }else {
          echo"<option disabled selected   value='sec'>Seçiniz</option>";   
               echo"<option  value='1'> İstiyorum </option>";   
               echo"<option  value='0'> İstemiyorum </option>";  
        }
        ?>
      </select>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
    <div class="form-group">
      <label class="control-label" ><?php
      
      if ($cevapcek['cevap_bir_iki'] == 0) {
        echo"Yemek Tükendi";
      }
      else {
        echo $yemekcek['yemek_bir_iki']?> <?php if ($Sorguİki) {
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


          echo "" . $ToplamBirDegeriİki . " Kişilik Kaldı";

        } else {


          echo "Sorgu Hatası";
        }
      }
                  ?></label>
      <select class="form-select" name="ihtiyac_bir_iki">
      <?php
         if ($cevapcek['cevap_bir_iki'] == 0) {
    
               echo"<option disabled   value='sec'>Seçiniz</option>";   
               echo"<option disabled value='1'> İstiyorum </option>";   
               echo"<option selected value='0'> İstemiyorum </option>";   
           

        }else {
          echo"<option disabled selected   value='sec'>Seçiniz</option>";   
               echo"<option  value='1'> İstiyorum </option>";   
               echo"<option  value='0'> İstemiyorum </option>";  
        }
        ?>
      </select>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
    <div class="form-group">
      <label class="control-label" ><?php
      if ($cevapcek['cevap_bir_uc'] == 0) {
        echo"Yemek Tükendi";
      }
      else {
      echo $yemekcek['yemek_bir_uc']?>  <?php if ($SorguUc) {
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


                    echo "" . $ToplamBirDegeriUc . " Kişilik Kaldı";

                  } else {


                    echo "Sorgu Hatası";
                  }
                  }

                 
                  ?>
</label>
      <select class="form-select" name="ihtiyac_bir_uc">
      <?php
         if ($cevapcek['cevap_bir_uc'] == 0) {
    
               echo"<option disabled   value='sec'>Seçiniz</option>";   
               echo"<option disabled value='1'> İstiyorum </option>";   
               echo"<option selected value='0'> İstemiyorum </option>";   
           

        }else {
          echo"<option disabled selected   value='sec'>Seçiniz</option>";   
               echo"<option  value='1'> İstiyorum </option>";   
               echo"<option  value='0'> İstemiyorum </option>";  
        }
        ?>
      </select>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
    <div class="form-group">
      <label class="control-label" >
        <?php
        if ($cevapcek['cevap_bir_dort'] == 0) {
          echo"Yemek Tükendi";
        }
        else {
        echo $yemekcek['yemek_bir_dort']?>  <?php if ($SorguDort) {
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


                    echo "" . $ToplamBirDegeriDort . " Kişilik Kaldı";

                    
                  } else {


                    echo "Sorgu Hatası";
                  }
                  }
                  ?></label>
      <select class="form-select" name="ihtiyac_bir_dort">
      <?php
         if ($cevapcek['cevap_bir_dort'] == 0) {
    
               echo"<option disabled   value='sec'>Seçiniz</option>";   
               echo"<option disabled value='1'> İstiyorum </option>";   
               echo"<option selected value='0'> İstemiyorum </option>";   
           

        }else {
          echo"<option disabled selected   value='sec'>Seçiniz</option>";   
               echo"<option  value='1'> İstiyorum </option>";   
               echo"<option  value='0'> İstemiyorum </option>";  
        }
        ?>
      </select>
    </div>
  </div>
</div>


<!-- Son -->
<!-- 2.Gün Başlangıç -->

<p class="display-5 fs-2 text-primary" id="yemekgun"><strong>2. Gün</strong></p>
<div class="row">

  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
    <div class="form-group">
      <label class="control-label" ><?php  if ($cevapcek['cevap_iki_bir'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_iki_bir']?>  <?php if ($SorguBirBir){
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


        echo "" . $ToplamBirDegeriBirBir . " Kişilik Kaldı";




      } else {


        echo "Sorgu Hatası";

      }
      }
      ?></label>
      <select class="form-select" name="ihtiyac_iki_bir">

       <?php if ($cevapcek['cevap_iki_bir'] == 0) {
    
               echo"<option disabled   value='sec'>Seçiniz</option>";   
               echo"<option disabled value='1'> İstiyorum </option>";   
               echo"<option selected value='0'> İstemiyorum </option>";   
           

        }else {
          echo"<option disabled selected   value='sec'>Seçiniz</option>";   
               echo"<option  value='1'> İstiyorum </option>";   
               echo"<option  value='0'> İstemiyorum </option>";  
        }
        ?>
      </select>            </div>
    </div>



    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
      <div class="form-group">
        <label class="control-label" ><?php  if ($cevapcek['cevap_iki_iki'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_iki_iki']?>  <?php if ($SorguİkiBir){
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


      echo "" . $ToplamBirDegeriİkiBir . " Kişilik Kaldı";



    } else {


      echo "Sorgu Hatası";

    }
    }
    ?></label>
        <select class="form-select" name="ihtiyac_iki_iki">

        <?php if ($cevapcek['cevap_iki_iki'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
        </select>             </div>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
        <div class="form-group">
          <label class="control-label" ><?php  if ($cevapcek['cevap_iki_uc'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_iki_uc']?>   <?php if ($SorguUcBir){
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


    echo "" . $ToplamBirDegeriUcBir . " Kişilik Kaldı";

    


  } else {


    echo "Sorgu Hatası";

  }
  }
  ?></label>
          <select class="form-select" name="ihtiyac_iki_uc">

          <?php if ($cevapcek['cevap_iki_uc'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
          </select>              </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
          <div class="form-group">
            <label class="control-label" ><?php  if ($cevapcek['cevap_iki_dort'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_iki_dort']?> <?php if ($SorguDortBir){
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


  echo "" . $ToplamBirDegeriDortBir . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
            <select class="form-select" name="ihtiyac_iki_dort">

            <?php if ($cevapcek['cevap_iki_dort'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
            </select>        </div>
          </div>
        </div>
        <!-- Son -->
        <!-- 3.Gün Başlangıç -->

        <p class="display-5 fs-2 text-primary" id="yemekgun"><strong>3. Gün</strong></p>
        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_uc_bir'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_uc_bir']?> <?php if ($SorguBirİki){
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


    echo "" . $ToplamBirDegeriBirİki . " Kişilik Kaldı";



  } else {


    echo "Sorgu Hatası";

  }
  }
  ?></label>
              <select class="form-select" name="ihtiyac_uc_bir">

              <?php if ($cevapcek['cevap_uc_bir'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_uc_iki'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_uc_iki']?> <?php if ($Sorguİkiİki){
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


  echo "" . $ToplamBirDegeriİkiİki . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_uc_iki">

              <?php if ($cevapcek['cevap_uc_iki'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_uc_uc'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_uc_uc']?>  <?php if ($SorguUcİki){
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


  echo "" . $ToplamBirDegeriUcİki . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_uc_uc">

              <?php if ($cevapcek['cevap_uc_uc'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_uc_dort'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_uc_dort']?> <?php if ($SorguDortİki){
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


  echo "" . $ToplamBirDegeriDortİki . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_uc_dort">

              <?php if ($cevapcek['cevap_uc_dort'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>



          
        </div>
        <!-- Son -->
        <!-- 4.Gün Başlangıç -->

        <p class="display-5 fs-2 text-primary" id="yemekgun"><strong>4. Gün</strong></p>
        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_dort_bir'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_dort_bir']?> <?php if ($SorguBirUc){
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


    echo "" . $ToplamBirDegeriBirUc . " Kişilik Kaldı";



  } else {


    echo "Sorgu Hatası";

  }
  }
  ?></label>
              <select class="form-select" name="ihtiyac_dort_bir">

              <?php if ($cevapcek['cevap_dort_bir'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_dort_iki'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_dort_iki']?>  <?php if ($SorguİkiUc){
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


  echo "" . $ToplamBirDegeriİkiUc . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_dort_iki">

              <?php if ($cevapcek['cevap_dort_iki'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_dort_uc'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_dort_uc']?> <?php if ($SorguUcUc){
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


  echo "" . $ToplamBirDegeriUcUc . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_dort_uc">

              <?php if ($cevapcek['cevap_dort_uc'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_dort_dort'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_dort_dort']?> <?php if ($SorguDortUc){
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


  echo "" . $ToplamBirDegeriDortUc . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_dort_dort">

              <?php if ($cevapcek['cevap_dort_dort'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>



        
        </div>
        <!-- Son -->
        <!-- 5.Gün Başlangıç -->

        <p class="display-5 fs-2 text-primary" id="yemekgun"><strong>5. Gün</strong></p>
        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_bes_bir'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_bes_bir']?> <?php if ($SorguBirDort){
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


    echo "" . $ToplamBirDegeriBirDort . " Kişilik Kaldı";



  } else {


    echo "Sorgu Hatası";

  }
  }
  ?></label>
              <select class="form-select" name="ihtiyac_bes_bir">

              <?php if ($cevapcek['cevap_bes_bir'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_bes_iki'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_bes_iki']?> <?php if ($SorguİkiDort){
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


  echo "" . $ToplamBirDegeriİkiDort . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";
}
} ?></label>
              <select class="form-select" name="ihtiyac_bes_iki">

              <?php if ($cevapcek['cevap_bes_iki'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_bes_uc'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_bes_uc']?> <?php if ($SorguUcDort){
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


  echo "" . $ToplamBirDegeriUcDort . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_bes_uc">

              <?php if ($cevapcek['cevap_bes_uc'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_bes_dort'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_bes_dort']?> <?php if ($SorguDortDort){
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


  echo "" . $ToplamBirDegeriDortDort . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_bes_dort">

              <?php if ($cevapcek['cevap_bes_dort'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>



       
        </div>
        <!-- Son -->
        <!-- 6.Gün Başlangıç -->

        <p class="display-5 fs-2 text-primary" id="yemekgun"><strong>6. Gün</strong></p>
        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_alti_bir'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_alti_bir']?> <?php if ($SorguBirBes){
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


    echo "" . $ToplamBirDegeriBirBes . " Kişilik Kaldı";



  } else {


    echo "Sorgu Hatası";

  }
  }
  ?></label>
              <select class="form-select" name="ihtiyac_alti_bir">

              <?php if ($cevapcek['cevap_alti_bir'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_alti_iki'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_alti_iki']?> <?php if ($SorguİkiBes){
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


  echo "" . $ToplamBirDegeriİkiBes . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_alti_iki">

              <?php if ($cevapcek['cevap_alti_iki'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_alti_uc'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_alti_uc']?> <?php if ($SorguUcBes){
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


  echo "" . $ToplamBirDegeriUcBes . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_alti_uc">

              <?php if ($cevapcek['cevap_alti_uc'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_alti_dort'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_alti_dort']?> <?php if ($SorguDortBes){
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


  echo "" . $ToplamBirDegeriDortBes . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_alti_dort">

              <?php if ($cevapcek['cevap_alti_dort'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>



         
        </div>
        <!-- Son -->
        <!-- 7.Gün Başlangıç -->

      <p class="display-5 fs-2 text-primary" id="yemekgun"><strong>7. Gün</strong></p>
        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_yedi_bir'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_yedi_bir']?>  <?php if ($SorguBirAlti){
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


    echo "" . $ToplamBirDegeriBirAlti . " Kişilik Kaldı";



  } else {


    echo "Sorgu Hatası";

  }
  }
  ?></label>
              <select class="form-select" name="ihtiyac_yedi_bir">

              <?php if ($cevapcek['cevap_yedi_bir'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_yedi_iki'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_yedi_iki']?>  <?php if ($SorguİkiAlti){
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


  echo "" . $ToplamBirDegeriİkiAlti . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_yedi_iki">

              <?php if ($cevapcek['cevap_yedi_iki'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_yedi_uc'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_yedi_uc']?> <?php if ($SorguUcAlti){
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


  echo "" . $ToplamBirDegeriUcAlti . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_yedi_uc">

              <?php if ($cevapcek['cevap_yedi_uc'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php  if ($cevapcek['cevap_yedi_dort'] == 0) {
        echo"Yemek Tükendi";
      }
      else { echo $yemekcek['yemek_yedi_dort']?> <?php if ($SorguDortAlti){
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


  echo "" . $ToplamBirDegeriDortAlti . " Kişilik Kaldı";



} else {


  echo "Sorgu Hatası";

}
}
?></label>
              <select class="form-select" name="ihtiyac_yedi_dort">

              <?php if ($cevapcek['cevap_yedi_dort'] == 0) {
    
    echo"<option disabled   value='sec'>Seçiniz</option>";   
    echo"<option disabled value='1'> İstiyorum </option>";   
    echo"<option selected value='0'> İstemiyorum </option>";   


}else {
echo"<option disabled selected   value='sec'>Seçiniz</option>";   
    echo"<option  value='1'> İstiyorum </option>";   
    echo"<option  value='0'> İstemiyorum </option>";  
}
?>
              </select>
            </div>
          </div>



                   

                   
                   
                  </div>
                </div>
                <!-- Son -->


<?php } ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div align="right" class="pLace-order">
                    <p align="right">Yiyeceğin Öğünleri Belirlediysen Buraya Tıkla</p>
                    <button type="submit" name="ihtiyac" class="site-btn">Gönder</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end section -->
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
    <?php include 'footer.php'; ?>
