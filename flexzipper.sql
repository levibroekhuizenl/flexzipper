-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 21 mei 2021 om 12:42
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
-- Tabelstructuur voor tabel `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) NOT NULL,
  `service_genre` varchar(255) NOT NULL,
  `service_status` varchar(255) NOT NULL,
  `service_details` varchar(255) NOT NULL,
  PRIMARY KEY (`service_id`),
  KEY `genre_has_1` (`service_genre`) USING BTREE,
  KEY `status_has_1` (`service_status`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_genre`, `service_status`, `service_details`) VALUES
(3, 'Autobanden pompen', 'Autos', 'Beschikbaar', 'Ik heb hulp nodig met mijn banden op te pompen van mijn prachtige auto. Ik ben altijd bereikbaar.'),
(4, 'Website maken', 'ICT', 'In behandeling', 'Ik zou graag een website willen voor mij knuffelbeer collectie.'),
(5, 'Hypotheek advies', 'Economie', 'Beschikbaar', 'Ik zou graag een hypotheek advies willen krijgen omdat ik wil weten hoeveel ik kan lenen. Ik heb zelf diensten te bieden hiervoor.');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
