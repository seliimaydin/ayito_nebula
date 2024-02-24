<?php 
ob_start();
session_start();

include 'connection.php';





//ÖĞRENCİ İŞLEMLERİ BAŞLANGIÇ

error_reporting(0);

// DEMO Öğrenci Silme İşlemleri(Başvuru Reddetme)

if ($_GET['demo_ogrencisil']=="ok") {

	$demo_ogrencisil=$baglanti->prepare("DELETE from demo_ogrencihesap where kullanici_id=:id");
	$demo_ogrencikontrol=$demo_ogrencisil->execute(array(
		'id' => $_GET['kullanici_id']
	));


	if ($demo_ogrencikontrol) {

		header("location:../ogrencihesap?sil=ok");


	} else {

		header("location:../ogrencihesap?sil=no");

	}


}
// DEMO İhtiyaç Sahibi Silme İşlemleri(Başvuru Reddetme)

if ($_GET['demo_ihtiyacsil']=="ok") {

	$demo_ihtiyacsil=$baglanti->prepare("DELETE from demo_ihtiyachesap where demokullanici_id=:id");
	$demo_ihtiyackontrol=$demo_ihtiyacsil->execute(array(
		'id' => $_GET['demokullanici_id']
	));


	if ($demo_ihtiyackontrol) {

		header("location:../ihtiyachesap?sil=ok");


	} else {

		header("location:../ihtiyachesap?sil=no");

	}


}

//Öğrenci Demo Kayıt İşlemleri

