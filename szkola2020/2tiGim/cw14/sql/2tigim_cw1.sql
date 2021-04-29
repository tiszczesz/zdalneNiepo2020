-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Kwi 2021, 08:32
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `2tigim_cw1`
--
CREATE DATABASE IF NOT EXISTS `2tigim_cw1` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `2tigim_cw1`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `contacts`
--

INSERT INTO `contacts` (`id`, `firstName`, `lastName`, `email`) VALUES
(1, 'Tomasz', 'Bomasz', 'tom@interia.pl'),
(2, 'Roman', 'Totoń', 'tot@gmail.com'),
(3, 'Teresa', 'Menesa', 'ter@gmail.com'),
(4, 'Monika', 'Znika', 'mon@onet.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
