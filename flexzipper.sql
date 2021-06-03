-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 03 jun 2021 om 09:11
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flexzipper`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL,
  KEY `genre_has_1` (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review_rate` int(255) NOT NULL,
  `review_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `review_id`, `name`, `review_rate`, `review_desc`) VALUES
(1, 3, 'Levi Broekhuizen', 5, 'Fantastische dienst!!'),
(2, 3, 'Johnny Magielse', 3, 'Mwah geinige dienst.'),
(3, 3, 'Michel Muit', 1, 'Mijn harde schijf is helaas dood.'),
(17, 3, 'Johnny', 4, 'Fantastisch progrmama');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) NOT NULL,
  `service_genre` varchar(255) NOT NULL,
  `service_status` varchar(255) NOT NULL,
  `service_details` varchar(255) NOT NULL,
  `review_id` int(255) NOT NULL,
  PRIMARY KEY (`service_id`),
  KEY `genre_has_1` (`service_genre`) USING BTREE,
  KEY `status_has_1` (`service_status`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_genre`, `service_status`, `service_details`, `review_id`) VALUES
(3, 'Autobanden pompen', 'Autos', 'Beschikbaar', 'Ik heb hulp nodig met mijn banden op te pompen van mijn prachtige auto. Ik ben altijd bereikbaar.', 0),
(4, 'Website maken', 'ICT', 'In behandeling', 'Ik zou graag een website willen voor mij knuffelbeer collectie.', 0),
(5, 'Hypotheek advies', 'Economie', 'Beschikbaar', 'Ik zou graag een hypotheek advies willen krijgen omdat ik wil weten hoeveel ik kan lenen. Ik heb zelf diensten te bieden hiervoor.', 0),
(6, '', '', '', '', 0),
(7, '', '', '', '', 0),
(8, '', '', '', '', 0),
(9, '', '', '', '', 0),
(10, '', '', '', '', 0),
(11, '', '', '', '', 0),
(12, '', '', '', '', 0),
(13, '', '', '', '', 0),
(14, '', '', '', '', 0),
(15, '', '', '', '', 0),
(16, '', '', '', '', 0),
(17, '', '', '', '', 0),
(18, '', '', '', '', 0),
(19, '', '', '', '', 0),
(20, '', '', '', '', 0),
(21, '', '', '', '', 0),
(22, '', '', '', '', 0),
(23, '', '', '', '', 0),
(24, '', '', '', '', 0),
(25, '', '', '', '', 0),
(26, '', '', '', '', 0),
(27, '', '', '', '', 0),
(28, '', '', '', '', 0),
(29, '3', 'naam', 'Beschrijving', '1', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL,
  KEY `status_has_1` (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `schoolNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
