-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Mar 2020, 19:29
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mailer`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rss`
--

CREATE TABLE `rss` (
  `id` int(11) NOT NULL,
  `mail` text COLLATE utf8_polish_ci NOT NULL,
  `url` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rss`
--

INSERT INTO `rss` (`id`, `mail`, `url`) VALUES
(190, 'izaaa1994@yahoo.com', 'https://www.tvn24.pl/najwazniejsze.xml'),
(192, 'drozdkamil@gmail.com', 'https://www.tvn24.pl/najnowsze.xml'),
(193, 'izaaa1994@yahoo.com', 'https://www.tvn24.pl/najnowsze.xml'),
(194, 'izaaa1994@yahoo.com', 'https://ekstraklasa.tv/ekstraklasa-tv,83,m.xml');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rss`
--
ALTER TABLE `rss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `rss`
--
ALTER TABLE `rss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
