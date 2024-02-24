-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 13 Ara 2023, 10:39:02
-- Sunucu sürümü: 8.0.35
-- PHP Sürümü: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ayito`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayarid` int NOT NULL,
  `ayarlogo` varchar(300) NOT NULL,
  `baslik` varchar(300) NOT NULL,
  `aciklama` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefon` varchar(16) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `facebook` varchar(121) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `keyword` varchar(300) NOT NULL,
  `fav` varchar(250) NOT NULL,
  `logoyu` varchar(250) NOT NULL,
  `logoa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayarid`, `ayarlogo`, `baslik`, `aciklama`, `email`, `telefon`, `adres`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `keyword`, `fav`, `logoyu`, `logoa`) VALUES
(2, 'IspartaEmlak', 'AYİTO | Nebula Technology', ', toplu yemek yapılan yerlerdeki yemek israfını sıfıra indiren ve yemekhane sahibi kurum veya şirkete maddi kâr sağlayan web sitesi ve yemek dağıtım sisteminden oluşmaktadır.', 'selimaydinresmi@gmail.com', '05422178590', 'Konya', '', 'https://www.instagram.com/nebula.technology/?hl=tr', '', 'https://www.youtube.com/@selimaydinn', 'https://www.linkedin.com/company/nebulatechnology/', 'nebula, nebula technology, israf, yemek, gıda.', '250292367227547ms-icon-150x150.png', '264742396925277klassy-logo.png', '237082209728543white-logo.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cevap`
--

