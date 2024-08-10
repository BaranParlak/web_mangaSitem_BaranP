-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2024, 13:06:47
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ilkveritabanim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `baranaga`
--

CREATE TABLE `baranaga` (
  `id` int(100) NOT NULL,
  `img_url` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dukependragon`
--

CREATE TABLE `dukependragon` (
  `id` int(11) NOT NULL,
  `img_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `dukependragon`
--

INSERT INTO `dukependragon` (`id`, `img_url`) VALUES
(1, 'duke-pendragon1.jpg'),
(2, 'duke-pendragon2.jpg'),
(3, 'duke-pendragon3.jpg'),
(4, 'duke-pendragon4.jpg'),
(5, 'duke-pendragon5.jpg'),
(6, 'duke-pendragon6.jpg'),
(7, 'duke-pendragon7.jpg'),
(8, 'duke-pendragon8.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `godsgambit`
--

CREATE TABLE `godsgambit` (
  `id` int(100) NOT NULL,
  `img_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `godsgambit`
--

INSERT INTO `godsgambit` (`id`, `img_url`) VALUES
(1, 'godsGambit1.jpg'),
(2, 'godsGambit2.jpg'),
(3, 'godsGambit3.jpg'),
(4, 'godsGambit4.jpg'),
(5, 'godsGambit5.jpg'),
(6, 'godsGambit6.jpg'),
(7, 'godsGambit7.jpg'),
(8, 'godsGambit8.jpg'),
(9, 'godsGambit9.jpg'),
(10, 'godsGambit10.jpg'),
(11, 'godsGambit11.jpg'),
(12, 'godsGambit12.jpg'),
(13, 'godsGambit13.jpg'),
(14, 'godsGambit14.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `goldenmage`
--

CREATE TABLE `goldenmage` (
  `id` int(100) NOT NULL,
  `img_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `goldenmage`
--

INSERT INTO `goldenmage` (`id`, `img_url`) VALUES
(1, 'goldenmage1.jpg'),
(2, 'goldenmage2.jpg'),
(3, 'goldenmage3.jpg'),
(4, 'goldenmage4.jpg'),
(5, 'goldenmage5.jpg'),
(6, 'goldenmage6.jpg'),
(7, 'goldenmage7.jpg'),
(8, 'goldenmage8.jpg'),
(9, 'goldenmage9.jpg'),
(10, 'goldenmage10.jpg'),
(11, 'goldenmage11.jpg'),
(12, 'goldenmage12.jpg'),
(13, 'goldenmage13.jpg'),
(14, 'goldenmage14.jpg'),
(15, 'goldenmage15.jpg'),
(16, 'goldenmage16.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `isim` varchar(30) NOT NULL,
  `email` varchar(11) NOT NULL,
  `telefon` varchar(25) NOT NULL,
  `mesaj` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `infinitemage`
--

CREATE TABLE `infinitemage` (
  `id` int(100) NOT NULL,
  `img_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `infinitemage`
--

INSERT INTO `infinitemage` (`id`, `img_url`) VALUES
(1, '1infinitemage.jpg'),
(2, '2infinitemage.jpg'),
(3, '3infinitemage.jpg'),
(4, '4infinitemage.jpg'),
(5, '5infinitemage.jpg'),
(6, '6infinitemage.jpg'),
(7, '7infinitemage.jpg'),
(8, '8infinitemage.jpg'),
(9, '9infinitemage.jpg'),
(10, '10infinitemage.jpg'),
(11, '11infinitemage.jpg'),
(12, '12infinitemage.jpg'),
(13, '13infinitemage.jpg'),
(14, '14infinitemage.jpg'),
(15, '15infinitemage.jpg'),
(16, '16infinitemage.jpg'),
(17, '17infinitemage.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mangaveritabanı`
--

CREATE TABLE `mangaveritabanı` (
  `id` int(11) NOT NULL,
  `img_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `img_title` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `link_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `mangaveritabanı`
--

INSERT INTO `mangaveritabanı` (`id`, `img_url`, `img_title`, `link_url`, `kategori`) VALUES
(1, 'death-note-manga.jpg', 'Death Note', 'link-1.php', ''),
(2, 'berserk4.jpg', 'Berserk', 'link-2.php', ''),
(4, 'my-hero-academia.jpg', 'My Hero Academia', 'link-3.php', ''),
(5, 'GrandBlue.jpg', 'Grand Blue', 'link-4.php', ''),
(6, 'SpiritFarmer.jpg', 'Spirit Farmer', 'link-5.php', ''),
(7, 'villaintokill.jpg', 'Villain to Kill', 'villaintokill.php', 'villaintokill'),
(9, 'DukeRD.png', 'Duke Pendragon', 'dukependragon.php', 'dukependragon'),
(11, 'ReLife-Player.jpg', 'Relife Player', 'relifeplayer', 'relifeplayer'),
(27, 'infinitemage.jpg', 'İnfinite Mage', 'infinitemage', 'infinitemage'),
(42, 'villaintokill.jpg', 'Villain to Kill.', 'villaintokill', 'villaintokill');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `relifeplayer`
--

CREATE TABLE `relifeplayer` (
  `id` int(11) NOT NULL,
  `img_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `relifeplayer`
--

INSERT INTO `relifeplayer` (`id`, `img_url`) VALUES
(1, '01relife.jpg'),
(2, '02relife.jpg'),
(3, '03relife.jpg'),
(4, '04relife.jpg'),
(5, '05relife.jpg'),
(6, '06relife.jpg'),
(7, '07relife.jpg'),
(8, '08relife.jpg'),
(9, '09relife.jpg'),
(10, '10relife.jpg'),
(11, '11relife.jpg'),
(12, '12relife.jpg'),
(13, '13relife.jpg'),
(14, '14relife.jpg'),
(15, '15relife.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `villaintokill`
--

CREATE TABLE `villaintokill` (
  `id` int(11) NOT NULL,
  `img_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `villaintokill`
--

INSERT INTO `villaintokill` (`id`, `img_url`) VALUES
(1, 'villaintokill1.jpg'),
(2, 'villaintokill2.jpg'),
(3, 'villaintokill3.jpg'),
(4, 'villaintokill5.jpg'),
(5, 'villaintokill6.jpg'),
(6, 'villaintokill7.jpg'),
(7, 'villaintokill8.jpg'),
(8, 'villaintokill9.jpg'),
(11, 'baringo.png'),
(12, 'lazziya.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `baranaga`
--
ALTER TABLE `baranaga`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dukependragon`
--
ALTER TABLE `dukependragon`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `godsgambit`
--
ALTER TABLE `godsgambit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `goldenmage`
--
ALTER TABLE `goldenmage`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `infinitemage`
--
ALTER TABLE `infinitemage`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mangaveritabanı`
--
ALTER TABLE `mangaveritabanı`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `relifeplayer`
--
ALTER TABLE `relifeplayer`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `villaintokill`
--
ALTER TABLE `villaintokill`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `baranaga`
--
ALTER TABLE `baranaga`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `dukependragon`
--
ALTER TABLE `dukependragon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `godsgambit`
--
ALTER TABLE `godsgambit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `goldenmage`
--
ALTER TABLE `goldenmage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `infinitemage`
--
ALTER TABLE `infinitemage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `mangaveritabanı`
--
ALTER TABLE `mangaveritabanı`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `relifeplayer`
--
ALTER TABLE `relifeplayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `villaintokill`
--
ALTER TABLE `villaintokill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
