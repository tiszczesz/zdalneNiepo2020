-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Kwi 2021, 10:22
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
-- Baza danych: `kl3ti_gr2_cw2`
--
CREATE DATABASE IF NOT EXISTS `kl3ti_gr2_cw2` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `kl3ti_gr2_cw2`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzial`
--

DROP TABLE IF EXISTS `dzial`;
CREATE TABLE `dzial` (
  `Id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `Opis` varchar(200) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dzial`
--

INSERT INTO `dzial` (`Id`, `Nazwa`, `Opis`) VALUES
(1, 'Konserwy', 'sdfs sdf sfsf s sdfsf'),
(3, 'Nówka', 'sdfs sdf sfsf s sdfsf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownik`
--

DROP TABLE IF EXISTS `pracownik`;
CREATE TABLE `pracownik` (
  `Id` int(11) NOT NULL,
  `Nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `Imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `Dzial_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownik`
--

INSERT INTO `pracownik` (`Id`, `Nazwisko`, `Imie`, `Dzial_id`) VALUES
(2, 'Romański', 'Adam', 1),
(3, 'Ronin', 'Roman', 1),
(4, 'Marycka', 'Teresa', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzial`
--
ALTER TABLE `dzial`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_PRAC_DZIL` (`Dzial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dzial`
--
ALTER TABLE `dzial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD CONSTRAINT `FK_PRAC_DZIL` FOREIGN KEY (`Dzial_id`) REFERENCES `dzial` (`Id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