if (isset($_POST['demo_ogrencikaydet'])) {

	$kullanici_mail=htmlspecialchars(trim($_POST['kullanici_mail'])); 

	$kullanici_passwordone=htmlspecialchars(trim($_POST['kullanici_passwordone'])); 
	$kullanici_passwordtwo=htmlspecialchars(trim($_POST['kullanici_passwordtwo'])); 
	$kullanici_ad=htmlspecialchars(trim($_POST['kullanici_ad'])); 
	$kullanici_soyad=htmlspecialchars(trim($_POST['kullanici_soyad'])); 
    


	if ($kullanici_passwordone==$kullanici_passwordtwo) {


		if (strlen($kullanici_passwordone)>=6) {

			// Başlangıç

			$kullanicisor=$baglanti->prepare("SELECT * FROM demo_ogrencihesap WHERE kullanici_mail=:mail");
			$kullanicisor->execute(array(
				'mail' => $kullanici_mail
			));

			//dönen satır sayısını belirtir
			$kullanicisay=$kullanicisor->rowCount();



			if ($kullanicisay==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$password=md5($kullanici_passwordone);

				$kullanici_yetki=0;

				//Kullanıcı kayıt işlemi yapılıyor...
				$kullanicikaydet=$baglanti->prepare("INSERT INTO demo_ogrencihesap SET
					kullanici_ad=:kullanici_ad,
					kullanici_soyad=:kullanici_soyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password,
					kullanici_yetki=:kullanici_yetki
					");
				$kullaniciinsert=$kullanicikaydet->execute(array(
					'kullanici_ad' => htmlspecialchars(trim($_POST['kullanici_ad'])),
					'kullanici_soyad' => htmlspecialchars(trim($_POST['kullanici_soyad'])),
					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password,
					'kullanici_yetki' => $kullanici_yetki
				));

				if ($kullaniciinsert) {

					header("Location:../../register?durum=kayıtok");

				} else {

					header("Location:../../register?durum=basarisiz");

				}

			} else {

				header("Location:../../register?durum=mukerrerkayit");

			}

		// Bitiş


		} else {

			header("Location:../../register?durum=eksiksifre");

		}

	} else {

		header("Location:../../register?durum=farklisifre");

	}
	

}



//Öğrenci Onaylama İşlemleri

if (isset($_POST['ogrencionayla'])) {

	$ogrenci_mail=htmlspecialchars(trim($_POST['kullanici_mail'])); 

	$ogrenci_password=htmlspecialchars(trim($_POST['kullanici_password'])); 

	$ogrenci_ad=htmlspecialchars(trim($_POST['kullanici_ad'])); 
	$ogrenci_soyad=htmlspecialchars(trim($_POST['kullanici_soyad'])); 

			// Başlangıç

	$ogrencisor=$baglanti->prepare("SELECT * FROM ogrencihesap WHERE ogrenci_mail=:mail");
	$ogrencisor->execute(array(
		'mail' => $ogrenci_mail
	));

			//dönen satır sayısını belirtir
	$ogrencisay=$ogrencisor->rowCount();



	if ($ogrencisay==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.


		$ogrenci_yetki=1;

				//Kullanıcı kayıt işlemi yapılıyor...
		$ogrencikaydet=$baglanti->prepare("INSERT INTO ogrencihesap SET
			ogrenci_ad=:ogrenci_ad,
			ogrenci_soyad=:ogrenci_soyad,
			ogrenci_gsm=:ogrenci_gsm,
			ogrenci_mail=:ogrenci_mail,
			ogrenci_password=:ogrenci_password,
			ogrenci_yetki=:ogrenci_yetki
			");
		$ogrenciinsert=$ogrencikaydet->execute(array(
			'ogrenci_ad' => htmlspecialchars(trim($_POST['ogrenci_ad'])),
			'ogrenci_soyad' => htmlspecialchars(trim($_POST['ogrenci_soyad'])),
			'ogrenci_password' => htmlspecialchars(trim($_POST['ogrenci_password'])),
			'ogrenci_mail' => htmlspecialchars(trim($_POST['ogrenci_mail'])),
			'ogrenci_gsm' => htmlspecialchars(trim($_POST['ogrenci_gsm'])),
			'ogrenci_yetki' => $ogrenci_yetki
		));

		if ($ogrenciinsert) {

			$demo_ogrencisil=$baglanti->prepare("DELETE from demo_ogrencihesap");
			$demo_ogrencikontrol=$demo_ogrencisil->execute(array());
			
			header("Location:../demo_ogrencihesap?durum=kayıtok");

		} else {

			header("Location:../demo_ogrencihesap?durum=basarisiz");

		}

	} else {

		header("Location:../demo_ogrencihesap?durum=mukerrerkayit");

	}

		// Bitiş


}



//Öğrenci Giriş İşlemleri

if (isset($_POST['ogrencigiris'])) {


	$ogrenci_mail=htmlspecialchars($_POST['ogrenci_mail']); 
	$ogrenci_password=md5(htmlspecialchars($_POST['ogrenci_password'])); 



	$ogrencisor=$baglanti->prepare("SELECT * FROM ogrencihesap WHERE ogrenci_mail=:mail and ogrenci_yetki=:yetki and ogrenci_password=:password and ogrenci_durum=:durum");
	$ogrencisor->execute(array(
		'mail' => $ogrenci_mail,
		'yetki' => 1,
		'password' => $ogrenci_password,
		'durum' => 1
	));


	$ogrencisay=$ogrencisor->rowCount();


	if ($ogrencisay==1) {

		$_SESSION['userogrenci_mail']=$ogrenci_mail;

		header("Location:../../ogrenci?durum=başarılı");

	} else {

		header("Location:../../login?durum=hata");

	}


}


//İhtiyaç Bilgi Düzenleme İşlemleri(Hesabım)


if (isset($_POST['ihtiyacbilgiguncelle'])) {

	if ($_FILES['ihtiyac_foto']["size"] > 0) {
		$uploads_dir = '../images/user';
		@$tmp_name = $_FILES['ihtiyac_foto']["tmp_name"];
		@$name = $_FILES['ihtiyac_foto']["name"];
		
		$sayi1 = rand(20000, 30000);
		$sayi2 = rand(20000, 30000);
		$sayi3 = rand(20000, 30000);
		$sayilar = $sayi1 . $sayi2 . $sayi3;
		$resimyolu = $sayilar . $name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
		
		$ihtiyackaydet = $baglanti->prepare("UPDATE ihtiyachesap SET

		ihtiyac_foto=:ihtiyac_foto,
		ihtiyac_ad=:ihtiyac_ad,
		ihtiyac_soyad=:ihtiyac_soyad,
		ihtiyac_gsm=:ihtiyac_gsm
		WHERE ihtiyac_id={$_SESSION['userihtiyac_id']}");

$ihtiyacupdate = $ihtiyackaydet->execute(array(
	'ihtiyac_foto' => $resimyolu,
	'ihtiyac_ad' => htmlspecialchars($_POST['ihtiyac_ad']),
	'ihtiyac_soyad' => htmlspecialchars($_POST['ihtiyac_soyad']),
	'ihtiyac_gsm' => htmlspecialchars($_POST['ihtiyac_gsm'])
	
));



if ($ihtiyacupdate) {
		
		Header("Location:../../ihtiyachesabim?durum=ok");

	} else {
		
		Header("Location:../../ihtiyachesabim?durum=hata");
	}
}
else{
	$ihtiyackaydet = $baglanti->prepare("UPDATE ihtiyachesap SET
		ihtiyac_ad=:ihtiyac_ad,
		ihtiyac_soyad=:ihtiyac_soyad,
		ihtiyac_gsm=:ihtiyac_gsm
		WHERE ihtiyac_id={$_SESSION['userihtiyac_id']}");

$ihtiyacupdate = $ihtiyackaydet->execute(array(

	'ihtiyac_ad' => htmlspecialchars($_POST['ihtiyac_ad']),
	'ihtiyac_soyad' => htmlspecialchars($_POST['ihtiyac_soyad']),
	'ihtiyac_gsm' => htmlspecialchars($_POST['ihtiyac_gsm'])
));



if ($ihtiyacupdate) {
		
	Header("Location:../../ihtiyachesabim?durum=ok");

} else {
	
	Header("Location:../../ihtiyachesabim?durum=hata");
}
}

}


//Öğrenci Bilgi Düzenleme İşlemleri(Hesabım)


if (isset($_POST['ogrencibilgiguncelle'])) {

	if ($_FILES['ogrenci_foto']["size"] > 0) {
		$uploads_dir = '../images/user';
		@$tmp_name = $_FILES['ogrenci_foto']["tmp_name"];
		@$name = $_FILES['ogrenci_foto']["name"];
		
		$sayi1 = rand(20000, 30000);
		$sayi2 = rand(20000, 30000);
		$sayi3 = rand(20000, 30000);
		$sayilar = $sayi1 . $sayi2 . $sayi3;
		$resimyolu = $sayilar . $name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
		
		$ogrencikaydet = $baglanti->prepare("UPDATE ogrencihesap SET

		ogrenci_foto=:ogrenci_foto,
		ogrenci_ad=:ogrenci_ad,
		ogrenci_soyad=:ogrenci_soyad,
		ogrenci_gsm=:ogrenci_gsm
		WHERE ogrenci_id={$_SESSION['userogrenci_id']}");

$ogrenciupdate = $ogrencikaydet->execute(array(
	'ogrenci_foto' => $resimyolu,
	'ogrenci_ad' => htmlspecialchars($_POST['ogrenci_ad']),
	'ogrenci_soyad' => htmlspecialchars($_POST['ogrenci_soyad']),
	'ogrenci_gsm' => htmlspecialchars($_POST['ogrenci_gsm'])
	
));



if ($ogrenciupdate) {
		
		Header("Location:../../hesabim?durum=ok");

	} else {
		
		Header("Location:../../hesabim?durum=hata");
	}
}
else{
	$ogrencikaydet = $baglanti->prepare("UPDATE ogrencihesap SET
		ogrenci_ad=:ogrenci_ad,
		ogrenci_soyad=:ogrenci_soyad,
		ogrenci_gsm=:ogrenci_gsm
		WHERE ogrenci_id={$_SESSION['userogrenci_id']}");

$ogrenciupdate = $ogrencikaydet->execute(array(

	'ogrenci_ad' => htmlspecialchars($_POST['ogrenci_ad']),
	'ogrenci_soyad' => htmlspecialchars($_POST['ogrenci_soyad']),
	'ogrenci_gsm' => htmlspecialchars($_POST['ogrenci_gsm'])
));



if ($ogrenciupdate) {
		
	Header("Location:../../hesabim?durum=ok");

} else {
	
	Header("Location:../../hesabim?durum=hata");
}
}

}






//ADMİN Paneli Öğrenci Bilgi Düzenleme İşlemleri

if (isset($_POST['ogrenciduzenle'])) {


	$ogrencikaydet=$baglanti->prepare("UPDATE ogrencihesap SET

		ogrenci_ad=:ogrenci_ad,
		ogrenci_soyad=:ogrenci_soyad,
		ogrenci_gsm=:ogrenci_gsm,
		ogrenci_mail=:ogrenci_mail,
		
		ogrenci_password=:ogrenci_password
		
		");

	$ogrenciupdate=$ogrencikaydet->execute(array(
		'ogrenci_ad' => htmlspecialchars($_POST['ogrenci_ad']),
		'ogrenci_soyad' => htmlspecialchars($_POST['ogrenci_soyad']),
		'ogrenci_gsm' => htmlspecialchars($_POST['ogrenci_gsm']),
		'ogrenci_mail' => htmlspecialchars($_POST['ogrenci_mail']),
		
		'ogrenci_password' => htmlspecialchars($_POST['ogrenci_password'])

	));

	if ($ogrenciupdate) {
		
		Header("Location:../ogrencihesap?durum=ok");

	} else {

		Header("Location:../ogrencihesap?durum=hata");
	}
	
}


// Onaylanmış Öğrenci Silme İşlemleri

if ($_GET['ogrencisil']=="ok") {

	$ogrencisil=$baglanti->prepare("DELETE from ogrencihesap where ogrenci_id=:id");
	$ogrencikontrol=$ogrencisil->execute(array(
		'id' => $_GET['ogrenci_id']
	));


	if ($ogrencikontrol) {

		header("location:../ogrencihesap?sil=ok");


	} else {

		header("location:../ogrencihesap?sil=no");

	}


}


//ÖĞRENCİ İŞLEMLERİ BİTİŞ






//İHTİYAÇ SAHİBİ İŞLEMLERİ BAŞLANGIÇ




//İhtiyaç Sahibi Demo Kayıt İşlemleri

if (isset($_POST['demo_ihtiyackaydet'])) {


	$demokullanici_mail=htmlspecialchars(trim($_POST['demokullanici_mail'])); 

	$demokullanici_passwordone=htmlspecialchars(trim($_POST['demokullanici_passwordone'])); 
	$demokullanici_passwordtwo=htmlspecialchars(trim($_POST['demokullanici_passwordtwo'])); 



	if ($demokullanici_passwordone==$demokullanici_passwordtwo) {


		if (strlen($demokullanici_passwordone)>=6) {

			// Başlangıç

			$demokullanicisor=$baglanti->prepare("SELECT * FROM demo_ihtiyachesap WHERE demokullanici_mail=:mail");
			$demokullanicisor->execute(array(
				'mail' => $demokullanici_mail
			));

			//dönen satır sayısını belirtir
			$demosay=$demokullanicisor->rowCount();



			if ($demosay==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$demopassword=md5($demokullanici_passwordone);

				$demokullanici_yetki=1;

				//Kullanıcı kayıt işlemi yapılıyor...
				$demokullanicikaydet=$baglanti->prepare("INSERT INTO demo_ihtiyachesap SET
					demokullanici_ad=:demokullanici_ad,
					demokullanici_soyad=:demokullanici_soyad,
					demokullanici_mail=:demokullanici_mail,
					demokullanici_password=:demokullanici_password,
					demokullanici_yetki=:demokullanici_yetki
					");
				$demoinsert=$demokullanicikaydet->execute(array(
					'demokullanici_ad' => htmlspecialchars(trim($_POST['demokullanici_ad'])),
					'demokullanici_soyad' => htmlspecialchars(trim($_POST['demokullanici_soyad'])),
					'demokullanici_mail' => $demokullanici_mail,
					'demokullanici_password' => $demopassword,
					'demokullanici_yetki' => $demokullanici_yetki
				));

				if ($demoinsert) {

					header("Location:../../register0?durum=kayıtok");

				} else {

					header("Location:../../register0?durum=basarisiz");

				}

			} else {

				header("Location:../../register0?durum=mukerrerkayit");

			}

		// Bitiş


		} else {

			header("Location:../../register0?durum=eksiksifre");

		}

	} else {

		header("Location:../../register0?durum=farklisifre");

	}
	

}



//İhtiyaç Sahibi Onaylama İşlemleri

if (isset($_POST['ihtiyaconayla'])) {

	$ihtiyac_mail=htmlspecialchars(trim($_POST['ihtiyac_mail'])); 

	$ihtiyac_password=htmlspecialchars(trim($_POST['ihtiyac_password'])); 

	$ihtiyacsor=$baglanti->prepare("SELECT * FROM ihtiyachesap WHERE ihtiyac_mail=:mail");
	$ihtiyacsor->execute(array(
		'mail' => $ihtiyac_mail
	));


			//dönen satır sayısını belirtir
	$ihtiyacsay=$ihtiyacsor->rowCount();

	if ($ihtiyacsay==0) {


				//Kullanıcı kayıt işlemi yapılıyor...
		$ihtiyackaydet=$baglanti->prepare("INSERT INTO ihtiyachesap SET
			ihtiyac_ad=:ihtiyac_ad,
			ihtiyac_soyad=:ihtiyac_soyad,
			ihtiyac_mail=:ihtiyac_mail,
			ihtiyac_password=:ihtiyac_password,
			ihtiyac_yetki=:ihtiyac_yetki,
			ihtiyac_gsm=:ihtiyac_gsm
			");
		$ihtiyacinsert=$ihtiyackaydet->execute(array(
			'ihtiyac_ad' => $_POST['ihtiyac_ad'],
			'ihtiyac_soyad' => $_POST['ihtiyac_soyad'],
			'ihtiyac_mail' => $_POST['ihtiyac_mail'],
			'ihtiyac_password' => $_POST['ihtiyac_password'],
			'ihtiyac_gsm' => $_POST['ihtiyac_gsm'],
			'ihtiyac_yetki' => $_POST['ihtiyac_yetki']
		));


		if ($ihtiyacinsert) {

			$demo_ihtiyacsil=$baglanti->prepare("DELETE from demo_ihtiyachesap");
			$demo_ihtiyackontrol=$demo_ihtiyacsil->execute(array());

			header("Location:../demo_ihtiyachesap?durum=kayıtok");

		} else {

			header("Location:../demo_ihtiyachesap?durum=basarisiz");

		}

	} else {

		header("Location:../demo_ihtiyachesap?durum=mukerrerkayit");

	}

		// Bitiş


}


//İhtiyaç Sahibi Giriş İşlemleri

if (isset($_POST['ihtiyacgiris'])) {


	$ihtiyac_mail=htmlspecialchars($_POST['ihtiyac_mail']); 
	$ihtiyac_password=md5(htmlspecialchars($_POST['ihtiyac_password'])); 



	$ihtiyacsor=$baglanti->prepare("SELECT * FROM ihtiyachesap WHERE ihtiyac_mail=:mail and ihtiyac_yetki=:yetki and ihtiyac_password=:password and ihtiyac_durum=:durum");
	$ihtiyacsor->execute(array(
		'mail' => $ihtiyac_mail,
		'yetki' => 1,
		'password' => $ihtiyac_password,
		'durum' => 1
	));


	$ihtiyacsay=$ihtiyacsor->rowCount();



	if ($ihtiyacsay==1) {

		$_SESSION['userihtiyac_mail']=$ihtiyac_mail;

		header("Location:../../ihtiyacsahibi?durum=başarılı");

	} else {

		header("Location:../../login0?durum=hata");

	}


}


//ADMİN Paneli İhtiyaç Sahibi Bilgi Düzenleme İşlemleri

if (isset($_POST['ihtiyacduzenle'])) {


	$ihtiyackaydet=$baglanti->prepare("UPDATE ihtiyachesap SET

		ihtiyac_ad=:ihtiyac_ad,
		ihtiyac_soyad=:ihtiyac_soyad,
		ihtiyac_gsm=:ihtiyac_gsm,
		ihtiyac_mail=:ihtiyac_mail,
		
		ihtiyac_password=:ihtiyac_password
		
		");

	$ihtiyacupdate=$ihtiyackaydet->execute(array(
		'ihtiyac_ad' => htmlspecialchars($_POST['ihtiyac_ad']),
		'ihtiyac_soyad' => htmlspecialchars($_POST['ihtiyac_soyad']),
		'ihtiyac_gsm' => htmlspecialchars($_POST['ihtiyac_gsm']),
		'ihtiyac_mail' => htmlspecialchars($_POST['ihtiyac_mail']),
		
		'ihtiyac_password' => htmlspecialchars($_POST['ihtiyac_password'])

	));

	if ($ihtiyacupdate) {
		
		Header("Location:../ihtiyachesap?durum=ok");

	} else {

		Header("Location:../ihtiyachesap?durum=hata");
	}
	
}


// Onaylanmış İhtiyaç Sahibi Silme İşlemleri

if ($_GET['ihtiyacsil']=="ok") {

	$ihtiyacsil=$baglanti->prepare("DELETE from ihtiyachesap where ihtiyac_id=:id");
	$ihtiyackontrol=$ihtiyacsil->execute(array(
		'id' => $_GET['ihtiyac_id']
	));


	if ($ihtiyackontrol) {

		header("location:../ihtiyachesap?sil=ok");


	} else {

		header("location:../ihtiyachesap?sil=no");

	}


}
if ($_GET['ihtiyacsil']=="ok") {

	$ihtiyacsil=$baglanti->prepare("DELETE from ihtiyachesap where ihtiyac_id=:id");
	$ihtiyackontrol=$ihtiyacsil->execute(array(
		'id' => $_GET['ihtiyac_id']
	));


	if ($ihtiyackontrol) {

		header("location:../ihtiyachesap?sil=ok");


	} else {

		header("location:../ihtiyachesap?sil=no");

	}


}



?>