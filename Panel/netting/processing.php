<?php require 'connection.php';

session_start();
error_reporting(0);



if (isset($_POST['gonder'])) {

    $uploads_dir = '../images/urun';
    @$tmp_name = $_FILES['fav']["tmp_name"];
    @$name = $_FILES['fav']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    $kaydet = $baglanti->prepare("UPDATE ayar SET
fav=:fav,
 baslik=:baslik,
 aciklama=:aciklama,
 keyword=:keyword
    WHERE ayarid=2");

    $update = $kaydet->execute(array(

        'fav' => $resimyolu,
        'baslik' => $_POST['baslik'],
        'aciklama' => $_POST['aciklama'],
        'keyword' => $_POST['keyword']
    ));

    if ($update) {
        Header("Location:../settings?status=successful");
    } else {
        Header("Location:../settings?status=unsuccessful");
    }
}


if (isset($_POST['sponsorkaydet'])) {


    $uploads_dir = '../images/gallery';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("INSERT INTO sponsor SET
            baslik=:baslik,
            aciklama=:aciklama,
            sira=:sira,
            resim=:resim");

    $insert = $kaydet->execute(array(



        'baslik' => $_POST['baslik'],
        'aciklama' => $_POST['aciklama'],
        'sira' => $_POST['sira'],

        'resim' => $resimyolu
    ));



    if ($insert) {
        Header("Location:../gallery?status=successful");
    } else {
        Header("Location:../gallery?status=unsuccessful");
    }
}

if (isset($_POST['sponsorduzenle'])) {

    if ($_FILES['resim']["size"] > 0) {


        $uploads_dir = '../images/gallery';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];

        $sayi1 = rand(20000, 30000);
        $sayi2 = rand(20000, 30000);
        $sayi3 = rand(20000, 30000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimyolu = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE sponsor SET

                      baslik=:baslik,
                      aciklama=:aciklama,
                      sira=:sira,
            resim=:resim
            WHERE id={$_POST['id']}
            ");

        $insert = $kaydet->execute(array(



            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'sira' => $_POST['sira'],

            'resim' => $resimyolu
        ));




        if ($insert) {
            Header("Location:../gallery?status=successful");
        } else {
            Header("Location:../gallery?status=unsuccessful");
        }
    } else {


        $duzenle = $baglanti->prepare("UPDATE  sponsor SET

                      baslik=:baslik,
                      aciklama=:aciklama,
                      sira=:sira
        WHERE id={$_POST['id']}
        ");

        $insert = $duzenle->execute(array(




            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'sira' => $_POST['sira']
        ));




        if ($insert) {
            Header("Location:../gallery?status=successful");
        } else {
            Header("Location:../gallery?status=unsuccessful");
        }
    }
}

if (isset($_POST['sponsorsil'])) {


    $sil = $_POST['resim'];
    unlink("../images/gallery/$sil");

    $sil = $baglanti->prepare("DELETE from sponsor where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));

    if ($sil) {
        Header("Location:../gallery?status=successful");
    } else {
        Header("Location:../gallery?status=unsuccessful");
    }
}

if (isset($_POST['contact'])) {



    $kaydet = $baglanti->prepare("UPDATE ayar SET
 email=:email,
adres=:adres,
 telefon=:telefon
    WHERE ayarid=2");

    $update = $kaydet->execute(array(


        'email' => $_POST['email'],
        'adres' => $_POST['adres'],
        'telefon' => $_POST['telefon']
    ));

    if ($update) {
        Header("Location:../contact?status=successful");
    } else {
        Header("Location:../contact?status=unsuccessful");
    }
}

if (isset($_POST['sosyalkaydet'])) {



    $kaydet = $baglanti->prepare("UPDATE ayar SET
 facebook=:facebook,
 instagram=:instagram,
 twitter=:twitter,
 youtube=:youtube,
 linkedin=:linkedin
    WHERE ayarid=2");

    $update = $kaydet->execute(array(


        'facebook' => $_POST['facebook'],
        'instagram' => $_POST['instagram'],
        'twitter' => $_POST['twitter'],
        'youtube' => $_POST['youtube'],
        'linkedin' => $_POST['linkedin']
    ));

    if ($update) {
        Header("Location:../social?status=successful");
    } else {
        Header("Location:../social?status=unsuccessful");
    }
}
if (isset($_POST['yemekkaydet'])) {

    $kaydet = $baglanti->prepare("UPDATE yemek SET
 yemek_bir_bir=:yemek_bir_bir,
 yemek_bir_iki=:yemek_bir_iki,
 yemek_bir_uc=:yemek_bir_uc,
 yemek_bir_dort=:yemek_bir_dort,
 yemek_iki_bir=:yemek_iki_bir,
 yemek_iki_iki=:yemek_iki_iki,
 yemek_iki_uc=:yemek_iki_uc,
 yemek_iki_dort=:yemek_iki_dort,
 yemek_uc_bir=:yemek_uc_bir,
 yemek_uc_iki=:yemek_uc_iki,
 yemek_uc_uc=:yemek_uc_uc,
 yemek_uc_dort=:yemek_uc_dort,
 yemek_dort_bir=:yemek_dort_bir,
 yemek_dort_iki=:yemek_dort_iki,
 yemek_dort_uc=:yemek_dort_uc,
 yemek_dort_dort=:yemek_dort_dort,
 yemek_bes_bir=:yemek_bes_bir,
 yemek_bes_iki=:yemek_bes_iki,
 yemek_bes_uc=:yemek_bes_uc,
 yemek_bes_dort=:yemek_bes_dort,
 yemek_alti_bir=:yemek_alti_bir,
 yemek_alti_iki=:yemek_alti_iki,
 yemek_alti_uc=:yemek_alti_uc,
 yemek_alti_dort=:yemek_alti_dort,
 yemek_yedi_bir=:yemek_yedi_bir,
 yemek_yedi_iki=:yemek_yedi_iki,
 yemek_yedi_uc=:yemek_yedi_uc,
 yemek_yedi_dort=:yemek_yedi_dort
    WHERE id=2");

    $update = $kaydet->execute(array(


        'yemek_bir_bir' => $_POST['yemek_bir_bir'],
        'yemek_bir_iki' => $_POST['yemek_bir_iki'],
        'yemek_bir_uc' => $_POST['yemek_bir_uc'],
        'yemek_bir_dort' => $_POST['yemek_bir_dort'],
        'yemek_iki_bir' => $_POST['yemek_iki_bir'],
        'yemek_iki_iki' => $_POST['yemek_iki_iki'],
        'yemek_iki_uc' => $_POST['yemek_iki_uc'],
        'yemek_iki_dort' => $_POST['yemek_iki_dort'],
        'yemek_uc_bir' => $_POST['yemek_uc_bir'],
        'yemek_uc_iki' => $_POST['yemek_uc_iki'],
        'yemek_uc_uc' => $_POST['yemek_uc_uc'],
        'yemek_uc_dort' => $_POST['yemek_uc_dort'],
        'yemek_dort_bir' => $_POST['yemek_dort_bir'],
        'yemek_dort_iki' => $_POST['yemek_dort_iki'],
        'yemek_dort_uc' => $_POST['yemek_dort_uc'],
        'yemek_dort_dort' => $_POST['yemek_dort_dort'],
        'yemek_bes_bir' => $_POST['yemek_bes_bir'],
        'yemek_bes_iki' => $_POST['yemek_bes_iki'],
        'yemek_bes_uc' => $_POST['yemek_bes_uc'],
        'yemek_bes_dort' => $_POST['yemek_bes_dort'],
        'yemek_alti_bir' => $_POST['yemek_alti_bir'],
        'yemek_alti_iki' => $_POST['yemek_alti_iki'],
        'yemek_alti_uc' => $_POST['yemek_alti_uc'],
        'yemek_alti_dort' => $_POST['yemek_alti_dort'],
        'yemek_yedi_bir' => $_POST['yemek_yedi_bir'],
        'yemek_yedi_iki' => $_POST['yemek_yedi_iki'],
        'yemek_yedi_uc' => $_POST['yemek_yedi_uc'],
        'yemek_yedi_dort' => $_POST['yemek_yedi_dort']
    ));

    if ($update) {
        Header("Location:../food?status=successful");
    } else {
        Header("Location:../food?status=unsuccessful");
    }
}


if (isset($_POST['cevap'])) {
    $kaydet = $baglanti->prepare("INSERT INTO cevap SET
    cevap_bir_bir=:cevap_bir_bir,
 cevap_bir_iki=:cevap_bir_iki,
 cevap_bir_uc=:cevap_bir_uc,
 cevap_bir_dort=:cevap_bir_dort,
 cevap_iki_bir=:cevap_iki_bir,
 cevap_iki_iki=:cevap_iki_iki,
 cevap_iki_uc=:cevap_iki_uc,
 cevap_iki_dort=:cevap_iki_dort,
 cevap_uc_bir=:cevap_uc_bir,
 cevap_uc_iki=:cevap_uc_iki,
 cevap_uc_uc=:cevap_uc_uc,
 cevap_uc_dort=:cevap_uc_dort,
 cevap_dort_bir=:cevap_dort_bir,
 cevap_dort_iki=:cevap_dort_iki,
 cevap_dort_uc=:cevap_dort_uc,
 cevap_dort_dort=:cevap_dort_dort,
 cevap_bes_bir=:cevap_bes_bir,
 cevap_bes_iki=:cevap_bes_iki,
 cevap_bes_uc=:cevap_bes_uc,
 cevap_bes_dort=:cevap_bes_dort,
 cevap_alti_bir=:cevap_alti_bir,
 cevap_alti_iki=:cevap_alti_iki,
 cevap_alti_uc=:cevap_alti_uc,
 cevap_alti_dort=:cevap_alti_dort,
 cevap_yedi_bir=:cevap_yedi_bir,
 cevap_yedi_iki=:cevap_yedi_iki,
 cevap_yedi_uc=:cevap_yedi_uc,
 cevap_yedi_dort=:cevap_yedi_dort
    ");

    $insert = $kaydet->execute(array(



        'cevap_bir_bir' => $_POST['cevap_bir_bir'],
        'cevap_bir_iki' => $_POST['cevap_bir_iki'],
        'cevap_bir_uc' => $_POST['cevap_bir_uc'],
        'cevap_bir_dort' => $_POST['cevap_bir_dort'],
        'cevap_iki_bir' => $_POST['cevap_iki_bir'],
        'cevap_iki_iki' => $_POST['cevap_iki_iki'],
        'cevap_iki_uc' => $_POST['cevap_iki_uc'],
        'cevap_iki_dort' => $_POST['cevap_iki_dort'],
        'cevap_uc_bir' => $_POST['cevap_uc_bir'],
        'cevap_uc_iki' => $_POST['cevap_uc_iki'],
        'cevap_uc_uc' => $_POST['cevap_uc_uc'],
        'cevap_uc_dort' => $_POST['cevap_uc_dort'],
        'cevap_dort_bir' => $_POST['cevap_dort_bir'],
        'cevap_dort_iki' => $_POST['cevap_dort_iki'],
        'cevap_dort_uc' => $_POST['cevap_dort_uc'],
        'cevap_dort_dort' => $_POST['cevap_dort_dort'],
        'cevap_bes_bir' => $_POST['cevap_bes_bir'],
        'cevap_bes_iki' => $_POST['cevap_bes_iki'],
        'cevap_bes_uc' => $_POST['cevap_bes_uc'],
        'cevap_bes_dort' => $_POST['cevap_bes_dort'],
        'cevap_alti_bir' => $_POST['cevap_alti_bir'],
        'cevap_alti_iki' => $_POST['cevap_alti_iki'],
        'cevap_alti_uc' => $_POST['cevap_alti_uc'],
        'cevap_alti_dort' => $_POST['cevap_alti_dort'],
        'cevap_yedi_bir' => $_POST['cevap_yedi_bir'],
        'cevap_yedi_iki' => $_POST['cevap_yedi_iki'],
        'cevap_yedi_uc' => $_POST['cevap_yedi_uc'],
        'cevap_yedi_dort' => $_POST['cevap_yedi_dort']
    ));


    if ($insert) {
        Header("Location:../../ogrenci?status=successful");
    } else {
        Header("Location:../../ogrenci?status=unsuccessful");
    }
}
if (isset($_POST['cevapsil'])) {




    $sil = $baglanti->prepare("DELETE from cevap where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../answers?status=successful");
    } else {
        Header("Location:../answers?status=unsuccessful");
    }
}
$veri = $_POST['veri'];

if (isset($_POST['cevap'])) {
    $kaydet = $baglanti->prepare("INSERT INTO veri SET
    cevap_bir_bir=:cevap_bir_bir,
 cevap_bir_iki=:cevap_bir_iki,
 cevap_bir_uc=:cevap_bir_uc,
 cevap_bir_dort=:cevap_bir_dort,
 cevap_iki_bir=:cevap_iki_bir,
 cevap_iki_iki=:cevap_iki_iki,
 cevap_iki_uc=:cevap_iki_uc,
 cevap_iki_dort=:cevap_iki_dort,
 cevap_uc_bir=:cevap_uc_bir,
 cevap_uc_iki=:cevap_uc_iki,
 cevap_uc_uc=:cevap_uc_uc,
 cevap_uc_dort=:cevap_uc_dort,
 cevap_dort_bir=:cevap_dort_bir,
 cevap_dort_iki=:cevap_dort_iki,
 cevap_dort_uc=:cevap_dort_uc,
 cevap_dort_dort=:cevap_dort_dort,
 cevap_bes_bir=:cevap_bes_bir,
 cevap_bes_iki=:cevap_bes_iki,
 cevap_bes_uc=:cevap_bes_uc,
 cevap_bes_dort=:cevap_bes_dort,
 cevap_alti_bir=:cevap_alti_bir,
 cevap_alti_iki=:cevap_alti_iki,
 cevap_alti_uc=:cevap_alti_uc,
 cevap_alti_dort=:cevap_alti_dort,
 cevap_yedi_bir=:cevap_yedi_bir,
 cevap_yedi_iki=:cevap_yedi_iki,
 cevap_yedi_uc=:cevap_yedi_uc,
 cevap_yedi_dort=:cevap_yedi_dort
    ");

    $insert = $kaydet->execute(array(



        'cevap_bir_bir' => $_POST['cevap_bir_bir'],
        'cevap_bir_iki' => $_POST['cevap_bir_iki'],
        'cevap_bir_uc' => $_POST['cevap_bir_uc'],
        'cevap_bir_dort' => $_POST['cevap_bir_dort'],
        'cevap_iki_bir' => $_POST['cevap_iki_bir'],
        'cevap_iki_iki' => $_POST['cevap_iki_iki'],
        'cevap_iki_uc' => $_POST['cevap_iki_uc'],
        'cevap_iki_dort' => $_POST['cevap_iki_dort'],
        'cevap_uc_bir' => $_POST['cevap_uc_bir'],
        'cevap_uc_iki' => $_POST['cevap_uc_iki'],
        'cevap_uc_uc' => $_POST['cevap_uc_uc'],
        'cevap_uc_dort' => $_POST['cevap_uc_dort'],
        'cevap_dort_bir' => $_POST['cevap_dort_bir'],
        'cevap_dort_iki' => $_POST['cevap_dort_iki'],
        'cevap_dort_uc' => $_POST['cevap_dort_uc'],
        'cevap_dort_dort' => $_POST['cevap_dort_dort'],
        'cevap_bes_bir' => $_POST['cevap_bes_bir'],
        'cevap_bes_iki' => $_POST['cevap_bes_iki'],
        'cevap_bes_uc' => $_POST['cevap_bes_uc'],
        'cevap_bes_dort' => $_POST['cevap_bes_dort'],
        'cevap_alti_bir' => $_POST['cevap_alti_bir'],
        'cevap_alti_iki' => $_POST['cevap_alti_iki'],
        'cevap_alti_uc' => $_POST['cevap_alti_uc'],
        'cevap_alti_dort' => $_POST['cevap_alti_dort'],
        'cevap_yedi_bir' => $_POST['cevap_yedi_bir'],
        'cevap_yedi_iki' => $_POST['cevap_yedi_iki'],
        'cevap_yedi_uc' => $_POST['cevap_yedi_uc'],
        'cevap_yedi_dort' => $_POST['cevap_yedi_dort']
    ));


    if ($insert) {
        Header("Location:../../ogrenci?status=successful");
    } else {
        Header("Location:../../ogrenci?status=unsuccessful");
    }
}

     
if (isset($_POST['ihtiyac'])) {

    $kaydet = $baglanti->prepare("INSERT INTO ihtiyac SET
    
    ihtiyac_bir_bir=:ihtiyac_bir_bir,
 ihtiyac_bir_iki=:ihtiyac_bir_iki,
 ihtiyac_bir_uc=:ihtiyac_bir_uc,
 ihtiyac_bir_dort=:ihtiyac_bir_dort,
 ihtiyac_iki_bir=:ihtiyac_iki_bir,
 ihtiyac_iki_iki=:ihtiyac_iki_iki,
 ihtiyac_iki_uc=:ihtiyac_iki_uc,
 ihtiyac_iki_dort=:ihtiyac_iki_dort,
 ihtiyac_uc_bir=:ihtiyac_uc_bir,
 ihtiyac_uc_iki=:ihtiyac_uc_iki,
 ihtiyac_uc_uc=:ihtiyac_uc_uc,
 ihtiyac_uc_dort=:ihtiyac_uc_dort,
 ihtiyac_dort_bir=:ihtiyac_dort_bir,
 ihtiyac_dort_iki=:ihtiyac_dort_iki,
 ihtiyac_dort_uc=:ihtiyac_dort_uc,
 ihtiyac_dort_dort=:ihtiyac_dort_dort,
 ihtiyac_bes_bir=:ihtiyac_bes_bir,
 ihtiyac_bes_iki=:ihtiyac_bes_iki,
 ihtiyac_bes_uc=:ihtiyac_bes_uc,
 ihtiyac_bes_dort=:ihtiyac_bes_dort,
 ihtiyac_alti_bir=:ihtiyac_alti_bir,
 ihtiyac_alti_iki=:ihtiyac_alti_iki,
 ihtiyac_alti_uc=:ihtiyac_alti_uc,
 ihtiyac_alti_dort=:ihtiyac_alti_dort,
 ihtiyac_yedi_bir=:ihtiyac_yedi_bir,
 ihtiyac_yedi_iki=:ihtiyac_yedi_iki,
 ihtiyac_yedi_uc=:ihtiyac_yedi_uc,
 ihtiyac_yedi_dort=:ihtiyac_yedi_dort
    ");

    $insert = $kaydet->execute(array(
        'ihtiyac_bir_bir' => $_POST['ihtiyac_bir_bir'],
        'ihtiyac_bir_iki' => $_POST['ihtiyac_bir_iki'],
        'ihtiyac_bir_uc' => $_POST['ihtiyac_bir_uc'],
        'ihtiyac_bir_dort' => $_POST['ihtiyac_bir_dort'],
        'ihtiyac_iki_bir' => $_POST['ihtiyac_iki_bir'],
        'ihtiyac_iki_iki' => $_POST['ihtiyac_iki_iki'],
        'ihtiyac_iki_uc' => $_POST['ihtiyac_iki_uc'],
        'ihtiyac_iki_dort' => $_POST['ihtiyac_iki_dort'],
        'ihtiyac_uc_bir' => $_POST['ihtiyac_uc_bir'],
        'ihtiyac_uc_iki' => $_POST['ihtiyac_uc_iki'],
        'ihtiyac_uc_uc' => $_POST['ihtiyac_uc_uc'],
        'ihtiyac_uc_dort' => $_POST['ihtiyac_uc_dort'],
        'ihtiyac_dort_bir' => $_POST['ihtiyac_dort_bir'],
        'ihtiyac_dort_iki' => $_POST['ihtiyac_dort_iki'],
        'ihtiyac_dort_uc' => $_POST['ihtiyac_dort_uc'],
        'ihtiyac_dort_dort' => $_POST['ihtiyac_dort_dort'],
        'ihtiyac_bes_bir' => $_POST['ihtiyac_bes_bir'],
        'ihtiyac_bes_iki' => $_POST['ihtiyac_bes_iki'],
        'ihtiyac_bes_uc' => $_POST['ihtiyac_bes_uc'],
        'ihtiyac_bes_dort' => $_POST['ihtiyac_bes_dort'],
        'ihtiyac_alti_bir' => $_POST['ihtiyac_alti_bir'],
        'ihtiyac_alti_iki' => $_POST['ihtiyac_alti_iki'],
        'ihtiyac_alti_uc' => $_POST['ihtiyac_alti_uc'],
        'ihtiyac_alti_dort' => $_POST['ihtiyac_alti_dort'],
        'ihtiyac_yedi_bir' => $_POST['ihtiyac_yedi_bir'],
        'ihtiyac_yedi_iki' => $_POST['ihtiyac_yedi_iki'],
        'ihtiyac_yedi_uc' => $_POST['ihtiyac_yedi_uc'],
        'ihtiyac_yedi_dort' => $_POST['ihtiyac_yedi_dort']
    ));
    

  

    if ($insert) {
        Header("Location:../../ihtiyacsahibi?status=successful");
    } else {
        Header("Location:../../ihtiyacsahibi?status=Usuccessful");
    }
}

$cevap=$baglanti->prepare("SELECT * from cevap");

$cevap->execute();

$cevapcek=$cevap->fetch(PDO::FETCH_ASSOC);
if ($_POST['ihtiyac_bir_dort'] == '1') {
    $cevap['cevap_bir_dort'] --;
    }
    

if (isset($_POST['ihtiyacsil'])) {




    $sil = $baglanti->prepare("DELETE from ihtiyac where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../answershomeless?status=successful");
    } else {
        Header("Location:../answershomeless?status=unsuccessful");
    }
}



if (isset($_POST['ihtiyac'])) {
    $kaydet = $baglanti->prepare("INSERT INTO veriihtiyac SET
    
    ihtiyac_bir_bir=:ihtiyac_bir_bir,
 ihtiyac_bir_iki=:ihtiyac_bir_iki,
 ihtiyac_bir_uc=:ihtiyac_bir_uc,
 ihtiyac_bir_dort=:ihtiyac_bir_dort,
 ihtiyac_iki_bir=:ihtiyac_iki_bir,
 ihtiyac_iki_iki=:ihtiyac_iki_iki,
 ihtiyac_iki_uc=:ihtiyac_iki_uc,
 ihtiyac_iki_dort=:ihtiyac_iki_dort,
 ihtiyac_uc_bir=:ihtiyac_uc_bir,
 ihtiyac_uc_iki=:ihtiyac_uc_iki,
 ihtiyac_uc_uc=:ihtiyac_uc_uc,
 ihtiyac_uc_dort=:ihtiyac_uc_dort,
 ihtiyac_dort_bir=:ihtiyac_dort_bir,
 ihtiyac_dort_iki=:ihtiyac_dort_iki,
 ihtiyac_dort_uc=:ihtiyac_dort_uc,
 ihtiyac_dort_dort=:ihtiyac_dort_dort,
 ihtiyac_bes_bir=:ihtiyac_bes_bir,
 ihtiyac_bes_iki=:ihtiyac_bes_iki,
 ihtiyac_bes_uc=:ihtiyac_bes_uc,
 ihtiyac_bes_dort=:ihtiyac_bes_dort,
 ihtiyac_alti_bir=:ihtiyac_alti_bir,
 ihtiyac_alti_iki=:ihtiyac_alti_iki,
 ihtiyac_alti_uc=:ihtiyac_alti_uc,
 ihtiyac_alti_dort=:ihtiyac_alti_dort,
 ihtiyac_yedi_bir=:ihtiyac_yedi_bir,
 ihtiyac_yedi_iki=:ihtiyac_yedi_iki,
 ihtiyac_yedi_uc=:ihtiyac_yedi_uc,
 ihtiyac_yedi_dort=:ihtiyac_yedi_dort
    ");

    $insert = $kaydet->execute(array(
        'ihtiyac_bir_bir' => $_POST['ihtiyac_bir_bir'],
        'ihtiyac_bir_iki' => $_POST['ihtiyac_bir_iki'],
        'ihtiyac_bir_uc' => $_POST['ihtiyac_bir_uc'],
        'ihtiyac_bir_dort' => $_POST['ihtiyac_bir_dort'],
        'ihtiyac_iki_bir' => $_POST['ihtiyac_iki_bir'],
        'ihtiyac_iki_iki' => $_POST['ihtiyac_iki_iki'],
        'ihtiyac_iki_uc' => $_POST['ihtiyac_iki_uc'],
        'ihtiyac_iki_dort' => $_POST['ihtiyac_iki_dort'],
        'ihtiyac_uc_bir' => $_POST['ihtiyac_uc_bir'],
        'ihtiyac_uc_iki' => $_POST['ihtiyac_uc_iki'],
        'ihtiyac_uc_uc' => $_POST['ihtiyac_uc_uc'],
        'ihtiyac_uc_dort' => $_POST['ihtiyac_uc_dort'],
        'ihtiyac_dort_bir' => $_POST['ihtiyac_dort_bir'],
        'ihtiyac_dort_iki' => $_POST['ihtiyac_dort_iki'],
        'ihtiyac_dort_uc' => $_POST['ihtiyac_dort_uc'],
        'ihtiyac_dort_dort' => $_POST['ihtiyac_dort_dort'],
        'ihtiyac_bes_bir' => $_POST['ihtiyac_bes_bir'],
        'ihtiyac_bes_iki' => $_POST['ihtiyac_bes_iki'],
        'ihtiyac_bes_uc' => $_POST['ihtiyac_bes_uc'],
        'ihtiyac_bes_dort' => $_POST['ihtiyac_bes_dort'],
        'ihtiyac_alti_bir' => $_POST['ihtiyac_alti_bir'],
        'ihtiyac_alti_iki' => $_POST['ihtiyac_alti_iki'],
        'ihtiyac_alti_uc' => $_POST['ihtiyac_alti_uc'],
        'ihtiyac_alti_dort' => $_POST['ihtiyac_alti_dort'],
        'ihtiyac_yedi_bir' => $_POST['ihtiyac_yedi_bir'],
        'ihtiyac_yedi_iki' => $_POST['ihtiyac_yedi_iki'],
        'ihtiyac_yedi_uc' => $_POST['ihtiyac_yedi_uc'],
        'ihtiyac_yedi_dort' => $_POST['ihtiyac_yedi_dort']
    ));


    if ($insert) {
        Header("Location:../../ihtiyacsahibi?status=successful");
    } else {
        Header("Location:../../ihtiyacsahibi?status=Usuccessful");
    }
}



if (isset($_POST['veriihtiyacsil'])) {




    $sil = $baglanti->prepare("DELETE from veriihtiyac where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../answershomeless?status=successful");
    } else {
        Header("Location:../answershomeless?status=unsuccessful");
    }
}


if (isset($_POST['urunkaydet'])) {


    $uploads_dir = '../images/urun';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("INSERT INTO emlak SET
    baslik=:baslik,
            aciklama=:aciklama,
            sira=:sira,
            resim=:resim");

    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'aciklama' => $_POST['aciklama'],

        'sira' => $_POST['sira'],

        'resim' => $resimyolu
    ));



    if ($insert) {
        Header("Location:../projects?status=successful");
    } else {
        Header("Location:../projects?status=unsuccessful");
    }
}

if (isset($_POST['urunduzenle'])) {

    if ($_FILES['resim']["size"] > 0) {


        $uploads_dir = '../images/urun';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];

        $sayi1 = rand(20000, 30000);
        $sayi2 = rand(20000, 30000);
        $sayi3 = rand(20000, 30000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimyolu = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE emlak SET
              baslik=:baslik,
                      aciklama=:aciklama,
                      sira=:sira,
            resim=:resim
            WHERE id={$_POST['id']}
            ");

        $insert = $kaydet->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],

            'sira' => $_POST['sira'],

            'resim' => $resimyolu
        ));



        if ($insert) {
            Header("Location:../projects?status=successful");
        } else {
            Header("Location:../projects?status=unsuccessful");
        }
    } else {


        $duzenle = $baglanti->prepare("UPDATE  emlak SET
              baslik=:baslik,
                      aciklama=:aciklama,
                      sira=:sira
        WHERE id={$_POST['id']}
        ");

        $insert = $duzenle->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],


            'sira' => $_POST['sira']
        ));



        if ($insert) {
            Header("Location:../projects?status=successful");
        } else {
            Header("Location:../projects?status=unsuccessful");
        }
    }
}
if (isset($_POST['urunsil'])) {


    $sil = $_POST['resim'];
    unlink("../images/urun/$sil");

    $sil = $baglanti->prepare("DELETE from emlak where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../projects?status=successful");
    } else {
        Header("Location:../projects?status=unsuccessful");
    }
}


if (isset($_POST['sliderkaydet'])) {


    $uploads_dir = '../images/slider';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("INSERT INTO slider SET
    baslik=:baslik,
    aciklama=:aciklama,
    link=:link,
    button=:button,
    sira=:sira,
    resim=:resim");

    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'aciklama' => $_POST['aciklama'],
        'link' => $_POST['link'],
        'button' => $_POST['button'],
        'sira' => $_POST['sira'],
        'resim' => $resimyolu
    ));



    if ($insert) {
        Header("Location:../slider?status=successful");
    } else {
        Header("Location:../slider?status=unsuccessful");
    }
}

