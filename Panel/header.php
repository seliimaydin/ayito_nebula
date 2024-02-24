<?php
session_start();
require 'netting/connection.php';

$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kad=:ad ");
$kullanicisor->execute(array(
'ad'=>$_SESSION['ad']
));
$say=$kullanicisor->rowCount();



if ($say==0) {
  header('Location:login?durum=izinsiz');
  die;
}

error_reporting(0);

$ayar=$baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="icon">
    <link href="../panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="apple-touch-icon">
    <title><?php echo $ayarcek['baslik'] ?></title>


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

  <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>
