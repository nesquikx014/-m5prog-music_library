-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Gegenereerd op: 26 okt 2025 om 16:02
-- Serverversie: 12.0.2-MariaDB-ubu2404
-- PHP-versie: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_library`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artiesten`
--

CREATE TABLE `artiesten` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `afbeelding` varchar(255) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `artiesten`
--

INSERT INTO `artiesten` (`id`, `naam`, `afbeelding`, `genre`) VALUES
(1, 'The Doors', 'https://occ-0-8407-2218.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABT7y6KDJ0du15enxGJ73fw12CeWKcmrpZkRFCEbjTSoz9_2bIfnEB2jusc_ifx1eUTlxBnJpPZWAZ87oAtDYIYqQKhdyhRbUBjH1.jpg?r=abe', 'Rock, blues'),
(2, 'XXXtentation', 'https://preview.redd.it/fosphksczih71.jpg?width=640&crop=smart&auto=webp&s=e2acab7be9b26db5653d7a4ce9c366e9b70ea393', 'Pophip-hop/rap'),
(3, 'girl in red ', 'https://3voor12.vpro.nl/.imaging/mte/3v12/opengraph/dam/3voor12/2404-girl-in-red-credit-heather-hazzan.990x660.png/jcr:content/2404-girl-in-red-credit-heather-hazzan.990x660.png', 'indie pop');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `singles`
--

CREATE TABLE `singles` (
  `id` int(11) NOT NULL,
  `titel` varchar(100) NOT NULL,
  `duur` time DEFAULT NULL,
  `release_jaar` year(4) DEFAULT NULL,
  `afbeelding` varchar(255) DEFAULT NULL,
  `artiest_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `singles`
--

INSERT INTO `singles` (`id`, `titel`, `duur`, `release_jaar`, `afbeelding`, `artiest_id`) VALUES
(1, 'Blinding Lights', '00:03:22', '2020', 'blindinglights.jpg', 1),
(2, 'Save Your Tears', '00:03:36', '2020', 'saveyourtears.jpg', 1),
(3, 'Levitating', '00:03:23', '2020', 'levitating.jpg', 2),
(4, 'Believer', '00:03:24', '2017', 'believer.jpg', 3),
(5, 'Thunder', '00:03:07', '2017', 'thunder.jpg', 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artiesten`
--
ALTER TABLE `artiesten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `singles`
--
ALTER TABLE `singles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artiest_id` (`artiest_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artiesten`
--
ALTER TABLE `artiesten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `singles`
--
ALTER TABLE `singles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `singles`
--
ALTER TABLE `singles`
  ADD CONSTRAINT `singles_ibfk_1` FOREIGN KEY (`artiest_id`) REFERENCES `artiesten` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