if (isset($_POST['sliderduzenle'])) {

    if ($_FILES['resim']["size"] > 0) {


        $uploads_dir = '../images/slider';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];

        $sayi1 = rand(20000, 30000);
        $sayi2 = rand(20000, 30000);
        $sayi3 = rand(20000, 30000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimyolu = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE slider SET
        baslik=:baslik,
        aciklama=:aciklama,
        link=:link,
        button=:button,
        sira=:sira,
        resim=:resim
        WHERE id={$_POST['id']}
        ");

        $insert = $kaydet->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'link' => $_POST['link'],
            'button' => $_POST['button'],
            'sira' => $_POST['sira'],
            'resim' => $resimyolu
        ));



        if ($insert) {
            Header("Location:../slider?status=successful");
        } else {
            Header("Location:../slider?status=unsuccessful");
        }
    } else {


        $duzenle = $baglanti->prepare("UPDATE  slider SET
        baslik=:baslik,
        aciklama=:aciklama,
        link=:link,
        button=:button,
        sira=:sira
    WHERE id={$_POST['id']}
    ");

        $insert = $duzenle->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'link' => $_POST['link'],
            'button' => $_POST['button'],
            'sira' => $_POST['sira']
        ));



        if ($insert) {
            Header("Location:../slider?status=successful");
        } else {
            Header("Location:../slider?status=unsuccessful");
        }
    }
}
if (isset($_POST['slidersil'])) {


    $sil = $_POST['resim'];
    unlink("../images/slider/$sil");

    $sil = $baglanti->prepare("DELETE from slider where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../slider?status=successful");
    } else {
        Header("Location:../slider?status=unsuccessful");
    }
}


