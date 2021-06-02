-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 jun 2021 om 13:24
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.2.33

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

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `review_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review_rate` int(255) NOT NULL,
  `review_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_genre` varchar(255) NOT NULL,
  `service_status` varchar(255) NOT NULL,
  `service_details` varchar(255) NOT NULL,
  `review_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `genres`
--
ALTER TABLE `genres`
  ADD KEY `genre_has_1` (`genre_id`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `genre_has_1` (`service_genre`) USING BTREE,
  ADD KEY `status_has_1` (`service_status`);

--
-- Indexen voor tabel `status`
--
ALTER TABLE `status`
  ADD KEY `status_has_1` (`status_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
