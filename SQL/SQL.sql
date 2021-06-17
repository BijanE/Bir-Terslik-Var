-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 17 Haz 2021, 19:25:08
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bijon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `complaints_title` varchar(120) NOT NULL,
  `complaints` mediumtext NOT NULL,
  `complaints_time` varchar(45) NOT NULL,
  `complaintswho` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `complaints`
--

INSERT INTO `complaints` (`id`, `complaints_title`, `complaints`, `complaints_time`, `complaintswho`) VALUES
(4, 'Fairy Bulaşık Tableti Kokuyor', 'Bu durumdan gerçekten şikayetçiyim.Yemekler bulaşık makinasından çıktığında o leş koku yemeğin tadına bile sirayet ediyor 20 lira az verip calgon yerine fairry aldığım için pişmanım.Bu yüzden çöpe dökülen yemeklerin masrafıyla kendime bi calgon alabilirmişim. KAÇININ...', '17/06/2021 18:57:44', 'bijan'),
(6, 'do re mi fa sol la ', 'SİL', '17/06/2021 19:09:16', '12'),
(7, 'şikayet', 'ekledim', '17/06/2021 19:11:37', '12'),
(8, 'şikayet', 'ekledim', '17/06/2021 19:12:03', '12'),
(11, 'AaA', 'Aaa', '17/06/2021 19:13:45', 'yeni');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `date_time` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `member`
--

INSERT INTO `member` (`id`, `nickname`, `pass`, `date_time`) VALUES
(6, '1', '1', '17/06/2021 17:46:21'),
(7, '2', '2', '17/06/2021 17:46:33'),
(8, '123', '123', '17/06/2021 18:52:26'),
(9, 'bijan', '159', '17/06/2021 18:55:32'),
(10, '12', '12', '17/06/2021 19:06:05'),
(11, 'yeni', 'üye', '17/06/2021 19:12:22');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