if (isset($_POST['kullanicigiris'])) {
    $ad = htmlspecialchars($_POST['ad']);
    $sifre = htmlspecialchars($_POST['sifre']);
    $sifreguclu = md5($sifre);

    // $update=$kaydet->execute(array(

    if ($ad && $sifre) {
        $kullanicisor = $baglanti->prepare("SELECT * from kullanici   where kad=:ad and sifre=:sifre and yetki=:yetki ");
        $kullanicisor->execute(array(
            'ad' => $ad,
            'yetki' => 2,
            'sifre' => $sifreguclu
        ));
        $say = $kullanicisor->rowCount();


        if ($say > 0) {
            $_SESSION['ad'] = $ad;
            header('Location:../index');
        } else {


            header('Location:../../index?status=unsuccessful');
        }
    }
}








// if(isset($_POST['kullanicikaydet'])) {




//     $kaydet=$baglanti->prepare("INSERT INTO kullanici SET
//         adsoyad=:adsoyad,
//         kad=:kad,
//         sifre=:sifre");

//     $insert=$kaydet->execute(array(

//             'adsoyad' =>$_POST['adsoyad'],
//             'kad' =>$_POST['kad'],

//             'sifre' =>$_POST['sifre']));



//     if ($insert) {
//         Header("Location:../accounts?status=successful");
//      }

