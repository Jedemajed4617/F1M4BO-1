-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 jun 2022 om 11:49
-- Serverversie: 10.4.20-MariaDB
-- PHP-versie: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f1m4bo`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `plaatsen`
--

CREATE TABLE `plaatsen` (
  `id` int(11) NOT NULL,
  `titel` varchar(128) NOT NULL,
  `beschrijfing` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `stad` varchar(64) NOT NULL,
  `prijs` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `plaatsen`
--

INSERT INTO `plaatsen` (`id`, `titel`, `beschrijfing`, `foto`, `stad`, `prijs`) VALUES
(1, 'Storm Spoofer', '', 'StormBox.png', '', '24.99'),
(4, 'Rockstar Gen', '', 'StormBox.png', '', '1.50');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `plaatsen`
--
ALTER TABLE `plaatsen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `plaatsen`
--
ALTER TABLE `plaatsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
