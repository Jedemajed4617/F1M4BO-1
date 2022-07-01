-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 jul 2022 om 20:20
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

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
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `country`, `subject`) VALUES
('asdadsasddsa', 'sadasd', 'australia', 'asddsa'),
('asdasdads', 'sdadsadas', 'australia', 'sadasddas'),
('h', 'h', 'australia', 'h'),
('Paul', 'Schooneman', 'other', 'MY COMPUTER HAS VIRUS!!!1111!!!! HELP!!11!!!'),
('Jari', 'Kee', 'spain', 'No hable english, por favor help!'),
('Tijmen', 'Terpstra', 'holland', 'Help php werkt niet en ik moet huilen pls help me'),
('Hidde', 'Braun', 'holland', 'Ik wil je hierbij informeren je opdracht is met een excellent afgetekend! ;D'),
('Siiqz', 'gaytje', 'holland', 'Ik ben siiqz en ik hou van baffen');

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
(1, 'Storm Spoofer', '', 'photo/stormbox.webp', '', '24.99'),
(2, 'Rockstar Gen', '', 'photo/rockstarbox.webp', '', '1.50');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `optionn` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sellixapi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `optionn`, `price`, `sellixapi`, `image`) VALUES
(1, 'Storm Spoofer', 'Lifetime', '19,99', '62056bd0be0b4', 'photo/stormbox.webp'),
(2, 'Rockstar Account', 'Amount: 1 - &#8734;', '1,50', '628cc68072cc2', 'photo/rockstarbox.webp');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `plaatsen`
--
ALTER TABLE `plaatsen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `plaatsen`
--
ALTER TABLE `plaatsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