//      else {
//          Header("Location:../accounts?status=unsuccessful");
//      }

//     }

//     if (isset($_POST['kullanicisil'])){




//         $sil=$baglanti->prepare("DELETE from kullanici where id=:id ");

//         $sil->execute(array(
//             'id'=>$_POST['id']
//         ));
//         if ($sil) {
//             Header("Location:../accounts?status=successful");
//          }

//          else {
//              Header("Location:../accounts?status=unsuccessful");
//          }


//     }


//Eski Giriş Yap Kodları
/*
if (isset($_POST['girisyap'])) {
    $kad = htmlspecialchars($_POST['kad']);
    $sifre = htmlspecialchars($_POST['sifre']);
    $adsoyad = htmlspecialchars($_POST['adsoyad']);
    $yetki = htmlspecialchars($_POST['yetki']);
    $sifreguclu = md5($sifre);

    $kullanicisor = $baglanti->prepare("SELECT * from kullanici where kad=:kad and yetki=:yetki and sifre=:sifre");
    $kullanicisor->execute(array(
        'kad' => $kad,
        'yetki' => 1,
        'sifre' => $sifreguclu
    ));


    $var = $kullanicisor->rowCount();



    if ($var > 0) {
        echo $_SESSION['girisbelgesi1'] = "$kad";
        header("Location:../../index?durum=hosgeldin");
    } else {
        header("Location:../../login?durum=hata");
    }
}
*/



