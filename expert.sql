-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 20 Mar 2013, 14:30:48
-- Sunucu sürümü: 5.5.29
-- PHP Sürümü: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `expert`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `content` text COLLATE utf8_turkish_ci,
  `file_path` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `professions_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articles_users1` (`users_id`),
  KEY `fk_articles_professions1` (`professions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `faculties_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_department_faculty` (`faculties_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `departments`
--

INSERT INTO `departments` (`id`, `name`, `faculties_id`) VALUES
(1, 'bilgisayar', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `faculties`
--

INSERT INTO `faculties` (`id`, `name`) VALUES
(1, 'mühendislik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `professions`
--

CREATE TABLE IF NOT EXISTS `professions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_word` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `professions`
--

INSERT INTO `professions` (`id`, `key_word`) VALUES
(1, 'vim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `surname` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `departments_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_expert_department1` (`departments_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `phone`, `email`, `password`, `photo`, `departments_id`) VALUES
(1, 'recai', 'oktas', '123', 'recai@bil.omu', '1111', 'ger', 1),
(2, 'erinc', 'bereket', '345556', 'erincbereket@hotmail.com', '4123', 'lkhvgs', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users_has_professions`
--

CREATE TABLE IF NOT EXISTS `users_has_professions` (
  `users_id` int(11) NOT NULL,
  `professions_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`professions_id`),
  KEY `fk_users_has_professions_professions1` (`professions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_professions1` FOREIGN KEY (`professions_id`) REFERENCES `professions` (`id`),
  ADD CONSTRAINT `fk_articles_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `fk_department_faculty` FOREIGN KEY (`faculties_id`) REFERENCES `faculties` (`id`);

--
-- Tablo kısıtlamaları `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_expert_department1` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`);

--
-- Tablo kısıtlamaları `users_has_professions`
--
ALTER TABLE `users_has_professions`
  ADD CONSTRAINT `fk_users_has_professions_professions1` FOREIGN KEY (`professions_id`) REFERENCES `professions` (`id`),
  ADD CONSTRAINT `fk_users_has_professions_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
