<?php include"header.php";
error_reporting(0);
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
                        <img style="background-image: url(Panel/images/user/<?php echo $ogrencicek["ogrenci_foto"]?>);" class="pp rounded-circle">
                    <div class="mt-3">
                      <h4><?php echo $ogrencicek["ogrenci_ad"]." " .$ogrencicek["ogrenci_soyad"]; ?></h4>
                      <p class="text-secondary mb-1">Öğrenci</p>
                      <p class="text-muted font-size-sm"><?php echo $ogrencicek["ogrenci_adres"]?></p>
                     <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>-->
                    </div>
                  </div> 
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Kayıt Tarihi</h6>
                    <span class="text-secondary"><?php echo $ogrencicek["ogrenci_zaman"]?></span>
                  </li>
                  <!--
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>-->
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
                    <input name="ogrenci_foto" class="form-control" type="file" accept="image/png, image/gif, image/jpeg" >
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Mail</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input name="ogrenci_mail" required type="text" id="inputbu" disabled="" value="<?php echo $ogrencicek["ogrenci_mail"]?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Ad</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input name="ogrenci_ad" required type="text" id="inputbu" value="<?php echo $ogrencicek["ogrenci_ad"]?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Soyad</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input name="ogrenci_soyad" required type="text" id="inputbu" value="<?php echo $ogrencicek["ogrenci_soyad"]?>">
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">GSM</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input name="ogrenci_gsm" type="number" id="inputbu" value="<?php echo $ogrencicek["ogrenci_gsm"]?>">
                    </div>
                  </div>
                 
                  
                  <hr>

                  <div class="row">
                    <div class="col-sm-12">
                      <button type="submit" name="ogrencibilgiguncelle" class="site-btn">Gönder</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--
              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              -->


            </div>
          </div>

        </div>
    </div>
    <?php include"footer.php" ?>