//Eski Giriş Yap Kodları 2
/*
if (isset($_POST['girisyap2'])) {
    $kad = htmlspecialchars($_POST['kad']);
    $sifre = htmlspecialchars($_POST['sifre']);
    $adsoyad = htmlspecialchars($_POST['adsoyad']);
    $yetki = htmlspecialchars($_POST['yetki']);
    $sifreguclu = md5($sifre);

    $kullanicisor = $baglanti->prepare("SELECT * from kullanici where kad=:kad and yetki=:yetki and sifre=:sifre");
    $kullanicisor->execute(array(
        'kad' => $kad,
        'yetki' => 0,
        'sifre' => $sifreguclu
    ));


    $var = $kullanicisor->rowCount();



    if ($var > 0) {
        echo $_SESSION['girisbelgesi2'] = "$kad";
        header("Location:../../index?durum=hosgeldin");
    } else {
        header("Location:../../login2?durum=hata");
    }
}
*/








if (isset($_POST['kullanicikaydet'])) {
    $kad = htmlspecialchars($_POST['kad']);
    $sifre = htmlspecialchars($_POST['sifre']);
    $adsoyad = htmlspecialchars($_POST['adsoyad']);
    $sifreguclu = md5($sifre);


    $kullanicisor = $baglanti->prepare("SELECT * from kullanici where kad=:kad and yetki=:yetki ");
    $kullanicisor->execute(array(
        'kad' => $kad,
        'yetki' => 2


    ));

    $var = $kullanicisor->rowCount();


    if ($var > 0) {
        Header("Location:../accounts?yuklenme=kullanicivar");
    } else {
        Header("Location:../accounts?yuklenme=kullaniciyok");



        $kullanicikaydet = $baglanti->prepare("INSERT into kullanici SET
    
    adsoyad=:adsoyad,
    kad=:kad,
    sifre=:sifre,
    yetki=:yetki    ");

        $insert = $kullanicikaydet->execute(array(
            'adsoyad' => $adsoyad,
            'kad' => $kad,
            'sifre' => $sifreguclu,
            'yetki' => $_POST['yetki']
        ));

        if ($insert) {
            header("Location:../accounts?hesap=kuruldu");
        } else {
            header("Location:../accounts?hesap=kurulmadı");
        }
    }
}

if (isset($_POST['kullanicisil'])) {
    $sil = $baglanti->prepare("DELETE from kullanici where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../accounts?status=successful");
    } else {
        Header("Location:../accounts?status=unsuccessful");
    }
}








