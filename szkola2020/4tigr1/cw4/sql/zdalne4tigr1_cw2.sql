-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lis 2020, 14:58
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
-- Baza danych: `zdalne4tigr1_cw2`
--
CREATE DATABASE IF NOT EXISTS `zdalne4tigr1_cw2` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `zdalne4tigr1_cw2`;

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grupy`
--

DROP TABLE IF EXISTS `grupy`;
CREATE TABLE `grupy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(150) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `grupy`
--

INSERT INTO `grupy` (`id`, `nazwa`, `opis`) VALUES
(1, 'młodzi', 'grupa wiekowa poniżej 30 lat'),
(2, 'mniej młodzi', 'grupa wiekowa 30-50 lat'),
(3, 'małolaty', 'grupa wiekowa poniżej 20 lat'),
(4, 'wiekowi', 'grupa wiekowa 50+ lat');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczestnicy`
--

DROP TABLE IF EXISTS `uczestnicy`;
CREATE TABLE `uczestnicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `grupaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wycieczka_uzytkownik`
--

DROP TABLE IF EXISTS `wycieczka_uzytkownik`;
CREATE TABLE `wycieczka_uzytkownik` (
  `id` int(11) NOT NULL,
  `wycieczka_id` int(11) NOT NULL,
  `uczestnik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wycieczki`
--

DROP TABLE IF EXISTS `wycieczki`;
CREATE TABLE `wycieczki` (
  `id` int(11) NOT NULL,
  `miejsce` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL,
  `ilosc_miejsc` int(11) NOT NULL DEFAULT 30,
  `cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wycieczki`
--

INSERT INTO `wycieczki` (`id`, `miejsce`, `data`, `ilosc_miejsc`, `cena`) VALUES
(1, 'Warszawa', '2020-11-30', 30, '350.00'),
(2, 'Londyn', '2020-12-14', 30, '2500.00'),
(3, 'Zakopane', '2020-12-12', 20, '450.00'),
(4, 'Nowy Targ', '2020-12-21', 30, '500.00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `grupy`
--
ALTER TABLE `grupy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uczestnicy`
--
ALTER TABLE `uczestnicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wycieczka_uzytkownik`
--
ALTER TABLE `wycieczka_uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `grupy`
--
ALTER TABLE `grupy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `uczestnicy`
--
ALTER TABLE `uczestnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wycieczka_uzytkownik`
--
ALTER TABLE `wycieczka_uzytkownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
