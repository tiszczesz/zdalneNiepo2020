-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Kwi 2021, 09:25
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

DELIMITER $$
--
-- Funkcje
--
DROP FUNCTION IF EXISTS `hello`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `hello` (`s` CHAR(20)) RETURNS CHAR(50) CHARSET utf8 COLLATE utf8_polish_ci RETURN CONCAT('Hello, ',s,'!')$$

DROP FUNCTION IF EXISTS `hello2`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `hello2` (`imie` VARCHAR(50), `nazwisko` VARCHAR(50)) RETURNS VARCHAR(200) CHARSET utf8 COLLATE utf8_polish_ci RETURN CONCAT('Witaj: ',LEFT(imie,1),'. ',nazwisko)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adres`
--

DROP TABLE IF EXISTS `adres`;
CREATE TABLE `adres` (
  `id` int(11) NOT NULL,
  `miasto` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `ulica` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `adres`
--

INSERT INTO `adres` (`id`, `miasto`, `ulica`) VALUES
(2, 'Warszawa', 'Filka 45'),
(6, 'Wrocław', 'Błotna 35/3');

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
-- Struktura tabeli dla tabeli `funkcje`
--

DROP TABLE IF EXISTS `funkcje`;
CREATE TABLE `funkcje` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `opis` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `funkcje`
--

INSERT INTO `funkcje` (`id`, `nazwa`, `opis`) VALUES
(1, 'asystent/ka', NULL),
(2, 'kierowca', NULL),
(3, 'kierownik', NULL),
(4, 'portier', NULL);

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
(4, 'Marycka', 'Teresa', 3),
(6, 'Nowak', 'Adam', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prac_fun`
--

DROP TABLE IF EXISTS `prac_fun`;
CREATE TABLE `prac_fun` (
  `id` int(11) NOT NULL,
  `prac_id` int(11) DEFAULT NULL,
  `fun_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `prac_fun`
--

INSERT INTO `prac_fun` (`id`, `prac_id`, `fun_id`) VALUES
(2, 4, 1),
(3, 4, 4),
(4, 6, 2),
(5, 3, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `dzial`
--
ALTER TABLE `dzial`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `funkcje`
--
ALTER TABLE `funkcje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_PRAC_DZIL` (`Dzial_id`);

--
-- Indeksy dla tabeli `prac_fun`
--
ALTER TABLE `prac_fun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_prac` (`prac_id`),
  ADD KEY `FK_fun` (`fun_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dzial`
--
ALTER TABLE `dzial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `funkcje`
--
ALTER TABLE `funkcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `prac_fun`
--
ALTER TABLE `prac_fun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `adres`
--
ALTER TABLE `adres`
  ADD CONSTRAINT `one_one` FOREIGN KEY (`id`) REFERENCES `pracownik` (`Id`);

--
-- Ograniczenia dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD CONSTRAINT `FK_PRAC_DZIL` FOREIGN KEY (`Dzial_id`) REFERENCES `dzial` (`Id`) ON DELETE SET NULL;

--
-- Ograniczenia dla tabeli `prac_fun`
--
ALTER TABLE `prac_fun`
  ADD CONSTRAINT `FK_fun` FOREIGN KEY (`fun_id`) REFERENCES `funkcje` (`id`),
  ADD CONSTRAINT `FK_prac` FOREIGN KEY (`prac_id`) REFERENCES `pracownik` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
