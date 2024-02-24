<?php include"header.php";
error_reporting(0);
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
     <link href="Bootstrap.css" rel="stylesheet">
  

<style type="text/css">
  body{
    
    color: #1a202c;
    text-align: left;
      
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 3px 3px 0 rgba(0,0,0,.1), 0 3px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.pp{
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50%;
    min-height: 150px;
    display: block;
    width: 150px;
}

#inputbu {
width: 100%;
  height: 50px;
  border: 1px solid #e2e2e2;
  border-radius: 5px;
  padding-left: 20px;
  font-size: 15px;
  color: #666666;
  margin-bottom: 20px;
  -webkit-transition: all, 0.3s;
  -o-transition: all, 0.3s;
  transition: all, 0.3s;
  border-color: #9d9d9d;
} 

</style>
<div class="container">
    <div class="main-body">
      <?php
      if ($_GET['durum'] == 'ok') {

       echo"<div class='alert alert-success text-center'>Bilgileriniz Başarıyla Kaydedildi</div>"; 
      }
      elseif ($_GET['durum'] == 'hata') {
        echo" <div class='alert alert-danger text-center'>Bilgileriniz Kayıt Edilemedi</div>";
      }
      ?>
    
          
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3 ">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                        <img style="background-image: url(Panel/images/user/<?php echo $ihtiyaccek["ihtiyac_foto"]?>);" class="pp rounded-circle">
                    <div class="mt-3">
                      <h4><?php echo $ihtiyaccek["ihtiyac_ad"]." " .$ihtiyaccek["ihtiyac_soyad"]; ?></h4>
                      <p class="text-secondary mb-1">İhtiyac Sahibi</p>
                      <p class="text-muted font-size-sm"><?php echo $ihtiyaccek["ihtiyac_adres"]?></p>
                     
                    </div>
                  </div> 
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Kayıt Tarihi</h6>
                    <span class="text-secondary"><?php echo $ihtiyaccek["ihtiyac_zaman"]?></span>
                  </li>
                
                </ul>
              </div>
            </div>
            <!-- <input type="file"  accept="image/png, image/gif, image/jpeg"> -->

            <div class="col-md-8">
              <form action="Panel/netting/user.php" method="POST" enctype="multipart/form-data" role="form">
              <div class="card mb-3">
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Profil Resmi</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input name="ihtiyac_foto" class="form-control" type="file" accept="image/png, image/gif, image/jpeg" >
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Mail</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input name="ihtiyac_mail" required type="text" id="inputbu" disabled="" value="<?php echo $ihtiyaccek["ihtiyac_mail"]?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Ad</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input name="ihtiyac_ad" required type="text" id="inputbu" value="<?php echo $ihtiyaccek["ihtiyac_ad"]?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Soyad</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input name="ihtiyac_soyad" required type="text" id="inputbu" value="<?php echo $ihtiyaccek["ihtiyac_soyad"]?>">
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">GSM</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input name="ihtiyac_gsm" type="number" id="inputbu" value="<?php echo $ihtiyaccek["ihtiyac_gsm"]?>">
                    </div>
                  </div>
                 
                  
                  <hr>

                  <div class="row">
                    <div class="col-sm-12">
                      <button type="submit" name="ihtiyacbilgiguncelle" class="site-btn">Gönder</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    <?php include"footer.php" ?>