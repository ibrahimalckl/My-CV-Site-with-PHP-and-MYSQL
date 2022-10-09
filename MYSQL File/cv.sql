-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Eki 2022, 02:35:14
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deneyimlerim`
--

CREATE TABLE `deneyimlerim` (
  `id` int(11) NOT NULL,
  `firma` varchar(100) DEFAULT NULL,
  `alan` varchar(100) DEFAULT NULL,
  `tarih` varchar(100) DEFAULT NULL,
  `tarih2` varchar(100) DEFAULT NULL,
  `aciklama` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `deneyimlerim`
--

INSERT INTO `deneyimlerim` (`id`, `firma`, `alan`, `tarih`, `tarih2`, `aciklama`) VALUES
(1, 'Tetradima', 'Pres İşçisi', 'Temmuz 2021', 'Eylül 2021', ''),
(2, 'Bodrum Mantı', 'Komi', 'Haziran 2019', 'Eylül 2019', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `id` int(11) NOT NULL,
  `tarih` varchar(100) DEFAULT NULL,
  `tarih2` varchar(100) DEFAULT NULL,
  `derece` varchar(100) DEFAULT NULL,
  `bolum` varchar(100) DEFAULT NULL,
  `okul` varchar(100) DEFAULT NULL,
  `aciklama` varchar(500) DEFAULT NULL,
  `fakulte` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`id`, `tarih`, `tarih2`, `derece`, `bolum`, `okul`, `aciklama`, `fakulte`) VALUES
(4, '2019', 'Devam ediyor..', ' Lisans', 'Bilgisayar Teknolojisi ve Bilişim Sistemleri', 'Mehmet Akif Ersoy Üniversitesi', ' Yazılım, Donanım ve Teknoloji Eğitimiminin Yanında Network.', 'Gölhisar Uygulamalı Bilimler Yüksekokulu'),
(5, '2015', '2019', 'Lise', '', 'Cevizli Anadolu İmam Hatip Lisesi ', '', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `active` varchar(100) DEFAULT NULL,
  `projeAdi` varchar(100) DEFAULT NULL,
  `projeTuru` varchar(100) DEFAULT NULL,
  `resimyolu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `active`, `projeAdi`, `projeTuru`, `resimyolu`) VALUES
