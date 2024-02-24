<?php require 'Panel/netting/connection.php';

$ayar = $baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek = $ayar->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="Panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="icon">
	<link href="Panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="apple-touch-icon">
	<title><?php echo $ayarcek['baslik'] ?></title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Arvo'>
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<style>
		/*======================
    404 page
=======================*/


		.page_404 {
			padding: 40px 0;
			background: #fff;
			font-family: 'Arvo', serif;
		}

		.page_404 img {
			width: 100%;
		}

		.four_zero_four_bg {

			background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
			height: 400px;
			background-position: center;
		}


		.four_zero_four_bg h1 {
			font-size: 80px;
		}

		.four_zero_four_bg h3 {
			font-size: 80px;
		}

		.link_404 {
			color: #fff !important;
			padding: 10px 20px;
			background: #39ac31;
			margin: 20px 0;
			display: inline-block;
		}

		.contant_box_404 {
			margin-top: -50px;
		}
	</style>
	<section class="page_404">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 ">
					<div class="col-sm-10 col-sm-offset-1  text-center">
						<div class="four_zero_four_bg">
							<h1 class="text-center ">404</h1>


						</div>

						<div class="contant_box_404">
							<h3 class="h2">
								Kaybolmusa benziyorsun.
							</h3>

							<p>Aradığın sayfayı bulamadık.</p>

							<a href="index" class="link_404">Anasayfaya Dön</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>