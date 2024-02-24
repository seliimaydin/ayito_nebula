<?php
include 'header.php';



$ogrencisor=$baglanti->prepare("SELECT * from ogrencihesap where ogrenci_mail=:mail ");
$ogrencisor->execute(array(
  'mail' => $_SESSION['userogrenci_mail']
));
$ogrencisay=$ogrencisor->rowCount();

if ($ogrencisay==0) {
  header('Location:login?durum=izinsiz');
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
      <h4 class="text-center">Öğrenci Yemek Seçimine Hoşgeldiniz <?php echo $ogrencicek["ogrenci_ad"]." " .$ogrencicek["ogrenci_soyad"]; ?></h4>
      <?php 

      if (@$_GET['status']=="unsuccessful") {?>

        <div class="alert alert-danger text-center mt-3">
          <strong>Hata!</strong> Lütfen Yiyeceğiniz Ve Yemiyeceğiniz Yemekleri Seçiniz.
          <!-- <strong>Hata!</strong> Yemek Tercihlerin Bize Gelirken Hataya Saptandı. Lütfen İletişim Bölümünden Bizimle İrtibata Geçiniz. -->
        </div>

      <?php } elseif (@$_GET['status']=="successful") {?>

        <div class="alert alert-success text-center mt-3">
          <strong>Başarılı!</strong> Yemek Tercihlerin Bize Ulaştı.
        </div>
      <?php  } ?>
      <form action="Panel/netting/processing.php" method="POST" id="personal-info-form">
        <!-- 1.Gün  Başlangıç -->
        <p class="display-5 fs-2 text-primary" id="yemekgun"><strong>1. Gün</strong></p>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php echo $yemekcek['yemek_bir_bir']?></label>
              <select class="form-select" name="cevap_bir_bir">
              <option disabled selected  value="sec">Seçiniz</option>
                <option value="1"> İstiyorum </option>
                <option value="0"> İstemiyorum </option>
              </select>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php echo $yemekcek['yemek_bir_iki']?></label>
              <select class="form-select" name="cevap_bir_iki">
                <option disabled selected value="sec">Seçiniz</option>
                <option value="1"> İstiyorum </option>
                <option value="0"> İstemiyorum </option>
              </select>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php echo $yemekcek['yemek_bir_uc']?></label>
              <select class="form-select" name="cevap_bir_uc">
                <option disabled selected value="sec">Seçiniz</option>
                <option value="1"> İstiyorum </option>
                <option value="0"> İstemiyorum </option>
              </select>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
            <div class="form-group">
              <label class="control-label" ><?php echo $yemekcek['yemek_bir_dort']?></label>
              <select class="form-select" name="cevap_bir_dort">
                <option disabled selected value="sec">Seçiniz</option>
                <option value="1"> İstiyorum </option>
                <option value="0"> İstemiyorum </option>
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
              <label class="control-label" ><?php echo $yemekcek['yemek_iki_bir']?></label>
              <select class="form-select" name="cevap_iki_bir">
                <option disabled selected value="sec">Seçiniz</option>

                <option value="1"> İstiyorum </option>
                <option value="0"> İstemiyorum </option>
              </select>            </div>
            </div>



            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
              <div class="form-group">
                <label class="control-label" ><?php echo $yemekcek['yemek_iki_iki']?></label>
                <select class="form-select" name="cevap_iki_iki">
                  <option disabled selected value="sec">Seçiniz</option>

                  <option value="1"> İstiyorum </option>
                  <option value="0"> İstemiyorum </option>
                </select>             </div>
              </div>


              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                <div class="form-group">
                  <label class="control-label" ><?php echo $yemekcek['yemek_iki_uc']?></label>
                  <select class="form-select" name="cevap_iki_uc">
                    <option disabled selected value="sec">Seçiniz</option>

                    <option value="1"> İstiyorum </option>
                    <option value="0"> İstemiyorum </option>
                  </select>              </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                  <div class="form-group">
                    <label class="control-label" ><?php echo $yemekcek['yemek_iki_dort']?></label>
                    <select class="form-select" name="cevap_iki_dort">
                      <option disabled selected value="sec">Seçiniz</option>

                      <option value="1"> İstiyorum </option>
                      <option value="0"> İstemiyorum </option>
                    </select>        </div>
                  </div>
                </div>
                <!-- Son -->
                <!-- 3.Gün Başlangıç -->

                <p class="display-5 fs-2 text-primary" id="yemekgun"><strong>3. Gün</strong></p>
                <div class="row">

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_uc_bir']?></label>
                      <select class="form-select" name="cevap_uc_bir">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_uc_iki']?></label>
                      <select class="form-select" name="cevap_uc_iki">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_uc_uc']?></label>
                      <select class="form-select" name="cevap_uc_uc">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_uc_dort']?></label>
                      <select class="form-select" name="cevap_uc_dort">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
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
                      <label class="control-label" ><?php echo $yemekcek['yemek_dort_bir']?></label>
                      <select class="form-select" name="cevap_dort_bir">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_dort_iki']?></label>
                      <select class="form-select" name="cevap_dort_iki">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_dort_uc']?></label>
                      <select class="form-select" name="cevap_dort_uc">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_dort_dort']?></label>
                      <select class="form-select" name="cevap_dort_dort">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
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
                      <label class="control-label" ><?php echo $yemekcek['yemek_bes_bir']?></label>
                      <select class="form-select" name="cevap_bes_bir">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_bes_iki']?></label>
                      <select class="form-select" name="cevap_bes_iki">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_bes_uc']?></label>
                      <select class="form-select" name="cevap_bes_uc">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_bes_dort']?></label>
                      <select class="form-select" name="cevap_bes_dort">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
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
                      <label class="control-label" ><?php echo $yemekcek['yemek_alti_bir']?></label>
                      <select class="form-select" name="cevap_alti_bir">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_alti_iki']?></label>
                      <select class="form-select" name="cevap_alti_iki">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_alti_uc']?></label>
                      <select class="form-select" name="cevap_alti_uc">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_alti_dort']?></label>
                      <select class="form-select" name="cevap_alti_dort">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
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
                      <label class="control-label" ><?php echo $yemekcek['yemek_yedi_bir']?></label>
                      <select class="form-select" name="cevap_yedi_bir">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_yedi_iki']?></label>
                      <select class="form-select" name="cevap_yedi_iki">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_yedi_uc']?></label>
                      <select class="form-select" name="cevap_yedi_uc">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-3">
                    <div class="form-group">
                      <label class="control-label" ><?php echo $yemekcek['yemek_yedi_dort']?></label>
                      <select class="form-select" name="cevap_yedi_dort">
                        <option disabled selected value="sec">Seçiniz</option>

                        <option value="1"> İstiyorum </option>
                        <option value="0"> İstemiyorum </option>
                      </select>
                    </div>
                  </div>







                </div>
              </div>
              <?php
                        $cevap=$baglanti->prepare("SELECT * from cevap order by id DESC ");

                        $cevap->execute();

                        while ($cevapcek=$cevap->fetch(PDO::FETCH_ASSOC)) {



                        ?>
              <input type="hidden" name="id" value="<?php echo $cevapcek['id'] ?>">
              <!-- Son -->

            <?php } }?>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div align="right" class="pLace-order">
                <p align="right">Yiyeceğin Öğünleri Belirlediysen Buraya Tıkla</p>
                <button type="submit" name="cevap" class="site-btn">Gönder</button>
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