CREATE TABLE `cevap` (
  `id` int NOT NULL,
  `cevap_bir_bir` varchar(200) DEFAULT NULL,
  `cevap_bir_iki` varchar(200) NOT NULL,
  `cevap_bir_uc` varchar(200) NOT NULL,
  `cevap_bir_dort` varchar(200) NOT NULL DEFAULT '0',
  `cevap_iki_bir` varchar(200) NOT NULL,
  `cevap_iki_iki` varchar(200) NOT NULL,
  `cevap_iki_uc` varchar(200) NOT NULL,
  `cevap_iki_dort` varchar(200) NOT NULL,
  `cevap_uc_bir` varchar(200) NOT NULL,
  `cevap_uc_iki` varchar(200) NOT NULL,
  `cevap_uc_uc` varchar(200) NOT NULL,
  `cevap_uc_dort` varchar(200) NOT NULL,
  `cevap_dort_bir` varchar(200) NOT NULL,
  `cevap_dort_iki` varchar(200) NOT NULL,
  `cevap_dort_uc` varchar(200) NOT NULL,
  `cevap_dort_dort` varchar(200) NOT NULL,
  `cevap_bes_bir` varchar(200) NOT NULL,
  `cevap_bes_iki` varchar(200) NOT NULL,
  `cevap_bes_uc` varchar(200) NOT NULL,
  `cevap_bes_dort` varchar(200) NOT NULL,
  `cevap_alti_bir` varchar(200) NOT NULL,
  `cevap_alti_iki` varchar(200) NOT NULL,
  `cevap_alti_uc` varchar(200) NOT NULL,
  `cevap_alti_dort` varchar(200) NOT NULL,
  `cevap_yedi_bir` varchar(200) NOT NULL,
  `cevap_yedi_iki` varchar(200) NOT NULL,
  `cevap_yedi_uc` varchar(200) NOT NULL,
  `cevap_yedi_dort` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `cevap`
--

INSERT INTO `cevap` (`id`, `cevap_bir_bir`, `cevap_bir_iki`, `cevap_bir_uc`, `cevap_bir_dort`, `cevap_iki_bir`, `cevap_iki_iki`, `cevap_iki_uc`, `cevap_iki_dort`, `cevap_uc_bir`, `cevap_uc_iki`, `cevap_uc_uc`, `cevap_uc_dort`, `cevap_dort_bir`, `cevap_dort_iki`, `cevap_dort_uc`, `cevap_dort_dort`, `cevap_bes_bir`, `cevap_bes_iki`, `cevap_bes_uc`, `cevap_bes_dort`, `cevap_alti_bir`, `cevap_alti_iki`, `cevap_alti_uc`, `cevap_alti_dort`, `cevap_yedi_bir`, `cevap_yedi_iki`, `cevap_yedi_uc`, `cevap_yedi_dort`) VALUES
(42, '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(43, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(44, '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '0', '1'),
(45, '0', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(46, '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '0', '1'),
(47, '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(48, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(49, '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '0', '1'),
(50, '0', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(51, '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '0', '1'),
(52, '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(53, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(54, '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '0', '1'),
(55, '0', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(56, '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '0', '1'),
(57, '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(58, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(59, '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '0', '1'),
(60, '0', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(61, '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', '1', '1', '1', '0', '1', '0', '1', '0', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `demo_ihtiyachesap`
--

CREATE TABLE `demo_ihtiyachesap` (
  `demokullanici_id` int NOT NULL,
  `subMerchantKey` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_magaza` enum('0','1','2') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  `kullanici_magazafoto` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT 'dimg/magaza-fotoyok.png',
  `demokullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_banka` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_iban` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `demokullanici_ad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `demokullanici_soyad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `demokullanici_mail` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `demokullanici_gsm` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `demokullanici_password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_tip` enum('PERSONAL','PRIVATE_COMPANY','LIMITED_OR_JOINT_STOCK_COMPANY','') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT 'PERSONAL',
  `kullanici_vdaire` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_vno` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `demokullanici_yetki` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `demokullanici_durum` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `demo_ogrencihesap`
--

CREATE TABLE `demo_ogrencihesap` (
  `kullanici_id` int NOT NULL,
  `subMerchantKey` varchar(500) NOT NULL,
  `kullanici_magaza` enum('0','1','2') NOT NULL DEFAULT '0',
  `kullanici_magazafoto` varchar(500) NOT NULL DEFAULT 'dimg/magaza-fotoyok.png',
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) NOT NULL,
  `kullanici_tc` varchar(50) NOT NULL,
  `kullanici_banka` varchar(100) NOT NULL,
  `kullanici_iban` varchar(50) DEFAULT NULL,
  `kullanici_ad` varchar(50) NOT NULL,
  `kullanici_soyad` varchar(50) NOT NULL,
  `kullanici_mail` varchar(100) NOT NULL,
  `kullanici_gsm` varchar(50) NOT NULL,
  `kullanici_password` varchar(50) NOT NULL,
  `kullanici_adres` varchar(250) NOT NULL,
  `kullanici_il` varchar(100) NOT NULL,
  `kullanici_ilce` varchar(100) NOT NULL,
  `kullanici_unvan` varchar(100) NOT NULL,
  `kullanici_tip` enum('PERSONAL','PRIVATE_COMPANY','LIMITED_OR_JOINT_STOCK_COMPANY','') DEFAULT 'PERSONAL',
  `kullanici_vdaire` varchar(50) NOT NULL,
  `kullanici_vno` varchar(50) NOT NULL,
  `kullanici_yetki` varchar(50) NOT NULL,
  `kullanici_durum` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `demo_ogrencihesap`
--

INSERT INTO `demo_ogrencihesap` (`kullanici_id`, `subMerchantKey`, `kullanici_magaza`, `kullanici_magazafoto`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_banka`, `kullanici_iban`, `kullanici_ad`, `kullanici_soyad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_tip`, `kullanici_vdaire`, `kullanici_vno`, `kullanici_yetki`, `kullanici_durum`) VALUES
(188, '', '0', 'dimg/magaza-fotoyok.png', '2022-08-14 09:42:55', '', '', '', NULL, 'Babanne', 'Yiyenler', 'hitleroyunda@gmail.com', '', '9559abc957211086589d26975ff1e21c', '', '', '', '', 'PERSONAL', '', '', '0', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ihtiyac`
--

CREATE TABLE `ihtiyac` (
  `id` int NOT NULL,
  `kod` varchar(200) NOT NULL,
  `ihtiyac_bir_bir` varchar(200) NOT NULL,
  `ihtiyac_bir_iki` varchar(200) NOT NULL,
  `ihtiyac_bir_uc` varchar(200) NOT NULL,
  `ihtiyac_bir_dort` varchar(200) NOT NULL,
  `ihtiyac_iki_bir` varchar(200) NOT NULL,
  `ihtiyac_iki_iki` varchar(200) NOT NULL,
  `ihtiyac_iki_uc` varchar(200) NOT NULL,
  `ihtiyac_iki_dort` varchar(200) NOT NULL,
  `ihtiyac_uc_bir` varchar(200) NOT NULL,
  `ihtiyac_uc_iki` varchar(200) NOT NULL,
  `ihtiyac_uc_uc` varchar(200) NOT NULL,
  `ihtiyac_uc_dort` varchar(200) NOT NULL,
  `ihtiyac_dort_bir` varchar(200) NOT NULL,
  `ihtiyac_dort_iki` varchar(200) NOT NULL,
  `ihtiyac_dort_uc` varchar(200) NOT NULL,
  `ihtiyac_dort_dort` varchar(200) NOT NULL,
  `ihtiyac_bes_bir` varchar(200) NOT NULL,
  `ihtiyac_bes_iki` varchar(200) NOT NULL,
  `ihtiyac_bes_uc` varchar(200) NOT NULL,
  `ihtiyac_bes_dort` varchar(200) NOT NULL,
  `ihtiyac_alti_bir` varchar(200) NOT NULL,
  `ihtiyac_alti_iki` varchar(200) NOT NULL,
  `ihtiyac_alti_uc` varchar(200) NOT NULL,
  `ihtiyac_alti_dort` varchar(200) NOT NULL,
  `ihtiyac_yedi_bir` varchar(200) NOT NULL,
  `ihtiyac_yedi_iki` varchar(200) NOT NULL,
  `ihtiyac_yedi_uc` varchar(200) NOT NULL,
  `ihtiyac_yedi_dort` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `ihtiyac`
--

INSERT INTO `ihtiyac` (`id`, `kod`, `ihtiyac_bir_bir`, `ihtiyac_bir_iki`, `ihtiyac_bir_uc`, `ihtiyac_bir_dort`, `ihtiyac_iki_bir`, `ihtiyac_iki_iki`, `ihtiyac_iki_uc`, `ihtiyac_iki_dort`, `ihtiyac_uc_bir`, `ihtiyac_uc_iki`, `ihtiyac_uc_uc`, `ihtiyac_uc_dort`, `ihtiyac_dort_bir`, `ihtiyac_dort_iki`, `ihtiyac_dort_uc`, `ihtiyac_dort_dort`, `ihtiyac_bes_bir`, `ihtiyac_bes_iki`, `ihtiyac_bes_uc`, `ihtiyac_bes_dort`, `ihtiyac_alti_bir`, `ihtiyac_alti_iki`, `ihtiyac_alti_uc`, `ihtiyac_alti_dort`, `ihtiyac_yedi_bir`, `ihtiyac_yedi_iki`, `ihtiyac_yedi_uc`, `ihtiyac_yedi_dort`) VALUES
(45, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(51, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(52, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(53, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(54, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(55, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(56, '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(57, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(58, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(59, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(60, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(61, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(62, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(63, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(64, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(65, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(66, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(67, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(68, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(69, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(70, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(71, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ihtiyachesap`
--

CREATE TABLE `ihtiyachesap` (
  `ihtiyac_id` int NOT NULL,
  `subMerchantKey` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_magaza` enum('0','1','2') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  `ihtiyac_foto` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT 'img/fotoyok.png',
  `ihtiyac_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_banka` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_iban` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `ihtiyac_ad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ihtiyac_soyad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ihtiyac_mail` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ihtiyac_gsm` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ihtiyac_password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ihtiyac_adres` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_tip` enum('PERSONAL','PRIVATE_COMPANY','LIMITED_OR_JOINT_STOCK_COMPANY','') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT 'PERSONAL',
  `kullanici_vdaire` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `kullanici_vno` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ihtiyac_yetki` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ihtiyac_durum` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `ihtiyachesap`
--

INSERT INTO `ihtiyachesap` (`ihtiyac_id`, `subMerchantKey`, `kullanici_magaza`, `ihtiyac_foto`, `ihtiyac_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_banka`, `kullanici_iban`, `ihtiyac_ad`, `ihtiyac_soyad`, `ihtiyac_mail`, `ihtiyac_gsm`, `ihtiyac_password`, `ihtiyac_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_tip`, `kullanici_vdaire`, `kullanici_vno`, `ihtiyac_yetki`, `ihtiyac_durum`) VALUES
(170, '', '0', '290812947127860php.jpg', '2021-08-29 13:06:07', '', '', '', NULL, 'Bahri', 'Uranlı', 'root@gmail.com', '00', '597f72630405740005f0b03afb6ba400', '', '', '', '', 'PERSONAL', '', '', '1', 1),
(171, '', '0', 'img/fotoyok.png', '2021-09-01 19:44:49', '', '', '', NULL, 'Selim', 'Aydın', 'selimaydin@gmail.com', '', '3dc231ebed3a7acc761a0df580608897', '', '', '', '', 'PERSONAL', '', '', '1', 1),
(172, '', '0', 'img/fotoyok.png', '2022-06-27 17:38:33', '', '', '', NULL, 'Selim', 'AydÄ±n', 'selimaydin2020@gmail.com', '', '25f9e794323b453885f5181f1b624d0b', '', '', '', '', 'PERSONAL', '', '', '1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `mesaj` text NOT NULL,
  `email` varchar(222) NOT NULL,
  `konu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `baslik`, `mesaj`, `email`, `konu`) VALUES
(21, 'Selim', 'Bakalım Çalışıo mu', 'selimaydin2020@gmail.com', 'Deneme'),
(22, 'Selim Aydın', 'gggg', 'selimaydin2020@gmail.com', 'fatura'),
(24, 'selim', 'bu bir deneme mesajıdır teknofest 2023 nebula', 'naber@selim.com', 'deneme'),
(25, 'Jimmy', 'Hi there,\r\nMonthly Seo Services - Professional/ Affordable Seo Services\r\nHire the leading seo marketing company and get your website ranked on search engines. Are you looking to rank your website on search engines? Contact us now to get started - https://digitalpromax.co/la/  Today!\r\n\r\nPsst.. we will also do web design and build complete website. Wordpress and Ecommerce sites development. Click here: https://wpexpertspro.co/website/', 'greta.whitely@gmail.com', 'Dear selimaydinn.com Owner!'),
(26, 'Rodrick', 'Quick question to ask you... Are you aware that by reading this message you just proved that contact form marketing works? That\'s right, and we can get eyeballs on your offer too! Pricing starts at just $100 to blast YOUR ad message to 1 MILLION contact forms on websites just like yours worldwide. Contact me on Skype and let\'s discuss what will work for your product/service. My Skype ID: live:.cid.83c9da999a4f9f\r\n\r\nthis message was sent to your website contact form at: selimaydinn.com', 'conner.rodrick@yahoo.com', 'q'),
(27, 'Jimmy', 'Hi there!\r\nTop Rated SEO Agency. Personalized Service from Dedicated Account Team. ROI Driven. Relationship Focused. Custom SEO Strategy. 95% Client Retention Rate. Services: Analytics, Back-end Development, Competitive Research, Consulting.  Buy now: https://alwaysdigital.co/la/ \r\n\r\nPsst. If you have web development/ designing requirements, feel free to see more details at: https://outsource-bpo.com/website/\r\n', 'mcvey.mel39@gmail.com', 'Hello selimaydinn.com Webmaster!'),
(28, 'Steve', ' I\'m really frustrated with the laptop I ordered from your Amazon store. It\'s not functioning at all. Here’s the model I’m talking about: https://amzn.to/46pmr71. Amazon directed me to you for any technical help or return issues. This was a gift, and it\'s really important I get this sorted quickly. Please respond soon. - Steve ', 'steve82991@gmail.com', 'question');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int NOT NULL,
  `kad` varchar(250) NOT NULL,
  `sifre` varchar(200) NOT NULL,
  `adsoyad` varchar(200) NOT NULL,
  `yetki` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kad`, `sifre`, `adsoyad`, `yetki`) VALUES
(5, 'root', '5da1ef89425ba3720e2b878585d137c4', 'Bahri Uranlı', '2'),
(19, 'roots', '5da1ef89425ba3720e2b878585d137c4', 'Bahri Uranlı', '1'),
(20, 'rootss', '5da1ef89425ba3720e2b878585d137c4', 'Bahri Uranlı', '0'),
(26, 'selim', '4e805fd8af281428f9cfa835762a3984', 'Selim AydÄ±n', '2'),
(27, 'selimaydin2020@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Selim AydÄ±n', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `mesaj` text NOT NULL,
  `email` varchar(222) NOT NULL,
  `konu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `baslik`, `mesaj`, `email`, `konu`) VALUES
(10, 'Isparta MEM', 'deneme', 'selimaydin2020@gmail.com', 'Mesaj Tipi Seçiniz'),
(11, 'Isparta MEM', 'deneme', 'selimaydin2020@gmail.com', 'AYİTO Bilgi'),
(12, 'Isparta MEM', 'deneme', 'selimaydin2020@gmail.com', 'AYİTO Bilgi'),
(13, 'Bahri', 'Test', 'bahri.urnl@gmail.com', 'Diğer'),
(14, 'muhamadsolikahmedov@gmail.com', 'Salih', 'muhamadsolikahmedov@gmail.com', 'AYİTO Bilgi'),
(15, 'muhamadsolikahmedov@gmail.com', 'Soloh', 'muhamadsolikahmedov@gmail.com', 'AYİTO Bilgi'),
(16, 'Салих', 'Салих', 'solihahmedov27@gmail.com', 'AYİTO Bilgi'),
(17, 'Салих', 'Салих', 'solihahmedov27@gmail.com', 'AYİTO Bilgi'),
(18, 'Салих', 'Салих', 'solihahmedov27@gmail.com', 'AYİTO Bilgi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrencihesap`
--

CREATE TABLE `ogrencihesap` (
  `ogrenci_id` int NOT NULL,
  `subMerchantKey` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `ogrenci_onay` enum('0','1','2') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '0',
  `ogrenci_foto` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT 'img/fotoyok.png',
  `ogrenci_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kullanici_tc` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kullanici_banka` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kullanici_iban` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `ogrenci_ad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ogrenci_soyad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ogrenci_mail` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ogrenci_gsm` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `ogrenci_password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ogrenci_adres` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kullanici_il` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kullanici_ilce` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kullanici_unvan` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kullanici_tip` enum('PERSONAL','PRIVATE_COMPANY','LIMITED_OR_JOINT_STOCK_COMPANY','') CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT 'PERSONAL',
  `kullanici_vdaire` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kullanici_vno` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `ogrenci_yetki` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `ogrenci_durum` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `ogrencihesap`
--

INSERT INTO `ogrencihesap` (`ogrenci_id`, `subMerchantKey`, `ogrenci_onay`, `ogrenci_foto`, `ogrenci_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_banka`, `kullanici_iban`, `ogrenci_ad`, `ogrenci_soyad`, `ogrenci_mail`, `ogrenci_gsm`, `ogrenci_password`, `ogrenci_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_tip`, `kullanici_vdaire`, `kullanici_vno`, `ogrenci_yetki`, `ogrenci_durum`) VALUES
(192, '', '0', 'img/fotoyok.png', '2021-09-01 19:44:37', '', '', '', NULL, 'Selim', 'Aydın', 'selimaydin2020@gmail.com', '', '25f9e794323b453885f5181f1b624d0b', '', '', '', '', 'PERSONAL', '', '', '1', 1),
(194, '', '0', 'img/fotoyok.png', '2022-06-22 14:29:24', '', '', '', NULL, 'Selim', 'Aydın', 'selimaydin@gmail.com', '', '3dc231ebed3a7acc761a0df580608897', '', '', '', '', 'PERSONAL', '', '', '1', 1),
(195, '', '0', 'img/fotoyok.png', '2022-06-27 17:36:41', '', '', '', NULL, 'Selim', 'Aydın', 'selimaydin@gmail.com', '', '3dc231ebed3a7acc761a0df580608897', '', '', '', '', 'PERSONAL', '', '', '1', 1),
(196, '', '0', 'img/fotoyok.png', '2022-06-27 17:37:53', '', '', '', NULL, 'Selim', 'Aydın', 'selimaydin@gmail.com', '', '3dc231ebed3a7acc761a0df580608897', '', '', '', '', 'PERSONAL', '', '', '1', 1),
(197, '', '0', 'img/fotoyok.png', '2022-08-14 09:34:03', '', '', '', NULL, 'Selim', 'Aydın', 'selimaydin@gmail.com', '', '3dc231ebed3a7acc761a0df580608897', '', '', '', '', 'PERSONAL', '', '', '1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int NOT NULL,
  `resim` varchar(250) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `aciklama` text NOT NULL,
  `emlaktipi` varchar(250) NOT NULL,
  `sira` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `sponsor`
--

INSERT INTO `sponsor` (`id`, `resim`, `baslik`, `aciklama`, `emlaktipi`, `sira`) VALUES
(24, '223162448829452dawdaw.png', 'TakÄ±mÄ±mÄ±z', '2021 YÄ±lÄ± Online Ã‡alÄ±ÅŸmalarÄ±ndan Bir GÃ¶rÃ¼ntÃ¼', '', 4),
(26, '227692097329375Nebula Logo, Beyaz BG, jpeg.jpg', 'Nebula Technology', '', '', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veri`
--

CREATE TABLE `veri` (
  `id` int NOT NULL,
  `cevap_bir_bir` varchar(200) NOT NULL,
  `cevap_bir_iki` varchar(200) NOT NULL,
  `cevap_bir_uc` varchar(200) NOT NULL,
  `cevap_bir_dort` varchar(200) NOT NULL,
  `cevap_iki_bir` varchar(200) NOT NULL,
  `cevap_iki_iki` varchar(200) NOT NULL,
  `cevap_iki_uc` varchar(200) NOT NULL,
  `cevap_iki_dort` varchar(200) NOT NULL,
  `cevap_uc_bir` varchar(200) NOT NULL,
  `cevap_uc_iki` varchar(200) NOT NULL,
  `cevap_uc_uc` varchar(200) NOT NULL,
  `cevap_uc_dort` varchar(200) NOT NULL,
  `cevap_dort_bir` varchar(200) NOT NULL,
  `cevap_dort_iki` varchar(200) NOT NULL,
  `cevap_dort_uc` varchar(200) NOT NULL,
  `cevap_dort_dort` varchar(200) NOT NULL,
  `cevap_bes_bir` varchar(200) NOT NULL,
  `cevap_bes_iki` varchar(200) NOT NULL,
  `cevap_bes_uc` varchar(200) NOT NULL,
  `cevap_bes_dort` varchar(200) NOT NULL,
  `cevap_alti_bir` varchar(200) NOT NULL,
  `cevap_alti_iki` varchar(200) NOT NULL,
  `cevap_alti_uc` varchar(200) NOT NULL,
  `cevap_alti_dort` varchar(200) NOT NULL,
  `cevap_yedi_bir` varchar(200) NOT NULL,
  `cevap_yedi_iki` varchar(200) NOT NULL,
  `cevap_yedi_uc` varchar(200) NOT NULL,
  `cevap_yedi_dort` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `veri`
--

INSERT INTO `veri` (`id`, `cevap_bir_bir`, `cevap_bir_iki`, `cevap_bir_uc`, `cevap_bir_dort`, `cevap_iki_bir`, `cevap_iki_iki`, `cevap_iki_uc`, `cevap_iki_dort`, `cevap_uc_bir`, `cevap_uc_iki`, `cevap_uc_uc`, `cevap_uc_dort`, `cevap_dort_bir`, `cevap_dort_iki`, `cevap_dort_uc`, `cevap_dort_dort`, `cevap_bes_bir`, `cevap_bes_iki`, `cevap_bes_uc`, `cevap_bes_dort`, `cevap_alti_bir`, `cevap_alti_iki`, `cevap_alti_uc`, `cevap_alti_dort`, `cevap_yedi_bir`, `cevap_yedi_iki`, `cevap_yedi_uc`, `cevap_yedi_dort`) VALUES
(30, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(34, '1', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '0', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1'),
(35, '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veriihtiyac`
--

CREATE TABLE `veriihtiyac` (
  `id` int NOT NULL,
  `kod` varchar(200) NOT NULL,
  `ihtiyac_bir_bir` varchar(200) NOT NULL,
  `ihtiyac_bir_iki` varchar(200) NOT NULL,
  `ihtiyac_bir_uc` varchar(200) NOT NULL,
  `ihtiyac_bir_dort` varchar(200) NOT NULL,
  `ihtiyac_iki_bir` varchar(200) NOT NULL,
  `ihtiyac_iki_iki` varchar(200) NOT NULL,
  `ihtiyac_iki_uc` varchar(200) NOT NULL,
  `ihtiyac_iki_dort` varchar(200) NOT NULL,
  `ihtiyac_uc_bir` varchar(200) NOT NULL,
  `ihtiyac_uc_iki` varchar(200) NOT NULL,
  `ihtiyac_uc_uc` varchar(200) NOT NULL,
  `ihtiyac_uc_dort` varchar(200) NOT NULL,
  `ihtiyac_dort_bir` varchar(200) NOT NULL,
  `ihtiyac_dort_iki` varchar(200) NOT NULL,
  `ihtiyac_dort_uc` varchar(200) NOT NULL,
  `ihtiyac_dort_dort` varchar(200) NOT NULL,
  `ihtiyac_bes_bir` varchar(200) NOT NULL,
  `ihtiyac_bes_iki` varchar(200) NOT NULL,
  `ihtiyac_bes_uc` varchar(200) NOT NULL,
  `ihtiyac_bes_dort` varchar(200) NOT NULL,
  `ihtiyac_alti_bir` varchar(200) NOT NULL,
  `ihtiyac_alti_iki` varchar(200) NOT NULL,
  `ihtiyac_alti_uc` varchar(200) NOT NULL,
  `ihtiyac_alti_dort` varchar(200) NOT NULL,
  `ihtiyac_yedi_bir` varchar(200) NOT NULL,
  `ihtiyac_yedi_iki` varchar(200) NOT NULL,
  `ihtiyac_yedi_uc` varchar(200) NOT NULL,
  `ihtiyac_yedi_dort` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `veriihtiyac`
--

INSERT INTO `veriihtiyac` (`id`, `kod`, `ihtiyac_bir_bir`, `ihtiyac_bir_iki`, `ihtiyac_bir_uc`, `ihtiyac_bir_dort`, `ihtiyac_iki_bir`, `ihtiyac_iki_iki`, `ihtiyac_iki_uc`, `ihtiyac_iki_dort`, `ihtiyac_uc_bir`, `ihtiyac_uc_iki`, `ihtiyac_uc_uc`, `ihtiyac_uc_dort`, `ihtiyac_dort_bir`, `ihtiyac_dort_iki`, `ihtiyac_dort_uc`, `ihtiyac_dort_dort`, `ihtiyac_bes_bir`, `ihtiyac_bes_iki`, `ihtiyac_bes_uc`, `ihtiyac_bes_dort`, `ihtiyac_alti_bir`, `ihtiyac_alti_iki`, `ihtiyac_alti_uc`, `ihtiyac_alti_dort`, `ihtiyac_yedi_bir`, `ihtiyac_yedi_iki`, `ihtiyac_yedi_uc`, `ihtiyac_yedi_dort`) VALUES
(30, '', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(43, '', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(44, '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(45, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(46, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(67, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(68, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(69, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(70, '', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yemek`
--

CREATE TABLE `yemek` (
  `id` int NOT NULL,
  `yemek_bir_bir` varchar(200) NOT NULL,
  `yemek_bir_iki` varchar(200) NOT NULL,
  `yemek_bir_uc` varchar(200) NOT NULL,
  `yemek_bir_dort` varchar(200) NOT NULL,
  `yemek_iki_bir` varchar(200) NOT NULL,
  `yemek_iki_iki` varchar(200) NOT NULL,
  `yemek_iki_uc` varchar(200) NOT NULL,
  `yemek_iki_dort` varchar(200) NOT NULL,
  `yemek_uc_bir` varchar(200) NOT NULL,
  `yemek_uc_iki` varchar(200) NOT NULL,
  `yemek_uc_uc` varchar(200) NOT NULL,
  `yemek_uc_dort` varchar(200) NOT NULL,
  `yemek_dort_bir` varchar(200) NOT NULL,
  `yemek_dort_iki` varchar(200) NOT NULL,
  `yemek_dort_uc` varchar(200) NOT NULL,
  `yemek_dort_dort` varchar(200) NOT NULL,
  `yemek_bes_bir` varchar(200) NOT NULL,
  `yemek_bes_iki` varchar(200) NOT NULL,
  `yemek_bes_uc` varchar(200) NOT NULL,
  `yemek_bes_dort` varchar(200) NOT NULL,
  `yemek_alti_bir` varchar(200) NOT NULL,
  `yemek_alti_iki` varchar(200) NOT NULL,
  `yemek_alti_uc` varchar(200) NOT NULL,
  `yemek_alti_dort` varchar(200) NOT NULL,
  `yemek_yedi_bir` varchar(200) NOT NULL,
  `yemek_yedi_iki` varchar(200) NOT NULL,
  `yemek_yedi_uc` varchar(200) NOT NULL,
  `yemek_yedi_dort` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `yemek`
--

INSERT INTO `yemek` (`id`, `yemek_bir_bir`, `yemek_bir_iki`, `yemek_bir_uc`, `yemek_bir_dort`, `yemek_iki_bir`, `yemek_iki_iki`, `yemek_iki_uc`, `yemek_iki_dort`, `yemek_uc_bir`, `yemek_uc_iki`, `yemek_uc_uc`, `yemek_uc_dort`, `yemek_dort_bir`, `yemek_dort_iki`, `yemek_dort_uc`, `yemek_dort_dort`, `yemek_bes_bir`, `yemek_bes_iki`, `yemek_bes_uc`, `yemek_bes_dort`, `yemek_alti_bir`, `yemek_alti_iki`, `yemek_alti_uc`, `yemek_alti_dort`, `yemek_yedi_bir`, `yemek_yedi_iki`, `yemek_yedi_uc`, `yemek_yedi_dort`) VALUES
(2, 'Tarhana Çorbası', 'Kuru Fasulye', 'Pilav', 'Salata', 'Mercimek Çorbası', 'Tavuk Döner', 'Erişte', 'Şekerpare', 'Domates Çorbası', 'Barbunya', 'Makarna', 'Salata', 'Yoğurt Çorbası', 'Nohut', 'Pilav', 'Salata', 'Tarhana Çorbası', 'Patates Yemeği', 'Makarna', 'Profiterol', 'Ezogelin Çorbası', 'Kıymalı Pide', 'Makarna', 'Salata', 'Mantar Çorbası', 'İskender', 'Pilav', 'Islak Pasta');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayarid`);

--
-- Tablo için indeksler `cevap`
--
ALTER TABLE `cevap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `demo_ihtiyachesap`
--
ALTER TABLE `demo_ihtiyachesap`
  ADD PRIMARY KEY (`demokullanici_id`);

--
-- Tablo için indeksler `demo_ogrencihesap`
--
ALTER TABLE `demo_ogrencihesap`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `ihtiyac`
--
ALTER TABLE `ihtiyac`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ihtiyachesap`
--
ALTER TABLE `ihtiyachesap`
  ADD PRIMARY KEY (`ihtiyac_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogrencihesap`
--
ALTER TABLE `ogrencihesap`
  ADD PRIMARY KEY (`ogrenci_id`);

--
-- Tablo için indeksler `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veri`
--
ALTER TABLE `veri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veriihtiyac`
--
ALTER TABLE `veriihtiyac`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yemek`
--
ALTER TABLE `yemek`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cevap`
--
ALTER TABLE `cevap`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Tablo için AUTO_INCREMENT değeri `demo_ihtiyachesap`
--
ALTER TABLE `demo_ihtiyachesap`
  MODIFY `demokullanici_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- Tablo için AUTO_INCREMENT değeri `demo_ogrencihesap`
--
ALTER TABLE `demo_ogrencihesap`
  MODIFY `kullanici_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- Tablo için AUTO_INCREMENT değeri `ihtiyac`
--
ALTER TABLE `ihtiyac`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Tablo için AUTO_INCREMENT değeri `ihtiyachesap`
--
ALTER TABLE `ihtiyachesap`
  MODIFY `ihtiyac_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `ogrencihesap`
--
ALTER TABLE `ogrencihesap`
  MODIFY `ogrenci_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- Tablo için AUTO_INCREMENT değeri `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `veri`
--
ALTER TABLE `veri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `veriihtiyac`
--
ALTER TABLE `veriihtiyac`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
