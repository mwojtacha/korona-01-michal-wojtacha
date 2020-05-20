-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Maj 2020, 15:56
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
-- Baza danych: `wojtacha`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `budynki`
--

CREATE TABLE `budynki` (
  `Numer` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `Typ` text NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `budynki`
--

INSERT INTO `budynki` (`Numer`, `Nazwa`, `Typ`, `Data`) VALUES
(1, 'Ratusz', 'Administracja', '2020-04-30'),
(2, 'Nook\'s Cranny', 'Sklep', '2020-05-01'),
(3, 'Muzeum', 'Kultura', '2020-05-10'),
(4, 'Able Sisters', 'Sklep', '2020-05-10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mieszkancy`
--

CREATE TABLE `mieszkancy` (
  `Numer` int(11) DEFAULT NULL,
  `Imie` text NOT NULL,
  `Gatunek` text NOT NULL,
  `Osobowosc` text NOT NULL,
  `Kolor` text NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `mieszkancy`
--

INSERT INTO `mieszkancy` (`Numer`, `Imie`, `Gatunek`, `Osobowosc`, `Kolor`, `Data`) VALUES
(1, 'Katt', 'Kot', 'Sisterly', 'Czarny', '2020-04-20'),
(2, 'Antonio', 'Mrówkojad', 'Jock', 'Niebieski', '2020-04-30'),
(3, 'Sherb', 'Koza', 'Kazy', 'Niebieski', '2020-05-03'),
(4, 'Chevre', 'Koza', 'Normal', 'Czerwony', '2020-05-04'),
(5, 'Apple', 'Chomik', 'Peppy', 'Różowy', '2020-05-05'),
(6, 'Ken', 'Kurczak', 'Smug', 'Czarny', '2020-05-10'),
(7, 'Hopper', 'Pingwin', 'Cranky', 'Żółty', '2020-05-11'),
(8, 'Admiral', 'Ptak', 'Cranky', 'Niebieski', '2020-05-12'),
(9, 'Boon', 'Goryl', 'Jock', 'Czerwony', '2020-05-14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
