<?php include "header.php"; ?>
<?php require 'Panel/netting/connection.php';

$ayar=$baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="tr">
<head>
	<link href="Panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="icon">
	<link href="Panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="apple-touch-icon">
	<title><?php echo $ayarcek['baslik']?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/imagesform/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendorform/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fontsform/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fontsform/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendorform/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/vendorform/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendorform/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendorform/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/vendorform/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/cssform/util.css">
	<link rel="stylesheet" type="text/css" href="css/cssform/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background: #F2F7FF;">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<center><h3>AYİTO Web Sistemi Giriş Anasayfası</h3></center>
				<?php 

      if (@$_GET['durum']=="exit") {?>

        <div class="alert alert-success text-center">
          <strong>Bilgi!</strong> Başarıyla Çıkış Yapıldı.
        </div>

      <?php } ?>
				<div class="container-login100-form-btn m-t-17">
					
					<a style="
						font-family: Poppins-Medium;
						font-size: 16px;
						color: #fff;
						line-height: 1.2; " href="login" class="login100-form-btn">
						Öğrenci Girişi</a>
				</div>
				<div class="container-login100-form-btn m-t-17">
					<a style="
						font-family: Poppins-Medium;
						font-size: 16px;
						color: #fff;
						line-height: 1.2;" href="login0" class="login100-form-btn">
						İhtiyaç Sahibi Girişi</a>
				</div>
				<div class="container-login100-form-btn m-t-17">
					<a style="
						font-family: Poppins-Medium;
						font-size: 16px;
						color: #fff;
						line-height: 1.2;" href="Panel/login" class="login100-form-btn">
						Yönetici Girişi</a>
				</div>

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<!--===============================================================================================-->
	<script src="vendor/vendorform/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/vendorform/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/vendorform/bootstrap/js/popper.js"></script>
	<script src="vendor/vendorform/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/vendorform/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/vendorform/daterangepicker/moment.min.js"></script>
	<script src="vendor/vendorform/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/vendorform/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/jsform/main.js"></script>

</body>
</html>
<?php include "footer.php"; ?>