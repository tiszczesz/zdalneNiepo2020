-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Maj 2021, 13:09
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `2tipgim_cw3`
--
CREATE DATABASE IF NOT EXISTS `2tipgim_cw3` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `2tipgim_cw3`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `dateStart` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `course`
--

INSERT INTO `course` (`id`, `name`, `dateStart`) VALUES
(1, 'matematyka', '2021-05-30'),
(2, 'fizyka', '2021-06-09'),
(3, 'algebra', '2021-06-30'),
(4, 'mechanika', '2021-06-14'),
(5, 'technika', '2021-06-30'),
(6, 'programowanie użytkowe', '2021-06-18');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `student`
--

INSERT INTO `student` (`id`, `firstName`, `lastName`, `courseId`) VALUES
(2, 'Tomasz', 'Bomasz', 1),
(3, 'Aldona', 'Błocka', 1),
(4, 'Roman', 'Polański', 5),
(5, 'Edward', 'Małek', 3),
(6, 'Monika', 'Grawicka', 5),
(7, 'Grażyna', 'Sprężyna', 3),
(8, 'Bożena', 'Dedek', 2),
(9, 'Franiszek', 'Grzyb', 4),
(10, 'Henryk', 'Matuszyk', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_course` (`courseId`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_course` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