if (isset($_POST['mesajkaydet'])) {
    $kaydet = $baglanti->prepare("INSERT INTO iletisim SET
  baslik=:baslik,
          email=:email,
          konu=:konu,
          mesaj=:mesaj");


    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'email' => $_POST['email'],
        'konu' => $_POST['konu'],
        'mesaj' => $_POST['mesaj']
    ));



    if ($insert) {
        Header("Location:../../contact?status=successful");
    } else {
        Header("Location:../../contact?status=unsuccessful");
    }
}
if (isset($_POST['mesajkaydet2'])) {
    $kaydet = $baglanti->prepare("INSERT INTO mesajlar SET
          baslik=:baslik,
          email=:email,
          konu=:konu,
          mesaj=:mesaj");


    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'email' => $_POST['email'],
        'konu' => $_POST['konu'],
        'mesaj' => $_POST['mesaj']
    ));



    if ($insert) {
        Header("Location:../../index?status=mesajsuccessful");
    } else {
        Header("Location:../../index?status=mesajunsuccessful");
    }
}
if (isset($_POST['iletisimsil'])) {




    $sil = $baglanti->prepare("DELETE from iletisim where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../messages?status=successful");
    } else {
        Header("Location:../messages?status=unsuccessful");
    }
}
if (isset($_POST['mesajlarsil'])) {




    $sil = $baglanti->prepare("DELETE from mesajlar where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../messages2?status=successful");
    } else {
        Header("Location:../messages2?status=unsuccessful");
    }
}