(1, NULL, 'Örnek proje', '', 'images/photography-1.jpg'),
(2, NULL, 'Örnek proje', '', 'images/photography-3.jpg'),
(3, NULL, 'Örnek proje', '', 'images/photography-2.jpg'),
(4, NULL, 'Örnek proje', '', 'images/photography-4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `genel`
--

CREATE TABLE `genel` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `isimsoyisim` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `hakkimda` varchar(1000) DEFAULT NULL,
  `yas` varchar(100) DEFAULT NULL,
  `ulke` varchar(100) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefon` varchar(100) DEFAULT NULL,
  `isdurumu` varchar(100) DEFAULT NULL,
  `anasayfa` varchar(100) DEFAULT NULL,
  `calisma` varchar(100) DEFAULT NULL,
  `referans` varchar(100) DEFAULT NULL,
  `iletisim` varchar(100) DEFAULT NULL,
  `cvindir` varchar(100) DEFAULT NULL,
  `yetenekler` varchar(100) DEFAULT NULL,
  `tecrube` varchar(100) DEFAULT NULL,
  `kodlama` varchar(100) DEFAULT NULL,
  `banaulas` varchar(100) DEFAULT NULL,
  `kisabilgi` varchar(100) DEFAULT NULL,
  `diller` varchar(100) DEFAULT NULL,
  `egitim` varchar(100) DEFAULT NULL,
  `pp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `genel`
--

INSERT INTO `genel` (`id`, `title`, `isimsoyisim`, `twitter`, `facebook`, `instagram`, `hakkimda`, `yas`, `ulke`, `adres`, `email`, `telefon`, `isdurumu`, `anasayfa`, `calisma`, `referans`, `iletisim`, `cvindir`, `yetenekler`, `tecrube`, `kodlama`, `banaulas`, `kisabilgi`, `diller`, `egitim`, `pp`) VALUES
(1, 'İbrahim Alaçakal CV', 'İbrahim ALAÇAKAL', 'https://twitter.com/Pixel_ibo', 'https://www.facebook.com/ibrahim.alacakal1/', 'https://www.instagram.com/ibrahim.alckl/', 'Merhaba ben İbrahim. İstanbul\'da doğdum ve büyüdüm. Aslen Kastamonu\'luyum. Küçüklüğümden beri yazılımcı olmak istiyordum. Bu hayalimi yazılım ve network alanını birleştiren bir bölümde okuyarak devam ettiriyorum. Boş zamanlarımda oyun geliştiriyorum.', '2001', 'Türkiye', '   Gölhisar Uygulamalı Bilimler Yüksekokuluu', 'ibrahim.alacakal@outlook.com', '+90 551 556 9467', 'Musait', 'Anasayfa', 'Çalışmalarım', 'Referanslarım', 'İletişim', 'CV İndir', 'Yeteneklerim', 'Deneyimlerim', 'Programlama, Web Tasarım', 'Bize Ulaşın', 'Kısa Bilgiler', 'Türkçe, İngilizce', 'Eğitim', 'images/ibrahimalacakal.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `id` int(11) NOT NULL,
  `active` varchar(100) DEFAULT NULL,
  `projeAdi` varchar(100) DEFAULT NULL,
  `projeTuru` varchar(100) DEFAULT NULL,
  `resimyolu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`id`, `active`, `projeAdi`, `projeTuru`, `resimyolu`) VALUES
(1, NULL, 'Pixel Çağ', 'Oyun Geliştirme', 'images/project-5.jpg'),
(2, NULL, 'Örnek Proje', '', 'images/project-3.jpg'),
(3, NULL, 'Örnek Proje', '', 'images/project-2.jpg'),
(4, NULL, 'Örnek Proje', '', 'images/project-1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `id` int(11) NOT NULL,
  `resimyolu` varchar(100) DEFAULT NULL,
  `isim` varchar(50) DEFAULT NULL,
  `firma` varchar(50) DEFAULT NULL,
  `aciklama` varchar(100) DEFAULT NULL,
  `active` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `resimyolu`, `isim`, `firma`, `aciklama`, `active`) VALUES
(1, 'images/reference-image-1.jpg', 'Ajda Hanım', 'Jet Sosyete', '', 'active'),
(2, 'images/reference-image-2.jpg', 'Hakan Ünal', 'Ünlü Futbolcu', '', NULL),
(3, 'images/reference-image-3.jpg', 'Ali Bey', 'İş İnsanı', '', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tasarimlar`
--

CREATE TABLE `tasarimlar` (
  `id` int(11) NOT NULL,
  `active` varchar(100) DEFAULT NULL,
  `projeAdi` varchar(100) DEFAULT NULL,
  `projeTuru` varchar(100) DEFAULT NULL,
  `resimyolu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tasarimlar`
--

INSERT INTO `tasarimlar` (`id`, `active`, `projeAdi`, `projeTuru`, `resimyolu`) VALUES
(1, NULL, 'Örnek proje', '', 'images/graphic-design-1.jpg'),
(2, NULL, 'Örnek proje', '', 'images/graphic-design-2.jpg'),
(3, NULL, 'Örnek proje', '', 'images/graphic-design-3.jpg'),
(4, NULL, 'Örnek proje', '', 'images/graphic-design-4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yeteneklerim`
--

CREATE TABLE `yeteneklerim` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) DEFAULT NULL,
  `yuzdelik` varchar(50) DEFAULT NULL,
  `yuzdelik2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yeteneklerim`
--

INSERT INTO `yeteneklerim` (`id`, `ad`, `yuzdelik`, `yuzdelik2`) VALUES
(1, 'HTML', '50%', '%50'),
(2, 'CSS', '40%', '%40'),
(3, 'C#', '60%', '%60'),
(4, 'C', '20%', '%20'),
(5, 'PHP', '40%', '%40'),
(6, 'Assembly', '10%', '%10');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `deneyimlerim`
--
ALTER TABLE `deneyimlerim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `genel`
--
ALTER TABLE `genel`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tasarimlar`
--
ALTER TABLE `tasarimlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yeteneklerim`
--
ALTER TABLE `yeteneklerim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `deneyimlerim`
--
ALTER TABLE `deneyimlerim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `genel`
--
ALTER TABLE `genel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `tasarimlar`
--
ALTER TABLE `tasarimlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yeteneklerim`
--
ALTER TABLE `yeteneklerim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
