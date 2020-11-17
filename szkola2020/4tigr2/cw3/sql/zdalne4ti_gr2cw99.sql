-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Lis 2020, 16:04
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
-- Baza danych: `zdalne4ti_gr2cw99`
--
CREATE DATABASE IF NOT EXISTS `zdalne4ti_gr2cw99` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `zdalne4ti_gr2cw99`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adresy`
--

DROP TABLE IF EXISTS `adresy`;
CREATE TABLE `adresy` (
  `id` int(11) NOT NULL,
  `ulica` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `adresy`
--

INSERT INTO `adresy` (`id`, `ulica`, `miasto`) VALUES
(3, 'uuuu', 'mmm'),
(4, 'Grocka 12/4', 'Firany Dolne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `funkcje`
--

DROP TABLE IF EXISTS `funkcje`;
CREATE TABLE `funkcje` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `funkcje`
--

INSERT INTO `funkcje` (`id`, `nazwa`) VALUES
(1, 'kierownik'),
(2, 'sprzedawca'),
(3, 'sekretarka/sekretarz'),
(4, 'kierowca'),
(5, 'asystent'),
(6, 'dyrektor'),
(7, 'sprzątaczka'),
(8, 'konserwator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(100) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `opis`) VALUES
(3, 'iiiii', 'nnnnnn', 'oooo'),
(4, 'Roman', 'Nowak', 'ssf fsfsfsfsf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prac_funkcja`
--

DROP TABLE IF EXISTS `prac_funkcja`;
CREATE TABLE `prac_funkcja` (
  `id` int(11) NOT NULL,
  `pracownikid` int(11) NOT NULL,
  `funkcjaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `adresy`
--
ALTER TABLE `adresy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `funkcje`
--
ALTER TABLE `funkcje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `prac_funkcja`
--
ALTER TABLE `prac_funkcja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `funkcje`
--
ALTER TABLE `funkcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `prac_funkcja`
--
ALTER TABLE `prac_funkcja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
