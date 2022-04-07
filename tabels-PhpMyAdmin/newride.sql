-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 07. dub 2022, 15:16
-- Verze serveru: 10.4.22-MariaDB
-- Verze PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `taxidb`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `newride`
--

CREATE TABLE `newride` (
  `id` int(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `newride`
--

INSERT INTO `newride` (`id`, `time`, `date`, `phone`) VALUES
(1, '11:01', '2022-04-07', 702071677),
(2, '11:05', '2022-04-01', 702071677),
(3, '11:13', '2022-04-06', 702071677),
(4, '15:06', '2022-04-06', 702071677);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `newride`
--
ALTER TABLE `newride`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `newride`
--
ALTER TABLE `newride`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