if ($_GET['menusil'] == "ok") {

    $sil = $db->prepare("DELETE from menu where menu_id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['menu_id']
    ));


    if ($kontrol) {


        header("location:../menu?sil=ok");
    } else {

        header("location:../menu?sil=no");
    }
}


if (isset($_POST['menukaydet'])) {


    $menu_seourl = $seo($_POST['menu_ad']);

    $ayarekle = $db->prepare("INSERT INTO menu SET
		menu_ad=:menu_ad,
		menu_detay=:menu_detay,
		menu_url=:menu_url,
		menu_sira=:menu_sira,
		menu_seourl=:menu_seourl,
		menu_yetki=:menu_yetki,
		menu_durum=:menu_durum
		");

    $insert = $ayarekle->execute(array(
        'menu_ad' => $_POST['menu_ad'],
        'menu_detay' => $_POST['menu_detay'],
        'menu_url' => $_POST['menu_url'],
        'menu_sira' => $_POST['menu_sira'],
        'menu_seourl' => $menu_seourl,
        'menu_yetki' => $_POST['menu_yetki'],
        'menu_durum' => $_POST['menu_durum']
    ));


    if ($insert) {

        Header("Location:../menu?durum=ok");
    } else {

        Header("Location:../menu?durum=no");
    }
}

